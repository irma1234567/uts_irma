<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>FASHION SHOES</title>

      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/sepatu.jpg" class="brand">
                  <div class="user">FASHION SHOES</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=sepatu_data">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Data Sepatu
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=sepatu_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Tambah Data
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=about">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> About
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by <strong>Irma Listiani</strong>
            </footer>
      </main>

</body>

</html>