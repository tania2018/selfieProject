	
<!-- ....................................................TOP BAR......................................................... -->
	<div class="navbar-wrapper">
		<div style="font-family:cursive; font-size: 20px; margin:0px; padding-top:05px; float:left; padding-left:40px"><img src="logo.png"></div>
		<p style="font-family:arial; font-size: 20px; margin:0px; padding-top:15px; padding-right:50px; float:right">Welcome, <?php echo $_SESSION["sess_username"] ?></p>
	</div>
 


<!-- ....................................................MENU......................................................... -->
	<div style="float:left; width:200px; background-color:#00ace7; height:100%; position:fixed; padding-top:100px;">
		<ul>
			<a href="index.php">
				<?php
					if( basename($_SERVER['PHP_SELF'], '.php') == 'index' ) {
		    			echo "<li style= 'background-color: #9d2281'>Dash Board</li>";
					} else {
		    			echo "<li>Dash Board</li>";
					}
				?>
			</a>

			<a href="views.php">
				<?php
					if( basename($_SERVER['PHP_SELF'], '.php') == 'views' ) {
		    			echo "<li style= 'background-color: #9d2281'>Logo and Votes</li>";
					} else {
		    			echo "<li>Logo and Votes</li>";
					}
				?>
			</a>

			<a href="rules.php">
				<?php
					if( basename($_SERVER['PHP_SELF'], '.php') == 'rules' ) {
		    			echo "<li style= 'background-color: #9d2281'>Rules</li>";
					} else {
		    			echo "<li>Rules</li>";
					}
				?>
			</a>


			<!-- <a href="hdm.php">
				<?php
					if( basename($_SERVER['PHP_SELF'], '.php') == 'hdm' ) {
		    			echo "<li style= 'background-color: #9d2281'>About HDM</li>";
					} else {
		    			echo "<li>About HDM</li>";
					}
				?>
			</a> -->

			<a href="logout.php"><li>Logout</li></a>

		</ul>
	</div>