<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Dashboard | Admin</title>
</head>

<body>

    <?php include("../include/header.php") ?>

    <div class="main-content">

        <?php include("../include/upContent.php") ?>

        <main>
            <h2 class="dash-title"> <i class="fa fa-dashboard"> </i> Dashboard</h2>

            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="fa fa-gear"></span>
                        <div class="">
                            <h5>Nombre spécialistes</h5>
                            <h4>56</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">Voir tout</a>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="fa fa-gear"></span>
                        <div class="">
                            <h5>Nombre SPEC</h5>
                            <h4>96</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">Voir tout</a>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="fa fa-gear"></span>
                        <div class="">
                            <h5>Nombre Over</h5>
                            <h4>36</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">Voir tout</a>
                    </div>
                </div>
            </div>

            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Recent Activity</h3>

                        <table>
                            <thead>
                                <tr>
                                    <th>Noms</th>
                                    <th>Adresse</th>
                                    <th>Spécialité</th>
                                    <th>Images</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Stéphane KIkoni</td>
                                    <td>Kin de la science 5</td>
                                    <td>Dév full stack</td>
                                    <td class="td-team">
                                        <div class="img-1"></div>
                                        <div class="img-2"></div>
                                        <div class="img-3"></div>
                                    </td>
                                    <td>
                                        <sapn class="badge badge-success">
                                            Success
                                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cash Zeus</td>
                                    <td>Kin 71, Kkt</td>
                                    <td> Software Engineer</td>
                                    <td class="td-team">
                                        <div class="img-1"></div>
                                        <div class="img-2"></div>
                                        <div class="img-3"></div>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning">
                                            Pending
                                            </sapn>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dosa Zeus</td>
                                    <td>Lukula 195, Kkt</td>
                                    <td> Dév Mobile App</td>
                                    <td class="td-team">
                                        <div class="img-1"></div>
                                        <div class="img-2"></div>
                                        <div class="img-3"></div>
                                    </td>
                                    <td>
                                        <span class="badge badge-success">
                                            Success
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alain Kikoni</td>
                                    <td>Kin 71, Kkt</td>
                                    <td> Prof. Hist</td>
                                    <td class="td-team">
                                        <div class="img-1"></div>
                                        <div class="img-2"></div>
                                        <div class="img-3"></div>
                                    </td>
                                    <td>
                                        <sapn class="badge badge-warning">
                                            Pending
                                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mboma Espeditte</td>
                                    <td>Kin 71, Kkt</td>
                                    <td> Prof. Fr</td>
                                    <td class="td-team">
                                        <div class="img-1"></div>
                                        <div class="img-2"></div>
                                        <div class="img-3"></div>
                                    </td>
                                    <td>
                                        <span class="badge badge-success">
                                            Success
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="summary">
                        <div class="summary-card">
                            <div class="summary-single">
                                <span class="fa fa-info"></span>
                                <div>
                                    <h5>132</h5>
                                    <small>Number of staff</small>
                                </div>
                            </div>

                            <div class="summary-single">
                                <span class="fa fa-phone"></span>
                                <div>
                                    <h5>232</h5>
                                    <small>Number of leave</small>
                                </div>
                            </div>

                            <div class="summary-single">
                                <span class="fa fa-spinner"></span>
                                <div>
                                    <h5>192</h5>
                                    <small>Number of cash</small>
                                </div>
                            </div>
                        </div>

                        <div class="bday-card">
                            <div class="bday-flex">
                                <div class="bday-img"> </div>
                                <div class="bday-info">
                                    <h5>Stéphane Kikoni </h5>
                                    <small>Bday Today</small>
                                </div>
                            </div>

                            <div class="text-center">
                                <button>
                                    <span class="fa fa-check"></span>
                                    Obtenir
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </main>
    </div>

</body>

</html>