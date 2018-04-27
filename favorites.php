<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<ul class = "list">
	   <li><a href="#">Categories</a>
		<ul>
		<li>
	    		<a href="#">Auto & Tires</a>
				<ul>
				<li><a href="#">Oils & Fluids</a>
					<ul>
					<li><a href="oil.html">Motor Oil</a></li>
					<li><a href="fluid.html">Collant & Fluids</a></li>
					<li><a href="antifreeze.html">Antifreeze</a></li>
					</ul>
				</li>
				<li><a href="#">Auto Electronics</a>
					<ul>
					<li><a href="stereo.html">Car Stereo</a></li>
					<li><a href="speaker.html">Car Speaker</a></li>
					<li><a href="cardvd.html">Car DVD</a></li>
					</ul>
				</li>
				</ul>
		</li>
		<li>
	   		<a href="#">Photo & Personalized Shop</a>
				<ul>
				<li><a href="#">Photo Center</a>
					<ul>
					<li><a href="calendars.html">Calendars</a></li>
					<li><a href="invotations.html">Invitations</a></li>
					</ul>

				</li>
				<li><a href="#">Gift Cards</a>
					<ul>
					<li><a href="corporate.html">Corporate Gift Card</a></li>
					<li><a href="speciality.html">Speciality Gift Card</a></li>
					</ul>
				</li>
				</ul>


		</li>
		<li>
	    		<a href="#">Electronics and Office</a>
				<ul>
				<li><a href="#">TV & Video</a>
					<ul>
					<li><a href="dvd.html">DVD</a></li>
					<li><a href="accessories.html">TV Accessories</a></li>
					</ul>
				</li>
				<li><a href="#">Cell Phones</a>
					<ul>
					<li><a href="contract.html">Contract Phones</a></li>
					<li><a href="unlocked.html">Unlocked Phones</a></li>
					</ul>
				</li>
				<li><a href="computers.html">Computers</a></li>
				</ul>


		</li>
		<li>
			<a href="#">Movies, Music & Books</a>
				<ul>
				<li><a href="#">Music & TV</a>
					<ul>
					<li><a href="new.html">New Releases</a></li>
					<li><a href="all.html">All Music & TV</a></li>
					</ul>

				</li>
				<li><a href="#">Books</a>
					<ul>
						<li><a href="newbooks.html">New Releases</a></li>
						<li><a href="literature.html">Literature & Fiction</a></li>
						<li><a href="comics.html">Comics & Graphic Novels</a></li>
						</ul>


					</li>
				</ul>


		</li>
		<li>
			<a href="#">Home, Furniture & Appliances</a>
				<ul>
				<li><a href="brand.html">Brand Stores</a></li>
				<li><a href="#">Home Decor</a>
					<ul>
						<li><a href="furniture.html">Furniture</a></li>
						<li><a href="kitchen.html">Kitchen & Dining</a></li>
					</ul>
				</li>
				<li><a href="electronics.html">Electronics & Appliances</a></li>
				</ul>


		</li>
		<li>
			<a href="#">Clothing, Shoes & Jewelry</a>
				<ul>
				<li><a href="men.html">Men's</a></li>
				<li><a href="#">Women's</a>
					<ul>
						<li><a href="jewelry.php">Jewelry</a></li>
						<li><a href="maternity.html">Maternity</a></li>
					</ul>

				</li>
				<li><a href="shoes.html">All Shoes</a></li>
				</ul>


		</li>
		<li>
			<a href="#">Pharmacy, Health & Beauty</a>
				<ul>


				<li><a href="oral.html">Oral Care</a></li>
				<li><a href="#">Bath & Beauty</a>
					<ul>
						<li><a href="body.html">Body Wash</a></li>
						<li><a href="lotion.html">Lotions</a></li>
					</ul>
				</li>
				</ul>


		</li>
		<li>
			<a href="#">Sports, Fitness & Outdoors</a>
				<ul>
				<li><a href="#">Exercise & Fitness</a>
					<ul>
						<li><a href="bikes.html">Bikes</a></li>
						<li><a href="treadmill.html">Treadmills</a></li>
						</ul>

				</li>
				<li><a href="#">Recreation</a>
					<ul>
						<li><a href="air.html">Air Soft</a></li>
						<li><a href="lawn.html">Lawn Games</a></li>
						</ul>
				</li>
				</ul>


		</li>
		</ul>
	</li>

	<li><form action='search.php' method='post'>
	        <input type="search" name='search' placeholder="Search Item">
	    </form>
	</li>

	<li><a href="favorites.php">Favorites</a></li>


	<li><a href="personal_user.php">Personal Information</a></li>
	<li><a href="postitem.html">Sell an item</a></li>
	<li><a href="cart.php">Cart</a></li>

	<li><a href="logout.php">Logout</a></li>

	</ul>

	<h1><I> Your Favorites</I></h1>;


	<?php


	$email = $_SESSION['email'];

	  $dbhost = "localhost";
	  $dbuser = "root";
	  $dbpass = "";
	  $db = "dCoders";

	  $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
	  if(mysqli_connect_error())
	  {
	      die("connection failed:" . mysqli_connect_error());
	  }

	  $get_fav = "SELECT * FROM Favorite where email='$email';";

	  $is_correct = mysqli_query($connect, $get_fav);
	  $count = 0;
	  $total_item_rows = mysqli_num_rows($is_correct);

	    $result = 0;
	  if(!$is_correct){
	      echo mysqli_error($connect);
	  }
	//cart(email, itemid, itemname, category)
	  for ($i = 1; $i <= $total_item_rows; $i++) {
	    $currow = mysqli_fetch_assoc($is_correct);
	    //$currname = $currrow['itemid'];
			//$curemail = $currrow['email'];
			//$curid =$currrow['auctionid'];
			//$curcategory =$currow['category'];
			$curitem =$currow['itemname'];
			$jpg=$currow['jpg'];
			$auctionid2 = $currow['jpg'];
			$cprice = $currow['buyitnow'];
			print "<img src=\"$auctionid2\" width=\"250px\" height=\"250px\"\ />";
			echo $curitem;
			echo $cprice;




	}

	?>

	<meta charset="UTF-8">
    	<link rel="stylesheet" type="text/css" href="indexStyle.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    	<!-- jQuery library -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    	<!-- Latest compiled JavaScript -->
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   	<link rel="p">
   	<title>eAuction Homepage</title>

<style>
		ul {
			list-style: none;
			padding: 0;
			margin: 0;
			background: #1bc2a2;
		}

		ul li {
			display: block;
			position: relative;
			float: left;
			background: #1bc2a2;
		}

		li ul { display: none; }
		ul li a {
			display: block;
			padding: 1em;
			text-decoration: none;
			white-space: nowrap;
			color: #fff;
		}
		ul li a:hover { background: #2c3e50; }

		li:hover > ul {
			display: block;
			position: absolute;
		}

		li:hover li { float: none; }
		li:hover a { background: #1bc2a2; }
		li:hover li a:hover { background: #2c3e50; }
		.list li ul li { border-top: 0; }


		ul ul ul {
			left: 100%;
			top: 0;
		}

		ul:before,
		ul:after {
			content: " "; /* 1 */
			display: table; /* 2 */
		}

		ul:after { clear: both; }

</style>
</head>


<body>


</body>
</html>
