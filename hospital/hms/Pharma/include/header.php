<?php error_reporting(0); ?>
<header class="navbar navbar-default navbar-static-top">
	<!-- start: NAVBAR HEADER -->
	<div class="navbar-header">
		<a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
			<i class="ti-align-justify"></i>
		</a>
		<a class="navbar-brand" href="#">
			<img src="..assets/images/logo11.png" alt="">
		</a>
		<a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
			<i class="ti-align-justify"></i>
		</a>
		<a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<i class="ti-view-grid"></i>
		</a>
	</div>
	<!-- end: NAVBAR HEADER -->
	<!-- start: NAVBAR COLLAPSE -->
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-right">
			<!-- start: MESSAGES DROPDOWN -->
			<li style="padding-top:2% ">
				<h2 style="font-weight: 400;">Patient Registration System, IITG Hospital</h2>
			</li>


			<li class="dropdown current-user">
				<a href class="dropdown-toggle" data-toggle="dropdown">
					<img src="assets/images/images.jpg"> <span class="username">



						<?php $query = mysqli_query($con, "select pharmacy_name from pharmacy where pharmacy_id='" . $_SESSION['id'] . "'");
						while ($row = mysqli_fetch_array($query)) {
							echo $row['pharmacy_name'];
						}
						?> <i class="ti-angle-down"></i></i></span>
				</a>
				<ul class="dropdown-menu dropdown-dark" >
					<li>
						<a href="edit-profile.php" style="padding: 20px;">
							My Profile
						</a>
					</li>

					<li>
						<a href="change-password.php" style="padding: 20px;">
							Change Password
						</a>
					</li>
					<li>
						<a href="logout.php" style="padding: 20px;">
							Log Out
						</a>
					</li>
				</ul>
			</li>
			<!-- end: USER OPTIONS DROPDOWN -->
		</ul>
		<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
		<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
			<div class="arrow-left"></div>
			<div class="arrow-right"></div>
		</div>
		<!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
	</div>


	<!-- end: NAVBAR COLLAPSE -->
</header>