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


    public function getSessionsByMonth($month_no = NULL)
    {

        $this->db->query('SELECT COUNT(y.month) count_of_logins
                          FROM (SELECT *, Month(CAST(logged_at as DATE)) month
                                FROM tbl_sessions x
                                GROUP by user_id, month) y
                          WHERE y.month in (1,2,3,4,5,6,7,8,9,10,11,12)
                          GROUP BY y.month
                        ');

        $this->db->bind(':month_no', $month_no);

        return $this->db->resultSet();
    }
}