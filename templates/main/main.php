<?php include __DIR__ . '/../header.php';

?>
    <div class="row">
        <div class="col-8" style="text-align: center">
            <h3>Список задач</h3>
        </div>
        <div class="col-4">
            <h3>Статус выполенения</h3>

        </div>
    </div>
    <a href="/tasks/add">Добавить задачу</a>
    <hr>

<?php foreach ($tasks as $task): ?>
    <div class="row">
        <div class="col-8" id="tasklist">
            <h4><?= $task->getText() ?></h4>
            <p><?= $task->getAuthor()->getNickname() ?></p>
            <p><?= $task->getEmailAuthor()->getEmail() ?></p>
            <div style="text-align: right;">
                <a href="/tasks/<?= $task->getId() ?>/edit">Редактировать</a>
            </div>
        </div>
        <div class="col-4" id="status">
            <p><?= $status ?></p>
        </div>

    </div>

    <hr>


<?php endforeach; ?>
<a href="?page=1">1</a>
    <a href="?page=2">2</a>
    <a href="?page=3">3</a>
    <a href="?page=4">4</a>




    <?php include __DIR__ . '/../footer.php'; ?>