<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Corona news">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-21</title>
    <!-- LINKS -->
    <?php
    include('style.php');
    include('cont.php')
    ?>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="favicon-32x32.png" type="image/x-icon">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<body>
    <!-- NAVBAR SECTION -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:white;">
                <img src="logo.png" alt="" width="60" height="60" class="d-inline-block align-text-center">
                Covid-21
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: white;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0 " style="margin: auto;">
                    <li>
                        <hr class="dropdown-divider" style="color: white;">
                    </li>
                    <li class="nav-item" style="padding-left: 100px;">
                        <a class="nav-link" href="index.php" style="color:white;">India Today cases</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" style="color: white;">
                    </li>
                    <li class="nav-item" style="padding-left: 100px;">
                        <a class="nav-link" href="index2.php" style="color:white;">Tamil Nadu Today cases</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" style="color: white;">
                    </li>
                    <li class="nav-item" style="padding-left: 100px;">
                        <a class="nav-link" href="index3.php" style="color:white;">District Wise cases</a>
                    </li>
            </div>
        </div>
    </nav>
    <!-- INDIA TOTAL CASE -->
    <div class="container">
        <h2 class="ind mt-5">TamilNadu Today Cases</h2>
        <div class="redline"></div>
        <div class="row">
            <div class="col-md-3 col-sm-12 mt-5">
                <div class="num">
                    <h3 id="num">
                        <?php

                        $sql = "SELECT `confirmed`, `active`, `recover`, `death` FROM `tamilnadu` WHERE 1";

                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row["confirmed"];
                            }
                        }
                        ?>
                    </h3>
                </div>
                <h3 class="dd text-danger">Confirmed</h3>
                <div class="d-flex justify-content-center">
                    <div class="spinner-grow text-danger d-flex justified-content-center" role="status" style="width: 15px; height: 15px; ">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 mt-5">
                <div class="num">
                    <h3 id="numb">
                        <?php
                        $sql = "SELECT `confirmed`, `active`, `recover`, `death` FROM `tamilnadu` WHERE 1";

                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row["active"];
                            }
                        }
                        ?>
                    </h3>
                </div>
                <h3 class="text-primary dd">Active</h3>
                <div class="d-flex justify-content-center">
                    <div class="spinner-grow text-primary d-flex justified-content-center" role="status" style="width: 15px; height: 15px; ">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 mt-5 ">
                <div class="num">
                    <h3 id="nume">
                        <?php
                        $sql = "SELECT `confirmed`, `active`, `recover`, `death` FROM `tamilnadu` WHERE 1";

                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row["recover"];
                            }
                        }
                        ?>
                    </h3>
                </div>
                <h3 class="dd text-success">Recover</h3>
                <div class="d-flex justify-content-center">
                    <div class="spinner-grow text-success" role="status" style="width: 15px; height: 15px; ">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 mt-5">
                <div class="num">
                    <h3 id="numr">
                        <?php
                        $sql = "SELECT `confirmed`, `active`, `recover`, `death` FROM `tamilnadu` WHERE 1";

                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row["death"];
                            }
                        }
                        ?>
                    </h3>
                </div>
                <h3 class="dd text-secondary">Death</h3>
                <div class="d-flex justify-content-center">
                    <div class="spinner-grow text-secondary" role="status" style="width: 15px; height: 15px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer class="foot col-md-12 col-sm-12 mt-5">
        <div class="wear">
            <p class="mask">WEAR MASK! STAY HOME! STAY SAFE!</p>
        </div>
        <hr style="color: white;">
        <span>Desing and Created by MNStech&nbsp;<a href="#">&copy;COVID-21</a></span>
    </footer>
</body>
<!-- JS -->
<?php
include('script.php')
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</html>