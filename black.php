<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Canile PAN EPPAA - Black</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
      padding-top: 80px;
      padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom-style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    function changeImage(image)	{
        document.getElementById('bigimage').src = 'img/'+image+'.jpg';
    }
    </script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
      <div class="container">
        <?php include 'header.php'; ?>
        <h1 class="title">Black</h1>
        <img id="bigimage" src="img/black1.jpg" height="330" width="550" alt="camera"/>

        <img src="img/black1.jpg" height="90" width="120" alt="camera" onclick="changeImage('black1')"/>
        <img src="img/black2.jpg" height="90" width="120" alt="camera" onclick="changeImage('black2')"/>
        <img src="img/black3.jpg" height="90" width="120" alt="camera" onclick="changeImage('black3')"/>
        <hr>

        <div>Black, nero<br/>
          Molto docile ed affettuoso ma deve essere trattato con
          rispetto e responsabilit&agrave;. E' decisamente un cane da
          appartamento, non adatto a bambini ed anziani.
          Necessita di incontri conoscitivi.
          Molto bravo al guinzaglio, &egrave; nato circa nel 2006.
        </div>

        <hr>

      <?php include 'footer.php'; ?>

        </div>
  </body>
</html>
