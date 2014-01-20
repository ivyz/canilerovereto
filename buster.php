<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Canile PAN EPPAA - Rico</title>
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
        <h1 class="title">Buster</h1>
        <img id="bigimage" src="img/buster1.jpg" height="330" width="550" alt="camera"/>

        <img src="img/buster1.jpg" height="90" width="120" alt="camera" onclick="changeImage('buster1')"/>
        <img src="img/buster2.jpg" height="90" width="120" alt="camera" onclick="changeImage('buster2')"/>
        <img src="img/buster3.jpg" height="90" width="120" alt="camera" onclick="changeImage('buster3')"/>
        <hr>

        <div>Spelndido volpino italiano nato nel 2008. Non ha avuto una vita
          semplice fino ad ora, i precedenti proprietari non l'hanno proprio
          compreso.<br>
          Ha bisogno di una guida di cui potersi fidare! E' interessatissimo
          ai giochi di attivazione mentale ed è questa la chiave per conquistarlo!
          E' molto sveglio ed intelligente, non ama l'eccessiva manipolazione.
        </div>

        <hr>

      <?php include 'footer.php'; ?>

        </div>
  </body>
</html>
