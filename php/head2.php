
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="student1.php"> Student</a>
            </div>

        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <!-- <div class="user-img-div">
                            <img src="img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $_SESSION['rainbow_name'];?>
                            <br />
                               
                            </div>
                        </div> -->

                    </li>


                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
					
                    

					 <li>
                        <a href="mess.php"><i class="fa fa-users "></i> Mess fees</a>
                    </li>
					<li>
                        <a href="formstu.php"><i class="fa fa-usd "></i>Forms</a>
                        <ol><a href="leave.php"> Leave form</ol></a>
                        <ol><a href="out.php"> Outing form</ol></a>
                        <ol><a href="wdl.php"> Working day form</ol></a>
                        <ol><a href="vacation.php"> Vacation mess form</ol></a>
                        <ol><a href="vacate.php"> Vacation hostel form</ol></a>
                        <ol><a href="leave.php">  form</ol></a>
                    </li>
					 <li>
                        <a href="notice.php"><i class="fa fa-file-text "></i> Notice</a>
                    </li>
					
					
					 <li>
                        <a href="logout.php"><i class="fa fa-power-off "></i>Logout</a>
                    </li>
					
			
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->