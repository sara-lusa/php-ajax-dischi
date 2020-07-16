<?php include __DIR__ . '/database.php'; ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>

    <div class="wrapper">
      <header>
        <div class="container">
          <div class="logo">
            <img src="img/logo.png" alt="Logo Spotify">
          </div>
        </div>
      </header>

      <main>
        <div class="container">
          <?php foreach($database as $album) { ?>
            <div class="album">
              <img src="<?php echo $album['poster']; ?>" alt="Album cover">
              <h3><?php echo $album['title']; ?></h3>
              <span><?php echo $album['author']; ?></span><br>
              <span><?php echo $album['year']; ?></span>
            </div>
          <?php } ?>
        </div>
      </main>
    </div>

  </body>
</html>
