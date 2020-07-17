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

          <select class="select-author">
            <option value="All">All</option>
          </select>

          <div class="container-albums"></div>

        </div>
      </main>
      <!-- Fine Main  -->
    </div>

    <script id="album-template" type="text/x-handlebars-template">
      <div class="album">
        <img src="{{poster}}" alt="Album cover">
        <h3>{{title}}</h3>
        <span>{{author}}</span><br>
        <span>{{year}}</span>
      </div>
    </script>

    <script id="select-template" type="text/x-handlebars-template">
      <option value="{{author}}">{{author}}</option>
    </script>

    <script type="text/javascript" src="dist/app.js"></script>

  </body>
</html>
