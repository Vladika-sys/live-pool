<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sladkko-ejka</title>
    <link href="images/icon.png" rel="icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!--link href="css/bootstrap.min.css" rel="stylesheet" /-->
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="css/styles.css" rel="stylesheet" />

  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
      </symbol>
      <symbol id="facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </symbol>
      <symbol id="instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
      </symbol>
      <symbol id="twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
      </symbol>
    </svg>
    <!--
        https://getbootstrap.com/docs/5.2/getting-started/introduction/
        https://bootswatch.com/ -- темы Bootstrap

    -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
              <img src="images/icon.png" alt="Logo" width="30" height="26" class="d-inline-block align-text-top">
              &nbsp;&nbsp;<span class="text-dark myLogo">Sladkoejka</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#products">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contacts">Contacts</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-warning" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container-fluid bg-light">
        <div class="text-end">
          <button type="button" class="btn btn-outline-success m-2">Login</button>
          <button type="button" class="btn btn-success">Sign-up</button>
        </div>
      </div>
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner container">
          <div class="carousel-item active">
            <img src="images/carusel/img1.jpg" class="d-block w-100" alt="Img1">
          </div>
          <div class="carousel-item">
            <img src="images/carusel/img2.jpg" class="d-block w-100" alt="Img2">
          </div>
          <div class="carousel-item">
            <img src="images/carusel/img3.jpg" class="d-block w-100" alt="Img3">
          </div>
          <div class="carousel-item">
            <img src="images/carusel/img4.jpg" class="d-block w-100" alt="Img4">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <hr id="about" class="my-3 container pt-4" />
      <div class="container my-4">
        <h2 class="text-center">About us</h2>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
      </div>
      <hr id="products" class="my-3 container pt-4" />
    <div class="container my-4">
        <h2 class="text-center">Our products</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
            $connection = mysqli_connect("localhost", "root", "", "cakes");
            if ($connection->connect_error) {
                die("Conectiune esuata: " . $connection->connect_error);
            }
            $sql = "SELECT id, cakeName, cakeDescription, cakePhoto FROM cakes";
            $stmt = mysqli_prepare($connection, $sql);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <img src="images/carusel/' . $row["cakePhoto"] . '" class="card-img-top" alt="Img1">
                        <div class="card-body">
                            <h5 class="card-title">' . $row["cakeName"] . $row["id"] . '</h5>
                            <p class="card-text">' . $row["cakeDescription"] . '</p>
                        </div>
                    </div>
                </div>';
            }
            mysqli_close($connection);
            ?>
        </div>
    </div>

    </div>
    <div class="container my-4">
        <div class="">
            <form id="vote-form" action="vote.php">
                <div class="form-group">
                    <h3 class="text-center">Care este cake-ul tau preferat?</h3><br>
                    <?php
                    $sqlk = "SELECT * FROM `cakes`";
                    $connection = mysqli_connect("localhost", "root", "", "cakes");
                    if ($connection->connect_error) {
                        die("Conectiune esuata: " . $connection->connect_error);
                    }
                    $result = mysqli_query($connection, $sqlk);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<div class="form-check form-check-inline mt-2 text-center">
                    <input class="form-check-input" type="radio" name="cake"id="'.$row['id'].'" value="' . $row["id"] . '">
                    <label class="form-check-label" for="'.$row["id"].'">' . $row["cakeName"].$row["id"]. '</label>
                </div>';
                    }
                    mysqli_close($connection);
                    ?>

                </div>
                <button type="submit" class="btn btn-primary mt-2">Vote</button>
            </form>
        </div>

        <div class="chart-container" style="position: relative; height:40vh; width:80vw">
            <canvas id="chart"></canvas>
        </div>
    </div>
    <hr id="contacts" class="my-3 container pt-4" />
    <div class="container p-3">
        <h2 class="text-center">Contacts</h2>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Your name</label>
                        <input type="text" class="form-control" id="inputName">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Your message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 imgContact">
                <img src="images/contact.jpg" alt="Contact" class="px-4" />
            </div>
        </div>
        <hr />
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 myMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2719.114384639849!2d28.882429414948646!3d47.037986235077646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c8a22ff8091%3A0xbf35be0c65d14ccf!2sDulcinella!5e0!3m2!1sen!2s!4v1671476013531!5m2!1sen!2s" title="Map"></iframe>
        </div>
    </div>
    <div class="container-fluid bg-primary">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <img src="images/icon.png" alt="Logo" width="30" height="26" class="d-inline-block align-text-top">
          </a>
          <span class="text-muted">&copy; <span id="year"></span> Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted" title="icon" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
          <li class="ms-3"><a class="text-muted" title="icon" href="https://www.instagram.com/natalia_plesca_dragancea/"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
          <li class="ms-3"><a class="text-muted" title="icon" href="https://www.facebook.com/eUSMinformatica/"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  <script src="js/script.js">
  </script>
</html>
