<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>lostBooks</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		.srch
		{
			padding-left: 1000px;

		}
		
		body {

  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  
		background-image:url("images/12.jpg");
		background-color: #cccccc;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

	
}

.sidenav {
  height: 100%;
  margin-top: 50px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: white;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img-circle
{
	margin-left: 20px;
}
.h:hover
{
	color:white;
	width: 300px;
	height: 50px;
	background-color: #00544c;
}

.book
{
    width: 400px;
    margin: 0px auto;
}
.form-control
{
  background-color: #080707;
  color: white;
  height: 40px;
}

	</style>


</head>
<body>
	<!--_________________sidenav_______________-->
	
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
                if(isset($_SESSION['login_user']))

                { 	echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user']; 
                }
                ?>
            </div><br><br>

 <div class="h"> <a href="addlostmaterials.php">Add Lost Material</a> </div> 
  <div class="h"> <a href="editlostmaterials.php">Edit Lost Material </a></div>
  <div class="h"> <a href="report.php">Report Manmagement</a></div>
  
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer; color: black;" onclick="openNav()">&#9776; open</span>
  <div class="container" style="text-align: center;">
    <h2 style="color:black; font-family: Lucida Console; text-align: center"><b>Add </b></h2>
    
    <form class="book" action="" method="post">
        
        <input type="text" name="lid" class="form-control" placeholder=" id" ><br>
        <input type="text" name="loname" class="form-control" placeholder=" Name" ><br>
		<input type="text" name="category" class="form-control" placeholder=" Category" ><br>
        <input type="text" name="author3" class="form-control" placeholder="Authors Name"><br>
		<input type="text" name="language3" class="form-control" placeholder="Language"><br>
		<input type="text" name="purchasedate3" class="form-control" placeholder="PurchaseDate"><br>
		<input type="text" name="lostdate3" class="form-control" placeholder="Lost Date"><br>
		<input type="text" name="price3" class="form-control" placeholder="Price"><br>
		<input type="text" name="year3" class="form-control" placeholder="Year"><br>
        <input type="text" name="monthissue3" class="form-control" placeholder="Month Issue" ><br>
		<input type="text" name="edition3" class="form-control" placeholder="Edition" ><br>
		<input type="text" name="isbn3" class="form-control" placeholder="ISBN"><br>
      <input type="text" name="department3" class="form-control" placeholder="Department"><br>
       

        <button style="text-align: center;" class="btn btn-default" type="submit" name="submit">ADD</button>
    </form>
  </div>
<?php
    if(isset($_POST['submit']))
    {
      
        mysqli_query($db,"INSERT INTO lostmaterial VALUES ('$_POST[lid]', '$_POST[loname]', '$_POST[category]','$_POST[author3]', '$_POST[language3]','$_POST[purchasedate3]', '$_POST[lostdate3]','$_POST[price3]', '$_POST[year3]','$_POST[monthissue3]','$_POST[edition3]','$_POST[isbn3]','$_POST[department3]' );");
        ?>
          <script type="text/javascript">
            alert(" Added Successfully.");
          </script>

        <?php

      }
      else
      {
        
      }
    
?>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "#024629";
}
</script>

</body>
</html>