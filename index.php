<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
    <!-- Header Opened -->
    <!-- NavBar started -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <a class="navbar-brand p-0 m-0" href="index.php">
                <img src="img/logo.png" class="img-fluid" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="bg_nav collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item p-3 pb-0 pt-0">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item p-3 pb-0 pt-0">
                        <a class="nav-link text-white" href="about.php">About us</a>
                    </li>
                    <li class="nav-item p-3 pb-0 pt-0">
                        <a class="nav-link text-white" href="activities.php">Activities</a>
                    </li>
                    <li class="nav-item p-3 pb-0 pt-0">
                        <a class="nav-link text-white" href="investor.php">Investor</a>
                    </li>
                    <li class="nav-item p-3 pb-0 pt-0">
                        <a class="nav-link text-white" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Banner Image  -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Slider_1.png" class="d-block w-100 h-100" alt="Hotel View">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="header_1 pb-5">Fulfilling Your Needs</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Slider_2.png" class="d-block w-100" alt="Hotel View">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="header_1 pb-5">Fulfilling Your Needs</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Slider_3.png" class="d-block w-100" alt="Hotel View">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="header_1 pb-5">Fulfilling Your Needs</h2>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Header Closed -->

    <!-- Section Opened -->
    <section>
        <!-- Forsewa Key Activities Section Opened -->
        <div class="container mt-5">
            <h1 class="mb-5">ForSewa Key Activities</h1>
            <div class="card-group">
                <div class="card  text-center">
                    <img src="img/activities_1.png" class="card-img" alt="Import and Export">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <a href="import_and_export.php" class="card-body img-fluid text-white">Import and Export</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="img/activities_2.png" class="card-img" alt="Hardware">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <a href="hardware.php" class="card-body text-white">Hardware</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="img/activities_3.png" class="card-img" alt="Real Estate">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <a href="real_estate.php" class="card-body img-fluid text-white">Real Estate</a>
                    </div>
                </div>                
            </div>
            <div class="card-group p-0 mr-0">
                <div class="card text-center">
                    <img src="img/activities_4.png" class="card-img" alt="Foods and Grains">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <a href="food_and_grain.php" class="card-body img-fluid text-white">Foods and Grains</a>
                    </div>
                </div> 
                <div class="card text-center">
                    <img src="img/activities_5.png" class="card-img" alt="Construction">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <a href="construction.php" class="card-body img-fluid text-white">Construction</a>
                    </div>
                </div> 
                <div class="card text-center">
                    <img src="img/activities_6.png" class="card-img" alt="Machineries">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <a href="machineries.php" class="card-body img-fluid text-white">Machineries</a>
                    </div>
                </div> 
            </div>
            <div class="card-group mt-0">
                <div class="card text-center">
                    <img src="img/activities_7.png" class="card-img" alt="IT services">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <a href="it_services.php" class="card-body img-fluid text-white">IT services</a>
                    </div>
                </div> 
                <div class="card text-center">
                    <img src="img/activities_8.png" class="card-img" alt="Electronics">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <a href="electronics.php" class="card-body img-fluid text-white">Electronics</a>
                    </div>
                </div> 
                <div class="card text-center">
                    <img src="img/activities_9.png" class="card-img" alt="Fashion Hub">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <a href="fashion_hub.php" class="card-body img-fluid text-white">Fashion Hub</a>
                    </div>
                </div> 
            </div>
        </div>
        <!-- Forsewa Key Activities Section Closed -->

        <!-- Image Session Opened -->
        <div class="bg_image mt-5 pt-5">
            <div class="container">
                <h2 class="header_2 text-white">Technical Support is Essential</h2>
            </div>
        </div>
        <!-- Image session Closed -->

    <!-- Recent activities Session Opened -->
    <div class="container mt-5">
        <h1 class="pb-3">About Us</h1>
                <p class="para_align">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et enim sapien. Curabitur tortor elit, 
                    feugiat at dui nec, vestibulum placerat turpis. Donec tempor ipsum sit amet tempor convallis. Morbi 
                    iaculis, nibh sed congue ultrices, ipsum nibh dignissim turpis, id facilisis lacus risus a sapien. 
                    Nulla in sodales mauris. Fusce tempor posuere est, id bibendum urna sodales in. Aliquam ac orci ullamcorper, 
                    volutpat orci non, euismod turpis. Nam a iaculis felis. Etiam risus felis, eleifend non gravida sed, viverra 
                    non lacus. Quisque tristique ipsum auctor laoreet consequat. Fusce varius cursus convallis. Vivamus gravida 
                    erat quis velit fringilla molestie.
                </p>
                <br>
                <p class="para_align">
                    Nam sed risus quis velit mattis tempor. Nunc non libero blandit lacus scelerisque luctus rhoncus at nunc. 
                    Vivamus non tempus lorem. Vestibulum at maximus sem. Donec et est ac arcu tincidunt mollis ut sed neque. 
                    In sollicitudin efficitur felis, in auctor sapien lobortis sit amet. Integer suscipit porta nulla quis 
                    pretium. Vivamus non velit eu leo consequat laoreet. Donec eget augue nisi. Suspendisse posuere pulvinar 
                    iaculis. Quisque pretium pretium sem in sodales. Praesent ultrices metus vitae eros bibendum rhoncus. Mauris 
                    at consequat purus. Nulla orci nulla, pellentesque a convallis non, tempus vitae eros. Praesent sem mauris, 
                    consequat vel ligula ut, volutpat condimentum felis. 
                </p>
                <br>
                <p class="para_align">
                    Nam sed risus quis velit mattis tempor. Nunc non libero blandit lacus scelerisque luctus rhoncus at nunc. 
                    Vivamus non tempus lorem. Vestibulum at maximus sem. Donec et est ac arcu tincidunt mollis ut sed neque. 
                    In sollicitudin efficitur felis, in auctor sapien lobortis sit amet. Integer suscipit porta nulla quis 
                    pretium. Vivamus non velit eu leo consequat laoreet. Donec eget augue nisi. Suspendisse posuere pulvinar 
                    iaculis. Quisque pretium pretium sem in sodales. Praesent ultrices metus vitae eros bibendum rhoncus. Mauris
                    at consequat purus. 
                </p>
    </div>
    <!-- Recent activities Session Closed -->
    </section>
    <!-- Footer Session Opened -->
    <footer class="footer-section mt-5">
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="col-md-3 col-sm-6 col-xm-12 mt-3">
                  <h2 class="text-white">About us</h2>
                  <ul style="list-style-type:none;">
                      <li><a class="footer_link" href="#">About ForSewa</a></li>
                      <li><a class="footer_link" href="package.php">Financial Reports</a></li>
                  </ul>
                  <div class="footer-social-icon mt-2">
                      <a href="https://www.facebook.com/Naava-Resort-Retreat-100547551927011/"><i class="fab fa-facebook-f facebook-bg"></i></a>
                      <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                      <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xm-12 mt-3">
                  <h2 class="text-white">Key Activities</h2>
                  <ul style="list-style-type:none;">
                    <li><a class="footer_link" href="import_and_export.php">Import and Export</a></li>
                    <li><a class="footer_link" href="hardware.php">Hardware</a></li>
                    <li><a class="footer_link" href="real_estate.php">Real Estate</a></li>
                    <li><a class="footer_link" href="food_and_grain.php">Foods and Grains</a></li>
                    <li><a class="footer_link" href="#">Construction</a></li>
                    <li><a class="footer_link" href="machineries.php">Machineries</a></li>
                    <li><a class="footer_link" href="#">IT services</a></li>
                    <li><a class="footer_link" href="#">Electronics</a></li>
                    <li><a class="footer_link" href="fashion_hub.php">Fashion Hub</a></li>
                  </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xm-12 mt-3">
                <h2 class="text-white">Investor</h2>
                  <ul style="list-style-type: none;">
                      <li><a class="footer_link" href="#">Press Release</a></li>
                      <li><a class="footer_link" href="about.php">Company Announcement</a></li>
                      <li><a class="footer_link" href="contact.php">Notice to shareholder</a></li>
                      <li><a class="footer_link" href="#">Meeting</a></li>
                  </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xm-12 mt-3">
                  <h2 class="text-white">Contact</h2>
                  <div class="footer-social-icon">
                      <img src="img/logo.png" alt="Logo">
                      <span class="text-white">Copyright © 2021 ForSewa Pvt. Ltd </span>
                      <span class="text-white">All rights reserved  Powered by ForSewa</span>
                      <span class="text-white">Privacy Policy</span>
                      <span class="text-white">Code of Conduct & Business Ethics</span>
                      <span class="text-white">Terms, Conditions and Disclaimers</span>
                  </div>
              </div>
          </div>
        </div>
    </footer>
    <!-- Footer Session Closed -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->

    <!--  jQuery 1.7+  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="jquery-1.9.1.min.js"></script>


    <!-- include scripts -->
    <script>
    $(document).ready(function() {
      var nav = document.querySelector("nav");

      window.addEventListener("scroll", function() {
          if (window.pageYOffset > 100) {
              nav.classList.add("bg-dark", "shadow");
          } else {
              nav.classList.remove("bg-dark", "shadow");
          }
      });

      $(".navbar-toggler").click(function() {
          $(".bg_nav").toggleClass("bg-menu");
      });
    })
  </script>
</body>

</html>