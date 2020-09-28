<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
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
      <section id="about" class="about">
        <div class="container">
          <div class="row mt-4">
            <div class="col text-center">
              <h2>Profil Penulis</h2>
            </div>
          </div>
    
          <div class="row justify-content-center mt-4">
            <div class="col-md-5 text-center">
              <p>Hai, perkenalkan namaku Elizabeth Angeline Andriana tapi biasa dipanggil Anggi. Aku lahir dan besar di kota Surabaya pada tanggal 17 Maret 2003. 6 bulan yang lalu aku resmi berumur 17 tahun dan sudah mempunyai KTP yeayyyy!! Aku bersekolah di SMK Negeri 1 Surabaya dan duduk di kelas XII jurusan Rekayasa Perangkat Lunak atau lebih sering disingkat RPL. Awalnya aku sama sekali tidak ada minat buat masuk jurusan RPL, tapi orang tuaku menyarankan aku untuk sekolah di SMK Negeri 1 saja. Akhirnya aku menurunkan egoku lalu menuruti orang tuaku. Dan disinilah aku berakhir menjadi siswi SMK Negeri 1 Surabaya. Tak terasa sudah 3 tahun aku berada di SMK Negeri 1 ini hehe.  </p>
            </div>
            <div class="col-md-5 text-center">
              <p>Kukira jika aku terbiasa dengan lingkungan yang selalu belajar tentang IT aku pasti bisa menguasai semua materinya. Tapi ternyata aku salah hehe… keahlianku, minatku, bahkan bakatku bukanlah di bidang IT. Jujur aku sedih karena merasa salah jurusan, tapi aku selalu menguatkan diriku bahwa salah jurusan bukan akhir dari segalanya! Aku masih bisa belajar sesuai passionku di perguruan tinggi nanti. Ohya, tahun 2021 aku berniat ikut SBMPTN karena cita citaku untuk berkuliah sangat besar. Dan karna biaya kuliah sangat mahal maka aku mencoba untuk ikut SBMPTN supaya tidak memberatkan orang tuaku. Doakan supaya aku bisa menjadi maba ITS jurusan Teknik Industri 2021 yaaaa… amin… </p>
            </div>
          </div>
        </div>
      </section>
</body>
</html>