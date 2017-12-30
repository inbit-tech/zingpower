// map
function initMap() {
	var zingpower = {lat: 34.375059, lng: 108.898388};
	
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