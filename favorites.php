<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="">
<head>
    <title>Food Truck Finder</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link href="favoritesStyle.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="homePage.js"></script>
    <link href="restaurantStyle.css" rel="stylesheet">
    <script src="restaurant.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.min.js"></script>
	
	
	
	
</head>
<style >
    #fav_heading{
        font-size: 24px;
        font-family: 'Roboto', sans-serif;
    }

#fav_content1,#fav_content2{
    font-family: 'Open Sans', sans-serif;
    font-size: 20px;
    margin-right:  2%;

}

#fav_content3 a{
    text-decoration: none;
    color: #006E6D;
    margin-left: 4%;
    font-size: 20px;
}
#fav_content3 a:hover{
    text-decoration: none;
    color: #E94B3C;

}
    
</style>


<body>
<!-- This part is for the search box-->
<div class="search-box" id="searchBox_div">
    <input class="search-txt" name="" placeholder="Search for food truck" type="text"/>
    <a class="search-btn" href="#">
        <i class="fas fa-search"></i>
    </a>	
</div>




<div style="width:100%;height:20%;"></div>

<ul id="FavList">
    <div  id="fav_heading">Your favourites are </div> <br>
   
	
    
	<!--<button onclick="addFavorite()">Add Food Truck</button>-->
    <div>
         <?php 
                // select all tasks if page is visited or refreshed
                    $tasks = mysqli_query($conn, "SELECT * FROM fav_name");

                    $i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
                        <div style="margin: 5px 0px">
                            <span id="fav_content1"><?php echo $i; ?>. </span> 
                            <span  id="fav_content2"><?php echo $row['restaur_name']; ?> </span>
                            <span  id="fav_content3"><a href="index.php?del_task=<?php echo $row['id'] ?>">Delete</a> </span>
                            </div>                                                
                    <?php $i++; }
             ?>                 
    </div>
</ul>


<script type="text/javascript">
	function addFavorite(){
		let node = document.createElement("LI");
		let textnode = document.createTextNode("Truck 2");
		node.appendChild(textnode);
		document.getElementById("FavList").appendChild(node);
}

	</script>







<div class="navbar">
    <div class="item" id="top10_div">
        <a href="your link here"> <i class="fa fa-user"></i></a>
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
</body>
</html>










