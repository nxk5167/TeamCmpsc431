<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
    	<link rel="stylesheet" type="text/css" href="indexStyle.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    	<!-- jQuery library -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    	<!-- Latest compiled JavaScript -->
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   	<link rel="p">
   	<title>eAuction Homepage</title>
		<ul class = "list">
		   <li><a href="#">Categories</a>
			<ul>
			<li>
		    		<a href="#">Auto & Tires</a>
					<ul>
					<li><a href="#">Oils & Fluids</a>
						<ul>
						<li><a href="oil.php">Motor Oil</a></li>
						<li><a href="fluid.php">Collant & Fluids</a></li>
						<li><a href="antifreeze.php">Antifreeze</a></li>
						</ul>
					</li>
					<li><a href="#">Auto Electronics</a>
						<ul>
						<li><a href="stereo.php">Car Stereo</a></li>
						<li><a href="speaker.php">Car Speaker</a></li>
						<li><a href="cardvd.php">Car DVD</a></li>
						</ul>
					</li>
					</ul>
			</li>
			<li>
		   		<a href="#">Photo & Personalized Shop</a>
					<ul>
					<li><a href="#">Photo Center</a>
						<ul>
						<li><a href="calendars.php">Calendars</a></li>
						<li><a href="invotations.php">Invitations</a></li>
						</ul>

					</li>
					<li><a href="#">Gift Cards</a>
						<ul>
						<li><a href="corporate.php">Corporate Gift Card</a></li>
						<li><a href="speciality.php">Speciality Gift Card</a></li>
						</ul>
					</li>
					</ul>


			</li>
			<li>
		    		<a href="#">Electronics and Office</a>
					<ul>
					<li><a href="#">TV & Video</a>
						<ul>
						<li><a href="dvd.php">DVD</a></li>
						<li><a href="accessories.php">TV Accessories</a></li>
						</ul>
					</li>
					<li><a href="#">Cell Phones</a>
						<ul>
						<li><a href="contract.php">Contract Phones</a></li>
						<li><a href="unlocked.php">Unlocked Phones</a></li>
						</ul>
					</li>
					<li><a href="computers.php">Computers</a></li>
					</ul>


			</li>
			<li>
				<a href="#">Movies, Music & Books</a>
					<ul>
					<li><a href="#">Music & TV</a>
						<ul>
						<li><a href="new.php">New Releases</a></li>
						<li><a href="all.php">All Music & TV</a></li>
						</ul>

					</li>
					<li><a href="#">Books</a>
						<ul>
							<li><a href="newbooks.php">New Releases</a></li>
							<li><a href="literature.php">Literature & Fiction</a></li>
							<li><a href="comics.php">Comics & Graphic Novels</a></li>
							</ul>


						</li>
					</ul>


			</li>
			<li>
				<a href="#">Home, Furniture & Appliances</a>
					<ul>
					<li><a href="brand.php">Brand Stores</a></li>
					<li><a href="#">Home Decor</a>
						<ul>
							<li><a href="furniture.php">Furniture</a></li>
							<li><a href="kitchen.php">Kitchen & Dining</a></li>
						</ul>
					</li>
					<li><a href="electronics.php">Electronics & Appliances</a></li>
					</ul>


			</li>
			<li>
				<a href="#">Clothing, Shoes & Jewelry</a>
					<ul>
					<li><a href="men.php">Men's</a></li>
					<li><a href="#">Women's</a>
						<ul>
							<li><a href="jewelry.php">Jewelry</a></li>
							<li><a href="maternity.php">Maternity</a></li>
						</ul>

					</li>
					<li><a href="shoes.php">All Shoes</a></li>
					</ul>


			</li>
			<li>
				<a href="#">Pharmacy, Health & Beauty</a>
					<ul>


					<li><a href="oral.php">Oral Care</a></li>
					<li><a href="#">Bath & Beauty</a>
						<ul>
							<li><a href="body.php">Body Wash</a></li>
							<li><a href="lotion.php">Lotions</a></li>
						</ul>
					</li>
					</ul>


			</li>
			<li>
				<a href="#">Sports, Fitness & Outdoors</a>
					<ul>
					<li><a href="#">Exercise & Fitness</a>
						<ul>
							<li><a href="bikes.php">Bikes</a></li>
							<li><a href="treadmill.php">Treadmills</a></li>
							</ul>

					</li>
					<li><a href="#">Recreation</a>
						<ul>
							<li><a href="air.php">Air Soft</a></li>
							<li><a href="lawn.php">Lawn Games</a></li>
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
		<h1><I>All New Music & TV</I></h3>



		<?php
		$dbhost = "localhost";

		$dbuser = "root";

		$dbpass = "";

		$db = "dCoders";

		$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
		if(mysqli_connect_error())
		{
		    die("connection failed:" . mysqli_connect_error());
		}

		mysqli_select_db($connect ,"dCoders");

		$sql1 = "SELECT auctionid FROM AuctionItems WHERE category = 'KS';";

		$result = mysqli_query($connect,$sql1);
		//echo $result;
		$count = 0;
		$total_rows = mysqli_num_rows($result);
		$is_correct = 0;


		for ($i = 1; $i <= $total_rows; $i++) {
			$id = mysqli_fetch_assoc($result);
			$auctionid = $id['auctionid'];

			if($auctionid != "0") {

				$sql2 = "SELECT jpg,email,auctionid,category,itemname FROM AuctionItems WHERE auctionid = $auctionid;";

				$result2 = mysqli_query($connect,$sql2);
				//echo $result;

				$id2 = mysqli_fetch_assoc($result2);

				$auctionid2 = $id2['jpg'];
				$_SESSION['email'] = $id2['email'];
				$_SESSION['$auctionid'] =$id2['auctionid'];
				$_SESSION['category'] =$id2['category'];
				$_SESSION['itemname'] =$id2['itemname'];
				$_SESSION['jpg'] =$id2['jpg'];

					//<img src = "<?php echo $auctionid2;" height = "250" width = "250"/>
					print "<img src=\"$auctionid2\" width=\"250px\" height=\"250px\"\ />";
				print "<a href='put_in_cart.php'> Add to Cart </a> ";
				print "<a href='put_in_favorites.php'> Add to Favorites </a> ";
				print "<a href='bid.php'> Start Bidding! </a> ";
			}
		}


		?>
		<br><br><br>
		<h2>Related Suggestions</h2>
		<?php

		$sql1 = "SELECT auctionid FROM AuctionItems WHERE category = 'IA';";
		$result = mysqli_query($connect,$sql1);
		$total_rows = mysqli_num_rows($result);
		$is_correct = 0;
		$is_count = 0;
		if($total_rows > 0){
		while($total_rows > 0 || $is_count<3){
			$id = mysqli_fetch_assoc($result);
			$auctionid = $id['auctionid'];

			if($auctionid != "0") {

				$sql2 = "SELECT jpg,email,auctionid,category,itemname FROM AuctionItems WHERE auctionid = $auctionid;";

				$result2 = mysqli_query($connect,$sql2);
				//echo $result;

				$id2 = mysqli_fetch_assoc($result2);

				$auctionid2 = $id2['jpg'];
				$_SESSION['email'] = $id2['email'];
				$_SESSION['$auctionid'] =$id2['auctionid'];
				$_SESSION['category'] =$id2['category'];
				$_SESSION['itemname'] =$id2['itemname'];
				$_SESSION['jpg'] =$id2['jpg'];

					//<img src = "<?php echo $auctionid2;" height = "250" width = "250"/>
					print "<img src=\"$auctionid2\" width=\"250px\" height=\"250px\"\ />";
				print "<a href='put_in_cart.php'> Add to Cart </a> ";
				print "<a href='put_in_favorites.php'> Add to Favorites </a> ";
				print "<a href='bid.php'> Start Bidding! </a> ";
			}
		$total_rows = $total_rows-1;
		$is_count = $is_count+1;

		}
		}

		?>

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
