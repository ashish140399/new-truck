<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="">
<head>
    <title>Food Truck Finder</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link href="homePage.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="homePage.js"></script>
    <link href="restaurantStyle.css" rel="stylesheet">
    <script src="restaurant.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>

    <script src="http://code.jquery.com/jquery.min.js"></script>
    <style >
      a{
        text-decoration: none;
        color: #006E6D;

      }
      a:hover{
        color: #E94B3C;
      }
      button:hover{
        background-color: #005960;
        box-shadow: 5px black;
      }
      
    </style>
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

<!-------------------------------- ashish codestarts here-->
<button onclick="calcl()" style="width: 100%;height: 30px;margin: 2% 0%;background-color: #2E4A62;color:#fff;outline: 0;border:0px" >
Show Nearby
</button>

<div style="box-sizing: border-box;width: 100%;margin: 3% 0%;font-family: 'Open Sans', sans-serif; background-color: #F5F5F5;padding: 10px;border-radius: 20px;" id="demo" > 

</div>

<script>
var p;
var q;
var rest0,rest1,rest2,rest3,rest4,rest5,rest6,rest7,rest8,rest9,rest10,rest11;
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


////// "Power Breakfast Truck"/////----0
var lat2 = p; 
var lon2 = q; 
var lat1 = 41.867354; 
var lon1 = -87.647072; 
var R = 6371; // km 
var x1 = lat2-lat1;
var dLat = x1.toRad();  
var x2 = lon2-lon1;
var dLon = x2.toRad();  
var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
Math.sin(dLon/2) * Math.sin(dLon/2);  
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
var d = R * c; 
 d = d.toFixed(2);
 rest0=d;


 //var restn0="&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp"+"1191 - 1137 S Halsted St"+"<br>"+"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp"+"Chicago, IL 60607" +"<br>"+"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp"+
  //"1199 - 1131 Michigan Avenue"+"<br>"+"&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp"+"Chicago, IL 60605";
var restn0='<div id="restaurant_details">' +"1191 - 1137 S Halsted St"+"<br>"+"Chicago, IL 60607" +"<br>"+"1199 - 1131 Michigan Avenue"+"<br>"+ "Chicago, IL 60605"+'</div>';

///////////"Desert-a-truck"///////--------1

var lat2 = p; 
var lon2 = q; 
var lat1 = 41.878273; 
var lon1 = -87.627517; 
var R = 6371; // km 
var x1 = lat2-lat1;
var dLat = x1.toRad();  
var x2 = lon2-lon1;
var dLon = x2.toRad();  
var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
Math.sin(dLon/2) * Math.sin(dLon/2);  
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
var d = R * c; 
d=0.621*d;
d = d.toFixed(2);
rest1=d;
   
 //var restn1="&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp"+"14 - 10 E Jackson Blvd"+"<br>"+"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp"+"Chicago, IL 60604" ;
var restn1='<div id="restaurant_details">' +"14 - 10 E Jackson Blvd"+"<br>"+"Chicago, IL 60604" +'</div>';

///////////"Dhaba"///////-----------2

var lat2 = p; 
var lon2 = q; 

var lat1 = 41.880781; 
var lon1 = -87.624081; 

var R = 6371; // km 
var x1 = lat2-lat1;
var dLat = x1.toRad();  
var x2 = lon2-lon1;
var dLon = x2.toRad();  
var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
Math.sin(dLon/2) * Math.sin(dLon/2);  
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
var d = R * c; 
d=0.621*d;
d = d.toFixed(2);
 rest2=d;
 //var restn2="&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp"+"107 S Michigan Ave"+"<br>"+"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp"+"Chicago, IL 60603" +"<br>"+"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp "+
//  "1155 S State St"+"<br>"+"&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp"+"Chicago, IL 60605";

var restn2='<div id="restaurant_details">' +"107 S Michigan Ave"+"<br>"+"Chicago, IL 60603" +"<br>"+"1155 S State St"+"<br>"+ "Chicago, IL 60605"+'</div>';
///////////"Ameer Nawaz"///////--------3

var lat2 = p; 
var lon2 = q; 

var lat1 =41.8916; 
var lon1 =-87.6252; 

var R = 6371; // km 
var x1 = lat2-lat1;
var dLat = x1.toRad();  
var x2 = lon2-lon1;
var dLon = x2.toRad();  
var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
Math.sin(dLon/2) * Math.sin(dLon/2);  
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
var d = R * c; 
d=0.621*d;
d = d.toFixed(2);
 rest3=d;

 //var restn3="&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp"+"521 N Rush St"+"<br>"+"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp"+"Chicago, IL 60611" +"<br>"+"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp"+
