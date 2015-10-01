<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Leaf Links Golf Club</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Leaf Links Golf Club</a>
            </div>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.html">Home</a>
                    </li>
					<li class="page-scroll">
                        <a href="selectform.php">Select A Member</a>
                    </li>
                    <li class="page-scroll">
                        <a href="insertform.html">Add Member</a>
                    </li>
                    <li class="page-scroll">
                        <a href="deleteform.php">Delete Member</a>
                    </li>
					<li class="page-scroll">
                        <a href="updateform.php">Change Locker Price</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
   <!-- Header -->

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
					<h2>Select A Member </h2>
					<p>To select a member from the system, please enter the member ID of the person you require. All members currently enrolled are located in the table to the right. Please use this table to find the member ID that you require.</p>
					
					<!--HTML form that calls PHP script-->
						<form role ="form" action="selectrecord.php" method="post">
						Member ID: <input type="text" name="member_id" />

					<input type="submit" />
					</form>
                   </div>
				   
				   <!--PHP script that displays all members in a table-->
				 <div class="col-lg-6">
					<h2>Member Information</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "timmymurray";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//sql to echo out members 
$sql = "SELECT * FROM members order by member_id asc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<br>";
        echo " - ID: " . $row["member_id"]. "<br>". "- Fees Due: " .$row["fees_due_date"]. "<br>"." - First Name: " . $row["first_name"]."<br>".  " - Last Name: " . $row["last_name"].  "<br>". " - Phone No: ". $row["phone"]. "<br>". "- Email: ".$row["email"].  "<br>". " - Address: ". $row["address"]."<br>";
		echo "</table>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
				</div>
                </div>
            </div>

        </div>
   <br>
	<!--Footer-->
	<div class="alt2">
		<div class="container">
			<footer>&copy; Leaf Links Golf Club 2015<br>
			<a href="#">Back To Top</a>
			</footer>
		</div>
	</div><!--End Footer-->

	



</body>
</html> 