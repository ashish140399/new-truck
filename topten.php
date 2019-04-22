<!DOCTYPE html>
<html lang="">
<head>
    <title>Food Truck Finder</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link href="homePage.css" rel="stylesheet">
    <link href="topten.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="homePage.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="restaurant.js"></script>
</head>
<body>
<!-- This part is for the search box-->
<div class="search-box" id="searchBox_div">
    <input class="search-txt" name="" placeholder="Search for food truck" type="text"/>
    <a class="search-btn" href="#">
        <i class="fas fa-search"></i>
    </a>
</div>

<!-- This part is for maps using google API-->
<div id="map"></div>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqV-VCvruObpZgGWmyGLAnJYgiLnNer-I&callback=initMap">
</script>
<script>
    var map, infoWindow;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                infoWindow.setPosition(pos);
                infoWindow.setContent('Location found.');
                infoWindow.open(map);
                map.setCenter(pos);
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
		LoadItems();
    }
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }
</script>

<div class="shopping-cart" id="List_Hotels">
<!-- start list-->

<!-- end list-->


</div>

<div class="" style="height:80px"></div>

<div class="navbar" style="position:fixed;     bottom: 0;        width: 375px;    background: white;">
    <div class="item" id="top10_div">
        <div class="fa fa-user"></div>
        <div class="label">Top 10</div>
    </div>
    <div class="item" id="favorites_div">
        <div class="fa fa-star"></div>
        <div class="label">Favorites</div>
    </div>
    <div class="item" id="filter_div">
        <div class="fa fa-filter"></div>
        <div class="label">Filters</div>
    </div>
    <div class="item" id="nearby_div">
        <div class="fa fa-globe"></div>
        <div class="label">Nearby</div>
    </div>
</div>

<script>
function LoadItems(){
    var list_of_Hotels = Restaurants;
    var MarkersList = [];
var loopCounter= 10;
if(list_of_Hotels.length<9)
{
loopCounter=list_of_Hotels.length;
}

var sorted =  list_of_Hotels.sort(compare);
for(var i= 0 ; i<loopCounter; i++){

var string =' <a style="text-decoration:none; color:inherit;" href="restaurantView.php?id='+sorted[i].id+'" class="item_"><div class="buttons"><span>#'+(i+1)+'</span></div>';
string += '<div class="image"> <i class="icon_ fas fa-utensils"></i></div>';
string += '<div class="description"><span>' + sorted[i].name + '</span>';

sorted[i].schedule.forEach(
           function (u) {
               var uluru = {lat: u[1], lng: u[2]};

               string += '<span>' + u[0] + '</span>';
               var infoWindowContent = '<div id="map-player-info-content">' +
    
                  '<p><span class="text-bold"></span> ' +sorted[i].name+ '</p>' +
                  '<p><span class="text-bold"></span> ' + u[0]+ '</p>' +
                  '<p><span class="text-bold"></span> ' + sorted[i].rating+ '/5 <i class="fa fa-star"></i></p>' +
                  '</div>';
               var marker_= new google.maps.Marker({position: uluru, map: map ,title: sorted[i].HotelName});
               MarkersList.push(marker_);

  
               (function (marker_, infoWindowContent) {
                   google.maps.event.addListener(marker_, "click", function (e) {
                       //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                       infoWindow.setContent(infoWindowContent);
                       infoWindow.open(map, marker_);
                   });
               })(marker_, infoWindowContent);
           });
string+='</div>';
string+='<div class="total-price">'+sorted[i].rating+'/5<i class="fa fa-star"></i></div></a>';
document.getElementById("List_Hotels").innerHTML+= string;
}
var bounds = new google.maps.LatLngBounds();
for (var i = 0; i < MarkersList.length; i++) {
    bounds.extend(MarkersList[i].getPosition());
}

map.fitBounds(bounds);
}

function compare(a, b){
    const ratingA = a.rating;
    const ratingB = b.rating;

  let comparison = 0;
  if (ratingA < ratingB) {
    comparison = 1;
  } else if (ratingA > ratingB) {
    comparison = -1;
  }
  return comparison;
}

</script>
</body>
</html>