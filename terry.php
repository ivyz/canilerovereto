<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Canile PAN EPPAA - Terry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
      padding-top: 40px;
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
	<h1 class="title">Terry</h1>
	<img id="bigimage" src="img/terry1.jpg" height="330" width="550" alt="camera"/>

	<img src="img/terry1.jpg" height="90" width="120" alt="camera" onclick="changeImage('terry1')"/>
	<img src="img/terry2.jpg" height="90" width="120" alt="camera" onclick="changeImage('terry2')"/>
	<img src="img/terry3.jpg" height="90" width="120" alt="camera" onclick="changeImage('terry3')"/>
	<hr>

	<div>Labrador miele<br/>
	  Nato nel 2011 quindi giovanissimo, molto dolce ed affettuoso
	  come tutti i labrador. E' adatto a persone dinamiche
	  perch&egrave; ama le lunghe passeggiate e ha bisogno di
	  sfogare la sua esuberanza.
	  Ho solo bisogno di essere educato a non tirare durante le
	  passeggiate, ma questo &egrave; dovuto in parte alla poca
	  posibilit&agrave; di muoversi in canile.
	  Bisognoso di coccole.
	  Pu&ograve; essere tenuto sia in casa che in giardino.
	</div>

	<hr>
	
      <?php include 'footer.php'; ?>

	</div>
  </body>
</html>
