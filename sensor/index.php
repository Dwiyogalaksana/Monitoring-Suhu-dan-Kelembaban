<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Monitoring suhu dan kelembaban ESP32</title>

    <script type="text/javascript" src="jquery/jquery.min.js"></script>

    <!-- Load suhu dan kelembaban secara realtime -->
    <script type="text/javascript">
      $(document).ready(function() {

        setInterval(function() {
          $("#periksasuhu").load("periksasuhu.php");
        }, 1000 );

        setInterval(function() {
          $("#periksakelembaban").load("periksakelembaban.php");
        }, 1000 );

      });

    </script>


  </head>
  <body>
    <div class="container" style="text-align: center; margin-top: 150px">

      <h2>Monitoring Suhu dan Kelembaban</h2>

      <div style="display: flex; padding-top: 30px">
        <!-- Menampilakan Nilai Suhu -->
        <div class="card text-center" style="width: 50%">
          <div class="card-header" style="font-size: 25px; font-weight: bold; background-color: red;" >
            Suhu
          </div>
          <div class="card-body">
            <h1> <span id="periksasuhu"> 0 </span> </h1>
          </div>
        </div>
        <!-- Batas Akhir Menampilkan Suhu -->


        <!-- Menampilkan kelembaban  -->
         <div class="card text-center"style="width: 50%">
          <div class="card-header" style="font-size: 25px; font-weight: bold; background-color: blue; color: white;" >
            Kelembaban
          </div>
          <div class="card-body">
            <h1> <span id="periksakelembaban"> 0 </span> </h1>
          </div>
        </div>
        <!-- Batas Akhir Menampilkan kelembaban -->
      </div>


    </div>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
