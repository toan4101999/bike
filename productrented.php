<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Khang Thi's Product</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php require_once 'functions.php'; 
    require_once 'addproduct.php'; 
     require_once 'config.php';
    $cart=(isset($_SESSION['cart']))? $_SESSION['cart']:[] ; $SoLuong=0; foreach ($cart as $key => $value): $SoLuong++;
endforeach;
    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-motorcycle"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Khang Thi Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Bảng điều khiển</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tổng quan
            </div>

            <!-- Nav Item - Store Info Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInfo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-user"></i>
                    <span>Thông tin cửa hàng</span>
                </a>
                <div id="collapseInfo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="storeinfo.html">Thông tin</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-file-signature"></i>
                    <span>Quản lý hợp đồng</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="contract.html">Thông tin hợp đồng</a>
                        <a class="collapse-item" href="contract.html">Chưa thanh toán</a>
                        <a class="collapse-item" href="contract.html">Đã thanh toán</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-motorcycle"></i>
                    <span>Quản lý xe</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="product.php">Tất cả xe</a>
                        <a class="collapse-item" href="productready.php">Xe sẵn sàng</a>
                        <a class="collapse-item active" href="productrented.php">Xe đang thuê</a>
                        <a class="collapse-item" href="productdeadline.php">Xe tới hạn trả</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Term -->
            <li class="nav-item">
                <a class="nav-link" href="term.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Điều khoản dịch vụ</span></a>
            </li>

            <!-- Nav Item - Wallet -->
            <li class="nav-item">
                <a class="nav-link" href="property.html">
                    <i class="fas fa-wallet"></i>
                    <span>Tài sản cửa hàng</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="revenue.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Thống kê doanh thu</span></a>
            </li>

            <!-- Nav Item - Support -->
            <li class="nav-item" style="margin-left: 3px;">
                <a class="nav-link" href="support.html">
                    <i class="fas fa-info-circle"></i>
                    <span>Hỗ trợ</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="cartProducts" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"><?php echo $SoLuong?></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                style="width: 28rem !important;" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Thông tin giỏ hàng
                                </h6>
                                <?php $TongTien=0;foreach ($cart as $key => $value) : ?>
                                <?php $TienTungXe=0;?>
                                <div class="dropdown-item d-flex align-items-center"
                                    style="justify-content: space-between;">

                                    <div class="col-3">
                                        <img style="height:60px; width:80px" src="<?php echo $value['HinhAnh'] ?>"
                                            alt="">
                                    </div>
                                    <div class="col-3">
                                        <div><?php echo $value['TenXe']?></div>
                                    </div>
                                    <div style="text-align: right" class="col-3">
                                        <?php 
                                        $NgayBatDau = new DateTime($value['NgayBatDau']);
                                        $NgayKetThuc = new DateTime($value['NgayKetThuc']);
                                        $interval = $NgayBatDau->diff($NgayKetThuc);
                                        if($interval->m !==0){
                                            $TienTungXe=$TienTungXe+($interval->m * $value['GiaTheoThang']+$interval->d* $value['GiaTheoNgay']+$interval->h*$value['GiaTheoGio']);
                                            echo '
                                            <span class="font-weight-bold small text-gray-700">
                                              '.$interval->m.' Tháng '.$interval->d.' Ngày '.$interval->h.' Giờ <br>'. $TienTungXe.'đ</br></span>
                                             </div>';
                                            $TongTien=$TongTien+($interval->m * $value['GiaTheoThang']+$interval->d* $value['GiaTheoNgay']+$interval->h*$value['GiaTheoGio']);
                                        }
                                        elseif($interval->d !==0){
                                            $TienTungXe=$TienTungXe+($interval->d * $value['GiaTheoNgay']+$interval->h*$value['GiaTheoGio']);
                                            echo '
                                            <span class="font-weight-bold small text-gray-700">
                                              '.$interval->d.'Ngày  '.$interval->h.' Giờ <br>'. $TienTungXe.'đ</br></span>
                                            </div>';
                                            $TongTien=$TongTien+($interval->d * $value['GiaTheoNgay']+$interval->h*$value['GiaTheoGio']);
                                            
                                        }else if ($interval->h !==0){
                                            $TienTungXe=$TienTungXe+($interval->d * $value['GiaTheoNgay']+$interval->h*$value['GiaTheoGio']);
                                           echo'
                                            <span class="font-weight-bold small text-gray-700">
                                              '.$interval->h.' Giờ <br>'. $TienTungXe.'đ</br></span>
                                             </div>';
                                             $TongTien=$TongTien+($interval->d * $value['GiaTheoNgay']+$interval->h*$value['GiaTheoGio']);
                                            }?>

                                        <a href="Cart.php?MaXe=<?php echo $value['MaXe'] ?>&action=delete" title=""
                                            class="btn btn-danger">Xóa</a>


                                    </div>

                                    <?php endforeach  ?>


                                    <div class="dropdown-item d-flex align-items-center">


                                        <div class="col-4">
                                            <h5 class="text-gray-700">Tổng </h5>


                                        </div>
                                        <div class="col-4" style="text-align: center">
                                            <h5 class="text-gray-700"> x<?php echo $SoLuong ?> </h5>
                                        </div>

                                        <div class="col-4" style="text-align: right">
                                            <h5 class="text-gray-700"><?php echo $TongTien ?>đ</h5>

                                        </div>


                                    </div>
                                    <div style="text-align:right;margin:10px 25px 10px 10px"> <a href="#"
                                            class="btn btn-primary">
                                            detail

                                        </a></div>





                                </div>
                        </li>

                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo htmlspecialchars($_SESSION["email"]); ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Thông tin
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cài đặt
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Nhật ký hoạt động
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đăng xuất
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <?php $result1 =$link->query("SELECT count(chitietxe.Maxe) as Number  FROM (chitietxe inner join loaixe on chitietxe.MaLoaiXe = loaixe.MaLoaiXe) WHERE TrangThai='Đang Được Thuê'")?>
                    <?php ($row1=$result1->fetch_assoc())?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Danh Sách Xe Sẵn Sàng /
                        <?php echo'<span style=" color: yellow">'.$row1['Number'].'</span>'?> Xe
                    </h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 card-product">
                            <div class="sub-card-product">
                                <h6 class="m-0 font-weight-bold text-primary">Loại Xe</h6>
                                <select name="Loaixe" id="Loaixe" class="card-select-product">
                                    <option value="0">Tất cả</option>

                                </select>
                            </div>

                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#exampleModalLong">Thêm xe </button>

                            <form action="addproduct.php" method="post" enctype="multipart/form-data" class="modal fade"
                                id="exampleModalLong" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Thêm xe</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body_item">
                                                <label for="">Chọn hình ảnh xe<sup>*</sup></label>
                                                <input class="card-body_input" type="file" id="HinhAnh" name="HinhAnh"
                                                    multiple require>
                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Tên xe<sup>*</sup></label>
                                                <input class="card-body_input" type="text" id="TenXe" name="TenXe"
                                                    required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Biển số xe<sup>*</sup></label>
                                                <input class="card-body_input" type="text" id="BienSoXe" name="BienSoXe"
                                                    required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Khung xe<sup>*</sup></label>
                                                <input class="card-body_input" type="text" id="KhungXe" name="KhungXe"
                                                    required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Màu sắc<sup>*</sup></label>
                                                <input class="card-body_input" type="text" id="MauSac" name="MauSac"
                                                    required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Năm đăng ký<sup>*</sup></label>
                                                <input class="card-body_input" type="text" id="NamDangKy"
                                                    name="NamDangKy" required>

                                            </div>
                                            <?php 
                                        
                                        $sql = "select * from loaixe"; 
                                        $result=$link->query($sql);
                                        ?>
                                            <div class="card-body_item ">
                                                <label for="">Loại xe<sup>*</sup></label>
                                                <select name="TenLoaiXe" id="TenLoaiXe">
                                                    <?php 
                                                 foreach($result as $tl){
                                                echo " <option value=".$tl['MaLoaiXe'].">".$tl['TenLoaiXe']."</option>";
                                            }
                                            ?>

                                                </select>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Tình trạng xe<sup>*</sup></label>
                                                <select onchange="ColorFunction(this.value)" id="TrangThai"
                                                    name="TrangThai" style="color: green;">
                                                    <option value="Sẵn Sàng" style="color: green">Sẵn
                                                        Sàng
                                                    </option>
                                                    <option value="Đang Được Thuê" style="color: yellow">Đang Được
                                                        Thuê</option>
                                                    <option value="Tới Hạn Trả" style="color: red">Tới Hạn Trả

                                                    </option>
                                                </select>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Giá Thuê Theo Giờ<sup>*</sup></label>
                                                <input class="card-body_input" type="number" id="GiaThueTheoGio"
                                                    name="GiaThueTheoGio" min="0" required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Giá Thuê Theo Ngày<sup>*</sup></label>
                                                <input class="card-body_input" type="number" id="GiaThueTheoNgay"
                                                    name="GiaThueTheoNgay" min="0" required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Giá Thuê Theo Tháng<sup>*</sup></label>
                                                <input class="card-body_input" type="number" id="GiaThueTheoThang"
                                                    name="GiaThueTheoThang" min="0" required>

                                            </div>

                                            <div class="card-body_item">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Đóng</button>
                                            <input type="submit" id="submit" name="submit" class="btn btn-primary"
                                                value="Thêm mới">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php $result =$link->query("SELECT chitietxe.MaXe,chitietxe.TenXe,chitietxe.MaLoaiXe,chitietxe.BienSoXe,chitietxe.KhungXe,chitietxe.MauSac,chitietxe.NamDangKy,chitietxe.TrangThai,chitietxe.HinhAnh,chitietxe.GiaThueTheoGio,chitietxe.GiaThueTheoNgay,chitietxe.GiaThueTheoThang,loaixe.TenLoaiXe,loaixe.SoLuong FROM (chitietxe inner join loaixe on chitietxe.MaLoaiXe = loaixe.MaLoaiXe) where chitietxe.TrangThai='Đang Được Thuê'")?>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>Mã xe</th>
                                            <th>Tên xe</th>
                                            <th>Loại Xe</th>
                                            <th>Hình Ảnh</th>
                                            <th>Tình trạng xe</th>
                                            <th>Giá Giờ</th>
                                            <th>Giá Ngày</th>
                                            <th>Giá Tháng</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody id="chitietxe">
                                        <?php while($row=$result->fetch_assoc()): ?>

                                        <tr>
                                            <td><?php echo $row['MaXe'];?></td>
                                            <td><?php echo $row['TenXe'];?></td>
                                            <td><?php echo $row['TenLoaiXe'];?></td>
                                            <td style="text-align:center"> <img src='<?php echo $row['HinhAnh'];?>'
                                                    style='width:150px; height:80px; border-radius:10px;'> </td>
                                            <td class="card-status-ready" value="<?php echo $row['TrangThai'];?>">
                                                <?php echo $row['TrangThai'];?></td>
                                            <td><?php echo $row['GiaThueTheoGio']."đ";?></td>
                                            <td><?php echo $row['GiaThueTheoNgay']."đ";?></td>
                                            <td><?php echo $row['GiaThueTheoThang']."đ";?></td>
                                            <td class="card-table-item">
                                                <a href="detailproductready.php?MaXe=<?php echo $row ['MaXe']; ?>"
                                                    class="card-table-link">
                                                    <i class="fas fa-info-circle card-table-icon"></i>
                                                </a>
                                                <p class='card-table-link'
                                                    style='margin-bottom:0;margin-left:15px;cursor:pointer'
                                                    title='Update Record'
                                                    data-target='#exampleModalLong<?php echo $row ['MaXe']; ?>'
                                                    data-toggle='modal'><i
                                                        class='fas fa-edit card-table-icon update-config'></i>

                                                    <form action='updateproduct.php?MaXe=<?php echo $row ['MaXe']; ?>'
                                                        method='post' enctype='multipart/form-data' class='modal fade'
                                                        id='exampleModalLong<?php echo $row ['MaXe']; ?>' tabindex='-1'
                                                        role='dialog'
                                                        aria-labelledby='exampleModalLongTitle<?php echo $row ['MaXe']; ?>'
                                                        aria-hidden='true'>
                                                        <div class='modal-dialog' role='document'>
                                                            <div class='modal-content'>
                                                                <div class='modal-header'>
                                                                    <h5 class='modal-title'
                                                                        id='exampleModalLongTitle<?php echo $row ['MaXe']; ?>'>
                                                                        Cập nhật xe</h5>
                                                                    <button type='button' class='close'
                                                                        data-dismiss='modal' aria-label='Close'>
                                                                        <span aria-hidden='true'>&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class='modal-body'>
                                                                    <div class='card-body_item'>
                                                                        <label for=''>Chọn hình ảnh
                                                                            xe<sup>*</sup></label>
                                                                        <input class='card-body_input' type='file'
                                                                            name='HinhAnh'
                                                                            value=' <?php echo $row ['HinhAnh']; ?>'
                                                                            multiple require>
                                                                    </div>
                                                                    <div class='card-body_item '>
                                                                        <label for=''>Tên xe<sup>*</sup></label>
                                                                        <input class='card-body_input' type='text'
                                                                            name='TenXe'
                                                                            value='<?php echo $row ['TenXe']; ?>'
                                                                            required>

                                                                    </div>
                                                                    <div class='card-body_item '>
                                                                        <label for=''>Biển số xe<sup>*</sup></label>
                                                                        <input class='card-body_input' type='text'
                                                                            name='BienSoXe'
                                                                            value='<?php echo $row ['BienSoXe']; ?>'
                                                                            required>

                                                                    </div>
                                                                    <div class='card-body_item '>
                                                                        <label for=''>Khung Xe<sup>*</sup></label>
                                                                        <input class='card-body_input' type='text'
                                                                            name='KhungXe'
                                                                            value='<?php echo $row ['KhungXe']; ?>'
                                                                            required>

                                                                    </div>
                                                                    <div class='card-body_item '>
                                                                        <label for=''>Màu Sắc<sup>*</sup></label>
                                                                        <input class='card-body_input' type='text'
                                                                            name='MauSac'
                                                                            value='<?php echo $row ['MauSac']; ?>'
                                                                            required>

                                                                    </div>

                                                                    <div class='card-body_item '>
                                                                        <label for=''>Năm đăng ký<sup>*</sup></label>
                                                                        <input class='card-body_input' type='text'
                                                                            name='NamDangKy'
                                                                            value='<?php echo $row ['NamDangKy']; ?>'
                                                                            required>

                                                                    </div>


                                                                    <div class='card-body_item '>
                                                                        <label for=''>Loại xe<sup>*</sup></label>

                                                                        <select name='TenLoaiXe1' id='TenLoaiXe1'>
                                                                            <option
                                                                                value='<?php echo $row ['MaLoaiXe']; ?>'>
                                                                                <?php echo $row ['TenLoaiXe']; ?>
                                                                            </option>;
                                                                            <?php
                                                              $MaLoaiXe=$row ['MaLoaiXe']; 
                                                                $sql1="SELECT MaLoaiXe,TenLoaiXe FROM `loaixe` where MaLoaiXe NOT in (SELECT MaLoaiXe from `loaixe` where MaLoaiXe=$MaLoaiXe)";
                                                               $result1=$link->query($sql1);                                                        
                                                              ?>
                                                                            <?php 
                                                           foreach($result1 as $tl1){
                                                           ?>
                                                                            <option
                                                                                value="<?php echo $tl1 ['MaLoaiXe']; ?>">
                                                                                <?php echo $tl1 ['TenLoaiXe']; ?>
                                                                            </option>
                                                                            <?php
                                                              }
                                                           ?>
                                                                        </select>

                                                                    </div>

                                                                    <div class="card-body_item ">
                                                                        <label for="">Trạng Thái<sup>*</sup></label>
                                                                        <select id="TrangThai" name="TrangThai"
                                                                            <?php  if ($row ['TrangThai']=="Sẵn Sàng") echo 'style="color: green"';
                                                                        else if ($row ['TrangThai']=="Đang Được Thuê") echo 'style="color: yellow"';
                                                                        else if ($row ['TrangThai']=="Tới Hạn Trả") echo 'style="color: red"';?>>
                                                                            <?php 
                                                                 $TrangThai=$row ['TrangThai'];
                                                                $array=['Sẵn Sàng','Đang Được Thuê','Tới Hạn Trả'];
                                                                foreach($array as $tt){
                                                                    ?>
                                                                            <option value="<?php echo $tt;?>" <?php  if ($tt=="Sẵn Sàng") echo 'style="color: green"';
                                                                               else if ($tt=="Đang Được Thuê") echo 'style="color: yellow"';
                                                                               else if ($tt=="Tới Hạn Trả") echo 'style="color: red"';
                                                                                if($tt==$TrangThai) {echo 'selected';
                                                                              }
                                                                               ?>>
                                                                                <?php echo $tt;?>
                                                                            </option>
                                                                            <?php
                                                                       }
                                                                    ?>


                                                                        </select>

                                                                    </div>
                                                                    <div class='card-body_item '>
                                                                        <label for=''>Giá Giờ<sup>*</sup></label>
                                                                        <input class='card-body_input' type='number'
                                                                            name='GiaThueTheoGio' min='0'
                                                                            value='<?php echo $row ['GiaThueTheoGio']; ?>'
                                                                            required>
                                                                    </div>
                                                                    <div class='card-body_item '>
                                                                        <label for=''>Giá Ngày<sup>*</sup></label>
                                                                        <input class='card-body_input' type='number'
                                                                            name='GiaThueTheoNgay' min='0'
                                                                            value='<?php echo $row ['GiaThueTheoNgay']; ?>'
                                                                            required>
                                                                    </div>
                                                                    <div class='card-body_item '>
                                                                        <label for=''>Giá Tháng<sup>*</sup></label>
                                                                        <input class='card-body_input' type='number'
                                                                            name='GiaThueTheoThang' min='0'
                                                                            value='<?php echo $row ['GiaThueTheoThang']; ?>'
                                                                            required>
                                                                    </div>

                                                                    <div class='card-body_item'>

                                                                    </div>
                                                                </div>
                                                                <div class='modal-footer'>
                                                                    <button type='button' class='btn btn-secondary'
                                                                        data-dismiss='modal'>Đóng</button>
                                                                    <input type='submit' name='submit'
                                                                        class='btn btn-primary' value='Cập nhật'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </p>
                                                <a href="deleteproduct.php?MaXe=<?php echo $row ['MaXe']; ?>"
                                                    class="card-table-link">
                                                    <i class="fas fa-trash-alt card-table-icon"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Bản quyền &copy; Khang Thị Company</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        function loadData(type, MaLoaiXe) {
            $.ajax({
                url: "loadxedangthue.php",
                type: "POST",
                data: {
                    type: type,
                    id: MaLoaiXe
                },
                success: function(data) {
                    if (type == "Loadxedangthue") {
                        $("#chitietxe").html(data);

                    } else {
                        $("#Loaixe").append(data);

                    }
                }
            });
        }
        loadData();
        $("#Loaixe").on("change", function() {
            var Loaixe = $("#Loaixe").val();
            loadData("Loadxedangthue", Loaixe);
        });
    });
    </script>
    <script type="text/javascript" src="js/Color.js"></script>

</body>

</html>