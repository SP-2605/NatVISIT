<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php#booking");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explore More Tours</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:4rem">
    <a class="navbar-brand" href="#"><img src="img/logo-green-1x.png" style="height: 2.5rem;" alt="Logo"> NatVISIT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Option-1</a>
                        <a class="dropdown-item" href="#">Option-2</a>
                        <a class="dropdown-item" href="#">Option-3</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" style="position: relative;left: 57rem;" action="showtable2.php" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="cname">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search Via Country</button>
            </form>
        </div>

        <div class="content" style="display:block; position:relative; top:3rem; text-align:center; right:0rem">
            <!-- logged in user information -->
            <img id="profile" src="img/man.png" alt="Img" style="height:3.5rem; margin-bottom:1rem;border-color:green">
            <!-- notification message -->
  	
            <?php  if (isset($_SESSION['username'])) : ?>
                <p><strong>HI</strong> <strong style="text-transform:uppercase"><?php echo $_SESSION['username']; ?></strong></p>
                <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            <?php endif ?>
        </div>

</nav>

<form action="showtable.php" method="POST">

<div class="form-check form-check-inline" style="position:relative; left:82rem; top:1.1rem">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Mountain">
    <label class="form-check-label" for="inlineRadio1" style="cursor:pointer; margin-right:1rem">Mountain</label>

    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Sea">
    <label class="form-check-label" for="inlineRadio2" style="cursor:pointer; margin-right:1rem">Sea</label>

    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Land">
    <label class="form-check-label" for="inlineRadio3" style="cursor:pointer">Land</label>
</div>
<button type="submit" class="btn btn-outline-success" style="position: relative; left: 82.2rem; top: 1rem; height: 2.5rem; width: 10.5rem;">Search Via Terrain</button>

</form>
<!-- SEA-EXPLORER -->
<div class="container" style="margin-top:3rem">
  <div class="row">
    <div class="col">
        <div class="card-deck">
            <div class="card">
                <img src="img/sea-explorer (1).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CARIBBEAN SEA</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. </p>
                    <p class="card-text"><a href="sea1.php">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card-deck">
            <div class="card">
                <img src="img/sea-explorer (2).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SEA OF MARMARA</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    <p class="card-text"><a href="sea1.php">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card-deck">
            <div class="card">
                <img src="img/sea-explorer (3).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">RED SEA</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    <p class="card-text"><a href="sea1.php">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card-deck">
            <div class="card">
                <img src="img/sea-explorer (4).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SEA OF OKHOTSK</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    <p class="card-text"><a href="sea1.php">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>
 </div>
</div>
<!-- SNOW-ADV -->
<div class="container" style="margin-top:3rem">
  <div class="row">
    <div class="col">
        <div class="card-deck">
            <div class="card">
                <img src="img/snow-adv (1).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">MEILI SNOW MOUNTAIN</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid.</p>
                    <p class="card-text"><a href="sea1.php">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card-deck">
            <div class="card">
                <img src="img/snow-adv (2).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">MOUNT NAMCHA BARWA</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid.</p>
                    <p class="card-text"><a href="sea1.php">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card-deck">
            <div class="card">
                <img src="img/snow-adv (3).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">MOUNT QOGIR</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    <p class="card-text"><a href="sea1.php">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card-deck">
            <div class="card">
                <img src="img/snow-adv (4).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">MOUNT GONGGA</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    <p class="card-text"><a href="sea1.php">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>
 </div>
</div>
<!-- FOREST HICK -->
<div class="container" style="margin-top:3rem">
  <div class="row">
    <div class="col">
        <div class="card-deck">
            <div class="card">
                <img src="img/forest-hick (1).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">INCA TRAIL</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    <p class="card-text"><a href="sea1.php">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card-deck">
            <div class="card">
                <img src="img/forest-hick (2).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ROUTEBURN TRACK</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    <p class="card-text"><a href="sea1.php">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card-deck">
            <div class="card">
                <img src="img/forest-hick (3).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">OVERLAND TRACK</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    <p class="card-text"><a href="sea1.php">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card-deck">
            <div class="card">
                <img src="img/forest-hick (4).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">THE NARROWS</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    <p class="card-text"><a href="sea1.php">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>
 </div>
</div>

<!-- FOOTER -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

		
</body>
</html>