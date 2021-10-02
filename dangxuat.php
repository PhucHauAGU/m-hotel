<body>
	<div class="container">
		<?php include "navbar.php"; ?>
		
		<div class="card mt-3">
			<h5 class="card-header">Xử lý Đăng xuất </h5>
			<div class="card-body">
				<div id = "KetQua">
					<p class = "card-text">Đang xử lý đăng xuất...</p>
					<?php
						unset($_SESSION['uid']);
						unset($_SESSION['email']);
						
					?>
					</div>
				</div>
			
		
		<?php include "footer.php"; ?>
	</div>
	<?php include "javascript.php"; ?>
	
	<script>
		firebase.auth().signOut();
		location.href = 'index.php';
	</script>
</body>