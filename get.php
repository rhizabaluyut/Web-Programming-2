<?php

function get_all_messages(){

		$que = "select * from message";
		$get = mysql_query($que);
		$list = array();
		if(mysql_num_rows($get)>0){
			while($row = mysql_fetch_assoc($get)){
					$list[] = $row;
			}
		}
		return $list;
	}
?>
