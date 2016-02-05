<?php

class db{
    private $db;

    public function __construct(){
        $config = new config('db');

        $db = new mysqli($config->get('host'), $config->get('user'), $config->get('password'), $config->get('name'));

        if ($db->connect_error) {
           echo $db->connect_error . '(' . $db->errno . ')';
        } else {
            $db->set_charset('utf8');  //kodowanie na połączeniu z MySQL
            $this->db = $db;
        }
    }

    // ma zwrocic jeden wpis z bazy
    public function fetchOne($query)
    {
        $result = $this->db->query($query);
        $row = $result->fetch_assoc();
        return $row;
    }

    // zwraca
    public function fetchAll($query)
    {
        $return = $this->db->query($query);
        $ret = [];

        while ($row = $return->fetch_assoc()) {
            $ret[] = $row;
        }

        return $ret;
    }

    // do edycji, usuwania i dodawania
    public function query($query)
    {
        return $this->db->query($query);
    }

    // nakladka na latwiejsze dodawanie
    public function insert($name, array $data)
    {
        $columns    = [];
        $values     = [];

        foreach($data as $column => $value) {
            $columns[]  = '`' . $column . '`';

            if(is_int($value)) {
                $values[] = $value;
            } else if(is_null($value)) {
                $values[]   = 'null';
            } else {
                $values[]   = '"' . $value . '"';
            }
        }

        $query = "INSERT INTO $name (" . implode(',', $columns) . ") VALUES(" . implode(',', $values) . ")";

        return $this->db->query($query);
    }
}