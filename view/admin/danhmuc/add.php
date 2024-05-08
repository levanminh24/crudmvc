<div class="container-fluid pt-4 px-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center mb-4">Thêm Danh Mục</h5>
            <form action="index.php?act=adddm" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="maloai" class="form-label">Mã loại</label>
                    <input type="text" id="maloai" name="maloai" class="form-control" placeholder="Nhập vào mã loại" disabled>
                </div>
                <div class="mb-3">
                    <label for="tenloai" class="form-label">Tên loại</label>
                    <input type="text" id="tenloai" name="tenloai" class="form-control" placeholder="Nhập vào tên">
                </div>
                <div class="mb-3">
                    <label for="hinh" class="form-label">Hình ảnh</label>
                    <input type="file" name="hinh" class="form-control">
                </div>
                <div class="d-flex justify-content-center gap-2 mb-3">
                    <input type="submit" value="Thêm Mới" class="btn btn-success" name="themmoi">
                   
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
