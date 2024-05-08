<?php
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'adddm':
            if (isset($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $hinh = "";  // Mặc định là không có tệp
                if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                    $hinh = basename($_FILES["hinh"]["name"]);
                    $target_dir = "../../upload/";
                    $target_file = $target_dir . $hinh;
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                }
                insert_danhmuc($tenloai, $hinh);
                $thongbao = "Thêm mới thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }

            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];

                if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                    $hinh = basename($_FILES["hinh"]["name"]);
                    $target_dir = "../../upload/";
                    $target_file = $target_dir . $hinh;
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    update_danhmuc($id, $tenloai, $hinh); // Chỉ cập nhật hình ảnh nếu có tệp mới
                } else {
                    update_danhmuc($id, $tenloai, $hinh); // Không thay đổi hình ảnh
                }
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'listsp':
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota  = $_POST['mota'];
                $iddm = $_POST['iddm'];
                $hinh = "";  // Mặc định là không có tệp
                if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                    $hinh = basename($_FILES["hinh"]["name"]);
                    $target_dir = "../../upload/";
                    $target_file = $target_dir . $hinh;
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                }
                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "them san pham thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }

            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
            case 'suasp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sanpham = loadone_sanpham($_GET['id']);
                }
    
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;
                case 'updatesp':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $id = $_POST['id'];
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $mota = $_POST['mota'];
                        if ($_FILES['hinh']['name'] != "") {
                            $hinh = basename($_FILES["hinh"]["name"]);
                            $target_dir = "../../upload/";
                            $target_file = $target_dir . $hinh;
                            move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                        } else {
                            $hinh = "";
                        }
                        update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_sanpham("", 0);
                    include "sanpham/list.php";
                    break;
    }
} else {
    echo "lỗi";
}
