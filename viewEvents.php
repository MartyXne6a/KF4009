<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width"><!--tell mobile browsers to make the size of the layout viewport equal to the device width or the size of the screen-->
    <meta name="viewport" content="width=device-width,maximum-scale=1.0">
	<!--to fix this modify the meta element that you just added so that it is as follows-->
	
  	<title>The North East Event - View all upcoming events </title> 
	
    <link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php
	// including connection to the server
	include "database_conn.php";
	?>
	
</head> 
<body> 
<div id="gridContainer">
<!--Navigation bar-->
<nav id="mainNav">
	<ul> 
		<li><a href="index.html">Home</a></li> 
		<li><a class="current"href="viewEvents.php">View Events</a></li> 
		<li><a href="admin.php">Admin</a></li> 
		<li><a href="credits.html">Credits</a></li> 
		<li><a href="#">Wireframes</a></li> 
	</ul> 
</nav>

<header>
		<a href="index.html"><img src="Immagini/title.png" alt="NorthEastEvents" ></a>
</header>
<!--main contents-->	
<main id="viewEvent">
	
	<h2>Upcoming Events</h2>
    <div>
	<?php
		
		//Create a query to retrieve the information about all events currently held into NEE_events table
		    $query = "SELECT eventTitle, eventDescription, venueName, location, catDesc, eventStartDate, eventEndDate, eventPrice 
			FROM NEE_events JOIN NEE_venue ON NEE_events.venueID=NEE_venue.venueID
			JOIN NEE_category ON NEE_events.catID=NEE_category.catID
			order by eventStartDate;
			";
			
			$result = $dbConn->query($query);
			
		    
		//Display All events iterating over the query result
	    
			while($event = $result->fetch_object())
			{
				echo"<article>
			
			      <img src='Immagini/{$event->catDesc}.jpg'>
				  <p style='text-align:centerff'>From <span>{$event->eventStartDate}</span> to <span>{$event->eventEndDate}</span></p>
				  <h3>{$event->eventTitle}</h3>
				  <p><label>Price: </label><span>{$event->eventPrice}</span> £</p>
				  <p>{$event->catDesc} Event</p>
				  <p><label>Venue: </label>{$event->venueName} - {$event->location}</p>
				  <fieldset>
				  <legend>Description</legend>
				  <p>{$event->eventDescription}</p>
				  </fieldset>
			
			     </article>";
			}

	$dbConn->close();
	?>
</div>
</main>	

<footer>
	<!--Navigation link footer-->
	<section id="navFooter">
     <ul> 
		<li><a href="index.html">Home</a></li> 
		<li><a href="viewEvents.php">View Events</a></li> 
		<li><a href="admin.php">Admin</a></li> 
		<li><a href="credits.html">Credits</a></li> 
		<li><a href="#">Wireframes</a></li> 
	</ul> 
</section>
<!--Copyright, Privacy Policy, Terms and Conditions, Site Map-->
	
<div class="copyR">
	<p>North East Events&copy; 2019</p>
	<nav>
		<ul>
			<li><a href="#">Site Map</a></li>
			<li><a href="#">Privacy Policy</a></li>
			<li><a href="#">Terms and Conditions</a></li>
		</ul>
	</nav>
</div>

</footer>
</div>  
</body>
</html>
