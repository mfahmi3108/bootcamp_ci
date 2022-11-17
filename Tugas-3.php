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
              <th>Nilai</th>
              <th>Predikat</th>
              <th>Status</th>
            </tr>
          </thead>

          <tbody> 
            <?php
            $nama1 = "Ahmad";
            $nama2 = "Ikram";
            $nama3 = "Rudi";
            $nama4 = "Andi";
            $nama5 = "Aldi";
            $nama6 = "Badrun";
            $nama7 = "Cerry";
            $nama8 = "Elis";
            $nama9 = "Fira";
            $nama10 = "Haikal";
            $nilai1 = 90;
            $nilai2 = 50;
            $nilai3 = 70;
            $nilai4 = 77;
            $nilai5 = 90;
            $nilai6 = 88;
            $nilai7 = 54;
            $nilai8 = 23;
            $nilai9 = 0;
            $nilai10 = 98;
           
            ?>
                <tr>
                    <td>1</td>
                    <td> <?php echo $nama1 ?></td>
                    <td><?php echo $nilai1?></td>
                    <td> <?php 
                    if ($nilai1 >= 80) {$grade = "A";} elseif($nilai1 >= 70) {$grade = "B";} elseif($nilai1 >=50){$grade= "C";} elseif($nilai1 >=40){$grade="D";} elseif($nilai1<40){$grade="E";}
                    print $grade ?></td>
                    <td> <?php
                    if ($nilai1 >=70){$status = "Lulus";} elseif($nilai1 <70) {$status = "Tidak Lulus";}
                    print $status ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td> <?php echo $nama2 ?></td>
                    <td><?php echo $nilai2?></td>
                    <td> <?php 
                    if ($nilai2 >= 80) {$grade = "A";} elseif($nilai2 >= 70) {$grade = "B";} elseif($nilai2 >=50){$grade= "C";} elseif($nilai2 >=40){$grade="D";} elseif($nilai2<40){$grade="E";}
                    print $grade ?></td>
                    <td> <?php
                    if ($nilai2 >=70){$status = "Lulus";} elseif($nilai2 <70) {$status = "Tidak Lulus";}
                    print $status ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td> <?php echo $nama3 ?></td>
                    <td><?php echo $nilai3?></td>
                    <td> <?php 
                    if ($nilai3 >= 80) {$grade = "A";} elseif($nilai3 >= 70) {$grade = "B";} elseif($nilai3 >=50){$grade= "C";} elseif($nilai3 >=40){$grade="D";} elseif($nilai3<40){$grade="E";}
                    print $grade ?></td>
                    <td> <?php
                    if ($nilai3 >=70){$status = "Lulus";} elseif($nilai3 <70) {$status = "Tidak Lulus";}
                    print $status ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td> <?php echo $nama4 ?></td>
                    <td><?php echo $nilai4?></td>
                    <td> <?php 
                    if ($nilai4 >= 80) {$grade = "A";} elseif($nilai4 >= 70) {$grade = "B";} elseif($nilai4 >=50){$grade= "C";} elseif($nilai4 >=40){$grade="D";} elseif($nilai4<40){$grade="E";}
                    print $grade ?></td>
                    <td> <?php
                    if ($nilai4 >=70){$status = "Lulus";} elseif($nilai4 <70) {$status = "Tidak Lulus";}
                    print $status ?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td> <?php echo $nama5 ?></td>
                    <td><?php echo $nilai5?></td>
                    <td> <?php 
                    if ($nilai5 >= 80) {$grade = "A";} elseif($nilai5 >= 70) {$grade = "B";} elseif($nilai5 >=50){$grade= "C";} elseif($nilai5 >=40){$grade="D";} elseif($nilai5<40){$grade="E";}
                    print $grade ?></td>
                    <td> <?php
                    if ($nilai5 >=70){$status = "Lulus";} elseif($nilai5 <70) {$status = "Tidak Lulus";}
                    print $status ?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td> <?php echo $nama6 ?></td>
                    <td><?php echo $nilai6 ?></td>
                    <td> <?php 
                    if ($nilai6 >= 80) {$grade = "A";} elseif($nilai6 >= 70) {$grade = "B";} elseif($nilai6 >=50){$grade= "C";} elseif($nilai6 >=40){$grade="D";} elseif($nilai6<40){$grade="E";}
                    print $grade ?></td>
                    <td> <?php
                    if ($nilai6 >=70){$status = "Lulus";} elseif($nilai6 <70) {$status = "Tidak Lulus";}
                    print $status ?></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td> <?php echo $nama7 ?></td>
                    <td><?php echo $nilai7?></td>
                    <td> <?php 
                    if ($nilai7 >= 80) {$grade = "A";} elseif($nilai7 >= 70) {$grade = "B";} elseif($nilai7 >=50){$grade= "C";} elseif($nilai7 >=40){$grade="D";} elseif($nilai7<40){$grade="E";}
                    print $grade ?></td>
                    <td> <?php
                    if ($nilai7 >=70){$status = "Lulus";} elseif($nilai7 <70) {$status = "Tidak Lulus";}
                    print $status ?></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td> <?php echo $nama8 ?></td>
                    <td><?php echo $nilai8?></td>
                    <td> <?php 
                    if ($nilai8 >= 80) {$grade = "A";} elseif($nilai8 >= 70) {$grade = "B";} elseif($nilai8 >=50){$grade= "C";} elseif($nilai8 >=40){$grade="D";} elseif($nilai8<40){$grade="E";}
                    print $grade ?></td>
                    <td> <?php
                    if ($nilai8 >=70){$status = "Lulus";} elseif($nilai8 <70) {$status = "Tidak Lulus";}
                    print $status ?></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td> <?php echo $nama9 ?></td>
                    <td><?php echo $nilai9?></td>
                    <td> <?php 
                    if ($nilai9 >= 80) {$grade = "A";} elseif($nilai9 >= 70) {$grade = "B";} elseif($nilai9 >=50){$grade= "C";} elseif($nilai9 >=40){$grade="D";} elseif($nilai9<40){$grade="E";}
                    print $grade ?></td>
                    <td> <?php
                    if ($nilai9 >=70){$status = "Lulus";} elseif($nilai9 <70) {$status = "Tidak Lulus";}
                    print $status ?></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td> <?php echo $nama10 ?></td>
                    <td><?php echo $nilai10?></td>
                    <td> <?php 
                    if ($nilai10 >= 80) {$grade = "A";} elseif($nilai10 >= 70) {$grade = "B";} elseif($nilai10 >=50){$grade= "C";} elseif($nilai10 >=40){$grade="D";} elseif($nilai10<40){$grade="E";}
                    print $grade ?></td>
                    <td> <?php
                    if ($nilai10 >=70){$status = "Lulus";} elseif($nilai10 <70) {$status = "Tidak Lulus";}
                    print $status ?></td>
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
