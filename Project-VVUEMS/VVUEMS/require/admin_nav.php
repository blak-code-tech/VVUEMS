<nav class="navbar navbar-dark navbar-expand-md fixed-top" id="myNavbar">
        <div class="container-fluid"><a class="navbar-brand border rounded-0 shadow" href="#" data-bs-hover-animate="pulse" style="font-size: 30px;filter: hue-rotate(0deg);">VVUEMS-ADMIN</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <?php if ($_SERVER['SCRIPT_FILENAME'] == 'C:/xampp/htdocs/VVUEMS/admin_customers.php'): ?>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="admin_customers.php">All Customers</a></li>
                    <?php else: ?>  
                        <li class="nav-item" role="presentation"><a class="nav-link" href="admin_customers.php">All Customers</a></li>
                    <?php endif ?>

                    <?php if ($_SERVER['SCRIPT_FILENAME'] == 'C:/xampp/htdocs/VVUEMS/admin_events.php'): ?>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="admin_events.php">All Events</a></li>
                    <?php else: ?>  
                        <li class="nav-item" role="presentation"><a class="nav-link" href="admin_events.php">All Events</a></li>
                    <?php endif ?>

                    <?php if ($_SERVER['SCRIPT_FILENAME'] == 'C:/xampp/htdocs/VVUEMS/admin_contacts.php'): ?>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="admin_contacts.php">All Messages</a></li>
                    <?php else: ?>  
                        <li class="nav-item" role="presentation"><a class="nav-link" href="admin_contacts.php">All Messages</a></li>
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
                        <a class="nav-link " href="require/admin_Logout.php">Log Out<i class="fa fa-sign-out"
                            style="padding: 5px"></i></a>
                      </div>
                    </div>
                </ul>
        </div>
        </div>
    </nav>