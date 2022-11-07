<?php

class Home{
    public function index($id){
        echo "Home view page ".$id;
    }
    public function edit($id){
        echo "Home edit ".$id;
    }
    public function delete($id){
        echo "Home delete ".$id;
    }
}