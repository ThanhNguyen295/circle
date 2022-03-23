<?php 
    require_once('./layouts/header.php');
    $sql = "SELECT * FROM nhanvien";
    $data = executeResult($sql);
  
?>
<div class="container">
    <div class="col-md-12">
        <a href="editor.php">
            <button class="btn btn-success">Thêm Sinh Viên</button>
        </a>
    </div>
    
    <div class="col-md-12">
        
        <table class="table table-bordered" style="margin-top: 40px">
            <tr>
                <th>Mã Nhân Viên</th>
                <th>Tên Nhân Viên</th>
                <th>Giới Tính</th>
                <th>Nơi Sinh</th>
                <th>Tên Phòng</th>
                <th>Lương</th>
                <th>Action</th>
            </tr>
            <?php
                foreach($data as $item) {
                    echo '<tr>
                            <th class="text-center">'.$item['Ma_NV'].'</th>
                            <td>'.$item['Ten_NV'].'</td>
                            <td>';
                                if($item['Phai'] == 'NU') {
                                    echo '<img src="./assets/pictures/woman.jpg" style="height: 100px"';
                                } else if($item['Phai'] == 'NAM') {
                                    echo '<img src="./assets/pictures/man.jpg" style="height: 100px"';
                                } 
                                echo '
                            </td>
                            <td>'.$item['Noi_Sinh'].'</td>
                            <td>'.$item['Ma_Phong'].'</td>
                            <td>'.$item['Luong'].'</td>
                            <th style="width: 50px">
                                <a href="show.php?id='.$item['Ma_NV'].'">
                                    <button class="btn btn-warning">Sửa</button>
                                </a>
                            </th>

                            <th style="width: 50px">
                                <a href="show.php?id='.$item['Ma_NV'].'">
                                    <button class="btn btn-danger" onclick="deleteProduct('.$item['Ma_NV'].')">Xóa</button>
                                </a>
                            </th>
                        </tr>';
                }
            ?>
        </table>
    </div>
</div>
<script type="text/javascript">
    function deleteProduct(Ma_NV) {
        option = confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')
        if(!option){
            return;
        }
        $.post('api.php', {
            'id': Ma_NV,
            'action': 'delete'
        }, function(data) {
            location.reload()
        })
    }
</script>
<?php 
    require_once('./layouts/footer.php');
?>