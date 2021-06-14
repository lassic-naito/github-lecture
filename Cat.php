<?php

class Cat extends Animal
{
    //鳴き声を得るメソッド
    public function call(): string
    {
        return "にゃー";
    }
}