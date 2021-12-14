<?php

class Database // extends Dmodel //!* extends PDO
{
    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;
    private $dbPort = DB_PORT;

    private $stmt;
    private $dbHandler;
    private $error;

    public function __construct()
    {
        $conn = 'mysql:host=' . $this->dbHost . ';port=' . $this->dbPort . ';dbname=' . $this->dbName;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try {
            $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
        return $this->dbHandler;
    }


    //* Allows us to write queries
    public function query($sql)
    {
        $this->stmt = $this->dbHandler->prepare($sql); //! extends PDO se mora ukloniti
        //! ili (ispod)
        // $this->stmt = $this->prepare($sql); extends PDO se mora imati
    }


    public function bind($parameter, $value, $type = null)
    {
        switch (is_null($type)) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            default:
                $type = PDO::PARAM_STR;
        }
        $this->stmt->bindValue($parameter, $value, $type);
    }

    //? vise sluzi da skratimo kucanje na $this->execute();
    public function execute()
    {
        return $this->stmt->execute();
    }


    //! Return an array
    //* ovo je za stil foreach $users->id, $users->name...
    public function resultSet($fetchStyle = PDO::FETCH_OBJ)
    {
        $this->execute();
        return $this->stmt->fetchAll($fetchStyle);
    }


    // Return a specific row as an object
    public function single($fetchStyle = PDO::FETCH_OBJ)
    {
        $this->execute();
        return $this->stmt->fetch($fetchStyle);
    }

    // Return a specific row as an object
    //? Takodje skracivanje
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }



    // public function select($sql, $data = array(), $fetchStyle = PDO::FETCH_ASSOC)
    // {
    //     //  $this->stmt = $this->prepare($sql); //! mora se imati Class {ime klase} extends PDO. A postoji i drugi nacin
    //     //* II nacin
    //     $stmt = $this->dbHandler->prepare($sql); //? Bez extends PDO
    //     foreach ($data as $key => $value) {
    //         $stmt->bindValue($key, $value);
    //     }

    //     $stmt->execute();
    //     return $stmt->fetchAll($fetchStyle);
    // }


    // public function insert($table, $data)
    // {
    //     $keys = implode(', ', array_keys($data));
    //     $values = ':' . implode(', :', array_keys($data));

    //     $sql = "INSERT INTO $table($keys) VALUES($values)";
    //     $this->stmt = $this->dbHandler->prepare($sql);

    //     foreach ($data as $key => $value) {
    //         $this->stmt->bindValue(":$key", $value);
    //     }
    //     return $this->stmt->execute();
    // }


    // public function update($table, $data, $cond)
    // {
    //     $updateKeys = NULL;
    //     foreach ($data as $key => $value) {
    //         $updateKeys .= "$key = :$key,";
    //     }
    //     $updateKeys = rtrim($updateKeys, ',');


    //     $sql = "UPDATE $table SET $updateKeys WHERE $cond";
    //     $this->stmt = $this->dbHandler->prepare($sql);

    //     foreach ($data as $key => $value) {
    //         $this->stmt->bindValue(":$key", $value);
    //     }
    //     return $this->stmt->execute();
    // }

    // public function delete($table, $cond, $limit = 1)
    // {
    //     $sql = "DELETE FROM $table WHERE $cond LIMIT $limit";
    //     return $this->stmt->execute($sql);
    // }



    //* LOGIN USER.  */

    // public function affectedRows($sql, $username, $password)
    // {
    //     $this->stmt = $this->dbHandler->prepare($sql);
    //     $this->stmt->execute(array($username, $password));
    //     return $this->stmt->rowCount();
    // }

    // public function selectUser($sql, $username, $password, $fetchStyle = PDO::FETCH_ASSOC)
    // {
    //     $this->stmt = $this->dbHandler->prepare($sql);
    //     $this->stmt->execute(array($username, $password));
    //     return $this->stmt->fetchAll($fetchStyle);
    // }
}