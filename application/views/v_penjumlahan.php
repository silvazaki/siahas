<!DOCTYPE html>
<html>
<head>
	<title>belajar bootstrap</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=base_url("assets/css/bootstrap.css")?>">
</head>
<body>
    <div class="container">

    <fieldset>
      <legend>Penjumlahan - Codeigniter</legend>
      <?php  
        if (isset($angka1) and isset($angka2) and isset($hasil)) {
          echo $angka1."+".$angka2." = ".$hasil;
        }
      ?>
    </fieldset>

    </div>
    <footer id="footer" class="py-5 bg-dark ">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Silva 2017</p>
      </div>
      <!-- /.container -->
    </footer>
</body>

  <script src="<?=base_url("assets/js/jquery.min.js")?>"></script>
  <script src="<?=base_url("assets/js/bootstrap.js")?>"></script>
</html>