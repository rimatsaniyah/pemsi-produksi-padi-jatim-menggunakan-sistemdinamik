<?php
$koneksi = mysqli_connect("localhost", "root", "", "pemsi_padi_jatim");

$query = "SELECT tahun, skenario, produktivitas, luas_panen, produksi FROM produksi_padi WHERE skenario = 'base_model'";
$result = mysqli_query($koneksi, $query);

$tahun_data = array();
$produksi_data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $tahun_data[] = $row['tahun'];
    $produksi_data[] = $row['produksi'];
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PEMSI Produksi Padi di Jawa Timur</title>
    <script src="js/Chart.js"></script>
    <style type="text/css">
        .container {
            width: 90%; /* Perbesar lebar container */
            margin: 30px auto;
        }
    </style>
  </head>
  <body>

    <div class="container">
        <canvas id="linechart" width="800" height="400"></canvas> <!-- Perbesar lebar dan tinggi canvas -->
    </div>

    <script type="text/javascript">
      var ctx = document.getElementById("linechart").getContext("2d");
      var data = {
        labels: <?php echo json_encode($tahun_data); ?>,
        datasets: [
          {
            label: "Base Model",
            data: <?php echo json_encode($produksi_data); ?>,
            borderColor: 'rgba(0, 0, 128, 0.5)', // Warna Biru Tua (RGBA)
            backgroundColor: 'rgba(0, 0, 128, 0.1)', // Warna Biru Tua dengan Transparansi
            fill: true // Mengisi area di bawah garis
          }
        ]
      };

      var myLineChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
          legend: {
            display: false
          },
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }],
            xAxes: [{
              gridLines: {
                color: "rgba(0, 0, 0, 0)"
              }
            }]
          }
        }
      });
    </script>
  </body>
</html>
