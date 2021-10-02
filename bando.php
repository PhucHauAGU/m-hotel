<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Bản đồ</h5>
				<div id="map"></div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>

		<?php include "javascript.php"; ?>
			<script type='text/javascript'
            src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>
	  <script>
	  function GetMap()
			{
				var map = new Microsoft.Maps.Map('#map', {
					credentials: 'Aq57_I2YLhdHHLMVsa7FQzG2_6RrIHr9MopSdBQv0JvLfMidXvEaMmDJY-Uhyini',
					center: new Microsoft.Maps.Location(10.373529, 105.432962),
					mapTypeId: Microsoft.Maps.MapTypeId.Road,
					zoom: 15
				});
				db.collection("hotel").get().then((querySnapshot) => {
				querySnapshot.forEach((doc) => {
					var marker_icon = '';
						if(doc.data().Loai == 1)
								marker_icon = 'images/hotel.png';
							else if(doc.data().Loai == 2)
								marker_icon = 'images/motel3.png';
							
						loc = new Microsoft.Maps.Location(doc.data().ToaDo.latitude, doc.data().ToaDo.longitude);
						pin = new Microsoft.Maps.Pushpin(loc, {
							title: doc.data().TenDiaDiem,
							subTitle: doc.data().DiaChi,
							icon : marker_icon,
	
						});
						map.entities.push(pin);
					});
				});
			}
     
    </script>
	</body>
</html>