//  "1155 S State St"+"<br>"+"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp"+"Chicago, IL 60605";

var restn3='<div id="restaurant_details">' +"521 N Rush St"+"<br>"+"Chicago, IL 60611" +"<br>"+"1155 S State St"+"<br>"+ "Chicago, IL 60605"+'</div>';

/////////// "HALAL-Food-truck"///////---------4

var lat2 = p; 
var lon2 = q; 

var lat1 =  41.878264; 
var lon1 = -87.626082; 

var R = 6371; // km 
var x1 = lat2-lat1;
var dLat = x1.toRad();  
var x2 = lon2-lon1;
var dLon = x2.toRad();  
var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
Math.sin(dLon/2) * Math.sin(dLon/2);  
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
var d = R * c; 
d=0.621*d;
d = d.toFixed(2);
 rest4=d;
 //var restn4="&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp"+"356 S Wabash Ave"+"<br>"+"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp"+"Chicago, IL 60604";
var restn4='<div id="restaurant_details">' +"356 S Wabash Ave"+"<br>"+"Chicago, IL 60604"+'</div>';
///////////"Sushi-Thai-truck""///////-----5

var lat2 = p; 
var lon2 = q; 

var lat1 = 41.882821; 
var lon1 = -87.624752; 

var R = 6371; // km 
var x1 = lat2-lat1;
var dLat = x1.toRad();  
var x2 = lon2-lon1;
var dLon = x2.toRad();  
var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
Math.sin(dLon/2) * Math.sin(dLon/2);  
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
var d = R * c; 
d=0.621*d;
d = d.toFixed(2);
 rest5=d;
 //var restn5="&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp"+"98-2 Michigan Ave"+"<br>"+"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp"+" Chicago, IL 60602";
var restn5='<div id="restaurant_details">' +"98-2 Michigan Ave"+"<br>"+"Chicago, IL 60602" +'</div>';


///////////"Italian-Food-truck"///////-----------6

var lat2 = p; 
var lon2 = q; 

var lat1 = 41.879347; 
var lon1 = -87.657865; 

var R = 6371; // km 
var x1 = lat2-lat1;
var dLat = x1.toRad();  
var x2 = lon2-lon1;
var dLon = x2.toRad();  
var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
Math.sin(dLon/2) * Math.sin(dLon/2);  
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
var d = R * c; 
d=0.621*d;
d = d.toFixed(2);
 rest6=d;

var restn6='<div id="restaurant_details">' +"114 S Racine ave"+"<br>"+"Chicago, IL 60607" +'</div>';
///////////"Korean-Food-truck"///////----------7

var lat2 = p; 
var lon2 = q; 

var lat1 = 41.921170; 
var lon1 = -87.710270; 

var R = 6371; // km 
var x1 = lat2-lat1;
var dLat = x1.toRad();  
var x2 = lon2-lon1;
var dLon = x2.toRad();  
var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
Math.sin(dLon/2) * Math.sin(dLon/2);  
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
var d = R * c; 
d=0.621*d;
d = d.toFixed(2);
 rest7=d;
var restn7='<div id="restaurant_details">' +"2179-2217 N Spaulding ave"+"<br>"+"Chicago, IL 60647" +'</div>';

///////////"Gelato-ICE-truck"///////--------8

var lat2 = p; 
var lon2 = q; 

var lat1 = 41.899062; 
var lon1 = -87.706530; 

var R = 6371; // km 
var x1 = lat2-lat1;
var dLat = x1.toRad();  
var x2 = lon2-lon1;
var dLon = x2.toRad();  
var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
Math.sin(dLon/2) * Math.sin(dLon/2);  
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
var d = R * c; 
d=0.621*d;
d = d.toFixed(2);
 rest8=d;

var restn8='<div id="restaurant_details">' +"1998-958 N Kedzie ave"+"<br>"+"Chicago, IL 60651" +'</div>';

///////////"Taco-Food-truck"///////--------9

var lat2 = p; 
var lon2 = q; 

var lat1 = 41.881537; 
var lon1 = -87.705538; 

var R = 6371; // km 
var x1 = lat2-lat1;
var dLat = x1.toRad();  
var x2 = lon2-lon1;
var dLon = x2.toRad();  
var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
Math.sin(dLon/2) * Math.sin(dLon/2);  
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
var d = R * c; 
d=0.621*d;
d = d.toFixed(2);
 rest9=d;

