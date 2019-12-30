<?php require  'partials/head.php'; ?>
<h1>My Tasks</h1>

<?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed) : ?>
            <strike><?= $task->description; ?></strike>
        <?php else : ?>
            <?= $task->description; ?>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
<h1>Submit Your Name</h1>

<form method="POST" action="/names">
    <input name="name"></<input >
</form>

<?php require 'partials/footer.php'; ?>