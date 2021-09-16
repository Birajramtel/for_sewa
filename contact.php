<!doctype html>
<html lang="en">

<head>
    <?php include('./include/head.php') ?>    
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Header Opened -->
    <header>
        <?php include('./include/header.php') ?>
    </header>  
    <!-- Section Opened -->
    <section>
         <!-- Contact us Section Opened -->
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <p>For further information, please write-in to:</p> 
                    <p>Forsewa</p>
                    <p>Baneshwor, Kathmandu, Nepal</p>
                    <p>forsewa@gmail.com</p>
                    <p>+977 980 123 1234</p>
                </div>
                <div class="col-md-6">
                    <form>
                       <div class="form-group input-group-lg mb-2">
                            <input type="text" class="form-control input-lg" id="inputlg" placeholder="Name">
                        </div>
                        <div class="form-group input-group-lg mb-2">
                            <input type="email" class="form-control input-lg" id="inputlg" placeholder="Email">
                        </div>
                        <div class="form-group input-group-lg mb-2">
                            <input type="text" class="form-control input-lg" id="inputlg" placeholder="Subject">
                        </div>
                        <div class="form-group input-group-lg mb-2">
                            <textarea class="form-control" rows="5" id="Description" placeholder="Description"></textarea>
                        </div>
                        <button style="font-size:18px" class="btn btn-colour-1 btn-sm col-12"> Send <i class="fa fa-send-o"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Contact us Section Closed -->

        <!-- Image Session Opened -->
        <div class="bg_image mt-5 pt-5">
            <div class="container">
                <h2 class="header_2 text-white">Technical Support is Essential</h2>
            </div>
        </div>
        <!-- Image session Closed -->
    </section>
    <!-- Footer Session Opened -->
    <?php include('./include/footer.php') ?>
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
    <?php include('./include/scripts.php') ?>
</body>

</html>