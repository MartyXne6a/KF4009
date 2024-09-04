<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width"><!--tell mobile browsers to make the size of the layout viewport equal to the device width or the size of the screen-->
    <meta name="viewport" content="width=device-width,maximum-scale=1.0">
	<!--to fix this modify the meta element that you just added so that it is as follows-->
	
  	<title>The North East Event - Processing Inserting Data Script. </title> 
	
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
		<li><a href="viewEvents.php">View Events</a></li> 
		<li><a class="current" href="admin.php">Admin</a></li> 
		<li><a href="credits.html">Credits</a></li> 
		<li><a href="#">Wireframes</a></li> 
	</ul> 
</nav>

<header>
		<a href="index.html"><img src="Immagini/title.png" alt="NorthEastEvents" ></a>
</header>
<!--main contents-->	
<main id="mainEvent">
	
	
	<?php
	
	// Extract the data sent by the form which is in the Request stream and Put the data from the Request stream into variables checking if anythis has been passed
	
	$title = isset($_REQUEST['title']) ? $_REQUEST['title'] : null;
	$desc = isset($_REQUEST['desc']) ? $_REQUEST['desc'] : null;
	$startDate = isset($_REQUEST['startDate']) ? $_REQUEST['startDate'] : null;
	$endDate = isset($_REQUEST['endDate']) ? $_REQUEST['endDate'] : null;
	$catID = isset($_REQUEST['catID']) ? $_REQUEST['catID'] : null;
	$venueID = isset($_REQUEST['venueID']) ? $_REQUEST['venueID'] : null;
	$price = isset($_REQUEST['price']) ? $_REQUEST['price'] : null;
	
	$error=false;
	
	?>
	<h2>New Event</h2>
	<h3>Below an overview of the New Event you have just created</h3>
	<div>
	<fieldset>
	<?php
	// check if the required fields have been inserted
	if(empty($title) || empty($startDate) || empty($endDate) || empty($catID) || empty($venueID))
		{
			echo "<p>Something going wrong. No all requested fields have been inserted. Please complete the form as required.</p>\n";
			echo "<a href='admin.php' >Please go back and insert all details properly</a>\n";
			$error=true;
		}
	//check if the price is numeric
	if(!is_numeric($price)&&(!empty($price)))
	{
		   echo "<p>Something going wrong. The price format acepted .</p>\n";
		   echo "<a href='admin.php' >Please go back and insert all details properly</a>\n";
		   $error=true;
	}
		
	//check if the date format
	if(!preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/',$startDate)|| !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/',$endDate))
	   {
		   echo "<p>Something going wrong. The Date format accepted is yyyy-mm-dd.</p>\n";
		   echo "<a href='admin.php' >Please go back and insert all details properly</a>\n";
		   $error=true;
	   }
		
	if($error===false)
	{
		//Escape to write special characters
			$title = $dbConn->real_escape_string($title);
			$desc = $dbConn->real_escape_string($desc);
		
		//Create a query to retrieve the catDesc from NEE_category to display it in the overview
		    $query = "SELECT catDesc FROM NEE_category WHERE catID='$catID';";
			
			$result = $dbConn->query($query);
			$cat = $result->fetch_object();
		
		//Create a query to retrieve the venueName to display it in the overview
		    $query = "SELECT venueName FROM NEE_venue WHERE venueID='$venueID';";
			
			$result = $dbConn->query($query);
			$venue = $result->fetch_object();
			//Inserting data to NEE_events table
		
		$newEvent = "INSERT INTO NEE_events
		(eventTitle, eventDescription, venueID, catID, eventStartDate, eventEndDate, eventPrice)
		VALUES ('$title','$desc','$venueID','$catID','$startDate','$endDate','$price');";
		
		$success = $dbConn->query($newEvent);
		
		if($success===false)
		{
			    echo "<p>Error while inserting record:  ".$dbConn->error. "</p>";
				echo "<a href='admin.php'>Please Try again </a>";
				exit;
		}
		else
		{
			echo "<legend>Event created successfully</legend>";
		}
		//Display Overview of the all information inserted

	
		echo "
		       <section><label>Title : </label><p style='color:red;grid-column-start:2;grid-column-end:4'>".$title."</p>";
		
			echo"<label style='grid-column:4'>Price : </label><p style='grid-column:4'>".$price." £</p></section>";
		

			
			
			echo"<section><label style='grid-column:1;grid-row:2'>Category : </label>";
			echo "<p style='grid-column:2;grid-row:2'>{$cat->catDesc}</p>";
	        
		    echo"<label style='grid-column:1;grid-row:3'>Venue : </label>";
			echo "<p style='grid-column-start:2;grid-column-end:4;grid-row:3'>{$venue->venueName}</p>";
		    echo " <img src='Immagini/{$cat->catDesc}.jpg'></section>";
			echo"<section><label>Start Date : </label>";
			echo "<p>$startDate</p>";
			echo"<label>End Date: </label>";
		    echo "<p>$endDate</p></section>";
		
		
		if(!empty($desc))
		{
			echo"<section><label style='grid-column:1'>Description : </label>";
			echo "<p style='grid-column-start:2; grid-column-end:5'>".$desc."</p></section>";
		}
		
	
	
	$dbConn->close();
	}
	?>
			</fieldset>
	
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
