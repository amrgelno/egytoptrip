 // Creating map options
 let locationYInputs = document.getElementsByName("latitude");
 let locationXInputs = document.getElementsByName("longitude");

 if (locationYInputs.length && locationXInputs.length) {
     let loctionY = locationYInputs[0].value;
     let loctionX = locationXInputs[0].value;

     let mapOptions = {
         center: [loctionY, loctionX],
         zoom: 10,
     };

     // Creating a map object
     var map = new L.map("map", mapOptions);

     // Creating a Layer object
     var layer = new L.TileLayer(
         "http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
     );

     // Adding layer to the map
     map.addLayer(layer);

     let marker = new L.Marker([loctionY, loctionX]);
     marker.addTo(map);
 }