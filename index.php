<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<style>
		#trai{
			float: left;
			width: 50%;
		}
		#phai {
			float : right;
			width: 45%;
		}
		
	</style>
	<body>
		<div  class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Trang chủ</h5>
				<div class="card-body">
					<div id ="phai">
						<p class="card-text"><strong>Welcome to M-Hotel!.</strong></p>
						<p class="card-text"><strong>M-Hotel cho phép bạn xem thông tin, vị trí của các khách sạn, nhà nghỉ ở Việt Nam.</strong></p>
						<p class="card-text"><strong>Đồng thời cho phép bạn kiểm tra thời tiết ở địa điểm bạn muốn, để đảm bảo cho chuyến đi xa của bạn được thuận lợi.</strong></p>
						<p class="card-text"><strong>M-Hotel allows you to see information, location of hotels and motels in Vietnam.</strong></p>
						<p class="card-text"><strong>Also allows you to check the weather where you want, to ensure your long trip is convenient.</strong></p>
						
						
						
						<p class="card-text">.</p>
						
					</div>
					<div id = "trai">
						<iframe width="100%" height="315" src="images/hotel_video.mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
	</body>
</html>