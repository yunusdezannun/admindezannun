<!DOCTYPE html>
<html>
<head>
<title>E-Furniture Management System</title>
<link type="text/css" rel="stylesheet" href=""/>

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script type="text/javascript">
function logout(){
		return confirm ("Do you want to logout?");
	}
</script>

<style type="text/css">
	body{
		margin: 0;
		padding: 0;

	}

	menu{
		position: absolute;
		height: 50px;
		width: 100%;
		
		z-index: 1;
	}
	.menu ul{ width: 100%; height: 100px; display: flex; flex-direction: row; background-color: blue;
justify-content: space-around; align-items: center;}
.menu ul li{ list-style: none; font-size: 12px; font-weight: bold;text-transform: uppercase; }
section {display: flex; }
.menu ul li a{
	display: block;
      padding: 20px 35PX;
      line-height: 30px;
      color: white;
      text-decoration: none;
      font-size: 11px;
      border-radius: 30px;
}

</style>


</head>
<body>
	<div class="container">
<header class="site-headers">
<nav>
<div class="logo">
<h1>
E-Furniture Management System
</h1>
</div>
<div class="menu">
<ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="form4add.php">Customers</a></li>
      <li><a href="#">Sales</a></li>
      <li><a href="ourproduct.php">Our products</a></li>
      <li><a href="#">About us</a></li>
      <li><a href="logini.php" onclick="return logout()">LOGOUT</a></li>

</ul>
</div>
</nav>
<section>
<div class="leftside">

</div>
<div class="rightside">

</div>
</section>
</header>

</body>
</html>


