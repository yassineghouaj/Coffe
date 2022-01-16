<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Coffee project</title>
    <!-- Swiper Bundle CDN Link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custiome Css File Link -->
    
    <!-- <link rel="stylesheet" type="text/css" href="style/normalize.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.scss">
    

</head>


<body>
<header>
    <a href="home" class="logo"><i class="fa fa-coffee" aria-hidden="true"></i>calais</a>
    <nav class="navbar">
        <a href="home" class="">home</a>
        <a href="dashboard" class="">dashboard</a>
        <a href="reservation">reservation</a>
        <a href="myreservations">my reservation</a>
        <a href="services">services</a>
        <a href="logout">logout</a>
        <a class="nav-link " href="home"><?php echo $_SESSION['fullname'];?></a>
    </nav>
    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>
   
</header>
<!-- content -->

