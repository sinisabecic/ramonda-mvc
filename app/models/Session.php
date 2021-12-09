<?php


class Session
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function insertSessionData($user_id)
    {
        $this->db->query('INSERT INTO tbl_sessions (user_id, logged_at)
                          VALUES (:user_id, now())');

        $this->db->bind(":user_id", $user_id);
        // $this->db->bind(":logged_at", $logged_at);

        return $this->db->execute() ? true : false;
    }


    public function getSessions()
    {
        $this->db->query('SELECT *, s.id as s_id FROM tbl_sessions s
                          INNER JOIN tbl_users u ON s.user_id=u.id
                          GROUP BY s.id
                          ORDER BY s.logged_at DESC');

        return $this->db->resultSet();
    }


    public function deleteSession($id = NULL)
    {
        $this->db->query('DELETE FROM tbl_sessions
                          WHERE id = :id');

        $this->db->bind(':id', $id);

        return $this->db->execute() ? true : false;
    }
}