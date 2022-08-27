<?php

namespace App\Models;

class MyHouse
{
    // Class main variables
    public $size;
    public $color;
    
    // Class constructor with variables size and color as parameters
    public function __construct(int $size, string $color)
    {
        $this->size = $size;
        $this->color = $color;
    }

    /**
     * Method that generates html code to display a house (not the prettiest tbh)
     * 
     * No parameter needed in this method because it wouldn't be very clean to add specific parameter
     * for each function call in the children code ...
     * 
     * @return string html to display in Blade (View)
     */
    public function generate() : string
    {
        $size = $this->size;
        $color = $this->color;
        
        return "<div class='house mt-3' style='width:${size}px;height:${size}px;border:1px solid black;background-color:${color};'> 
            <div class='door'></div>
        </div>";
    }
}
