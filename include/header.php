<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/header.css">
    <title>nav</title>
</head>

<body>

    <input type="checkbox" id="sidebar-toggle">

    <div class='sidebar'>
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="fa fa-plus"></span>
                <span>Loc_Dép.</span>
            </h3>
            <label for="sidebar-toggle" class="fa fa-car fa-2x" style="margin-top: 14px"></label>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../views/dashboardAdmin.php">
                        <span class="fa fa-home"></span>
                        <span>Accueil</span>
                    </a>
                </li>
                <li>
                    <a href="../views/specialistes.php">
                        <span class="fa fa-users"></span>
                        <span>Spécialistes</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fa fa-book"></span>
                        <span>Garages</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fa fa-folder"></span>
                        <span>Leavels</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fa fa-chevron-right"></span>
                        <span>Projets</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fa fa-user-o"></span>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fa fa-gear"></span>
                        <span>Configuration</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</body>

</html>