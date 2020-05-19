<?php require 'partials/head.php'; ?>

    <header>
      <h1>Hello World!</h1>
    </header> 

    <h4>Task list from db</h4>
    <ul>
        <?php foreach ($tasks as $task) : ?>
          <li>
            <?php if ($task->complete) : ?>
              <strike><strong><?= $task->description ?></strong></strike>
            <?php else : ?>
              <?= $task->description ?>
            <?php endif ?>
          </li>
        <?php endforeach ?>
    </ul>
   
<?php require 'partials/footer.php'; ?>