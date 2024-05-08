<?php
if(is_array($dm)){
    extract($dm);
}
?>


<div class="container-fluid pt-4 px-4">
    <div class="card">
        <div class="card-header bg-primary text-white text-center">
            <h6 class="mb-0">Cập Nhật Danh Mục</h6>
        </div>
        <div class="card-body">
            <form action="index.php?act=updatedm" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="maloai" class="form-label">Mã loại</label>
                    <input type="text" id="maloai" name="maloai" class="form-control" placeholder="Nhập vào mã loại" disabled>
                </div>
                <div class="mb-3">
                    <label for="tenloai" class="form-label">Tên loại</label>
                    <input type="text" id="tenloai" name="tenloai" class="form-control" placeholder="Nhập vào tên" value="<?php if(isset($name) && ($name != "")) echo $name; ?>">
                </div>
                <div class="mb-3">
                    <label for="hinh" class="form-label">Hình ảnh</label>
                    <input type="file" name="hinh" class="form-control"><br>
                    Ảnh cũ:<br>
                    <img style="width: 100px;" src="../../upload/<?= $img ?>" alt="Ảnh cũ">
                </div>
                <div class="d-flex justify-content-center gap-2 mb-3">
                    <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id; ?>">
                    <input type="submit" value="Cập Nhật" class="btn btn-success" name="capnhat">
                  
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != "")) echo '<div class="alert alert-info">' . $thongbao . '</div>';
                ?>
            </form>
        </div>
        <div class="card-footer text-muted">
            <a href="index.php?act=listdm" class="btn btn-info">Danh Sách Danh Mục</a>
        </div>
    </div>
</div>
