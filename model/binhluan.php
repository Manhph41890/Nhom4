<?php 
    
function insert_binhluan($noi_dung,$iduser,$idpro,$ngay_bl){
    $sql="insert into binh_luan(noi_dung,iduser,idpro,ngay_bl) value('$noi_dung','$iduser','$idpro','$ngay_bl')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql="select * from binh_luan where 1";
    if($idpro>0) $sql.= " AND idpro='".$idpro."'";
    $sql.= " order by id desc";
    $listbl=pdo_query($sql);
    return $listbl;
}
function delete_binhluan($id) {
    $sql = "DELETE FROM binh_luan WHERE id = $id";
    pdo_execute($sql);
}
function getTenNguoiDung($iduser){
    $sql = "SELECT user FROM khach_hang WHERE id = '$iduser'";
    $result = pdo_query_one($sql);
    if($result) {
        return $result['user'];
    } else {
        return 'Không có thông tin';
    }
}
?>
