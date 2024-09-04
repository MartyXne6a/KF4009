<!--http://unn-w19020174.newnumyspace.co.uk/Assignment%20Part%20B/index.html-->
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width"><!--tell mobile browsers to make the size of the layout viewport equal to the device width or the size of the screen-->
    <meta name="viewport" content="width=device-width,maximum-scale=1.0">
	<!--to fix this modify the meta element that you just added so that it is as follows-->
	
  	<title>The North East Event - New Event creating form </title> 
	
    <link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php
	// include the PHP script where the connection to the server is created
             include 'database_conn.php';
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
<main class="newEvent" id="mainEvent">
	
	<h2>Add Event</h2>
	<!-- Form to enter details about a new Event scheduling -->
	<h3>Complete the form below to create a New Event</h3>
	
	<form method="get" action="adminProcess.php">
		<fieldset>
		<legend>(*)These fields are required</legend>
        <section>
	    <label>Title :<span>*</span></label><input type="text" name="title" maxlength="256" required>
		<label>Description :</label><textarea name="desc" maxlength="256" rows="10"></textarea>
		</section>
		
		
		<section>
		<label>Start Date :<span>*</span></label> <input type="date" name="startDate" placeholder="yyyy-mm-dd" required>
		<label>End Date:<span>*</span></label> <input type="date" name="endDate"placeholder="yyyy-mm-dd" required>
		</section>
		<section>
		<label>Price : </label> <input type="number" name="price" placeholder="£" step="any">
		</section>
		<section>
		<label>Category :<span>*</span> </label>
		
		<select name="catID" required>
			<option value="" selected hidden>Choose here</option>
			
			<?php
			//Construct queries to retrieve information from table NEE_category on the DB
			$query = "SELECT * FROM NEE_category;";
			
			/*Execute query and iterating it to use the data retrieved for dynamically creation of the select options available for the event's category  */
			$Result = $dbConn->query($query);
		    while($category=$Result->fetch_object())
			{
			echo"<option value='{$category->catID}'>{$category->catDesc}</option>";
			}
			?>
		</select>
		<label>Venue :<span>*</span> </label>
		<select name="venueID" required>
			<option value="" selected hidden>Choose here</option>
			<?php
			
			//Construct queries to retrieve information from tableNEE_venue on the DB
			$query = "SELECT venueID, venueName FROM NEE_venue;";
			
			/*Execute query and iterating it to use the data retrieved for dynamically creation of the select options available for the event's venue  */
			$Result = $dbConn->query($query);
		    while($venue=$Result->fetch_object())
			{
			echo"<option value='{$venue->venueID}'>{$venue->venueName}</option>";
			}
			
			$dbConn->close();
			?>
		</select>
		</section>
		
		<input type="submit" value="Create">
		</fieldset>
	</form>
</main>	
		
		
<footer>
	<!-- end flex container-->
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


