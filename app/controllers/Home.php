<?php

class Home extends Controller
{
    public function index()
    {
        $db = new Database();
        $db->query();
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
