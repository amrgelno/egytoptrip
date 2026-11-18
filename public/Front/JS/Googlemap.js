import { Map, TileLayer, Marker } from 'https://unpkg.com/leaflet@1.7.1/dist/leaflet-src.esm.js';


export function GMAP() {

    // Define the longitude and latitude coordinates

    // const longitude = 151.2069261087331412;
    // const latitude = -33.87005827498716;


    const longitude = document.getElementById("longitude").value;
    const latitude = document.getElementById("latitude").value;
    const site = document.getElementById("complocation").value;

    // Create a map
    const map = new
        Map(document.getElementById('map')).setView([latitude,
            longitude], 13);
    // Add a tile layer
    new TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'
        ,
        {
            maxZoom: 19,
        }).addTo(map);
    // Add a marker with the specified longitude and latitude
    new Marker([latitude, longitude]).addTo(map)
        .bindPopup(site)
        .openPopup()



}





// // Creating map options
// let locationYInputs = document.getElementsByName("latitude");
// let locationXInputs = document.getElementsByName("longitude");

// if (locationYInputs.length && locationXInputs.length) {
//     let loctionY = locationYInputs[0].value;
//     let loctionX = locationXInputs[0].value;

//     let mapOptions = {
//         center: [loctionY, loctionX],
//         zoom: 10,
//     };

//     // Creating a map object
//     var map = new L.map("map", mapOptions);

//     // Creating a Layer object
//     var layer = new L.TileLayer(
//         "http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
//     );

//     // Adding layer to the map
//     map.addLayer(layer);

//     let marker = new L.Marker([loctionY, loctionX]);
//     marker.addTo(map);
// }
