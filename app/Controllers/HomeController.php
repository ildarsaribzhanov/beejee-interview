<?php

namespace App\Controllers;


use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\ServerRequest;

/**
 * Class HomeController
 *
 * @package App\Controllers
 */
class HomeController
{
    /**
     * @param \Laminas\Diactoros\ServerRequest $request
     *
     * @return \Laminas\Diactoros\Response\HtmlResponse
     */
    public function showAll(ServerRequest $request): HtmlResponse
    {
        return new HtmlResponse('Hello!');
    }
}