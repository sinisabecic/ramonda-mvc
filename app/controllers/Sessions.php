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
        $data = [
            'session_id' => $_POST['session_id'],
        ];

        $this->sessionModel->deleteSession($data['session_id']);
    }
}