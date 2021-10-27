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
                    <p>info@forsewa.com</p>
                    <p>9801338277</p>
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
    
</body>

</html>