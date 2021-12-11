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


    public function getSessionsByMonth()
    {
        $this->db->query('SELECT count(y.user_id) count_of_logins
                          FROM (SELECT *, Month(CAST(logged_at as DATE)) month
                                FROM tbl_sessions) y
                          GROUP by y.month
                        ');

        return $this->db->resultSet();
    }

    public function lastActivity()
    {
        $this->db->query('SELECT logged_at as date, time_format(logged_at, "%H:%i %p") as time
                          FROM tbl_sessions
                          ORDER BY logged_at DESC
                          LIMIT 1
      ');

        return $this->db->resultSet();
    }
}