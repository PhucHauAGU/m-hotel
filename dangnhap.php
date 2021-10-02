<?php include "header.php"; ?>
<div class="container">
	<?php include "navbar.php"; ?>
	
	<div class="card mt-3">
		<h5 class="card-header">Đăng nhập</h5>
		<div class="card-body">
			<form action="dangnhap_xuly.php" method="post">
				<div class="form-group">
					<label for="TenDiaDiem">Email</label>
					<input type="email" class="form-control" id="email" name="email" required />
				</div>
				<div class="form-group">
					<label for="DiaChi">Mật khẩu</label>
					<input type="password" class="form-control" id="matkhau" name="matkhau" required />
				</div>
				
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-sign-in-alt"></i> Đăng nhập</button>
			</form>
		</div>
	</div>
	
	<?php include "footer.php"; ?>
</div>