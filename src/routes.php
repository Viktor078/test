<?php
return [
    '~^$~'=>[\MyTest\Controllers\MainController::class,'main'],
    '~^tasks/add$~' => [\MyTest\Controllers\TasksController::class, 'add'],
    '~^tasks/(\d+)/edit$~' => [\MyTest\Controllers\TasksController::class, 'edit'],

    '~^users/register$~' => [\MyTest\Controllers\UsersController::class, 'signUp'],
    '~^users/login~' => [\MyTest\Controllers\UsersController::class, 'login'],
    '~^users/logOut~' => [\MyTest\Controllers\UsersController::class, 'logOut'],
];