<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Canile PAN EPPAA - Balu</title>
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
        <h1 class="title">Balu</h1>
        <img id="bigimage" src="img/balu1.jpg" height="330" width="550" alt="camera"/>

        <img src="img/balu1.jpg" height="90" width="120" alt="camera" onclick="changeImage('balu1')"/>
        <img src="img/balu2.jpg" height="90" width="120" alt="camera" onclick="changeImage('balu2')"/>
        <img src="img/balu3.jpg" height="90" width="120" alt="camera" onclick="changeImage('balu3')"/>
        <hr>

        <div>Grande labrador<br/>
          Buono ed affettuoso, ma ossessivamente possessivo con
          oggetti e cibo. Specialmente con il suo pupazzetto di Pluto.
          Non pi&ugrave; giovanissimo (nael nel 2005) sta meglio al
          calduccio di una casa.
          Non adatto a bambini ed anziani anche se molto bravo in passeggiata.
          Necessita sicuramente di incontri conoscitivi perch&egrave;
          non &egrave; particolarmente disposto a lasciare il canile.
        </div>

        <hr>

      <?php include 'footer.php'; ?>

        </div>
  </body>
</html>
