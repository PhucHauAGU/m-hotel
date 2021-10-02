<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h4 class="card-header">Danh sách loại địa điểm</h4>
				<div class="card-body">
					<a href="loaidiadiem_them.php" class="btn btn-success mb-2"><i class="fal fa-plus"></i> Thêm loại địa điểm</a>
					<table class="table table-bordered table-hover table-sm mb-0" align="center">
						<thead>
							<tr align="center">
								<th width="8%">#</th>
								<th width="40%">Loại địa điểm</th>
								<th>Biểu tượng MAP</th>
								
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
			db.collection('loaidiadiem').get().then((querySnapshot) => {
				var stt = 1;
				var output = '';
				querySnapshot.forEach((doc) => {
					output += '<tr>';
						output += '<td>'+stt+'</td>';
						output += '<td >'+doc.data().Loai+'</td>';
						output += '<td class="text-center"><img width="50" src ="images/'+doc.data().BieuTuong+'"></td>';
						
					output += '</tr>';
					stt++;
				});
				$('#HienThi').html(output);
			});
		</script>
	</body>
</html>