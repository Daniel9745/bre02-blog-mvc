<?php

class CategoriesControllres{
    public function __construct(){

    }
    public function categories(){
        $templates = "categories";
        require "./templates/listeCategorie.phtml";
    }
    public function categoriesId(){

        if((isset($get["route"]) && $get["route"] === "category") && (isset($get["category"]) && $get["category"] === "id_category"))
        {
            $templates = "categories_id";
            require "./templates/postCategories.phtml";
        }
        
    }
}