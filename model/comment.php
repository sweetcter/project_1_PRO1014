<?php

function insert_comment($content,$user_id,$product_id,$comment_time){
    $sql="insert into comment(content,user_id,product_id,comment_time) values('$content','$user_id','$product_id','$comment_time')";
    pdo_execute($sql);
}
function delete_comment($comment_id){
    $sql="delete from comment where id=".$comment_id;
    pdo_query($sql);
}
function loadall_comment($product_id){
    $sql="select * from comment where 1";
    if($product_id>0) $sql.=" AND product_id='".$product_id."'";
    $sql.=" order by comment_id  desc";
    $listbl=pdo_query($sql);
    return $listbl;
     // $sql="SELECT sanpham.name_sp, binhluan.noidung
    // FROM sanpham
    // JOIN binhluan ON sanpham.id = binhluan.idpro";
}
?>