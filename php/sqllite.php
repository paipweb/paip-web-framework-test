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
    //Helping Functions
    private function hf__aywte($exec,$val_return)
    {
        if($exec == true)
        {
            return $this->query($val_return);
        }
        else
        {
            return  $val_return;
        }
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
        return $this->hf__aywte($exec,$val_return);
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
        return $this->hf__aywte($exec,$val_return);
    }
    //DROP QUERY
    public function DROP($exec,$tablename,$ife=false)
    {
        $val_return = "DROP TABLE ";
        if ($ife == true) {
            $val_return = $val_return." IF EXIST ";
        }
        $val_return = $val_return.$tablename;
        return $this->hf__aywte($exec,$val_return);
    }
    
    ///DML - DATA MANIPULATION LANGUAGE
    
    //INSERT QUERY
    //type = /|/ I = INSERT | R = REPLACE | IOR = INSERT OR REPLACE | IORB = INSERT OR ROLLBACK | IOA = INSERT OR ABORT | IOF = INSERT OR FAIL | IOI = INSERT OR IGNORE
    //deftype = /|/ dv = DEFAULT VALUES | v = VALUES | s = SELECT directive
    public function INSERT($exec,$tablename,$deftype="dv",$type="I",$def=null,$cols=null)
    {
        if (($type == "I") || ($type == "i")) {
            $val_return = "INSERT ";
        }
        elseif (($type == "R") || ($type == "r")) {
            $val_return = "REPLACE ";
        }
        elseif (($type == "IOR") || ($type == "ior")) {
            $val_return = "INSERT OR REPLACE ";
        }
        elseif (($type == "IORB") || ($type == "iorb")) {
            $val_return = "INSERT OR ROLLBACK ";
        }
        elseif (($type == "IOA") || ($type == "ioa")) {
            $val_return = "INSERT OR ABORT ";
        }
        elseif (($type == "IOF") || ($type == "iof")) {
            $val_return = "INSERT OR FAIL ";
        }
        elseif (($type == "IOI") || ($type == "ioi")) {
            $val_return = "INSERT OR IGNORE ";
        }
        $val_return = $val_return."INTO ".$tablename." ";
        if($cols != null){
            $val_return = $val_return.$cols." ";
        }
        if (($type == "DV") || ($type == "dv")) {
            $val_return = $val_return."DEFAULT VALUES";
        }
        elseif (($type == "V") || ($type == "v")) {
            $val_return = $val_return."VALUES ".$def;
        }
        elseif (($type == "S") || ($type == "s")) {
            $val_return = $val_return.$def;
        }
        return $this->hf__aywte($exec,$val_return);
    }
    //UPDATE QUERY
    //type = /|/ U = UPDATE |UOR = UPDATE OR REPLACE | UORB = UPDATE OR ROLLBACK | UOA = UPDATE OR ABORT | UOF = UPDATE OR FAIL | UOI = UPDATE OR IGNORE
    public function UPDATE($exec,$tablename,$set,$where,$type="U",$index=null)
    {
        if (($type == "U") || ($type == "u")) {
            $val_return = "UPDATE ";
        }
        elseif (($type == "UOR") || ($type == "uor")) {
            $val_return = "UPDATE OR REPLACE ";
        }
        elseif (($type == "UORB") || ($type == "uorb")) {
            $val_return = "UPDATE OR ROLLBACK ";
        }
        elseif (($type == "UOA") || ($type == "uoa")) {
            $val_return = "UPDATE OR ABORT ";
        }
        elseif (($type == "UOF") || ($type == "uof")) {
            $val_return = "UPDATE OR FAIL ";
        }
        elseif (($type == "UOI") || ($type == "uoi")) {
            $val_return = "UPDATE OR IGNORE ";
        }
        $val_return = $val_return.$tablename." ";
        if($index != null){
            $val_return = $val_return.$index." ";
        }
        $val_return = $val_return."SET ".$set." WHERE ".$where;
        return $this->hf__aywte($exec,$val_return);
    }
    //DELETE QUERY
    public function DELETE($exec,$tablename,$where,$index=null)
    {
        $val_return = "DELETE FROM ";
        $val_return = $val_return.$tablename." ";
        if($index != null){
            $val_return = $val_return.$index." ";
        }
        $val_return = $val_return." WHERE ".$where;
        return $this->hf__aywte($exec,$val_return);
    }
}
///NOT FINISHED!!!!!!!!!!!!!!!
?>