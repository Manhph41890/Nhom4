<?php 
      function loadall_thongke(){
        $sql = "select danh_muc.id as madm, danh_muc.name_dm as tendm, count(hang_hoa.id) as countsp, min(hang_hoa.price) as minprice, max(hang_hoa.price) as maxprice, avg(hang_hoa.price) as avgprice from hang_hoa left join danh_muc on danh_muc.id = hang_hoa.iddm group by danh_muc.id order by danh_muc.id desc";
        $listtk=pdo_query($sql);
        return $listtk;
    }
?>