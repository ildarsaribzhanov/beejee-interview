<?php

namespace App\Controllers;


use Laminas\Diactoros\Response\HtmlResponse;

class HomeController
{
    public function showAll()
    {
        return new HtmlResponse('Hello!');
    }
}