var restn9='<div id="restaurant_details">' +"3146 W Madison St"+"<br>"+"Chicago, IL 60612" +'</div>';
///////////"Sushi-Burrito-truck"///////---------10

var lat2 = p; 
var lon2 = q; 

var lat1 = 41.877183; 
var lon1 = -87.627989; 

var R = 6371; // km 
var x1 = lat2-lat1;
var dLat = x1.toRad();  
var x2 = lon2-lon1;
var dLon = x2.toRad();  
var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
Math.sin(dLon/2) * Math.sin(dLon/2);  
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
var d = R * c; 
d=0.621*d;
d = d.toFixed(2);
 rest10=d;


var restn10='<div id="restaurant_details">' +"310 S State St"+"<br>"+"Chicago, IL 60604" +'</div>';


///////////" "Mix-Burger-truck""///////---------11

var lat2 = p; 
var lon2 = q; 

var lat1 =41.893784; 
var lon1 = -87.619157; 

var R = 6371; // km 
var x1 = lat2-lat1;
var dLat = x1.toRad();  
var x2 = lon2-lon1;
var dLon = x2.toRad();  
var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
Math.sin(dLon/2) * Math.sin(dLon/2);  
var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
var d = R * c; 
d=0.621*d;
d = d.toFixed(2);
 rest11=d;



var restn11='<div id="restaurant_details">' +"Streeteville,"+"<br>"+"Chicago, IL 60607" +"<br>"+"1199 - 1131 Michigan Avenue"+"<br>"+ "Chicago, IL 60605"+'</div>';



var  restaurant = [
  {
    type:"<span class='restaurant_anchor;'><a  href='restaurantView.php?id=0'>Power Breakfast Truck</a></span>"+ "<br>"+ "<br>" +restn0 +"<br>", 
    distance:rest0
  },
  {type:"<span class='restaurant_anchor;'><a href='restaurantView.php?id=1'>Desert-a-truck</a></span>"+"<br>" +restn1 +"<br>", distance:rest1},
  {type:"<span class='restaurant_anchor;'><a href='restaurantView.php?id=2'>Dhaba</a></span>"+"<br>" +"<br>"+restn2 +"<br>", distance:rest2},
  {type:"<span class='restaurant_anchor;'><a href='restaurantView.php?id=3'>Ameer Nawaz</a></span>"+"<br>"+"<br>" +restn3 +"<br>", distance:rest3},
  {type:"<span class='restaurant_anchor;'><a href='restaurantView.php?id=4'>HALAL-Food-truck</a></span>"+"<br>"+"<br>" +restn4 +"<br>", distance:rest4},
  {type:"<span class='restaurant_anchor;'><a href='restaurantView.php?id=5'>Sushi-Thai-truck</a></span>"+"<br>"+"<br>" +restn5 +"<br>", distance:rest5},
  {type:"<span class='restaurant_anchor;'><a href='restaurantView.php?id=6'>Italian-Food-truck</a></span>"+"<br>"+"<br>" +restn6 +"<br>", distance:rest6},
  {type:"<span class='restaurant_anchor;'><a href='restaurantView.php?id=7'>Korean-Food-truck</a></span>"+"<br>" +"<br>"+restn7 +"<br>", distance:rest7},
  {type:"<span class='restaurant_anchor;'><a href='restaurantView.php?id=8'>Gelato-ICE-truck</a></span>"+"<br>" +"<br>"+restn7 +"<br>", distance:rest8},
  {type:"<span class='restaurant_anchor;'><a href='restaurantView.php?id=9'>Taco-Food-truck</a></span>"+"<br>"+"<br>" +restn9 +"<br>", distance:rest9},
  {type:"<span class='restaurant_anchor;'><a href='restaurantView.php?id=10'>Sushi-Burrito-truck</a></span>"+"<br>" +"<br>"+restn10 +"<br>", distance:rest10},
  {type:"<span class='restaurant_anchor;'><a href='restaurantView.php?id=11'>Mix-Burger-truck</a></span>"+"<br>"+"<br>" +restn11 +"<br>", distance:rest11},
  

];

displayrestaurant();

function myFunction() {
  restaurant.sort(function(a, b){return a.distance - b.distance});
 displayrestaurant();
}
myFunction()

function displayrestaurant() {
 var text = "";
var i;
for (i = 0; i < restaurant.length; i++) {
  var z=1;
  var z=z+i;

  text += "#" + z +" &nbsp &nbsp &nbsp " +'<i class="icon_ fas fa-utensils" id="restaurant_icon"></i>'+" &nbsp &nbsp &nbsp "  + '<span class="restaurant_type">'+ restaurant[i].type+ '</span>' +"<br>" +'<i id ="restaurant_dis">'+restaurant[i].distance +'</i>'+ '<b id ="restaurant_dis"> Mi </b>'+ "<hr>";
}
document.getElementById("demo").innerHTML = text;

}

}

