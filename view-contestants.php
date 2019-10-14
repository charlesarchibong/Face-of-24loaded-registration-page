<?php
include_once './backend/ContestantDAO.php';

if (isset($_GET['password']) && $_GET['password'] == 'charles') {
    $contestants = ContestantDAO::getAllContestant();
    ?>

    <!DOCTYPE html>
    <html lang="zxx">

        <head>
            <title>Face Of 24loaded 2019</title>
            <!-- Meta tag Keywords -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="UTF-8" />
            <meta name="keywords"
                  content="faceof24loade, 24loaded.com, peagent, beauty" />
            <!-- //Meta tag Keywords -->
            <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- Style-CSS -->
            <link href="css/font-awesome.css" rel="stylesheet"><!-- font-awesome-icons -->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
            <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css"/>
            <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
            <style>
                .my-font {
                    font: 400 100px/1.5 'Pacifico', Helvetica, sans-serif;
                    color: #2b2b2b;
                    text-shadow: 3px 3px 0px rgba(0,0,0,0.1), 7px 7px 0px rgba(0,0,0,0.05);
                }
                .div-container{
                    background-color: white;
                    border-radius: 20px;
                    padding: 15px 15px 15px 15px;
                    -webkit-box-shadow: 5px 10px 5px 1px rgba(0,0,0,0.75);
                    -moz-box-shadow: 5px 10px 5px 1px rgba(0,0,0,0.75);
                    box-shadow: 5px 10px 5px 1px rgba(0,0,0,0.75);
                }
                td{
                    border:1px solid #000;
                }
                tr td:last-child{
                    width:1%;
                    white-space:nowrap;
                }
                body {
                    height: 100vh;
                }

                body {
                    min-height: 100vh;
                } 
            </style>
        </head>
        <body>
            <section class="signin-form">
                <div class="overlay">
                    <div class="wrapper">
                        <div class="logo text-center top-bottom-gap">
                            <a class="brand-logo my-font" href="home">List of Contestants in Face Of 24Loaded 2019</a>
                        </div>
                        <div class="container div-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Location</th>
                                                    <th>Facebook Id</th>
                                                    <th>Age</th>
                                                    <th>Satus</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($contestants as $contestant) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $contestant->getName(); ?></td>
                                                        <td><?php echo $contestant->getEmail(); ?></td>
                                                        <td><?php echo $contestant->getPhone(); ?></td>
                                                        <td><?php echo $contestant->getLocation(); ?></td>
                                                        <td><?php echo $contestant->getFacebookId(); ?></td>
                                                        <td><?php echo $contestant->getAge(); ?></td>
                                                        <td><?php echo $contestant->getStatus(); ?></td>
                                                        <td>
                                                            <button class="btn btn-danger removeBtn" email="<?php echo $contestant->getEmail(); ?>" type="button">
                                                                <i class="fa fa-trash"> </i> Remove
                                                            </button> 
                                                            <?php
                                                            if ($contestant->getStatus() == 'pending') {
                                                                ?>

                                                                <button class="btn btn-info approveBtn" email="<?php echo $contestant->getEmail(); ?>" type="button">
                                                                    <i class="fa fa-check"> </i> Approve
                                                                </button>
                                                                <?php
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- copyright -->
                    <div class="copyright text-center">
                        <p>© 2019 FaceOf24loaded . All rights reserved | Designed by <a href="https://zealtech.com.ng" target="_blank">Zeal Technologies</a></p>
                    </div>
                    <!-- //copyright --> 
                </div> 
            </section>
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.dataTables.min.js"></script>
            <script src="js/dataTables.bootstrap.min.js"></script>
            <script src="js/sweetalert.min.js"></script>
            <script src="js/sweetalert.init.js"></script>
            <script src="js/charles.js"></script>

        </body>

    </html>
    <?php
} else {
    $contestants = ContestantDAO::getAllApproveContestant();
    ?>
    <!DOCTYPE html>
    <html lang="zxx">

        <head>
            <title>Face Of 24loaded 2019</title>
            <!-- Meta tag Keywords -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="UTF-8" />
            <meta name="keywords"
                  content="faceof24loade, 24loaded.com, peagent, beauty" />
            <!-- //Meta tag Keywords -->
            <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- Style-CSS -->
            <link href="css/font-awesome.css" rel="stylesheet"><!-- font-awesome-icons -->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
            <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css"/>
            <link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
            <style>
                .my-font {
                    font: 400 100px/1.3 'Berkshire Swash', Helvetica, sans-serif;
                    color: #2b2b2b;
                    text-shadow: 1px 1px 0px #ededed, 4px 4px 0px rgba(0,0,0,0.15);
                }
                .div-container{
                    background-color: white;
                    border-radius: 20px;
                    padding: 15px 15px 15px 15px;
                    -webkit-box-shadow: 5px 10px 5px 1px rgba(0,0,0,0.75);
                    -moz-box-shadow: 5px 10px 5px 1px rgba(0,0,0,0.75);
                    box-shadow: 5px 10px 5px 1px rgba(0,0,0,0.75);
                }
                td{
                    border:1px solid #000;
                }
                tr td:last-child{
                    width:1%;
                    white-space:nowrap;
                }html {
                    height: 100%;
                }
                body {
                    min-height: 100%;
                }
            </style>
        </head>
        <body>
            <section class="signin-form">
                <div class="overlay">
                    <div class="wrapper">
                        <div class="logo text-center top-bottom-gap">
                            <a class="brand-logo" href="home">List of Contestants in Face Of 24Loaded 2019</a>
                        </div>
                        <div class="container div-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Sn</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Location</th>
                                                    <th>Facebook Id</th>
                                                    <th>Satus</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $sn = 0;
                                                foreach ($contestants as $contestant) {
                                                    $sn++;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $sn; ?></td>
                                                        <td><?php echo $contestant->getName(); ?></td>
                                                        <td><?php echo $contestant->getEmail(); ?></td>
                                                        <td><?php echo $contestant->getPhone(); ?></td>
                                                        <td><?php echo $contestant->getLocation(); ?></td>
                                                        <td><?php echo $contestant->getFacebookId(); ?></td>
                                                        <td><?php echo $contestant->getStatus(); ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- copyright -->
                    <div class="copyright text-center">
                        <p>© 2019 FaceOf24loaded . All rights reserved | Designed by <a href="https://zealtech.com.ng" target="_blank">Zeal Technologies</a></p>
                    </div>
                    <!-- //copyright --> 
                </div> 
            </section>
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.dataTables.min.js"></script>
            <script src="js/dataTables.bootstrap.min.js"></script>
            <script src="js/sweetalert.min.js"></script>
            <script src="js/sweetalert.init.js"></script>
            <script src="js/charles.js"></script>

        </body>

    </html>
    <?php
}
?>