<?php

class geschiedenis extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Geschiedenis'
        ];

        $this->view('geschiedenis/index', $data);
    }
}