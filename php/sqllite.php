<?php
/**
 * Klasa SQL Lite
 */
class PAIP_SQLLITE
{
    //PAiP WEB FRAMEWORK VARS
    private version = "v0.1 Alpha";
    ///SQL Lite Database API (From SQLite3 PHP Class)
    public $database;
    public function __construct($filename,$flag=0)
    {
        $flags;
        try
        {
            switch ($flag) {
                case 1:
                    # READ ONLY
                    $flags = SQLITE3_OPEN_READONLY;
                    break;
                case 2:
                    # READ ONLY AND IF DONT EXIST THEN CREATE
                    $flags = SQLITE3_OPEN_READONLY | SQLITE3_OPEN_CREATE;
                    break;
                case 3:
                    # READ WRITE
                    $flags = SQLITE3_OPEN_READWRITE;
                    break;
                case 4:
                    # READ WRITE AND IF DONT EXIST THEN CREATE
                    $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE;
                    break;
                default:
                    $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE;
                    break;
            }
            $database = new SQLite3($filename,$flags);
        }
        catch ($error)
        {
            die("Error!");
        }
    }
    public function query($sql_query)
    {
        return $database->query($sql_query);
    }
    public function close()
    {
        return $database->close();
    }
    ///SQL Lite Query API
    //PARAMETER "exec" || if exec = true then return result of query if no then return directive string
    
    ///DDL - DATA DEFINITION LANGUAGE
    
    //CREATE QUERY
    //type = S / def = Select | type = D / def = definition string example: ( id integer primary key, name text)
    public function CREATE($exec,$tablename,$type,$def,$ifne=false,$tmp=false)
    {
        $val_return = "CREATE ";
        if ($tmp) {
            $val_return = $val_return."TEMPORARY ";
        }
        if ($ifne) {
            $val_return = $val_return."IF NOT EXIST";
        }
        $val_return = $val_return."TABLE ".$tablename;
        if ($type == "S" or $type == "s") {
            $val_return = $val_return."AS ".$def;
        }
        elseif ($type == "D" or $type == "d") {
            $val_return = $val_return.$def;
        }
        if($exec == true)
        {
            return $this->query($val_return);
        }
        else
        {
            return  $val_return;
        }
    }
    //ALTER QUERY 
    //type = RT / def = new table name | type = A / def = add column definition | type = D / def column to delete
    //type = /|/ RT = RENAME TO | A = ADD | D = DROP / KEYWORD COLUMN YOU HAVE TO ADD BY YOURSELF
    public function ALTER($exec,$tablename,$type,$def)
    {
        $val_return = "ALTER TABLE ".$tablename." ";
        if (($type == "RT") || ($type == "rt")) {
            $val_return = $val_return." RENAME TO ".$def;
        }
        elseif (($type == "A") || ($type == "a")) {
            $val_return = $val_return." ADD ".$def;
        }
        elseif (($type == "D") || ($type == "d")) {
            $val_return = $val_return." DROP ".$def;
        }
    }
}
///NOT FINISHED!!!!!!!!!!!!!!!
?>