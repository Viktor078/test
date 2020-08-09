<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Задачник</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-auto">
            <h1>Задачник</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php if (!empty($user)): ?>
                Привет,  <?= $user->getNickname() ?> | <a href="http://test.loc/users/logOut">Выйти</a>
            <?php else: ?>
                <a href="/users/login"> Войти </a> | <a href="/users/register">Зарегистрироваться</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-12">

    </div>
</div>
