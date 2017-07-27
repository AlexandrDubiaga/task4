<?php
class Sql{
    public $select;
    public $from;
    public $where;
    public $table;
    public $nameDB;
    public $cons;

    public function select($var){
        $this->select = $var;
        return $this;
    }
    public function table($var){
        $this->table = $var;
        return $this;
    }
    public function from($var){
        $this->from = $var;
        return $this;
    }
    public function nameDB($var){
        $this->nameDB = $var;
        return $this;
    }
    public function exec($var){
       $this->cons = array();
        $this->cons =  $this->select.' '.$this->table.' '.$this->from.' '.$this->nameDB;
        return $this->cons;
        }





}




?>