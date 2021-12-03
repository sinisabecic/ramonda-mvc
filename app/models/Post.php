<?php

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPosts()
    {
        $this->db->query('SELECT * FROM tbl_blog
                          ORDER BY created_at DESC');
        return $this->db->resultSet();
    }

    public function addPost($data)
    {
        $this->db->query('INSERT INTO tbl_blog(user_id, title, content)
                          VALUES(:user_id, :title, :content)');

        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);

        if ($this->db->execute())
            return true;
        else
            return false;
    }


    public function findPostById($id)
    {
        $this->db->query('SELECT * FROM tbl_blog
                          WHERE id=:id
                          LIMIT 1');

        $this->db->bind(':id', $id);
        return $this->db->single();
    }


    public function updatePost($data)
    {
        $this->db->query('UPDATE tbl_blog
                          SET title=:title, 
                              content=:content
                          WHERE id=:id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);

        if ($this->db->execute())
            return true;
        else
            return false;
    }


    public function deletePost($id)
    {
        $this->db->query('DELETE FROM tbl_blog                          
                          WHERE id=:id');

        $this->db->bind(':id', $id);

        if ($this->db->execute())
            return true;
        else
            return false;
    }
}