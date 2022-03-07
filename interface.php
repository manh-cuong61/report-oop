<?php

interface Swim
{
    function swimming();
}

interface CatchMouse
{
    function catchMouse();
}

interface Eat
{
    function eatting();
}

class Cat implements Eat, CatchMouse
{
    public function eatting()
    {
        
    }

    public function catchMouse()
    {
        
    }
}

class Fish implements Eat, Swim
{
    public function eatting()
    {
        
    }
    public function swimming()
    {
        
    }
}