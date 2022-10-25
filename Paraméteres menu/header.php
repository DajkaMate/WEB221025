<!DOCTYPE html>
<html lang="hu">

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP menu</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/bootstrap.bundle.js"></script>
</head>

<body class="bg-light">
<div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold" href="index.php">Logo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="?p=page1.php">Page 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?p=page2.php">Page 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?p=page3.php">Page 3</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown">Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="?p=page4.php">Page 4</a></li>
                                    <li><a class="dropdown-item" href="?p=page5.php">Page 5</a></li>
                                    <li><a class="dropdown-item" href="?p=page6.php">Page 6</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>