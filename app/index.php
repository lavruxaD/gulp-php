<?

function Top($p1)
{
  echo '
      <!DOCTYPE html>
      <html lang="en">
      <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>' . $p1 . '</title>
      <link rel="stylesheet" href="css/style.min.css" />
      <script defer src="js/main.min.js"></script>
      </head>
      <body>
      <div class="wrapper">
      ';
};

function Bottom()
{
  echo '</div></body></html>';
};
