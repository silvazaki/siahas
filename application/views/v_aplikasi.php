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
      <form name="input" action="<?=base_url('aplikasi/kalkulator')?>" method="POST">
        <input type="text" name="angka1" title="Angka 1"></br>
        <input type="text" name="angka2" title="Angka 2"><br>
        <select name="pilih-hitung">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
        </select>
        <button type="submit" name="hitung" value="Hitung" class="btn btn-primary">Hitung</button>
        <button type="reset" name="tombolreset" value="reset" class="btn">Reset</button>
      </form>
      <?php  
        if (isset($angka1) and isset($angka2)) {
          echo "<br>".$angka1." ".$pilih_hitung." ".$angka2." = ".$hasil_hitung;
        }

      ?>
    </fieldset>

    </div>
    
</body>

  <script src="<?=base_url("assets/js/jquery.min.js")?>"></script>
  <script src="<?=base_url("assets/js/bootstrap.js")?>"></script>
</html>