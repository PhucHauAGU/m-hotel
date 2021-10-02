<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thêm người dùng</h5>
				<div class="card-body">
					<form action="nguoidung_them_xuly.php" method="post">
						<div class="form-group">
							<label for="TenDiaDiem">Họ và Tên</label>
							<input type="text" class="form-control" id="HoTen" name="HoTen" required />
						</div>
						
						<div class="form-group">
							<label for="DiaChi">Email</label>
							<input type="Email" class="form-control" id="Email" name="Email" required />
						</div>
						<div class ="form-group">
							<label for="MaLoai">Quyền</label>
								<select class="custom-select" id="QuyenHan" name="QuyenHan" placeholder="" required>
											<option value="">-- Chọn --</option>
											<option value="1">Quản trị</option>
											<option value="2">Thành viên</option>
							</select>
						</div>
								
						
						
						<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm vào CSDL</button>
					</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		
	</body>
</html>