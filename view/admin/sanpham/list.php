<style>
        /* Thu nhỏ cột Mô tả và thêm tràn văn bản nếu cần */
        .desc {
            max-width: 150px; /* Giới hạn chiều rộng của cột Mô tả */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .img-thumbnail {
            width: 100px; /* Đồng nhất kích thước ảnh */
            height: auto;
        }
    </style>

<div class="row mb-4">
            <h3>Danh sách sản phẩm</h3>
        </div>

      

        <!-- Table sản phẩm -->
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                       
                        <th>TÊN SẢN PHẨM</th>
                        <th>GIÁ SẢN PHẨM</th>
                        <th>ẢNH</th>
                        <th class="desc">MÔ TẢ</th>
                       
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id=" . $id;
                        $xoasp = "index.php?act=xoasp&id=" . $id;
                        $hinhpath = "../../upload/".$img;  // Đường dẫn đến ảnh
                        $hinh = is_file($hinhpath) ? $hinhpath : "path/to/default/image.jpg"; // Nếu không có ảnh, cung cấp một ảnh mặc định
                        echo '<tr>
                           
                            <td>' . $name . '</td>
                            <td>' . $price . '</td>
                            <td><img src="' . $hinh . '" class="img-thumbnail"></td>
                            <td class="desc" title="' . $mota . '">' . $mota . '</td>
                          
                            <td>
                                <a href="' . $suasp . '" class="btn btn-primary btn-sm">Sửa</a>
                                <a href="' . $xoasp . '" class="btn btn-danger btn-sm">Xóa</a>
                            </td>
                        </tr>';
                    } ?>
                </tbody>
            </table>
        </div>

        <!-- Button nhập thêm sản phẩm -->
        <div class="my-4">
            <a href="index.php?act=addsp">
                <button type="button" class="btn btn-success">Nhập thêm</button>
            </a>
        </div>