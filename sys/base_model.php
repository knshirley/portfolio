<?php
/**
* Base_Model
* DB connections and generic DB functions are stored here
**/
abstract class Base_Model{
    private $host;
    private $database;
    private $user;
    private $password;

    protected $db;

    public function __construct(){
        $this->host = "localhost";
        $this->dbname = "dbname";
        $this->user = "user";
        $this->password = "password";
    }

    /**
    * connect
    * Abstraction for PDO connect
    */
    protected function connect(){
        try{
            $this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        
        } catch (PDOException $ex){
            echo $ex->getMessage();
            die();            
        } 
        
    }

    /**
    * query
    * Abstraction for PDO query
    * 
    * @param $query - the query to execute
    * @return - the result of the query
    */
    protected function query($query){
        return $this->db->query($query);
    }

    /**
    * fetch
    * Abstraction for PDO fetch
    *
    * @param $result - the result of a query
    * @return - the array set
    */
    protected function fetch($result){
        return $result->fetch(PDO::FETCH_ASSOC);
    }
   
    /**
    * prepare
    * Abstraction for PDO prepare
    *
    * @param $q - the query to prepare with missing parameters
    */
    protected function prepare($q){
         return $this->db->prepare($q);
    }
    
    /**
    * execute
    * Abstraction for PDO execute
    *
    * @param $stmt
    * @param $params
    */
    protected function execute($stmt, $params){
        return $stmt->execute($params);
    }

    /**
    * prepareAndExecute
    * Combine two functions for easier use
    *
    * @param $q - the query
    * @param $params - the parameters
    */
    protected function prepareAndExecute($q, $params){

        $stmt = $this->prepare($q);
        $stmt->execute($params);

        return $stmt;
    }

    /**
    * lastInsertID
    * Abstraction for PDO lastInsertId
    * 
    * @param $col - the column name
    * @return - the last inserted id
    */
    protected function lastInsertID($col){
        return $this->db->lastInsertId($col);
    }

    /**
    * query2
    * Completes all PDO steps for queries
    *
    * @param $q - the query
    * @param $params - any parameters for that query
    * @return - the array result
    */
    protected function query2($q, $params = null){

        $stmt = $this->prepare($q);

        if (!empty($params)){
            foreach($params as $key => $p){
                $stmt->bindParam($key, $p);
            }
        }
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    /**
    * getColumnValues
    * Gets all the values of a mysql set of enum
    *
    * @param table - the table to select from
    * @param column - the column from the table
    * @return - the set of possible column values in an array
    */
    protected function getColumnValues($table, $column){
        $this->connect();

        $q = "SHOW COLUMNS FROM $table LIKE '$column'";
        $result = $this->fetch($this->query($q));

        $values = $result['Type'];

        if (strlen(strstr($values, 'enum')) > 0)
            $values = substr($values, 6, strlen($values) - 8);
        if (strlen(strstr($values, 'set')) > 0)
            $values = substr($values, 5, strlen($values) - 7);
        
        return preg_split("/','/", $values);
    }

 }

?>