</script>



<!-------------------------------------------------------------- ashish code ends here-->



<script >

    var map, infoWindow;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };


                var marker = new google.maps.Marker({
                    position: pos,
                    map:map,
                    title:"You are Here"
                });

                infoWindow.open(map);
                map.setCenter(pos);
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    var locations = [
    [' ',  41.867712,-87.623920,0 ],
      [' ', 41.878273, -87.627517,1 ],
      [' ',41.880781,  -87.624081, 2],
      [' ', 41.8916,  -87.6252, 3],
      [' ', 41.878264,  -87.626082, 4],
      [' ',41.882821,   -87.624752, 5],
      [' ', 41.879347,  -87.657865, 6],
      [' ', 41.921170,  -87.710270, 7],
      [' ', 41.899062,  -87.706530, 8],
      [' ', 41.881537, -87.705538, 9],
      [' ',  41.877183,  -87.627989, 10],
      [' ',  41.893784, -87.619157, 11]
    
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: new google.maps.LatLng(41.878273, -87.627517),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
}

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqV-VCvruObpZgGWmyGLAnJYgiLnNer-I&callback=initMap">
</script>

<div id = "nearbyRestaurants" style="height: 20%; font-size: 36px;">

</div>



<div class="navbar">
    <div class="item" id="top10_div">
        <a href="topten.html"> <i class="fa fa-user"></i></a>
        <div class="label">Top 10</div>
    </div>
    <div class="item" id="favorites_div">
        <a href=""> <i class="fa fa-star"></i></a>
        <div class="label">Favorites</div>
    </div>
    <div class="item" id="filter_div">
        <a href="filter.html"> <i class="fa fa-filter"></i></a>

        <div class="label">Filters</div>
    </div>
    <div class="item" id="nearby_div">
        <a href="favorites.html"> <i class="fa fa-globe"></i></a>
        <div class="label">Nearby</div>
    </div>
</div>




</body>
</html>













