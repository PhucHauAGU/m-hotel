<nav class="navbar navbar-expand-lg navbar-light bg-info">
	<a class="navbar-brand" href="index.php">
		<i class="fal fa-map-marked-alt"></i>
		M-Hotel
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	
		<ul class="navbar-nav mr-auto">
		<?php
			session_start();
			if(!isset($_SESSION['uid']))
			{
		?>	
			<li class="nav-item active">
				<a align="right" class="nav-link" href="bando.php"><i class="fal fa-globe-asia"></i> Bản đồ</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="dangnhap.php"><i class="fal fa-sign-in-alt"></i>Đăng nhập </a>
			</li>
		<?php
			}
			else
			{
		?>
			<li class="nav-item active">
				<a align="right" class="nav-link" href="bando.php"><i class="fal fa-globe-asia"></i> Bản đồ</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fal fa-cog"></i> Quản lý
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="diadiem.php"><i class="fal fa-map-marker-alt fa-fw"></i> Địa điểm</a>
					<a class="dropdown-item" href="nguoidung.php"><i class="fal fa-user-alt fa-fw"></i> Người dùng</a>
					<a class="dropdown-item" href="loaidiadiem.php"><i class="fal fa-map-marker-alt fa-fw"></i> Loai Địa điểm</a>
					<a class="dropdown-item" href="diadiem_nhap.php"><i class="fal fa-file-import fa-fw"></i> Nhập địa điểm vào Firebase</a>
				</div>
				<li class="nav-item active">
					<a class="nav-link" href="thoitiet.php"><i class="fal fa-cloud"></i> Thời tiết</a>
				</li>
				<li class="nav-item active">
				<a class="nav-link" href="dangxuat.php"><i class="fal fa-sign-out-alt"></i>Đăng xuất </a>
			</li>
			<?php
				}
			?>
			</li>
		</ul>
	</div>
</nav>