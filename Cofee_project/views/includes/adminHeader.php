<!DOCTYPE html>
<html>


<head>
	<title>cofee</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
<link rel="stylesheet" href="style/style.css">	
<link rel="stylesheet" href="style/main.js">	

</head>






<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="myreservations">my_reservations</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="reservation">Reservation <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard">dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services">services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="logout">logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="home"><?php echo $_SESSION['fullname'];?></a>
      </li>
    </ul>
  </div>
</nav>