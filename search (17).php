<?php

	//make a table of database (database name - Shop)
	//table name- products
	//   id | product | proc | battery | rcamera  | fcamera | dimension | ram | rom | price

  $servername = "sql101.epizy.com";
  $username = "epiz_28200844";
  $password = "3U31aQdjmuaq";
  $dbname = "epiz_28200844_mgshop";
	$conn = mysqli_connect("$servername","$username","$password","$dbname"); 
	
	
	
//Dont touch	
	if(mysqli_connect_errno()){
		echo "Error occured:".mysqli_connect_errno();
	}
	else{
		$product = $_GET['search'];
		$sql = "SELECT * FROM products where `product`='".$product."'";
		$result = mysqli_query($conn,$sql);
	    $data = mysqli_fetch_assoc($result);
	    mysqli_free_result($result);
	}
	mysqli_close($conn);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>its website </title>
</head>

<body>
  <h1> MG Mobile Shop </h1>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MG Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
          <form class="d-flex" method="get" action="search.php" >
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    
    
    
      <div class="container ">
    <main>
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 fw-normal">MG Shop</h1>
          <p class="lead fw-normal">In our shops you gets best product and quality product at lowest price <br> Shop Timing 10am to 10pm
             </p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
      </div>
    
      <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
          <div class="my-3 py-3">
          
            <h2 class="display-5"><?php echo $data['product']; ?></h2>				
            <p class="lead"> 
                  Processor - <?php echo $data['proc']; ?>
             <br> Battery Capacity - <?php echo $data['battery']; ?>
             <br> Rear Camera - <?php echo $data['rcamera']; ?>
             <br> Front Camera - <?php echo $data['fcamera']; ?>
             <br> Display - <?php echo $data['dimension']; ?>
             <br> RAM - <?php echo $data['ram']; ?>
             <br> ROM - <?php echo $data['rom']; ?>
             <br> Price - <?php echo $data['price']; ?>
            </p>
          </div>
          <div >
          <img class="bg-light shadow-sm mx-auto" style="width: 45%; height: 300px; border-radius: 21px 21px 0 0;" src="<?php echo $data['img']; ?>" alt="">
          </div>
        </div>
        </div>
      </div>
      
    </main>
  </div>
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>© 2020-2021 MG Shop, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
</body>

</html>
