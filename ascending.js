
var p;
    var q;
var x = document.getElementById("demo");
var y = document.getElementById("demo2");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition(position) {

   p= position.coords.latitude; 
    q= position.coords.longitude; 
   
    
  
}
getLocation()

function calcl() {

 Number.prototype.toRad = function() {
   return this * Math.PI / 180;
}

var lat2 = p; 
var lon2 = q; 
var lat1 = 41.867354; 
var lon1 =                 -87.647072; 

var R = 6371; // km 
//has a problem with the .toRad() method below.
var x1 = lat2-lat1;
var dLat = x1.toRad();  
var x2 = lon2-lon1;
var dLon = x2.toRad();  
var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
                Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
                Math.sin(dLon/2) * Math.sin(dLon/2);  
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
var d = R * c; 

    document.getElementById("demo1").innerHTML = d;
     

}

