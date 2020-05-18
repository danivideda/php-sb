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

    <h4>Hobbies</h4>
    <ul>
      <?php foreach ($hobbies as $hobby) : ?>
        <li><?php echo $hobby ?></li>
      <?php endforeach ?>
    </ul>

    <h4>My info</h4>
    <ul>
        <?php foreach ($person as $feature => $value) : ?>
          <li><strong><?= $feature?></strong>: <?= $value?></li>
        <?php endforeach ?>
    </ul>

    <h1>Task For The Day</h1>
    <ul>
          <li>
            <strong>Name: </strong> <?= $task_p['title']; ?>
          </li>
          <li>
            <strong>Due Date: </strong> <?= $task_p['due']; ?>
          </li>
          <li>
            <strong>Person Responsible: </strong> <?= $task_p['assigned_to']; ?>
          </li>
          <li>
            <strong>Status: </strong> <?= $task_p['completed'] ? '&#9989;' : '&#10062;'; ?>
          </li>
    </ul>

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