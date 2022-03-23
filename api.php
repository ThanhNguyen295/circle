<?php 
    session_start();
    
    require_once('../../utils/utility.php');
    require_once('../../database/dbhelper.php');


    if(!empty($_POST)) {
        $ma_nv = getPost('id');
        $action = getPost('action');

        switch ($action) {
            case 'delete':
                deleteProduct();
                break;
        }
    }

    function deleteProduct() {
        $ma_nv = getPost('ma_nv');
        $sql = "DELETE nhanvien WHERE ma_nv = $ma_nv";
        execute($sql);
    }

?>