<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Corona news">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-21</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="favicon-32x32.png" type="image/x-icon">
    <!-- LINKS -->
    <?php
    include('style.php');
    include("cont.php");
    ?>
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
    <!-- DISTRICT WISE CASE -->
    <div class="container">
        <h2 class="ind mt-5">District Wise Cases</h2>
        <div class="redline"></div>
        <div class="form-floating mb-3 mt-3 col-md-5 col-sm-12">
            <input type="text" id="floatingInput" class="form-control" placeholder="search the district" style="border: 2px solid crimson;">
            <label for="floatingInput" style=" font-family: 'Teko', sans-serif;font-size:20px;">search the district</label>
        </div>
    </div>
    <!-- TABLE -->
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered border-danger table-striped">
                <thead class="table-danger">
                    <tr>
                        <th>S.NO</th>
                        <th>DISTRICT</th>
                        <th>CONFIRMED</th>
                        <th>ACTIVE</th>
                        <th>RECOVER</th>
                        <th>DEATH</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <th>1</th>
                        <td>ARIYALUR</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>CHENGALPET</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>CHENNAI</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>COIMBATORE</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td>CUDDALORE</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>6</th>
                        <td>DHARMAPURI</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>7</th>
                        <td>DINDIGUL</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>8</th>
                        <td>ERODE</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>9</th>
                        <td>KALLAKURICHI</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>10</th>
                        <td>KANCHEEPURAM</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>11</th>
                        <td>KARUR</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>12</th>
                        <td>KRISHNAGIRI</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>13</th>
                        <td>MADURAI</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>14</th>
                        <td>NAGAPATTINAM</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>15</th>
                        <td>KANYAKUMARI</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>16</th>
                        <td>NAMAKKAL</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>17</th>
                        <td>PERAMBALUR</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>18</th>
                        <td>PUDUKKOTTAI</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>19</th>
                        <td>RAMANATHAPURAM</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>20</th>
                        <td>RANIPET</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>21</th>
                        <td>SALEM</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>22</th>
                        <td>SIVAGANGAI</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>23</th>
                        <td>TENKASI</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>24</th>
                        <td>THANJAVUR</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>25</th>
                        <td>THENI</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>26</th>
                        <td>THIRUVALLUR</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>27</th>
                        <td>THIRUVARUR</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>28</th>
                        <td>TUTICORIN</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>29</th>
                        <td>TRICHIRAPPALLI</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>30</th>
                        <td>THIRUNELVELI</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>31</th>
                        <td>TIRUPATHUR</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>32</th>
                        <td>TIRUPPUR</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>33</th>
                        <td>TIRUVANNAMALAI</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>34</th>
                        <td>NILGIRIS</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>35</th>
                        <td>VELLORE</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>36</th>
                        <td>VILUPPURAM</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                    <tr>
                        <th>37</th>
                        <td>VIRUDHUNAGAR</td>
                        <th>545</th>
                        <th>864</th>
                        <th>56</th>
                        <th>647</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- FOOTER -->
    <footer class="foot col-md-12 col-sm-12 ">
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