<?php


class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getUsers()
    {
        $this->db->query("SELECT * FROM tbl_users");
        return $this->db->resultSet();
    }


    public function findUserByEmail($email)
    {
        $this->db->query('SELECT count(*) FROM tbl_users 
                          WHERE email = :email');

        $this->db->bind(':email', $email);

        // Provjera da li ima mejla
        $result = $this->db->resultSet() > 0 ? true : false;
        return $result;
    }

    public function findUserByUsername($username)
    {
        $this->db->query('SELECT count(*) FROM tbl_users
                          WHERE username = :username');

        $this->db->bind(':username', $username);

        // Provjera da li ima mejla
        $result = $this->db->resultSet() > 0 ? true : false;
        return $result;
    }


    public function login($username, $password)
    {
        $this->db->query('SELECT * FROM tbl_users
                          WHERE username = :username');

        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->password;
        if (password_verify($password, $hashedPassword)) // true/false
            return $row;
        else
            return false;
    }



    public function register($data)
    {
        $this->db->query('INSERT INTO tbl_users (id, username, email, password, 
                                                 name, address, phone, zip, country, city, is_admin) 
                          VALUES(:id, :username, :email, :password,
                                 :name, :address, :phone, :zip, :country, :city, 0
                          )');
        // hash id
        $rand = rand(999, 9999);
        $data['id'] = md5($rand);

        //Bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':zip', $data['zip']);
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':city', $data['city']);

        //* Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}