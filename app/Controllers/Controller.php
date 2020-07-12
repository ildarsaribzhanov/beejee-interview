<?php

namespace App\Controllers;


use Laminas\Diactoros\Response\HtmlResponse;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * Class TemplateRenderer
 *
 * @package App\Services
 */
class Controller
{
    /**
     * @param string $template
     * @param array  $data
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function render(string $template, array $data)
    {
        $loader = new FilesystemLoader(APP . '/resources/templates');
        $twig   = new Environment($loader);

        $html = $twig->render($template . '.twig', $data);

        return new HtmlResponse($html);
    }
}