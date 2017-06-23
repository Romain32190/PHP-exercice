  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Globalvariable</title>
    </head>
    <body>
    <header>
      <?php
      echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

      $browser = get_browser(null, true);
      print_r($browser);

      ?>
    </header>

  <main>
      <?php

      echo  $_SERVER['REMOTE_ADDR'];

      ?>

      <?php
      echo $_SERVER['SERVER_NAME'];
      ?>
  </main>

    </body>
  </html>
