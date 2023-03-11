<?php
$bootstrap_css = BASEURL . '/css/bootstrap.min.css';
$bootstrap_js = BASEURL . '/js/bootstrap.min.js';
$popper = BASEURL . '/js/popper.min.js';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $data['title']; ?>
  </title>
  <link rel="stylesheet" href="<?= $bootstrap_css ?>" />
  <script src="<?= $popper ?>"></script>
  <script src="<?= $bootstrap_js ?>"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL . '/about'; ?>">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">