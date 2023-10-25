import { Loader } from '@googlemaps/js-api-loader';

const loader = new Loader({
    apiKey: GOOGLE_MAP_KEY,
    version: "weekly",
});

loader
    .load()
    .then((google) => {
        initMap(0, 0, '');
    })
    .catch(e => {
        console.log('error loading google map api library');
    });


function initMap(myLat, myLng, theName) {
    const myLatLng = {
        lat: parseFloat(myLat),
        lng: parseFloat(myLng)
    };
    const map = new google.maps.Map(document.getElementById("map-canvas"), {
        zoom: 5,
        center: myLatLng,
    });

    let infowindow = new google.maps.InfoWindow({
        content: theName + '<br>Lat: ' + myLat + ', Lng: ' + myLng
    });

    let marker = new google.maps.Marker({
        position: myLatLng,
        map,
        title: theName,
    });

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });
}
$('#modal-map').on('show.bs.modal', function (event) {
    const button = event.relatedTarget
    // This can be done differently by passing id and getting single record via Ajax as well...
    let btnLat = button.getAttribute('data-lat');
    let btnLng = button.getAttribute('data-lng');
    let btnName = button.parentNode.parentNode.querySelector('.card-title').textContent;
    window.initMap = initMap(btnLat, btnLng, btnName);
});