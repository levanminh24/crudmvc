<?php
function loadall_sanpham(){
    $sql = "select* from sanpham order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id){
    $sql="select * from sanpham where id=". $id;
   $sp=pdo_query_one($sql);
   return $sp;
}
function  insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm){
    $sql = "insert into sanpham (name,price,img,mota,iddm) values('$tensp', '$giasp', '$hinh', '$mota', '$iddm') ";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql);
}
function   update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh)
{
    if ($hinh != "")
        $sql = "update sanpham set  iddm='" . $iddm . "', name='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "',img='" . $hinh . "' where id=" . $id;
    else
        $sql = "update sanpham set  iddm='" . $iddm . "', name='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "' where id=" . $id;
    pdo_execute($sql);
}