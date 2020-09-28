<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, K-pop!</title>
  </head>
  <body class="mt-5">

    <nav class="navbar navbar-expand-lg navbar-transparent">
      <div class="container">
        <a class="navbar-brand" href="#">Website K-pop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link {{ Request::path() === '/home' ? 'bg-primary' : ''}}" href="/home">Home</a>
            <a class="nav-link {{ Request::path() === '/about' ? 'bg-primary' : ''}}" href="/about">About</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <img src="img/bts.jpg" width="25%" class="rounded-circle img-thumbnail">
        <h1 class="display-4">BTS</h1>
        <p class="lead"> Boyband Asal Korea Selatan yang Tengah Naik Daun </p>
      </div>
    </div>

    <section id="about" class="about">
    <div class="container">
      <div class="row mt-4">
        <div class="col text-center">
          <h2>Profil BTS</h2>
        </div>
      </div>

      <div class="row justify-content-center mb-5 mt-4">
        <div class="col-md-5 text-center">
          <p>BTS (Hangul: 방탄소년단; RR: Bangtan Sonyeondan), juga dikenal sebagai Bangtan Boys, adalah sebuah boy band beranggotakan tujuh orang asal Korea Selatan yang dibentuk oleh Big Hit Entertainment. Nama tersebut kemudian berakronim menjadi Beyond the Scene pada bulan Juli 2017. Pada tanggal 12 Juni 2013, mereka membawakan lagu berjudul "No More Dream" dari album awal mereka 2 Cool 4 Skool yang mendukung debut mereka pada tanggal 13 Juni 2013. Mereka memenangkan penghargaan New Artist of the Year atas lagu "No More Dream", termasuk di Melon Music Awards dan Golden Disc Awards 2013 dan Seoul Music Awards 2014. Mereka semakin menarik perhatian dengan album Dark & Wild (2014), The Most Beautiful Moment in Life, Part 2 (2015) dan The Most Beautiful Moment in Life: Young Forever (2016), dengan dua album terakhir ini memasuki Billboard 200 AS. The Most Beautiful Moment in Life: Young Forever memenangkan penghargaan Album of the Year di Melon Music Awards 2016. Album penuh kedua mereka, Wings (2016), berada di nomor #26 di Billboard 200, yang membuat album dengan posisi tertinggi atas album K-pop. Di Korea Selatan, Wings menjadi album terlaris di sejarah Gaon Album Chart pada waktu itu. </p>
        </div>
        <div class="col-md-5 text-center">
          <p>Album ini terjual lebih dari 1.5 juta kopi, membuat album ini menjadi "album pertama dengan penjualan jutaan" BTS, dan mereka memenangkan Artist of the Year di Mnet Asian Music Awards 2016. Rilis mereka selanjutnya, Love Yourself: Her (2017), debut di nomor #7 di Billboard 200, peringkat tertinggi oleh artis Asia dalam sejarah. Grup ini juga debut di Billboard Hot 100 untuk pertama kali dengan lagu berjudul sama seperti album, "DNA", yang masuk peringkat ke #85 dan berada di nomor #67. Lagu lain dari album, "Mic Drop", diremix oleh Steve Aoki dengan fitur bersama Desiigner dan berada di nomor #28 di Billboard Hot 100. Kedua lagu ini disertifikasi Emas oleh Recording Industry Association of America, kali pertama oleh grup Korea dan artis Korea kedua secara keseluruhan setelah PSY. Album ini terjual lebih dari 1.2 juta eksemplar di Gaon Album Chart Korea Selatan pada bulan pertama, mendapat penjualan album tertinggi bulanan di sejarah tangga album ini dan tertinggi di tangga album Korea manapun dalam 16 tahun, kedua dari album milik g.o.d berjudul Chapter 4 pada tahun 2001. BTS memenangkan Mnet Asian Music Award sebagai Artist of the Year untuk tahun kedua berturut-turut pada tahun 2017. Album ketiga penuh mereka, Love Yourself: Tear (2018), debut di nomor #1 di Billboard 200, membuat mereka menjadi satu-satunya artis K-Pop yang meraih ini sejauh ini.</p>
        </div>
      </div>
    </div>
  </section>
















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>