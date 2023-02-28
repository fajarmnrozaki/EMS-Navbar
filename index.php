<!--   
Company : ITB de Labo
Software: Energy Monitoring System
Developer : Fajar Muhammad Noor Rozaqi and Raihan Rafif
Last updated : 2023-02-23
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Energy Monitoring System</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- stylesheet -->
    <link rel="icon" href="electricity_logo.png">
    <link rel="stylesheet" href="./assets/navbar.css">
    <link rel="stylesheet" href="./assets/style.css">

    <!-- Boxicons CSS -->
    <!-- <link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'> -->
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    
    <!-- Web fonts -->
    
    <!-- Font icons -->  

    <!-- Navbar icons -->
    <!-- <script src="https://kit.fontawesome.com/1eef294ba4.js" crossorigin="anonymous"></script> -->
    
    <!-- IMPORT SCRIPT SECTION -->
    <!-- chartjs -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="assets/js/js.js"></script>
    <script src="http://code.jquery.com/jquery-3.6.1.js"></script> -->

    <!-- pagination -->
    <!-- <link rel="stylesheet" href="./dist/pagination/pagination.css" type="text/css">
    <link rel="stylesheet" href="assets/pagination/css/paginate.css">
    <link rel="stylesheet" href="assets/pagination/css/ligne.css"> -->

    <!-- Navbar Dark -->
    <!-- <link rel="stylesheet" href="./assets/navbardark.css"> -->
</head>

<body>

    <!-- load navbar -->
    <?php
    include('./components/navbar/navbar.php');
    ?>

    <!-- load pages -->
    <section class="home">
        <?php
        include('./pages/energy-status.php');
        include('./pages/database.php');
        include('./pages/summary.php');
        include('./pages/control.php');
        ?>
    </section>

    <!-- Javascripts -->
    <!-- <script src="http://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/pagination/js/paginate.js"></script> -->
    <!-- <script src="./assets/pagination/pagination.js"></script> -->
    
</body>

</html>