<?php

class Categories{
    private $id;
    private $title;
    private $description;
    
    public function __construct($id, $title, $description){

    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getDescription(){
        return $this->description;
    }
}