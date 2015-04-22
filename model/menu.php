<?php

class Menu {
	public $title;
	public $category;
	public $price;
	
	public function __construct($title, $category, $price)  
    {  
        $this->title = $title;
	    $this->category = $category;
	    $this->price = $price;
    } 
}

?>