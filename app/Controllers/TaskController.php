<?php

namespace App\Controllers;


use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\ServerRequest;

/**
 * Class TaskController
 *
 * @package App\Controllers
 */
class TaskController
{
    /**
     * @param ServerRequest $request
     * @param int           $task_id
     *
     * @return HtmlResponse
     */
    public function getOne(ServerRequest $request, int $task_id): HtmlResponse
    {
        return new HtmlResponse('Edit task with id = ' . $task_id);
    }

    public function update(int $id)
    {

    }
}