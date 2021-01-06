<!DOCTYPE html>
<html>
<head>
    <title>PWEB CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .a {
            text-align: center; font-family: Arial; margin-bottom: 40px; font-weight: bold; font-size: 50px;
        }

        .b {
            text-align: center; font-family: Arial; margin-bottom: 70px; font-weight: bold; font-size: 50px;
        }

        .c {
            background-color: rgb(253, 242, 251);
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body class="c">

    <!--Navbar-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">

        <!--logo-->
        <a class="navbar-brand" href="#">
          <img src="/img/logo.png" alt="logo" style="width:40px;">
        </a>

        <!--Links-->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/pegawai">Data Pegawai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mutasi">Mutasi Pegawai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.malasngoding.com/">malasngoding</a>
          </li>
        </ul>
      </nav>

    <div class="container" style="margin-top: 100px">


    @yield('judulhalaman')
    <!--yield untuk meletakkan konten yang berbeda-->
    <!--ini yield untuk judul tiap halaman-->

	<br/>
    <br/>

    @yield('content')
    <!--ini yield untuk judul tiap isi tiap halaman-->

    </div>

    <!--Footer-->
    <div class="jumbotron text-center" style="margin-bottom:0; background-color: rgb(253, 242, 251); margin-top: 50px;">
        <p style="font-size: medium; color: rgb(228, 60, 191); font-weight: bold;">by salsaputrii <br> 2020</p>
    </div>
</body>
</html>
