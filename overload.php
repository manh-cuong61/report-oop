<?php

class Shape
{
    const PI = 3.142;

    public function __call($name, $arguments)
    {
        if($name == 'area') {
            $args_count = count($arguments);
            switch($args_count) {
                case 0:
                    return 0;
                    break;

                case 1:
                    return self::PI * $arguments[0] * $arguments[0];
                    break;
                case 2:
                    return  $arguments[0] * $arguments[1]; 
            }
        }
    }
}

$shape = new Shape;

echo $shape->area(0);
echo '<br/>';
echo $shape->area(1); 
echo '<br/>';
echo $shape->area(1, 2);