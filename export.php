<?php

header('Content-type: text/xml');
header('Content-Disposition: attachment; filename="user_data.xml"');

ini_set('display_errors', 1);

//connect
$link = mysqli_connect("localhost","user","password");
mysqli_select_db($link, "group8");

//get all the tables
// $query = 'SHOW TABLES FROM '."group8";
// $result = mysqli_query($link, $query) or die('cannot show tables');

	//prep output
	$tab = "\t";
	$br = "\n";
	$xml = '<?xml version="1.0" encoding="UTF-8"?>'.$br;

	$xml.= $tab.'<records>'.$br;

	// $xml.= '<database name="'."group8".'">'.$br;

	// $xml.= $tab.'<table name="annotation">'.$br;	
	//for annotation table
		$query1 = 'SELECT * FROM `annotation` WHERE `userID`="1"';
		$records = mysqli_query($link, $query1) or die('cannot select from table: '.annotation);
		
		//stick the records
		// $xml.= $tab.'<annotations>'.$br;
		while($record = mysqli_fetch_assoc($records))
		{
			$xml.= $tab.$tab.'<annotation>'.$br;
			foreach($record as $key=>$value)
			{
				$xml.= $tab.$tab.$tab.'<'.$key.'>'.htmlspecialchars(stripslashes($value)).'</'.$key.'>'.$br;
			}
			$xml.= $tab.$tab.'</annotation>'.$br;
		}
		// $xml.= $tab.'</annotations>'.$br;

		// $xml.= $tab.'</table>'.$br;


// $xml.= $tab.'<table name="blog">'.$br;
//for blog table
		$query1 = 'SELECT * FROM `blog` WHERE `userID`="1"';
		$records = mysqli_query($link, $query1) or die('cannot select from table: '.blog);
		
		//stick the records
		// $xml.= $tab.'<blogs>'.$br;
		while($record = mysqli_fetch_assoc($records))
		{
			$xml.= $tab.$tab.'<blog>'.$br;
			foreach($record as $key=>$value)
			{
				$xml.= $tab.$tab.$tab.'<'.$key.'>'.htmlspecialchars(stripslashes($value)).'</'.$key.'>'.$br;
			}
			$xml.= $tab.$tab.'</blog>'.$br;
		}
		// $xml.= $tab.'</blogs>'.$br;

		// $xml.= $tab.'</table>'.$br;


	
	//for circle table
		$query1 = 'SELECT * FROM `circle` WHERE `userID`="1"';
		$records = mysqli_query($link, $query1) or die('cannot select from table: '.circle);
		
		//stick the records
		while($record = mysqli_fetch_assoc($records))
		{
			$xml.= $tab.$tab.'<circle>'.$br;
			foreach($record as $key=>$value)
			{
				$xml.= $tab.$tab.$tab.'<'.$key.'>'.htmlspecialchars(stripslashes($value)).'</'.$key.'>'.$br;
			}
			$xml.= $tab.$tab.'</circle>'.$br;
		}


			//for circleFriends table
		$query1 = 'SELECT * FROM `circleFriends` WHERE `userID`="1"';
		$records = mysqli_query($link, $query1) or die('cannot select from table: '.circleFriends);
		
		//stick the records
		while($record = mysqli_fetch_assoc($records))
		{
			$xml.= $tab.$tab.'<circleFriends>'.$br;
			foreach($record as $key=>$value)
			{
				$xml.= $tab.$tab.$tab.'<'.$key.'>'.htmlspecialchars(stripslashes($value)).'</'.$key.'>'.$br;
			}
			$xml.= $tab.$tab.'</circleFriends>'.$br;
		}


					//for comment table
		$query1 = 'SELECT * FROM `comment` WHERE `userID`="1"';
		$records = mysqli_query($link, $query1) or die('cannot select from table: '.comment);
		
		//stick the records
		while($record = mysqli_fetch_assoc($records))
		{
			$xml.= $tab.$tab.'<comment>'.$br;
			foreach($record as $key=>$value)
			{
				$xml.= $tab.$tab.$tab.'<'.$key.'>'.htmlspecialchars(stripslashes($value)).'</'.$key.'>'.$br;
			}
			$xml.= $tab.$tab.'</comment>'.$br;
		}


		//for message table
		$query1 = 'SELECT * FROM `message` WHERE `userID`="1"';
		$records = mysqli_query($link, $query1) or die('cannot select from table: '.message);
		
		//stick the records
		while($record = mysqli_fetch_assoc($records))
		{
			$xml.= $tab.$tab.'<message>'.$br;
			foreach($record as $key=>$value)
			{
				$xml.= $tab.$tab.$tab.'<'.$key.'>'.htmlspecialchars(stripslashes($value)).'</'.$key.'>'.$br;
			}
			$xml.= $tab.$tab.'</message>'.$br;
		}


		//for photo table
		$query1 = 'SELECT * FROM `photo` WHERE `userID`="1"';
		$records = mysqli_query($link, $query1) or die('cannot select from table: '.photo);
		
		//stick the records
		while($record = mysqli_fetch_assoc($records))
		{
			$xml.= $tab.$tab.'<photo>'.$br;
			foreach($record as $key=>$value)
			{
				$xml.= $tab.$tab.$tab.'<'.$key.'>'.htmlspecialchars(stripslashes($value)).'</'.$key.'>'.$br;
			}
			$xml.= $tab.$tab.'</photo>'.$br;
		}



		//for photoCollection table
		$query1 = 'SELECT * FROM `photoCollection` WHERE `userID`="1"';
		$records = mysqli_query($link, $query1) or die('cannot select from table: '.photoCollection);
		
		//stick the records
		while($record = mysqli_fetch_assoc($records))
		{
			$xml.= $tab.$tab.'<photoCollection>'.$br;
			foreach($record as $key=>$value)
			{
				$xml.= $tab.$tab.$tab.'<'.$key.'>'.htmlspecialchars(stripslashes($value)).'</'.$key.'>'.$br;
			}
			$xml.= $tab.$tab.'</photoCollection>'.$br;
		}

