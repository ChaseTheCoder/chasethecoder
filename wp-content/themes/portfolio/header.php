<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Chase The Coder Software Engineer Portfolio">
    <meta name="author" content="Chase Sheaff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Web tutorials">
    <title>chaseTheCoder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/css/main.css"> -->
    <?php wp_head(); ?>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light">
        <h1><a class="navbar-brand" href="<?php echo site_url('/'); ?>">chase<span class="blue-block">TheCoder</span></a></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/blog');?>">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.linkedin.com/in/chasethecoder/" target="_blank">LinkedIn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/ChaseTheCoder" target="_blank">GitHub</a>
            </li>
          </ul>
        </div>
      </nav>