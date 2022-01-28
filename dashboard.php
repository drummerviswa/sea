<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
    header("location:" . "/");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Sea</title>
    <!-- Required meta tags -->
    <link rel="icon" style="border-radius: 30px;" href="./images/logo.jpeg" type="image/icon type">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <!-- navbar -->
    <?php include_once("templates/header.php") ?>
    <div style="background:#bdc3c7; height:100%">
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mx-auto" style="width: 18rem;border-radius: 15px;">
                        <img src="images/logo.jpeg" class="card-img-top" alt="Far the world">
                        <div class="card-body">
                            <h5 class="card-title">Profile</h5>
                            <p class="card-text">Viswanathan</p>
                            <p class="card-text">Admin</p>
                            <p class="card-text">Last Login : XXXX: XX-XX-XX</p>
                            <a href="#" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>
                <div style="background:linear-gradient(#232526,#414345);border-radius:20px;" class="col-md-8">
                    <div class="jumbotron">
                        <br><br>
                        <h1 style="color:aliceblue">Soundari Ethirajan Assosiates</h1>
                        <br><br><br><br><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <div style="padding-left: 120px;" class="container">
                                    <iframe src="https://free.timeanddate.com/clock/i85t8eqm/n553/szw110/szh110/hbw0/hfc000/cf100/hgr0/fav0/fiv0/mqcfff/mql15/mqw4/mqd94/mhcfff/mhl15/mhw4/mhd94/mmv0/hhcbbb/hmcddd/hsceee" frameborder="0" width="110" height="110"></iframe>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card" style="width: 18rem;border-radius:15px">
                                    <div class="card-body">
                                        <h5 class="card-title">New Orders</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Make Invoices</h6>
                                        <a href="./new_order.php" class="btn btn-primary">New Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;border-radius: 15px;">
                        <div class="card-body">
                            <h5 class="card-title">Categories</h5>
                            <h6 class="card-subtitle mb-2 text-muted">add new categories</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#form_category" class="btn btn-primary">Add</a>
                            <a href="manage_categories.php" class="btn btn-primary">Manage</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;border-radius: 15px;">
                        <div class="card-body">
                            <h5 class="card-title">Customer</h5>
                            <h6 class="card-subtitle mb-2 text-muted">add new customers</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#form_customer" class="btn btn-primary">Add</a>
                            <a href="manage_customer.php" class="btn btn-primary">Manage</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;border-radius: 15px;">
                        <div class="card-body">
                            <h5 class="card-title">Products</h5>
                            <h6 class="card-subtitle mb-2 text-muted">add new products</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#form_products" class="btn btn-primary">Add</a>
                            <a href="manage_product.php" class="btn btn-primary">Manage</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php include_once("./templates/category.php")
            ?>
            <?php include_once("./templates/customer.php") ?>
            <?php include_once("./templates/products.php")
            ?>
            <div style="height:55px">

            </div>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="js/main.js"></script>
</body>
<footer style="text-align:center">
    <p>©SEA</p>
</footer>

</html>