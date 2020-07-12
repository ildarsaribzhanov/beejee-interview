<?php

namespace App\Controllers;


use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\ServerRequest;

/**
 * Class HomeController
 *
 * @package App\Controllers
 */
class HomeController extends Controller
{
    /**
     * @param \Laminas\Diactoros\ServerRequest $request
     *
     * @return \Laminas\Diactoros\Response\HtmlResponse
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function showAll(ServerRequest $request): HtmlResponse
    {
        return $this->render('home', ['param1' => 'name!dd@##']);
    }
}