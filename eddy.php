<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Canile PAN EPPAA - Eddy</title>
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
        <h1 class="title">Eddy</h1>
        <img id="bigimage" src="img/eddy1.jpg" height="330" width="550" alt="camera"/>

        <img src="img/eddy1.jpg" height="90" width="120" alt="camera" onclick="changeImage('eddy1')"/>
        <img src="img/eddy2.jpg" height="90" width="120" alt="camera" onclick="changeImage('eddy2')"/>
        <img src="img/eddy3.jpg" height="90" width="120" alt="camera" onclick="changeImage('eddy3')"/>
        <hr>

        <div>Grande cane da pastore. <br/>
          Nato circa nel 2010 &egrave; un giovane e vivace gigante buono.
          Ha dimostrato di non adattarsi bene al cambiamento di un'adozione,
          per questo consigliamo degli incontri conoscitivi.
          Ama le passeggiate e non soffrendo il freddo consigliamo di
          tenerlo in un giardino.
          Adatto a persone dinamiche che per&ograve; abbiano la
          pazienza di rispettare i suoi tempi e siano disposte ad
          effettuare una preadozione.
          In canile dimostra di essere equilibrato, tranquillo, anche
          con altri cani e molto dolce.
        </div>

        <hr>

      <?php include 'footer.php'; ?>

        </div>
  </body>
</html>
