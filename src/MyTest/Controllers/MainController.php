<?php

namespace MyTest\Controllers;


use MyTest\Models\Tasks\Task;


class MainController extends AbstractController
{

    public function main()
    {
        $tasks = Task::findFree();


        if ($tasks['is_done'] == 1) {
            $status = 'Выполнено';
        } else {
            $status = 'Не выполнено';
        }
        $this->view->renderHtml('main/main.php', ['tasks' => $tasks, 'status' => $status]);
    }

}


