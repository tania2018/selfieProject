<?php
// $connection = mysql_connect("localhost", "root", "root"); // Establishing Connection with Server..
// $db = mysql_select_db("mgift", $connection); // Selecting Database
//Fetching Values from URL
include("config.php");

$date=$_POST['date'];






$result = mysqli_query($con,"SELECT * FROM logo WHERE date='$date'");

				echo "<table border='1' width=95%>
				<tr>
					<th>Serial Number</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Logo</th>
					<th>Votes</th>
					<th>Time</th>
					<th>Date</th>
					<th>Status</th>
				</tr>";

				while($row = mysqli_fetch_array($result)) {
				  echo "<tr>";
				  echo "<td>" . $row['id'] . "</td>";
				  echo "<td>" . $row['name'] . "</td>";
				  echo "<td>" . $row['phone'] . "</td>";
				  echo "<td><img style='width:100px;' src='../upload/" . $row['pic'] . "'></td>";
				  echo "<td>" . $row['vote'] . "</td>";
				  echo "<td>" . $row['time'] . "</td>";
				  echo "<td>" . $row['date'] . "</td>";
				  

				  if ($row['status'] == 'approved') {
				  	echo "<td>Approved</br></br>";
				  	echo "<a href='disapprove.php?id=". $row['id'] ."' style='padding:5px; background-color:Red;' >Disapprove</a></td>";

				  }else{
				  	echo "<td>Disapproved</br></br>";
				  	echo "<a href='approve.php?id=". $row['id'] ."' style='padding:5px; background-color:Green;' >Approve</a></td>";
				  }


				  echo "</tr>";
				}

				echo "</table>";

				mysqli_close($con);




?>

