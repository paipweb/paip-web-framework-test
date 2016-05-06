<?php
/**
 * Klasa SQL Lite
 */
class PAIP_SQLLITE
{
    ///SQL Lite Database API (From SQLite3 PHP Class)
    $database;
    function __construct($filename,$flag=0)
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
    function query($sql_query)
    {
        return $database->query($sql_query);
    }
    function close()
    {
        return $database->close();
    }
    ///SQL Lite Query API
    //CREATE QUERY
    //type = S / def = Select | type = D / def = definition array
    function CREATE($tablename,$type,$def,$ifne=false,$tmp=false)
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
            $tt1 = trim($def,"Array");
            $val_return = $val_return.$tt1;
        }
    }
}
///NOT FINISHED!!!!!!!!!!!!!!!
?>