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
        $this->db->query("SELECT * FROM tbl_users
                          ORDER BY created_at desc");
        return $this->db->resultSet();
    }


    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM tbl_users 
                          WHERE id = :id');

        $this->db->bind(':id', $id);

        return $this->db->resultSet();
    }


    public function findUserByEmail($email)
    {
        $this->db->query('SELECT count(*) FROM tbl_users 
                          WHERE email = :email');

        $this->db->bind(':email', $email);

        // Provjera da li ima mejla
        return $this->db->resultSet();
    }


    public function findUserByUsername($username)
    {
        $this->db->query('SELECT count(*) FROM tbl_users
                          WHERE username = :username');

        $this->db->bind(':username', $username);

        // Provjera da li ima mejla
        return $this->db->resultSet();
    }


    public function loginUser($username, $password)
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

    //* Registracija sa korisnicke strane
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
        return $this->db->execute() ? true : false;
    }

    //* Registracija sa administratorske strane
    public function registerFromAdmin($data)
    {
        $this->db->query('INSERT INTO tbl_users (id, username, email, password, 
                                                 name, address, phone, zip, country, city, is_admin) 
                          VALUES(:id, :username, :email, :password,
                                 :name, :address, :phone, :zip, :country, :city, :is_admin
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
        $this->db->bind(':is_admin', $data['is_admin']);

        //* Execute function
        return $this->db->execute() ? true : false;
    }


    public function deleteUser($id = NULL)
    {
        $this->db->query('DELETE FROM tbl_users
                          WHERE id = :id');

        $this->db->bind(':id', $id);

        return $this->db->execute() ? true : false;
    }


    public function updateUser($data)
    {
        $this->db->query('UPDATE tbl_users
                          SET username=:username, 
                              email=:email,
                              name=:name,
                            --   password=:password, 
                              address=:address, 
                              phone=:phone, 
                              zip=:zip, 
                              country=:country, 
                              city=:city, 
                              updated_at=:updated_at, 
                              is_admin=:is_admin
                          WHERE id=:id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':name', $data['name']);
        // $this->db->bind(':password', $data['password']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':zip', $data['zip']);
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':updated_at', date("Y-m-d H:i:s"));
        $this->db->bind(':is_admin', $data['is_admin']);

        return $this->db->execute() ? true : false;
    }
}