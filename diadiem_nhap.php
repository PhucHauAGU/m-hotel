<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Nhập địa điểm</h5>
				<div class="card-body">
					<?php
						// Kết nối					
						$link = mysqli_connect('127.0.0.1', 'root', 'vertrigo', 'hotel');
						if($link)
						{
							date_default_timezone_set('Asia/Ho_Chi_Minh');
							mysqli_set_charset($link, 'utf8');
						}
						else
							die('Không thể kết nối tới server!');
						
						
						// Xử lý truy vấn
						$query = "SELECT * FROM `dia_diem` WHERE 1";
						$danhsach = mysqli_query($link, $query);
						
						// Chỉ lấy các cột cần thiết
						$dsdiadiem = [];
						while($dong = mysqli_fetch_array($danhsach))
						{
							
							$diadiem['TDD'] = $dong['ten_dia_diem'];
							$diadiem['VD'] = $dong['vi_do'];
							$diadiem['KD'] = $dong['kinh_do'];
							$diadiem['Loai'] = $dong['id_loai'];
							$diadiem['DC'] = $dong['dia_chi'];
							
							$dsdiadiem[] = $diadiem;
						}
						
						// In ra màn hình
						// var_dump($dsdiadiem);
					?>
					<div id="KetQua">
						<div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
							<span id="ThongBao"></span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<script>
			var batch = db.batch();
			
			<?php
				$i = 1;
				foreach($dsdiadiem as $value)
				{
			?>
					var docRef = db.collection("hotel").doc("<?php echo str_pad($i, 10, "0", STR_PAD_LEFT); ?>");
					batch.set(docRef, {
						
						TenDiaDiem: "<?php echo $value['TDD']; ?>",
						Loai: "<?php echo $value['Loai']; ?>",
						DiaChi: "<?php echo $value['DC']; ?>",
						ToaDo: new firebase.firestore.GeoPoint(<?php echo $value['VD']; ?>,<?php echo $value['KD']; ?>"),
						
					});
			<?php
					$i++;
				}
			?>
			
			$('#KetQua').hide();
			batch.commit().then(() => {
				$('#KetQua').show();
				$('#ThongBao').html("Đã nhập thành công <?php echo $i; ?> dòng dữ liệu vào Firebase.");
			}).catch(error => {
				$('#KetQua').show();
				$('#ThongBao').html("Lỗi: " + error);
			});
		</script>
	</body>
</html>