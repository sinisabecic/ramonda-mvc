<?php

class Posts extends Controller
{
    public function __construct()
    {
        $this->postModel = $this->model('Post');
        // Session::checkSession();
    }


    public function index()
    {
        $posts = $this->postModel->getPosts();
        $data = [
            'title' => 'Posts | MVC Unico',
            'posts' => $posts,
        ];

        $this->view('posts/index', $data);
    }


    public function create()
    {
        if (!isLoggedIn())
            header("Location: " . ROOT . "/index");

        $data = [
            // 'title' => 'Add post | MVC Unico',
            'user_id' => $_SESSION['user_id'],
            'title' => '',
            'content' => '',
            'titleError' => '',
            'contentError' => '',
            'alert' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //* Da u action tag forme bude url a ne naziv fajla
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                // 'title' => 'Add post | MVC Unico',
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'content' => trim($_POST['content']),
                'titleError' => '',
                'contentError' => '',
                'alert' => '',
            ];

            if (empty($data['title'])) {
                $data['titleError'] = 'Please enter title';
            }
            if (empty($data['content'])) {
                $data['contentError'] = 'Please enter text';
            }

            if (empty($data['titleError']) && empty($data['contentError'])) {
                if ($this->postModel->addPost($data)) {
                    header("Location: " . ROOT . "/posts");
                } else {
                    die('Something went wrong');
                }
            } else {
                $this->view('posts/create', $data);
            }
        }
        // Svejedno prikazi stranicu iako nije kliknuto submit  
        $this->view('posts/create', $data);
    }

    //* Za view
    public function edit($id)
    {
        $post = $this->postModel->findPostById($id);

        $data = [
            'title' =>  $post->title . '| MVC Unico',
            'post' => $post,
            // 'title' => $post->title,
            // 'content' => $post->content,
            'titleError' => '',
            'contentError' => '',
        ];

        if (!isLoggedIn())
            header("Location: " . ROOT . "/posts");
        elseif ($post->user_id != $_SESSION['user_id'])
            header("Location: " . ROOT . "/posts");

        $this->view('posts/edit', $data);
    }


    //* Za izvrsavanje
    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //* Da u action tag forme bude url a ne naziv fajla
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                // 'title' => 'Add post | MVC Unico',
                'id' => $id,
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'content' => trim($_POST['content']),
                'titleError' => '',
                'contentError' => '',
                'alert' => '',
            ];

            if (empty($data['title'])) {
                $data['titleError'] = 'Please enter title';
            }
            if (empty($data['content'])) {
                $data['contentError'] = 'Please enter text';
            }

            if ($data['post']->title == $this->postModel->findPostById($id)->title) {
                $data['titleError'] == 'At least change the title';
            }
            if ($data['post']->content == $this->postModel->findPostById($id)->content) {
                $data['contentError'] == 'At least change the content';
            }

            if (empty($data['titleError']) && empty($data['contentError'])) {
                if ($this->postModel->updatePost($data)) {
                    header("Location: " . ROOT . "/posts");
                } else {
                    die('Something went wrong');
                }
            } else {
                $this->view('posts/edit', $data);
            }
        }
        $this->view('posts/edit', $data);
    }



    public function delete($id)
    {
        $post = $this->postModel->findPostById($id);

        if (!isLoggedIn())
            header("Location: " . ROOT . "/posts");
        elseif ($post->user_id != $_SESSION['user_id'])
            header("Location: " . ROOT . "/posts");

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($this->postModel->deletePost($id)) {
                header("Location: " . ROOT . "/posts");
            } else {
                die('Something went wrong');
            }
        }
    }
}