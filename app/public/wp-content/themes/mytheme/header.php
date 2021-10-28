

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Awesome Site</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body>
<header>
   <nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand mx-auto" href="#">
      <?php
      if (function_exists('the_custom_logo')) {
        the_custom_logo();
      }
      ?>
    </a>
  </div>
</nav>
</header>