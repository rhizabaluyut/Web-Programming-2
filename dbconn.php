
<?php
	session_start();
	mysql_connect('localhost','root') && mysql_select_db('activity');
	include("get.php");
?>
	<?php
		$lists = get_all_messages();

		echo "<center>";
		echo "<table border = 2>";

		echo 
			"<td><b><b>"."Id"."</td>"
			."<td><b><b>"."Name"."</td>"."<br>"
			."<td><b><b>"."Email"."</td>"
			."<td><b><b>"."Message"."</td>"
			."<td><b><b>"."Date Posted"."</td>"
			."<td><b><b>"."Approve"."</td>"
			."<td><b><b>"."Actions"."</td>";
		
		
		
		foreach ($lists as $list) {
			echo 
			"<tr>"."<td>".$list['id']."</td>"
			."<td>".$list['name']."</td>"
			."<td>".$list['email']."</td>"
			."<td>".$list['message']."</td>"
			."<td>".$list['date_posted']."</td>"
			."<td>".$list['is_approved']."</td>"
			."<td><a href = 'approve.php?id=2'>approve</a></td>";

		}
		echo "</table>";
		
	?>
<br>
<br>
<a href = "front.php"><button>Return to Home</button></a></br>
