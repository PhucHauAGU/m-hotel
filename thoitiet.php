<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Weather</h5>
				<div class="card-body">
					 <div class="container">
				  <header class="header">
				  <div class="form-group">
					<label for="TenDiaDiem">City Name</label>
					<input type="text" class="form-control" placeholder="Enter City Name" id="search-txt" name="search-txt" required />
				</div>
				<button type="submit" id="search-btn" class="btn btn-primary"></i> Check</button>
					
				  </header>
				  <main id="main">
					<div  class="city-icon">
					  <div class="city-icon-holder">
					  <div id="city-name">
					  </div>
					  <img src="" alt="" id="icon">
						</div>
					</div>
					<div  class="temperature">
					  <div id="temp"></div>
					</div>
					<div  class="humidity">
					  <div id="humidity-div"></div>
					</div>
				  </main>
				</div>
				  <script type="text/javascript" src ="js/scripts.js"> </script>
				
				</div>
			</div>
			<script>
			
			</script>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
	</body>
</html>