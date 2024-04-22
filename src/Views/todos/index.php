<h1>Lista de todos</h1>

<ul>
    <?php foreach ($todos as $todo) : ?>
        <li>
            <h2><?php echo $todo->title; ?></h2>
            <p><?php echo $todo->description; ?></p>
        </li>
    <?php endforeach; ?>
</ul>