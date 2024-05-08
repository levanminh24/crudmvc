

<div class="row mb-4">
            <h3>Danh sách sản phẩm</h3>
        </div>
        <!-- Table sản phẩm -->
        <div class="table-responsive">
        <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead class="table-light">
                    <tr>
                      
                        <th scope="col">MÃ LOẠI</th>
                        <th scope="col">TÊN LOẠI</th>
                        <th scope="col">ẢNH</th>
                        <th scope="col">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($listdanhmuc as $danhmuc) {
    extract($danhmuc);
    $suadm = "index.php?act=suadm&id=" . $id;
    $xoadm = "index.php?act=xoadm&id=" . $id;
    $hinhpath = "../../upload/".$img;  // Đường dẫn đến ảnh
    $hinh = is_file($hinhpath) ? $hinhpath : "path/to/default/image.jpg"; // Nếu không có ảnh, cung cấp một ảnh mặc định
    echo '<tr>
        <td>' . $id . '</td>
        <td>' . $name . '</td>
        <td><img src="' . $hinh . '" width="100px"></td>
        <td>
            <a href="' . $suadm . '" class="btn btn-primary btn-sm">Sửa</a>
            <a href="' . $xoadm . '" class="btn btn-danger btn-sm">Xóa</a>
        </td>
    </tr>';
} ?>

                </tbody>
            </table>
        </div>

        <!-- Button nhập thêm sản phẩm -->
        <div class="my-4">
            <a href="index.php?act=adddm">
                <button type="button" class="btn btn-success">Nhập thêm</button>
            </a>
        </div>