<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>ADMIN</title>
	<!-- Bootstrap Styles-->
    <link href="../css/admin/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../css/admin/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="../css/admin/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong style = "margin-left: 40px;">BIG SHOES</strong></a>
            </div>
           
    <!-- Nav bar-->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> C??i ?????t</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="dang-xuat.php"><i class="fa fa-sign-out fa-fw"></i> ????ng xu???t</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>

        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li>
                        <a href="thong-ke-list.php"><i class="fa fa-dashboard"></i>TRANG CH???</a>
                    </li>
                    <li>
                        <a href="loai-hang-list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>LO???I H??NG</a>
                    </li>
                    <li>
                        <a href="hang-hoa-list.php"><i class="fa fa-qrcode"></i>H??NG H??A</a>
                    </li>
                    
                    <li>
                        <a href="khach-hang-list.php"><i class="fa fa-user"></i>KH??CH H??NG</a>
                    </li>
                    <li>
                        <a href="binh-luan-list.php"><i class="fa fa-comment-o" aria-hidden="true"></i>B??NH LU???N</a>
                    </li>
                    <li>
                        <a href="hoa-don-list.php"><i class="fa fa-edit"></i>????N H??NG</a>
                    </li>       
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QU???N L?? LO???I H??NG</h1>
                            <p>??i???n ?????y ????? th??ng tin ????? ti???n h??nh th??m lo???i h??ng m???i :</p>

                            <!-- /. CODE X??? L?? PHP  -->
                            <?php
                                require_once ('loai-hang.php');

                                extract($_REQUEST);
                                if(array_key_exists("btn_insert",$_REQUEST)){
                                    loai_hang_insert($ten_loai);
                                    unset($ma_loai,$ten_loai);

                                   
                                }
                            ?>
                            <!-- /. CONTENT  -->
                            <form action="" method="POST">
                                <div class="form-group">
                                <label>M?? lo???i:</label>
                                <input
                                    class="form-control"
                                    placeholder="Auto number ..."
                                    name="ma_loai"
                                    readonly
                                />
                                </div>
                                <div class="form-group">
                                <label for="">T??n lo???i:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Nh???p t??n lo???i ..."
                                    name="ten_loai"
                                />
                                </div>
                                <div class="form-group form-check"></div>
                            <button type="submit" name="btn_insert" class="btn btn-danger">Th??m m???i</button>
                            </form>
                        </div>
		</div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../css/admin/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../css/admin/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../css/admin/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="../css/admin/js/custom-scripts.js"></script>
    
   
</body>
</html>
