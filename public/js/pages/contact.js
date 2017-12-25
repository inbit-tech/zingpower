// map
function initMap() {
	var zingpower = {lat: 34.33203885, lng: 109.01300758};
	
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 14,
		center: zingpower,
		map: map
	});

	var marker = new google.maps.Marker({
		position: zingpower,
		map: map,
		title: 'Zing Power'
	});
}