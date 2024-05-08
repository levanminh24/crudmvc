<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../../upload/".$img;
if(is_file($hinhpath)){
$hinh="<img src='".$hinhpath."' width='80px'height='80px'>";
}else{
  $hinh="no photo";
}
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0 text-white">THÊM SẢN PHẨM</h6>
            <a href="index.php?act=listsp" class="btn btn-info">DANH SÁCH SẢN PHẨM</a>
        </div>
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data" class="text-start">
            <div class="mb-3">
                <label for="iddm" class="form-label">Sản phẩm</label>
                <select name="iddm" class="form-select">
                    <option value="0" selected>TẤT CẢ</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($iddm == $id) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $id . '" ' . $s . '>' . $name . '</option>';
                    }
                    ?>

                </select>
            </div>
            <?php

if (is_array($sanpham)) {
    extract($sanpham);
}
?>
            <div class="mb-3">
                <label for="tensp" class="form-label">Tên sản phẩm</label>
                <input type="text" name="tensp" id="tensp" class="form-control" placeholder="Nhập vào tên sản phẩm" value="<?=$name?>">
            </div>
            <div class="mb-3">
                <label for="giasp" class="form-label">Giá</label>
                <input type="text" name="giasp" id="giasp" class="form-control" placeholder="Nhập vào giá" value="<?=$price?>" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Hình</label>
                <input type="file" name="hinh"><br><br>
                ảnh cũ<br>
                <img style="width: 100px;" src="../../upload/<?= $img ?>" alt="">
            </div>
            <div class="mb-3">
                <label for="mota" class="form-label">Mô tả</label>
                <textarea name="mota" id="mota" cols="30" rows="10" class="form-control"><?=$mota?></textarea>
            </div>
            <div class="d-flex justify-content-start gap-2">
                <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" value="Cập Nhật" class="btn btn-primary" name="capnhat">
               
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo '<div class="alert alert-info">' . $thongbao . '</div>';
            ?>
        </form>
    </div>
</div>

