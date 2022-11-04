<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>F-BOX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

  <body>
    
        <!-- nav pertama -->
        <ul class="nav bg-dark">
            <li class="nav-item"> 
              <a class="nav-link active text-light" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled text-light">Disabled</a>
            </li>
        </ul>
        <!-- penutup Nav Pertama -->

        <!-- nav kedua -->
        <nav class="navbar bg-dark">
            <form class="container text-center w-50" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </nav>
        <!-- Penutup Nav Kedua -->

        <!-- Gambar Iklan 1 -->
        <div class="text-center"; style="height: 500px; background-color: bisque;">
            <div class="row">
              <div class="col">
                Gambar Iklan 1
              </div>
            </div>
        </div>
        <!-- Penutup gambar Iklan 1 -->

        <!-- Gambar Iklan 2 -->
        <div class="mx-3 my-4 text-center"; style="height: 100px; background-color:azure;">
            <div class="row">
                <div class="col">
                  Gambar Iklan 2
                </div>
            </div>
        </div>
        <!-- Penutup gambar Iklan 2 -->

        <div class="mx-4 my-4 text-center">
            <div class="row">
              <div class="col-8"; style="background-color:aqua ; height: 300px;">
                Column
              </div>
              <div class="col-4"; style="background-color: blanchedalmond; height: 300px;">
                Column
              </div>
            </div>
          </div>
          
          <div class="mx-4 my-4 text-center">
            <div class="row">
              <div class="col-4"; style="background-color:aqua ; height: 300px;">
                Column
              </div>
              <div class="col-4"; style="background-color: blanchedalmond; height: 300px;">
                Column
              </div>
              <div class="col-4"; style="background-color:aquamarine; height: 300px;">
                Column
              </div>
            </div>
          </div>

         <!-- Gambar Iklan 3 -->
         <div class="mx-3 my-4 text-center"; style="height: 300px; background-color:antiquewhite;">
            <div class="row">
                <div class="col">
                  Gambar Iklan 2
                </div>
            </div>
        </div>
        <!-- Penutup gambar Iklan 3 -->

        <!-- Latihan PHP 1 -->
        <table border="2" cellspacing="0" cellpadding="5">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NIM</th>
              <th>Total Nilai</th>
            </tr>
          </thead>

          <tbody> 
            <?php
            $nama1 = "Ahmad";
            $nama2 = "Badrun";
            $nama3 = "Diki";
            $nim1 = "198203";
            $nim2 = "210921";
            $nim3 = "220088";
            $nilaiuts1 = 70;
            $nilaiuas1 = 70;
            $nilaiuts2 = 80;
            $nilaiuas2 = 80;
            $nilaiuts3 = 90;
            $nilaiuas3 = 90;
            ?>
                <tr>
                    <td>1</td>
                    <td> <?php echo $nama1 ?></td>
                    <td><?php echo $nim1?></td>
                    <td> <?php print $nilaiuts1 + $nilaiuts1 ?></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td> <?php echo $nama2 ?></td>
                    <td><?php echo $nim2?></td>
                    <td> <?php print $nilaiuts2 + $nilaiuts2 ?></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td> <?php echo $nama3 ?></td>
                    <td><?php echo $nim3?></td>
                    <td> <?php print $nilaiuts3 + $nilaiuts3 ?></td>
                </tr>
          </tbody>
        </table>
        <!-- Penutup tabel latihan PHP -->

         <!-- Gambar Iklan Penutup -->
         <div class="my-4 text-center"; style="height: 100px; background-color:rgb(99, 99, 99);">
            <div class="row">
                <div class="col text-light">
                  Gambar Iklan 2
                </div>
            </div>
        </div>
        <!-- Penutup gambar Iklan Penutup -->

        <!-- Navbar penutup (manual) -->
        <div style="">

        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>






  </html>



