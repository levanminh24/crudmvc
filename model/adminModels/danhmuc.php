<?php
function loadall_danhmuc(){
    $sql="select * from danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function insert_danhmuc($tenloai,$hinh){
    $sql = "insert into danhmuc(name,img) values('$tenloai','$hinh')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="delete from danhmuc where id=".$id;
    pdo_execute($sql);
}
function loadone_danhmuc($id){
    $sql="select * from danhmuc where id=". $id;
   $dm=pdo_query_one($sql);
   return $dm;
}
function update_danhmuc($id,$tenloai,$hinh)  {
   $sql = "update danhmuc set name = '$tenloai',img = '$hinh' where id =".$id;
   pdo_execute($sql);
}

?>