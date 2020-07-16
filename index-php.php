<?php include __DIR__ . '/database.php'; ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>

    <!-- Inizio Wrapper  -->
    <div class="wrapper">

      <!-- Inizio Header  -->
      <header>
        <div class="container">
          <div class="logo">
            <img src="img/logo.png" alt="Logo Spotify">
          </div>
        </div>
      </header>
      <!-- Fine Header  -->

      <!-- Inizio Main  -->
      <main>
        <div class="container">

          <!-- Album -->
          <?php foreach($database as $album) { ?>
            <div class="album">
              <img src="<?php echo $album['poster']; ?>" alt="Album cover">
              <h3><?php echo $album['title']; ?></h3>
              <span><?php echo $album['author']; ?></span><br>
              <span><?php echo $album['year']; ?></span>
            </div>
          <?php } ?>
          <!-- Fine Album -->

        </div>
      </main>
      <!-- Fine Main  -->
    </div>

  </body>
</html>
