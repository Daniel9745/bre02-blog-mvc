<?php


class Router {
    public function __construct() {
    }
        public function handleRequest(array $get) : void {

            $categories = new CategoriesController();
            $post = new PostController();

            if(isset($get["route"]) &&  $get["route"] === "categories") {
                $auth->categories();
            }
            else if(isset($get["category"]) && $get["category"] === "id_category") {
                
                $categories->categoriesId();
            }
            else if(isset($get["route"]) && $get["route"] === "post") {
                
                $post->postId();
            }
            else if(isset($get["route"]) && $get["route"] === "home") {
                $auth->home();
            }
            // else if(isset($get["route"]) && $get["route"] === "check-connexion") {
                
            //     $auth->checkConnexion();
            // }
            // else if(!isset($get["route"])){
            //     $auth = new AuthController();
            //     $auth->home();
            // }
            
        }
}