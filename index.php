<!DOCTYPE html>
<html>
<head>
  <title>PEMSI Produksi Padi di Jawa Timur</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>
<body>
 
<div class="container">
  <h2>Pemodelan dan Simulasi Produksi Padi di Jawa Timur 2012-2030</h2>
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">Skenario 1 : Peningkatan Variabel Pupuk</div>
        <div class="panel-body">
          <iframe src="skenario1.php" width="100%" height="290"></iframe>
        </div>
        <button onclick="window.location.href='skenario1.php'" class="btn btn-primary">Lihat Detail</button>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">Skenario 2 : Penambahan Variabel Teknologi Pertanian</div>
        <div class="panel-body">
          <iframe src="skenario2.php" width="100%" height="290"></iframe>
        </div>
        <button onclick="window.location.href='skenario2.php'" class="btn btn-primary">Lihat Detail</button>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">Skenario 3 : Peningkatan Pupuk & Penambahan Variabel Teknologi Pertanian</div>
        <div class="panel-body">
          <iframe src="skenario3.php" width="100%" height="290"></iframe>
        </div>
        <button onclick="window.location.href='skenario3.php'" class="btn btn-primary">Lihat Detail</button>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">Perbandingan Skenario</div>
        <div class="panel-body">
          <iframe src="allskenario.php" width="100%" height="290"></iframe>
        </div>
        <button onclick="window.location.href='allskenario.php'" class="btn btn-primary">Lihat Detail</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
