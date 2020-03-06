<?php

class BddFactory
{
    public static function getMYSQLPDO()
    {
        $db = new PDO('mysql:host=localhost;dbname=pays','root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}
