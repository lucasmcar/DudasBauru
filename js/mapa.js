// variável que indica as coordenadas do centro do mapa
 var DdBauru = new google.maps.LatLng(-30.107627,-51.247888);

 // variável que indica as coordenadas do marcador
 var Baurudd = new google.maps.LatLng(-30.107627,-51.247888);

 function initialize() {
   var mapOptions = {
      center: DdBauru, // variável com as coordenadas Lat e Lng
      zoom: 19,
      mapTypeId: google.maps.MapTypeId.MAP
   };
   var map = new google.maps.Map(document.getElementById("mapa"),
 mapOptions);
 
    // variável que define o URL para a nova imagem do marcador
   var icon = 'img/duda.png';
   
   // variável que define as opções do marcador
   var marker = new google.maps.Marker({
      position: Baurudd, // variável com as coordenadas Lat e Lng
      map: map,
      title:"Estamos aqui",
      icon: icon // define a nova imagem do marcador
  });
  
  google.maps.event.addDomListener(window, 'load', initialize);
  
  var myLatLng = {lat: -30.107627, lng: -51.247888};

  var map = new go
  ogle.maps.Map(document.getElementById("mapa"), {
    zoom: 16,
    center: myLatLng
  });

   marker = new google.maps.Marker({
    map: map,
    draggable: false,
    animation: google.maps.Animation.DROP,
    position: {lat: -30.107627, lng: -51.247888}
  });
  marker.addListener('click', toggleBounce);
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
google.maps.event.addDomListener(window, 'load', initialize);

