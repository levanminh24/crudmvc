<div class="container-fluid pt-4 px-4">
    <div class="card">
        <div class="card-header bg-info text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Thêm Sản Phẩm</h5>
                <a href="index.php?act=listsp" class="btn btn-outline-light">Danh Sách Sản Phẩm</a>
            </div>
        </div>
        <div class="card-body">
            <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="iddm" class="form-label">Danh mục sản phẩm</label>
                    <select name="iddm" id="iddm" class="form-select">
                        <option value="">Chon danh muc</option>
                        <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tensp" class="form-label">Tên sản phẩm</label>
                    <input type="text" name="tensp" id="tensp" class="form-control" placeholder="Nhập vào tên sản phẩm">
                </div>
                <div class="mb-3">
                    <label for="giasp" class="form-label">Giá</label>
                    <input type="text" name="giasp" id="giasp" class="form-control" placeholder="Nhập vào giá">
                </div>
                <div class="mb-3">
                    <label for="hinh" class="form-label">Hình ảnh</label>
                    <input type="file" name="hinh" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="mota" class="form-label">Mô tả</label>
                    <textarea name="mota" id="mota" class="form-control" rows="5"></textarea>
                </div>
                <div class="d-flex justify-content-start gap-2">
                    <input type="submit" value="Thêm Mới" class="btn btn-success" name="themmoi">
                   
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != "")) echo '<div class="alert alert-info">' . $thongbao . '</div>';
                ?>
            </form>
        </div>
    </div>
</div>
