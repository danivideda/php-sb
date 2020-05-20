<?php require 'partials/head.php'; ?>

<header>
  <h1>Hello World!</h1>
</header> 

<br>

<ul>
  <?php foreach($users as $user) : ?>
  <li><?= $user->name; ?></li>
  <?php endforeach; ?>
</ul>

<br>
<form method="POST" action="/names">
  <label for="name">Submit your Name</label>
  <br>
  <input name="name"></input>
  <br>
  <button type="submit">Submit</button>
</form>
   
<?php require 'partials/footer.php'; ?>