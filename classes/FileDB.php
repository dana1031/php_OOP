<?php

class FileDB {

    private $file_name;
    private $data;

    public function __construct($file_name) {
        $this->file_name = $file_name;
    }

    public function load() {
        $this->data = file_to_array($this->file_name);
    }

    public function setData($data_array) {
        $this->data = $data_array;
    }

    public function save() {
        return array_to_file($his->data, $this->file_name);
    }

    public function getData() {
        return $this->data;
    }

    public function tableExists($table_name) {
        if (isset($this->data[$table_name])) {
            return true;
        } else
            false;
    }

    public function createTable($table_name) {
        if (tableExists($table_name)) {
            $this->data[$table_name] = [];
            return true;
        } else {
            return false;
        }
    }

}
