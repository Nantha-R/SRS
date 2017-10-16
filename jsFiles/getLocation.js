function getLocation()
{
if(!navigator.geolocation){
	alert('Your Browser does not support HTML5 Geo Location. Please Use Newer Version Browsers');
}
navigator.geolocation.getCurrentPosition(success, error);
function success(position){
	var latitude  = (position.coords.latitude).toFixed(2);	
	var longitude = (position.coords.longitude).toFixed(2);
	var url="http://localhost:8080/SRS/fbFiles/index.php?latitude="+latitude+"&longitude="+longitude;
	window.open(url,"_self");

	
	
	
	}
function error(err){
	alert('ERROR(' + err.code + '): ' + err.message);
}

}