			<?php
				

				$server = "http://localhost/surecash_selfie_contest/";

			// $server = "http://magnitolab.com/surecash_selfie_contest/";



			
			
			$con=mysqli_connect("localhost","root","root","surecash_selfie");
				// Check connection
				if (mysqli_connect_errno()) {
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				// $con=mysqli_connect("localhost","USERNAME","PASSWORD","DATABASE_NAME");
				// // Check connection
				// if (mysqli_connect_errno()) {
				//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
				// }


			// $con=mysqli_connect("localhost","labmagni_admin","thisispolash07","labmagni_surecash");
			// 	// Check connection
			// 	if (mysqli_connect_errno()) {
			// 	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			// 	}
