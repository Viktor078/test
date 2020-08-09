
<?php include __DIR__ . '/../header.php'; ?>
    <h3>Создание новой статьи</h3>
    <?php if(!empty($error)): ?>
        <div style="color: red;"><?= $error ?></div>
    <?php endif; ?>
    <form action="/tasks/add" method="post">
        <label for="text">Текст задачи</label><br>
        <textarea name="text" id="text" rows="10" cols="80"><?= $_POST['text'] ?? '' ?></textarea><br>
        <br>
        <input type="submit" value="Создать">
    </form>