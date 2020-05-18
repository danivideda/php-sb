<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Sandbox</title>
  <style>
    header {
      background-color: #333;
      padding: 2em;
      text-align: center;
      color: white;
    }
  </style>
</head>
<body>
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
   
</body>
</html>