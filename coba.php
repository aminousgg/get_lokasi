<!DOCTYPE html>
<html>
<head>
	<title>coba</title>
</head>
<body>
	<input type="text" name="coba" id="latitude">
	<input type="text" name="ciba2" id="longitude">
	<button type="button" id="button" onclick="getLocation()">Get Lokasi</button>
	

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
var x = document.getElementById("result");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    alert("Lokasi Tidak Ditemukan");
  }
}
function showPosition(position) {
    $("#latitude").val(position.coords.latitude);
    $("#longitude").val(position.coords.longitude);
    $("#button").after(`
    	<a target="_blank" href="//maps.google.com/maps?f=d&amp;daddr=`+position.coords.latitude+`,`+position.coords.longitude+`&amp;hl=en">
		Buka Alamat pada GoogleMaps
		</a>
    `);

}
</script>
</body>
</html>