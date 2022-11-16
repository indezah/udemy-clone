<?php

class Home extends Controller
{
    public function index()
    {
        // $db = new Database();
        // $res = $db->createTable();
        // $res = $db->query("INSERT into users (name,age,pass) values ('John', 20, '1234')");
        // $res = $db->query("SELECT * FROM users");
        // show($res);
        $data['title'] = "Home";
        $this->view('home', $data);
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
