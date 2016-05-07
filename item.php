<?php
//item.php

class Item{

    public $name = '';
    public $description = '';
    public $price = 0;
    public $qty_form = '';
    public function __construct($name,$description,$price,$qty_form)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->qty_form = $qty_form;
    }
    
    
}