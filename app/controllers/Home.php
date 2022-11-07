<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = "Home";
        $this->view('home',$data);
    }
    public function edit()
    {
        echo "Home edit ";
    }
    public function delete()
    {
        echo "Home delete ";
    }
}
