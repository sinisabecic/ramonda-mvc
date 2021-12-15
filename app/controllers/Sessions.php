<?php


class Sessions extends Controller
{
    public function __construct()
    {
        checkSession();
        $this->sessionModel = $this->model('Session');
    }

    //* Za ajax f-ju
    public function delete()
    {
        $this->sessionModel->deleteSession($_POST['session_id']);
    }
}