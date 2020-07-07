<div class="container-fluid"><a class="navbar-brand border rounded-0 shadow" data-bs-hover-animate="pulse" href="Home.php" style="font-size: 30px;filter: hue-rotate(0deg); transition: all 2s;">VVUEMS</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navcol-1">

    <ul class="nav navbar-nav ml-auto">
    	<?php if ($_SERVER['SCRIPT_FILENAME'] == 'C:/xampp/htdocs/VVUEMS/Home.php'): ?>
    		<li class="nav-item" role="presentation"><a class="nav-link active" href="Home.php">Home</a></li>
    	<?php else: ?>	
    		<li class="nav-item" role="presentation"><a class="nav-link" href="Home.php">Home</a></li>
    	<?php endif ?>

    	<?php if ($_SERVER['SCRIPT_FILENAME'] == 'C:/xampp/htdocs/VVUEMS/form.php'): ?>
    		<li class="nav-item" role="presentation"><a class="nav-link active" href="form.php">Book An Event</a></li>
    	<?php else: ?>	
    		<li class="nav-item" role="presentation"><a class="nav-link" href="form.php">Book An Event</a></li>
    	<?php endif ?>

    	<?php if ($_SERVER['SCRIPT_FILENAME'] == 'C:/xampp/htdocs/VVUEMS/listEvents.php'): ?>
    		<li class="nav-item" role="presentation"><a class="nav-link active" href="listEvents.php">My Events</a></li>
    	<?php else: ?>	
    		<li class="nav-item" role="presentation"><a class="nav-link" href="listEvents.php">My Events</a></li>
    	<?php endif ?>

    	<?php if ($_SERVER['SCRIPT_FILENAME'] == 'C:/xampp/htdocs/VVUEMS/contact.php'): ?>
    		<li class="nav-item" role="presentation"><a class="nav-link active" href="contact.php">Contact Us</a></li>
    	<?php else: ?>	
    		<li class="nav-item" role="presentation"><a class="nav-link" href="contact.php">Contact Us</a></li>
    	<?php endif ?>
        
        <div class="dropdown">
	        	<a href="#" class="nav-link nav-item dropdown-toggle" data-toggle="dropdown"><?php 
	        	$name = $_SESSION['fname']. " " . $_SESSION['mname']." ".$_SESSION['lname']; 

	        	echo $name;?></a>
	        	<span class="caret"></span>
			  <div role="menu" class="dropdown-menu nav-item" 
			  					style="padding: 20px;
									  margin: 20px;
									  background-color: rgba(0,0,0,0.85);;
									  ">
			    <a class="nav-link " href="require/User_Logout.php">Log Out<i class="fa fa-sign-out"
			    	style="padding: 5px"></i></a>
			  </div>
        </div>
    </ul>
    </div>
</div>