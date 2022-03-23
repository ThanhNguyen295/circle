<?php
    $baseUrl = '../';
    require_once('layouts/header.php');

    $ma_nv = $ten_nv = $phai = $noi_sinh = $ma_phong = $luong = '';
    require_once('save.php');

?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="container">
	<div class="col-md-12" style="margin-top: 20px; text-align: center; color: green">
		<h1>Thêm Nhân Viên</h1>
	</div>
    <div class="col-md-12">
        <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="usr">Mã nhân viên:</label>
                    <input required="true" type="text" class="form-control" id="ma_nv" name="ma_nv">
                    <!-- Phân biệt form -->
                    <input type="text" name="id" value="<?=$ma_nv?>" hidden="true">
                </div>
                <div class="form-group">
                    <label for="usr">Tên nhân viên:</label>
                    <input required="true" type="text" class="form-control" id="ten_nv" name="ten_nv">
                </div>
                <div class="form-group">
                    <label for="usr">Giới tính:</label>
                    <select class="form-control" name="phai" id="phai" require="true">
                        <option value="">--Chọn--</option>
                        <option value="NAM">NAM</option>
                        <option value="NU">NU</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="usr">Nơi sinh:</label>
                    <input required="true" type="text" class="form-control" id="noi_sinh" name="noi_sinh">
                </div>
                <div class="form-group">
                    <label for="usr">Mã phòng:</label>
                    <input required="true" type="text" class="form-control" id="ma_phong" name="ma_phong">
                </div>
                <div class="form-group">
                    <label for="usr">Lương:</label>
                    <input required="true" type="text" class="form-control" id="luong" name="luong">
                </div>
                
                <button class="btn btn-success gradient-custom-4" style="border: none; padding: 10px; float: right">Lưu Nhân Viên</button>
            </div>
        </form>

    </div>
</div>



<?php 
    require_once('./layouts/footer.php');
?>