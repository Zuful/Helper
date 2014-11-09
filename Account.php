<?php
/**
 * Created by PhpStorm.
 * User: Yam's
 * Date: 08/11/14
 * Time: 12:49
 */

namespace Helper;

class Account {
    private $_pdo;
    private $_crud;

    public function __CONSTRUCT(){
        $this->_pdo = $GLOBALS["pdo"];
        $this->_crud = new Crud($this->_pdo);
    }

    public function signIn($table, array $elms){
        $this->_crud->setTable($table);
        $this->_crud->setElms(array("*"));

        if($this->_crud->read($elms)){
            return true;
        }
        else{
            return false;
        }
    }

    public function signUp($table, array $elms){
        $crud = $this->_crud;
        $crud->setTable($table);
        $crud->setElms($elms);

        if($crud->create()){
            return true;
        }
        else{
            return false;
        }
    }

    public function checkElmExists($table, $elm, $field = null){
        $field = (is_null($field))?"*":$field;

        $crud = $this->_crud;
        $crud->setTable($table);
        $crud->setElms($field);

        if($crud->read($elm)){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Checks if there is any non-optional empty fields after a form was submited
     *
     * @param Array $fields
     */
    public function checkFieldEmpty(array $fields){

    }
} 