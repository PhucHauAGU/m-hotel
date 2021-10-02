<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
	
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Sửa người dùng</h5>
				<div class="card-body">
					<form action="nguoidung_sua_xuly.php" method="post">
						<input type="text" class="form-control" id="id" name="id" hidden />
						<div class="form-group">
							<label for="TenDiaDiem">Họ và Tên</label>
							<input type="text" class="form-control" id="HoTen" name="HoTen" required />
						</div>
						<div class="form-group">
							<label for="DiaChi">Email</label>
							<input type="text" class="form-control" id="Email" name="Email" required />
						</div>
						<div class ="form-group">
							<label for="MaLoai">Quyền</label>
								<select class="custom-select" id="QuyenHan" name="QuyenHan" placeholder="" required>
											<option value="">-- Chọn --</option>
											<option value="1">Quản trị</option>
											<option value="2">Thành viên</option>
							</select>
						</div>
						
						
						<button type="submit" class="btn btn-primary"><i class="fal fa-edit"></i> Cập nhật</button>
					</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<script>
			var docRef = db.collection("nguoidung").doc("<?php echo $_GET['id'];?>");

				docRef.get().then((doc) => {
					if (doc.exists) {
						$('#id').val(doc.id);
						$('#HoTen').val(doc.data().HoTen);
						$('#Email').val(doc.data().Email);
						$('#QuyenHan').val(doc.data().QuyenHan);
						
					} else {
						// doc.data() will be undefined in this case
						console.log("No such document!");
						
					}
				}).catch((error) => {
					console.log("Error getting document:", error);
				});
		</script>
	</body>
</html>