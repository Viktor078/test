<?php
/**
 * @var \MyTest\Models\Tasks\Task $task
 */
include __DIR__ . '/../header.php';
?>
    <h3>Редактирование статьи</h3>
<?php if(!empty($error)): ?>
    <div style="color: red;"><?= $error ?></div>
<?php endif; ?>
<div class="row">
<div class="col-7">
    <form action="/tasks/<?= $task->getId() ?>/edit" method="post">
        <label for="text">Текст задачи</label><br>
        <textarea name="text" id="text" rows="10" cols="80"><?= $_POST['text'] ?? $task->getText() ?></textarea><br>
        <br>
        <input type="submit" value="Обновить">
    </form>
</div>
<div class="col-5">
    <form action="/" method="post">
        Выберите статус задачи:
        <br>
        <label>
            <input type="radio" name="status" value="1">
            Выполнено
        </label>
        <br>
        <label>
            <input type="radio" name="status" value="0" checked>
            Не выполнено
        </label>
    </form>
</div>
</div>
