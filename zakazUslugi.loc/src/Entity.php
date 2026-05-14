<?php

namespace src;

use src\services\Db;
use src\services\Request;

abstract class Entity
{
    public string $tableName = '';
    public int $id;
    protected Request $request;
    protected Db $db;

    public function __construct(Request $request, Db $db){
        $this->request = $request;
        $this->db = $db;
    }

    public function load($fields) {
        foreach($fields as $key => $value){
            if(property_exists($this, $key)){
                $this->$key = $value;
            }
        }
    }

    public function insert(array $fields){
        $props = [];
        $values = [];
        foreach($fields as $key => $value){
            $props[] = $key;
            $values[] = $value;
        }
        $propViaSemicolon = implode(', ', $props);
        $valueViaSemicolon = implode('", "', $values);
        $sql = 'INSERT INTO ' . $this->tableName . '(' . $propViaSemicolon . ')' . 'VALUES ("' . $valueViaSemicolon . '")';
        return $this->db->querySql($sql);
    }

    public function update($fields){}

    public function delete($fields){}

    public function findAll() : ?array{
        $sql = 'SELECT * FROM ' . $this->tableName;
        $result = $this->db->querySql($sql);
        if($result === false) return null;
        return $result;
    }
}