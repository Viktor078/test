<?php

namespace MyTest\Controllers;

use MyTest\Exceptions\InvalidArgumentException;
use MyTest\Exceptions\NotFoundException;
use MyTest\Models\Tasks\Task;
use MyTest\Models\Users\User;


class TasksController extends AbstractController
{

    public function view(int $taskId)
    {
        $task = Task::getById($taskId);

        if ($task === null) {
            throw new NotFoundException();
        }

        $this->view->renderHtml('main/main.php', [
            'task' => $task,

        ]);
    }

    public function edit(int $taskId): void
    {
        $task = Task::getById($taskId);

        if ($task === null) {
            throw new NotFoundException();
        }
        if (!empty($_POST)) {
            try {
                $task->updateFromArray($_POST);
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('tasks/edit.php', ['error' => $e->getMessage(), 'tasks' => $task]);
                return;
            }

            header('Location: /' , true, 302);
            exit();
        }

        $this->view->renderHtml('tasks/edit.php', ['task' => $task]);
    }


    public function add(): void
    {

        if (!empty($_POST)) {
            try {
                $task = Task::createFromArray($_POST, $this->user);
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('tasks/add.php', ['error' => $e->getMessage()]);
                return;
            }

            header('Location: /', true, 302);
            exit();
        }

        $this->view->renderHtml('tasks/add.php');
    }
}