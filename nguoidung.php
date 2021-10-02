<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h4 class="card-header">Danh sách người dùng</h4>
				<div class="card-body">
					<a href="nguoidung_them.php" class="btn btn-success mb-2"><i class="fal fa-plus"></i> Thêm danh sách người dùng</a>
					<table class="table table-bordered table-hover table-sm mb-0" align="center">
						<thead>
							<tr align="center">
								<th width="8%">ID</th>
								<th>Họ và Tên</th>
								<th width="30%">Email</th>
								<th>Quyền</th>
								<th width="8%">Sửa</th>
								<th width="8%">Xóa</th>
							</tr>
						</thead>
						<tbody id="HienThi">
							
						</tbody>
					</table>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<script>
			db.collection('nguoidung').get().then((querySnapshot) => {
				var stt = 1;
				var output = '';
				querySnapshot.forEach((doc) => {
					output += '<tr>';
						output += '<td>'+stt+'</td>';
						output += '<td>'+doc.data().HoTen+'</td>';
						output += '<td>'+doc.data().Email+'</td>';
						if(doc.data().QuyenHan == 1)
							output += '<td>'+'<span class="badge badge-primary">Quản trị</span>'+'</td>';
						else
							output += '<td>'+'<span class="badge badge-secondary">Thành viên</span>'+'</td>';
							
						output+=' <td class="text-center"><a href="nguoidung_sua.php?id='+doc.id+'"><i class="far fa-edit text-primary" ></i></a></td>';
						output += '<td align="center"><a href="nguoidung_xoa.php?id='+doc.id+'" onclick="return confirm(\'Bạn có muốn xóa người dùng không?\')"><i class="fas fa-trash-alt text-danger"></i></a></td>';
					output += '</tr>';
					stt++;
				});
				$('#HienThi').html(output);
			});
			
		</script>
	</body>
</html>