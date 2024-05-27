<?php
session_start();
if (!isset($_COOKIE['tendangnhap_admin'])) {
    header('Location: login.php');
}
?>

<?php require_once('database/dbhelper.php'); ?>
<?php
header("content-type:text/html; charset=UTF-8");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeMart</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <style>
    .card {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 70px;
            height: 70px;
        }
    </style>
</head>
<!-- bytewebster.com -->
<!-- bytewebster.com -->
<!-- bytewebster.com -->

<body>
    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <!-- Vertical Navbar -->
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
            <div class="container-fluid">
                <!-- Toggler -->
                <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                    <h3 class="text-success"><img src="../images/mart.png" width="40"><span class="text-info">PRIME</span>MART</h3>
                </a>
                <!-- Divider -->
                <hr class="navbar-divider my-18 opacity-20">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <i class="bi bi-speedometer2"></i> Dashboard
                            </a>
                        </li>
                        <hr class="navbar-divider my-3 opacity-20">
                        <li class="nav-item">
                            <a class="nav-link" href="product/index.php">
                                <i class="bi bi-bag-heart"></i>Manage Product
                            </a>
                        </li>
                        <!-- Divider -->
                        <hr class="navbar-divider my-3 opacity-20">
                        <li class="nav-item">
                            <a class="nav-link" href="user/index.php">
                                <i class="bi bi-person-check"></i>Manage Customer
                            </a>
                        </li>
                        <hr class="navbar-divider my-3 opacity-20">
                        <li class="nav-item">
                            <a class="nav-link" href="order/index.php">
                                <i class="bi bi-cash-stack"></i>Manage Order
                            </a>
                        </li>
                        <hr class="navbar-divider my-3 opacity-20">
                        <li class="nav-item">
                            <a class="nav-link" href="category/index.php">
                                <i class="bi bi-bag-heart"></i>Manage Category
                            </a>
                        </li>
                        <hr class="navbar-divider my-3 opacity-20">
                        <li class="nav-item">
                            <a class="nav-link" href="collection/index.php">
                                <i class="bi bi-collection"></i>Manage Brand
                            </a>
                        </li>
                        <!-- Thêm vào phần Navigation của index.php -->
                        <hr class="navbar-divider my-3 opacity-20">
                        <li class="nav-item">
                            <a class="nav-link" href="notifications/index.php">
                                <i class="bi bi-envelope"></i> Manage Notification
                            </a>
                        </li>

                    </ul>
                    <!-- Divider -->
                    <hr class="navbar-divider my-18 opacity-20">

                    <!-- Push content down -->
                    <div class="mt-auto"></div>
                    <!-- User (md) -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">
                                <i class="bi bi-house-heart-fill"></i></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../logout.php" onclick="return confirm('Are you sure you want to logout?')">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <!-- Header -->
            <header class="bg-surface-primary border-bottom pt-6">
                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                <!-- Title -->
                                <h1 class="h2 mb-0 ls-tight">
                                    <img src="../images/mart.png" width="60"> PrimeMart
                                </h1>
                            </div>

                        </div>
                        <!-- Nav -->
                    </div>
                </div>
            </header>
            <!-- Main -->
            <main class="py-6 bg-surface-secondary">
                <div class="container-fluid">
                    <!-- Card stats -->
                    <div class="row g-6 mb-6">
                        <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Product</span>
                                            <span class="h3 font-bold mb-0">
                                                <?php
                                                $sql = "SELECT * FROM `product`";
                                                $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
                                                $result = mysqli_query($conn, $sql);
                                                echo '<span>' . mysqli_num_rows($result) . '</span>';
                                                ?>
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                                <i class="bi bi-credit-card"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">User</span>
                                            <span class="h3 font-bold mb-0">
                                                <?php
                                                $sql = "SELECT * FROM `user`";
                                                $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
                                                $result = mysqli_query($conn, $sql);
                                                echo '<span>' . mysqli_num_rows($result) . '</span>';
                                                ?>
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                                <i class="bi bi-people"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Order</span>
                                            <span class="h3 font-bold mb-0">
                                                <?php
                                                $sql = "SELECT * FROM `order_details`";
                                                $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
                                                $result = mysqli_query($conn, $sql);
                                                echo '<span>' . mysqli_num_rows($result) . '</span>';
                                                ?>
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                                                <i class="bi bi-minecart-loaded"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Category</span>
                                            <span class="h3 font-bold mb-0">
                                                <?php
                                                $sql = "SELECT * FROM `category`";
                                                $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
                                                $result = mysqli_query($conn, $sql);
                                                echo '<span>' . mysqli_num_rows($result) . '</span>';
                                                ?>
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                                                <i class="i bi-clock-history"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Brand</span>
                                            <span class="h3 font-bold mb-0">
                                                <?php
                                                $sql = "SELECT * FROM `collections`";
                                                $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
                                                $result = mysqli_query($conn, $sql);
                                                echo '<span>' . mysqli_num_rows($result) . '</span>';
                                                ?>
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-success text-white text-lg rounded-circle">
                                                <i class="bi bi-tags"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Contact</span>
                                            <span class="h3 font-bold mb-0">
                                                <?php
                                                $sql = "SELECT * FROM `contact`";
                                                $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
                                                $result = mysqli_query($conn, $sql);
                                                echo '<span>' . mysqli_num_rows($result) . '</span>';
                                                ?>
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-danger text-white text-lg rounded-circle">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>