//photoCollectionAccessRights table ??????????

//post table ????????



		//for profile table
		$query1 = 'SELECT * FROM `profile` WHERE `userID`="1"';
		$records = mysqli_query($link, $query1) or die('cannot select from table: '.profile);
		
		//stick the records
		while($record = mysqli_fetch_assoc($records))
		{
			$xml.= $tab.$tab.'<profile>'.$br;
			foreach($record as $key=>$value)
			{
				$xml.= $tab.$tab.$tab.'<'.$key.'>'.htmlspecialchars(stripslashes($value)).'</'.$key.'>'.$br;
			}
			$xml.= $tab.$tab.'</profile>'.$br;
		}



		//for relationship table
		$query1 = 'SELECT * FROM `relationship` WHERE `userID`="1"';
		$records = mysqli_query($link, $query1) or die('cannot select from table: '.relationship);
		
		//stick the records
		while($record = mysqli_fetch_assoc($records))
		{
			$xml.= $tab.$tab.'<relationship>'.$br;
			foreach($record as $key=>$value)
			{
				$xml.= $tab.$tab.$tab.'<'.$key.'>'.htmlspecialchars(stripslashes($value)).'</'.$key.'>'.$br;
			}
			$xml.= $tab.$tab.'</relationship>'.$br;
		}


		//for user table
		$query1 = 'SELECT * FROM `user` WHERE `userID`="1"';
		$records = mysqli_query($link, $query1) or die('cannot select from table: '.user);
		
		//stick the records
		while($record = mysqli_fetch_assoc($records))
		{
			$xml.= $tab.$tab.'<user>'.$br;
			foreach($record as $key=>$value)
			{
				$xml.= $tab.$tab.$tab.'<'.$key.'>'.htmlspecialchars(stripslashes($value)).'</'.$key.'>'.$br;
			}
			$xml.= $tab.$tab.'</user>'.$br;
		}
		

    $xml.= $tab.'</records>'.$br;

	// $handle = fopen("group8".'-backup-'.time().'.xml','w+');
	$handle = fopen('user_data.xml','w+');
	fwrite($handle,$xml);
	fclose($handle);

	echo $xml;
// }

?>