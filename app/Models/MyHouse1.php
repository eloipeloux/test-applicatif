<?php

namespace App\Models;

use App\Models\MyHouse as ModelsMyHouse;

class MyHouse1 extends ModelsMyHouse
{
    /**
     * Overriding parent constructor's variable allow us not to specify generate() method parameters and
     * already give a custom style to the type of house we want to draw :)
     */ 
    public function __construct($size = '150', $color = 'blue')
    {
        parent::__construct($size, $color);
    }
}
