var map;
function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -27.4860818, lng: -58.8624274 },
    zoom: 12,
  });
}

function goToSede(lat, lng) {
  map.setCenter({ lat: lat, lng: lng });
}

function toggleMenu() {
  var menu = document.querySelector(".mobile-menu .top-nav-item");
  if (menu.className.indexOf("collapsed") > -1) {
    menu.classList.remove("collapsed");
  } else {
    menu.classList.add("collapsed");
  }
}
