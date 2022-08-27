<?php

namespace App\Models;

use App\Models\MyHouse as ModelsMyHouse;

class MyHouse2 extends ModelsMyHouse
{
    /**
     * Same as MyHouse1 -
     * 
     * Overriding parent constructor's variable allow us not to specify generate() method parameters and
     * already give a custom style to the type of house we want to draw :)
     */ 
    public function __construct($size = '150', $color = 'green')
    {
        parent::__construct($size, $color);
    }
}
