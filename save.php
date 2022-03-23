<?php 
    if(!empty($_POST)) {
        $ma_nv = getPost('ma_nv');
        $ten_nv = getPost('ten_nv');
        $phai = getPost('phai');
        $noi_sinh = getPost('noi_sinh');
        $ma_phong = getPost('ma_phong');
        $luong = getPost('luong');
        
        if(isset($ma_nv)) {
            //update
            $sql = "UPDATE nhanvien SET Ma_NV = '$ma_nv', Ten_NV = '$ten_nv', Phai = '$phai', Noi_Sinh = '$noi_sinh', Ma_Phong = '$ma_phong', Luong = '$luong' WHERE Ma_NV = $ma_nv";
     
            execute($sql);

            header('Location: show.php');
            die();
        } else {
            //insert
            $sql = "INSERT INTO nhanvien (Ma_NV, Ten_NV, Phai, Noi_Sinh, Ma_Phong, Luong) VALUES ('$ma_nv', '$ten_nv', '$phai', '$noi_sinh', '$ma_phong', '$luong')";
            execute($sql);

            header('Location: show.php');
            die();
        }
        
    }
    
?>