<!--//-->
<!--//     //First Restaurant-->
<!--//     let restaurantLat0 = Restaurants[0].getAddress(1, 8)[0][1];-->
<!--//     let restaurantLong0 = Restaurants[0].getAddress(1, 8)[0][2];-->
<!--//     // console.log(restaurantLat0);-->
<!--//     // console.log(restaurantLong0);-->
<!--//     restaurantOne = getDistance(currentLat, currentLong, restaurantLat0, restaurantLong0);-->
<!--//     distanceSortRestaurants.push(restaurantOne);-->
<!--//-->
<!--//     //Second restaurant-->
<!--//     let restaurantLat1 = Restaurants[1].getAddress(1, 16)[0][1];-->
<!--//     let restaurantLong1 = Restaurants[1].getAddress(1, 16)[0][2];-->
<!--//     // console.log(restaurantLat0);-->
<!--//     // console.log(restaurantLong0);-->
<!--//     restaurantTwo = getDistance(currentLat, currentLong, restaurantLat1, restaurantLong1);-->
<!--//     distanceSortRestaurants.push(restaurantTwo);-->
<!--//-->
<!--//     //Third restaurant-->
<!--//     let restaurantLat2 = Restaurants[2].getAddress(2, 11)[0][1];-->
<!--//     let restaurantLong2 = Restaurants[2].getAddress(2, 11)[0][2];-->
<!--//     // console.log(restaurantLat0);-->
<!--//     // console.log(restaurantLong0);-->
<!--//     restaurantThree = getDistance(currentLat, currentLong, restaurantLat2, restaurantLong2);-->
<!--//     distanceSortRestaurants.push(restaurantThree);-->
<!--//-->
<!--//     //Fourth restaurant-->
<!--//     let restaurantLat3 = Restaurants[3].getAddress(2, 11)[0][1];-->
<!--//     let restaurantLong3 = Restaurants[3].getAddress(2, 11)[0][2];-->
<!--//     // console.log(restaurantLat0);-->
<!--//     // console.log(restaurantLong0);-->
<!--//     restaurantFour = getDistance(currentLat, currentLong, restaurantLat3, restaurantLong3);-->
<!--//     distanceSortRestaurants.push(restaurantFour);-->
<!--//-->
<!--//     //Fifth restaurant-->
<!--//     let restaurantLat4 = Restaurants[4].getAddress(1, 18)[0][1];-->
<!--//     let restaurantLong4 = Restaurants[4].getAddress(1, 18)[0][2];-->
<!--//     // console.log(restaurantLat0);-->
<!--//     // console.log(restaurantLong0);-->
<!--//     restaurantFive = getDistance(currentLat, currentLong, restaurantLat4, restaurantLong4);-->
<!--//     distanceSortRestaurants.push(restaurantFive);-->
<!--//-->
<!--//     //Sixth restaurant-->
<!--//     let restaurantLat5 = Restaurants[5].getAddress(1, 16)[0][1];-->
<!--//     let restaurantLong5 = Restaurants[5].getAddress(1, 16)[0][2];-->
<!--//     // console.log(restaurantLat0);-->
<!--//     // console.log(restaurantLong0);-->
<!--//     restaurantSixth = getDistance(currentLat, currentLong, restaurantLat5, restaurantLong5);-->
<!--//     distanceSortRestaurants.push(restaurantSixth);-->
<!--//-->
<!--//     //Seventh restaurant-->
<!--//     let restaurantLat6 = Restaurants[6].getAddress(5, 15)[0][1];-->
<!--//     let restaurantLong6 = Restaurants[6].getAddress(5, 15)[0][2];-->
<!--//     // console.log(restaurantLat0);-->
<!--//     // console.log(restaurantLong0);-->
<!--//     restaurantSeventh = getDistance(currentLat, currentLong, restaurantLat6, restaurantLong6);-->
<!--//     distanceSortRestaurants.push(restaurantSeventh);-->
<!--//-->
<!--//     //Eighth restaurant-->
<!--//     let restaurantLat7 = Restaurants[7].getAddress(3, 13)[0][1];-->
<!--//     let restaurantLong7 = Restaurants[7].getAddress(3, 13)[0][2];-->
<!--//     // console.log(restaurantLat0);-->
<!--//     // console.log(restaurantLong0);-->
<!--//     restaurantEighth = getDistance(currentLat, currentLong, restaurantLat7, restaurantLong7);-->
<!--//     distanceSortRestaurants.push(restaurantEighth);-->
<!--//-->
<!--//     //Ninth restaurant-->
<!--//     let restaurantLat8 = Restaurants[8].getAddress(3, 13)[0][1];-->
<!--//     let restaurantLong8 = Restaurants[8].getAddress(3, 13)[0][2];-->
<!--//     // console.log(restaurantLat0);-->
<!--//     // console.log(restaurantLong0);-->
<!--//     restaurantNinth = getDistance(currentLat, currentLong, restaurantLat8, restaurantLong8);-->
<!--//     distanceSortRestaurants.push(restaurantNinth);-->
<!--//-->
<!--//     // Tenth restaurant-->
<!--//     let restaurantLat9 = Restaurants[9].getAddress(5, 17)[0][1];-->
<!--//     let restaurantLong9 = Restaurants[9].getAddress(5, 17)[0][2];-->
<!--//     // console.log(restaurantLat0);-->
<!--//     // console.log(restaurantLong0);-->
<!--//     restaurantTenth = getDistance(currentLat, currentLong, restaurantLat9, restaurantLong9);-->
<!--//     distanceSortRestaurants.push(restaurantTenth);-->
<!--//-->
<!--//     //Eleventh restaurant-->
<!--//     let restaurantLat10 = Restaurants[10].getAddress(5, 17)[0][1];-->
<!--//     let restaurantLong10 = Restaurants[10].getAddress(5, 17)[0][2];-->
<!--//     // console.log(restaurantLat0);-->
<!--//     // console.log(restaurantLong0);-->
<!--//     restaurantEleventh = getDistance(currentLat, currentLong, restaurantLat10, restaurantLong10);-->
<!--//     distanceSortRestaurants.push(restaurantEleventh);-->
<!--//-->
<!--//     //Twelfth restaurant-->
<!--//     let restaurantLat11 = Restaurants[11].getAddress(1, 17)[0][1];-->
<!--//     let restaurantLong11 = Restaurants[11].getAddress(1, 17)[0][2];-->
<!--//     // console.log(restaurantLat0);-->
<!--//     // console.log(restaurantLong0);-->
<!--//     restaurantTwelfth = getDistance(currentLat, currentLong, restaurantLat11, restaurantLong11);-->
<!--//     ;-->
<!--//     //Sorting the array from closest to furthest-->
<!--//     console.log(distanceSortRestaurants.sort());-->
<!--//     return distanceSortRestaurants;-->
<!--// }-->





