<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"/>
    <script src="../utils/jquery-3.7.1.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Fira+Sans:wght@900&family=Heebo:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css"/>
    <title>Document</title>
</head>

<body>
<nav class="navbar navbar-expand-lg text-white container-nav navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand logo ms-3" href="../home/index.php">APEX</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon navbar-light"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ul-margin">
                <li class="nav-item ms-5">
                    <a class="nav-link" href="../about/about.php">ABOUT</a>
                </li>
                <li class="nav-item dropdown ms-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        SHOP
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">All Product</a></li>
                        <li>
                            <hr class="dropdown-divider"/>
                        </li>
                        <li><a class="dropdown-item" href="#">球桿</a></li>
                        <li>
                            <a class="dropdown-item" href="#">手套</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">護具</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item ms-5">
                    <a class="nav-link" href="#">CUSTOMIZE</a>
                </li>
                <li class="nav-item dropdown ms-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        TEAM
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../operation/operation.php">Puck Moose Hockey俱樂部</a></li>
                        <li>
                            <hr class="dropdown-divider"/>
                        </li>
                        <li>
                            <a class="dropdown-item disabled" href="#">更多驚喜活動籌備中</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ms-5">
                    <a class="nav-link" href="#">CONNECT</a>
                </li>
            </ul>
            <!--search bar start-->
            <form class="d-flex search">
                <input class="form-control search-input" type="search" placeholder="SEARCH" aria-label="Search"/>
                <div>
                    <i class="bi bi-search search-position" type="button"></i>
                </div>
            </form>
            <!--search bar end-->
            <!--cart & login-->

            <a href="../shop/cart.php" type="button" class="shop me-0"><i class="bi bi-cart2 icons"><span class="fs-5">0</span></i></a>
            <a href="" type="button" class="member pt-2 "><i class="bi bi-person icon "></i></a>

        </div>
    </div>
</nav>
<!-- Path: layout/navbar.html -->