<?php include('server.php') ?>
<?php echo $errors;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restaurant</title>

    <!-- Load style sheets -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.css" rel="stylesheet">

    <link href="restaurantStyle.css" rel="stylesheet">

    <!-- Use mobile-aware viewport -->
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

    <script src="restaurant.js"></script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwTzsFbEjBdIar9QwqQT5Km4cguXpEkCM&callback=initMap"></script>

    <script type="text/javascript">
        function initMap() {
            let map = new google.maps.Map(
                document.getElementById("googleMap"),
                {
                    center: new google.maps.LatLng(41.850033, -87.6500523),
                    zoom: 5,
                }
            );
            let mapInfo = new google.maps.InfoWindow;

            // if (navigator.geolocation) {
            //     navigator.geolocation.getCurrentPosition(
            //         function(position) {
            //             var pos = {
            //                 lat: position.coords.latitude,
            //                 lng: position.coords.longitude
            //             };

            //             mapInfo.setPosition(pos);
            //             mapInfo.open(map);
            //             map.setCenter(pos);
            //         },
            //         function() {
            //             console.log("failed to get geolocation")
            //         }
            //     );
            // }
        };

        $.extend({
            getUrlVars: function () {
                var vars = [], pair;
                var pairs = window.location.search.substr(1).split('&');

                for (var i = 0; i < pairs.length; i++) {
                    pair = pairs[i].split('=');
                    vars.push(pair[0]);
                    vars[pair[0]] = pair[1] &&
                        decodeURIComponent(pair[1].replace(/\+/g, ' '));
                }
                return vars;
            },
            getUrlVar: function (name) {
                return $.getUrlVars()[name];
            }
        });

        $(document).ready(function () {
            let restaurant = Restaurants[
                parseInt($.getUrlVars()['id'])
            ];

            document.getElementById("title").innerHTML = restaurant.name;
            document.getElementById("fav_restaurant").value = restaurant.name;
        
            document.getElementById("price").innerHTML =
                "<b>Price:</b> " + "$".repeat(restaurant.price);
            document.getElementById("rating").innerHTML =
                "<b>Rating:</b> " + restaurant.rating;

            restaurant.menu.forEach(
                function (e) {
                    let menuItem = document.createElement("div");
                    menuItem.setAttribute("id", "menuItem");
                    document.getElementById("menu").appendChild(menuItem);

                    let menuItemNamePrice = document.createElement("div");
                    menuItemNamePrice.setAttribute("id", "menuItemNamePrice");
                    menuItem.appendChild(menuItemNamePrice);

                    let menuItemName = document.createElement("div");
                    menuItemName.setAttribute("id", "menuItemName");
                    menuItemNamePrice.appendChild(menuItemName);
                    menuItemName.innerHTML = e[0];

                    let menuItemPrice = document.createElement("div");
                    menuItemPrice.setAttribute("id", "menuItemPrice");
                    menuItemNamePrice.appendChild(menuItemPrice);
                    menuItemPrice.innerHTML = "<b>$</b>" + e[1];

                    let menuItemDescription = document.createElement("div");
                    menuItemDescription.setAttribute("id", "menuItemDescription");
                    menuItem.appendChild(menuItemDescription);
                    menuItemDescription.innerHTML = e[2];
                }
            );

            let THE_DOW = 1;
            let THE_HR = 8;
            let address = restaurant.getAddress(
                THE_DOW, //test TODOTODOTODOTODOTODOTODOTODOTODOTODO
                THE_HR  //test TODOTODOTODOTODOTODOTODOTODOTODOTODO
            );

            restaurant.schedule.forEach(
                function (u) {
                    let scheduleAddressItem = document.createElement("div");
                    scheduleAddressItem.setAttribute("id", "scheduleAddressItem");
                    document.getElementById("schedule").appendChild(scheduleAddressItem);

                    let addressItem = document.createElement("div");
                    addressItem.setAttribute("id", "addressItem");
                    scheduleAddressItem.appendChild(addressItem);
                    addressItem.innerHTML = u[0];

                    if (u == address[0]) {
                        addressItem.style.fontWeight = "bold";
                    }

                    DOW = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]

                    for (let i = 0; i < 7; i++) {
                        let dowItem = document.createElement("div");
                        dowItem.setAttribute("id", "dowItem");
                        addressItem.appendChild(dowItem);
                        dowItem.innerHTML = DOW[i];

                        if (i == THE_DOW && u == address[0]) {
                            dowItem.style.fontWeight = "bold";
                        }

                        if (u[3][i].length == 0) {
                            let timeItem = document.createElement("div");
                            timeItem.setAttribute("id", "timeItem");
                            dowItem.appendChild(timeItem);
                            timeItem.innerHTML = "Closed";

                            if (i == THE_DOW) {
                                timeItem.style.fontWeight = "bold";
                            }
                        }

                        u[3][i].forEach(
                            function (v) {
                                let timeItem = document.createElement("div");
                                timeItem.setAttribute("id", "timeItem");
                                dowItem.appendChild(timeItem);
                                timeItem.innerHTML = v[0];

                                if (v == address[1]) {
                                    timeItem.style.fontWeight = "bold";
                                }
                            }
                        )
                    }
                }
            );
        });

        $(document).on('click', "#favoriteButton", function (evt) {
            // TODO: ARSH
        });

        $(document).on('click', "#directionsButton", function (evt) {
            let restaurant = Restaurants[
                parseInt($.getUrlVars()['id'])
            ];

            let THE_DOW = 1;
            let THE_HR = 8;
            let address = restaurant.getAddress(
                THE_DOW, //test TODOTODOTODOTODOTODOTODOTODOTODOTODO
                THE_HR  //test TODOTODOTODOTODOTODOTODOTODOTODOTODO
            );
            address = address[0][0];

            let url = "https://www.google.com/maps?saddr=My+Location&daddr=" +
                address;

            window.open(url, '_blank').focus();
        });

    </script>
</head>

<body>

    <div id="title"></div>
    <div id="googleMap"></div>
    <div id="price"></div>
    <div id="rating"></div>

    <hr>

    <div id="menu">
        <div id="menuHeader">Menu</div>
    </div>

    <hr>

    <div id="schedule">
        <div id="scheduleHeader">Schedule</div>
    </div>

    

   <form class="form-inline"  method="post">
          <div class="form-group">
            
            <input type="text" class="form-control" name="task" id="fav_restaurant" style="display: none;" value="">    
          </div>
          <button type="submit"  name="submit_btn" id="favoriteButton" >Favourite</button>
        </form>    
<?php echo $errors;?>
    <button type="button" id="directionsButton">
        Directions
    </button>
   

</body>

</html>