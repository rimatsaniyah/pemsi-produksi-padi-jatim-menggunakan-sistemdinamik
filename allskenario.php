<?php
$koneksi = mysqli_connect("localhost", "root", "", "pemsi_padi_jatim");

$query_base = "SELECT tahun, skenario, produktivitas, luas_panen, produksi FROM produksi_padi WHERE skenario = 'base_model'";
$query_skenario1 = "SELECT tahun, skenario, produktivitas, luas_panen, produksi FROM produksi_padi WHERE skenario = 'skenario1'";
$query_skenario2 = "SELECT tahun, skenario, produktivitas, luas_panen, produksi FROM produksi_padi WHERE skenario = 'skenario2'";
$query_skenario3 = "SELECT tahun, skenario, produktivitas, luas_panen, produksi FROM produksi_padi WHERE skenario = 'skenario3'";
$query_skenario4 = "SELECT tahun, skenario, produktivitas, luas_panen, produksi FROM produksi_padi WHERE skenario = 'skenario4'";

$result_base = mysqli_query($koneksi, $query_base);
$result_skenario1 = mysqli_query($koneksi, $query_skenario1);
$result_skenario2 = mysqli_query($koneksi, $query_skenario2);
$result_skenario3 = mysqli_query($koneksi, $query_skenario3);
$result_skenario4 = mysqli_query($koneksi, $query_skenario4);

$tahun_data = array();
$produksi_base_data = array();
$produksi_skenario1_data = array();
$produksi_skenario2_data = array();
$produksi_skenario3_data = array();
$produksi_skenario4_data = array();

while ($row_base = mysqli_fetch_assoc($result_base)) {
    $tahun_data[] = $row_base['tahun'];
    $produksi_base_data[] = $row_base['produksi'];
}

while ($row_skenario1 = mysqli_fetch_assoc($result_skenario1)) {
    $produksi_skenario1_data[] = $row_skenario1['produksi'];
}

while ($row_skenario2 = mysqli_fetch_assoc($result_skenario2)) {
    $produksi_skenario2_data[] = $row_skenario2['produksi'];
}

while ($row_skenario3 = mysqli_fetch_assoc($result_skenario3)) {
    $produksi_skenario3_data[] = $row_skenario3['produksi'];
}

while ($row_skenario4 = mysqli_fetch_assoc($result_skenario4)) {
    $produksi_skenario4_data[] = $row_skenario4['produksi'];
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
            data: <?php echo json_encode($produksi_base_data); ?>,
            borderColor: 'rgba(0, 0, 128, 0.8)', // Warna Biru (RGBA)
            backgroundColor: 'rgba(0, 0, 128, 0.1)', // Warna Biru dengan Transparansi
            fill: true // Mengisi area di bawah garis
          },
          {
            label: "Skenario 1",
            data: <?php echo json_encode($produksi_skenario1_data); ?>,
            borderColor: 'rgba(255, 165, 0, 0.5)', // Warna Orange Muda (RGBA)
            backgroundColor: 'rgba(255, 165, 0, 0.1)', // Warna Orange Muda dengan Transparansi
            fill: true // Mengisi area di bawah garis
          },
          {
            label: "Skenario 2",
            data: <?php echo json_encode($produksi_skenario2_data); ?>,
            borderColor: 'rgba(128, 0, 128, 0.5)', // Warna Ungu (RGBA)
            backgroundColor: 'rgba(128, 0, 128, 0.1)', // Warna Ungu dengan Transparansi
            fill: true // Mengisi area di bawah garis
          },
          {
            label: "Skenario 3",
            data: <?php echo json_encode($produksi_skenario3_data); ?>,
            borderColor: 'rgba(255, 105, 180, 0.5)', // Warna Pink (RGBA)
            backgroundColor: 'rgba(255, 105, 180, 0.1)', // Warna Pink dengan Transparansi
            fill: true // Mengisi area di bawah garis
          }
        ]
      };

      var myLineChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
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
