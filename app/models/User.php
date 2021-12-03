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
        $this->db->query("SELECT * FROM tbl_users 
                          WHERE email = :email 
                          LIMIT 1");

        $this->db->bind(':email', $email);

        // Provjera da li ima mejla
        $this->db->rowCount() > 0 ? true : false;
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
                                 "no name", "no address", "no phone", "81000", "no country", "no city", 0
                          )');
        // hash id
        $rand = rand(999, 9999);
        $data['id'] = md5($rand);

        //Bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        //* Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}