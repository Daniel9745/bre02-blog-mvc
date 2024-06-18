<?php

class PostController{
    public function __construct(){

    }
    public function postId(){
        
        if((isset($get["route"]) && $get["route"] === "post") && (isset($get["post"]) && $get["post"] === "post_id"))
        {
            $templates = "post_id";
            require "./templates/posts.phtml";
        }
        
    }
}