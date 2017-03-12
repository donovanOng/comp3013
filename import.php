<?php
ini_set('display_errors', 1);
$db = new PDO('mysql:host=localhost;dbname=group8', 'user', 'password');

$xmldoc=new DOMDocument();
$xmldoc->load('user_data.xml');

$xmldata1 = $xmldoc -> getElementsByTagName('annotation');
$xmlcount1 = $xmldata1 -> length;

for ($i=0; $i<$xmlcount1; $i++) {

$photoID = $xmldata1->item($i)->getElementsByTagName('photoID')->item(0)->childNodes->item(0)->nodeValue;
$userID = $xmldata1->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata1->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata1->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;
// $address = $xmldata->item($i)->getElementsByTagName('address')->item(0)->childNodes->item(0)->nodeValue;
$stmt = $db->prepare("insert into annotation values(?,?,?,?)");
$stmt -> bindParam(1,$photoID);
$stmt -> bindParam(2,$userID);
$stmt -> bindParam(3,$CREATED_AT);
$stmt -> bindParam(4,$UPDATED_AT);
// $stmt -> bindParam(5,$address);
$stmt -> execute();
// printf($name.'<br/>');
}

$xmldata2 = $xmldoc -> getElementsByTagName('blog');
$xmlcount2 = $xmldata2 -> length;

for ($i=0; $i<$xmlcount2; $i++) {

$blogID = $xmldata2->item($i)->getElementsByTagName('blogID')->item(0)->childNodes->item(0)->nodeValue;
$userID = $xmldata2->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$name = $xmldata2->item($i)->getElementsByTagName('name')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata2->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata2->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;

$stmt = $db->prepare("insert into blog values(?,?,?,?,?)");
$stmt -> bindParam(1,$blogID);
$stmt -> bindParam(2,$userID);
$stmt -> bindParam(3,$name);
$stmt -> bindParam(4,$CREATED_AT);
$stmt -> bindParam(5,$UPDATED_AT);

$stmt -> execute();
	
}


$xmldata3 = $xmldoc -> getElementsByTagName('circle');
$xmlcount3 = $xmldata3 -> length;

for ($i=0; $i<$xmlcount3; $i++) {

$circleID = $xmldata3->item($i)->getElementsByTagName('circleID')->item(0)->childNodes->item(0)->nodeValue;
$userID = $xmldata3->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$name = $xmldata3->item($i)->getElementsByTagName('name')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata3->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata3->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;

$stmt = $db->prepare("insert into circle values(?,?,?,?,?)");
$stmt -> bindParam(1,$circleID);
$stmt -> bindParam(2,$userID);
$stmt -> bindParam(3,$name);
$stmt -> bindParam(4,$CREATED_AT);
$stmt -> bindParam(5,$UPDATED_AT);

$stmt -> execute();
	
}


$xmldata4 = $xmldoc -> getElementsByTagName('circleFriends');
$xmlcount4 = $xmldata4 -> length;

for ($i=0; $i<$xmlcount4; $i++) {

$cFriendsID = $xmldata4->item($i)->getElementsByTagName('cFriendsID')->item(0)->childNodes->item(0)->nodeValue;
$circleID = $xmldata4->item($i)->getElementsByTagName('circleID')->item(0)->childNodes->item(0)->nodeValue;
$userID = $xmldata4->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata4->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata4->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;

$stmt = $db->prepare("insert into circleFriends values(?,?,?,?,?)");
$stmt -> bindParam(1,$cFriendsID);
$stmt -> bindParam(2,$circleID);
$stmt -> bindParam(3,$userID);
$stmt -> bindParam(4,$CREATED_AT);
$stmt -> bindParam(5,$UPDATED_AT);

$stmt -> execute();
	
}


$xmldata5 = $xmldoc -> getElementsByTagName('comment');
$xmlcount5 = $xmldata5 -> length;

for ($i=0; $i<$xmlcount5; $i++) {

$commentID = $xmldata5->item($i)->getElementsByTagName('commentID')->item(0)->childNodes->item(0)->nodeValue;
$userID = $xmldata5->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$photoID = $xmldata5->item($i)->getElementsByTagName('photoID')->item(0)->childNodes->item(0)->nodeValue;
$content = $xmldata5->item($i)->getElementsByTagName('content')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata5->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata5->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;

$stmt = $db->prepare("insert into comment values(?,?,?,?,?,?)");
$stmt -> bindParam(1,$commentID);
$stmt -> bindParam(2,$userID);
$stmt -> bindParam(3,$photoID);
$stmt -> bindParam(4,$content);
$stmt -> bindParam(5,$CREATED_AT);
$stmt -> bindParam(6,$UPDATED_AT);

$stmt -> execute();
	
}

$xmldata6 = $xmldoc -> getElementsByTagName('message');
$xmlcount6 = $xmldata6 -> length;

for ($i=0; $i<$xmlcount6; $i++) {

$messageID = $xmldata6->item($i)->getElementsByTagName('messageID')->item(0)->childNodes->item(0)->nodeValue;
$circleID = $xmldata6->item($i)->getElementsByTagName('circleID')->item(0)->childNodes->item(0)->nodeValue;
$userID = $xmldata6->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$content = $xmldata6->item($i)->getElementsByTagName('content')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata6->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata6->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;

$stmt = $db->prepare("insert into message values(?,?,?,?,?,?)");
$stmt -> bindParam(1,$messageID);
$stmt -> bindParam(2,$circleID);
$stmt -> bindParam(3,$userID);
$stmt -> bindParam(4,$content);
$stmt -> bindParam(5,$CREATED_AT);
$stmt -> bindParam(6,$UPDATED_AT);

$stmt -> execute();
	
}


$xmldata7 = $xmldoc -> getElementsByTagName('photo');
$xmlcount7 = $xmldata7 -> length;

for ($i=0; $i<$xmlcount7; $i++) {

$photoID = $xmldata7->item($i)->getElementsByTagName('photoID')->item(0)->childNodes->item(0)->nodeValue;
$collectionID = $xmldata7->item($i)->getElementsByTagName('collectionID')->item(0)->childNodes->item(0)->nodeValue;
$userID = $xmldata7->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$path = $xmldata7->item($i)->getElementsByTagName('path')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata7->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata7->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;

$stmt = $db->prepare("insert into photo values(?,?,?,?,?,?)");
$stmt -> bindParam(1,$photoID);
$stmt -> bindParam(2,$collectionID);
$stmt -> bindParam(3,$userID);
$stmt -> bindParam(4,$path);
$stmt -> bindParam(5,$CREATED_AT);
$stmt -> bindParam(6,$UPDATED_AT);

$stmt -> execute();
	
}


$xmldata8 = $xmldoc -> getElementsByTagName('photoCollection');
$xmlcount8 = $xmldata8 -> length;

for ($i=0; $i<$xmlcount8; $i++) {

$collectionID = $xmldata8->item($i)->getElementsByTagName('collectionID')->item(0)->childNodes->item(0)->nodeValue;
$userID = $xmldata8->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$accessRights = $xmldata8->item($i)->getElementsByTagName('accessRights')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata8->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata8->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;

$stmt = $db->prepare("insert into photoCollection values(?,?,?,?,?)");
$stmt -> bindParam(1,$collectionID);
$stmt -> bindParam(2,$userID);
$stmt -> bindParam(3,$accessRights);
$stmt -> bindParam(4,$CREATED_AT);
$stmt -> bindParam(5,$UPDATED_AT);

$stmt -> execute();
	
}

//photoCollectionAccessRights ??????????????????????????????
//post ???????????????????????????


$xmldata9 = $xmldoc -> getElementsByTagName('profile');
$xmlcount9 = $xmldata9 -> length;

for ($i=0; $i<$xmlcount9; $i++) {

$userID = $xmldata9->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$about = $xmldata9->item($i)->getElementsByTagName('about')->item(0)->childNodes->item(0)->nodeValue;
$gender = $xmldata9->item($i)->getElementsByTagName('gender')->item(0)->childNodes->item(0)->nodeValue;
$birthdate = $xmldata9->item($i)->getElementsByTagName('birthdate')->item(0)->childNodes->item(0)->nodeValue;
$current_city = $xmldata9->item($i)->getElementsByTagName('current_city')->item(0)->childNodes->item(0)->nodeValue;
$home_city = $xmldata9->item($i)->getElementsByTagName('home_city')->item(0)->childNodes->item(0)->nodeValue;
$address = $xmldata9->item($i)->getElementsByTagName('address')->item(0)->childNodes->item(0)->nodeValue;
$languages = $xmldata9->item($i)->getElementsByTagName('languages')->item(0)->childNodes->item(0)->nodeValue;
$workplace = $xmldata9->item($i)->getElementsByTagName('workplace')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata9->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata9->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;

$stmt = $db->prepare("insert into profile values(?,?,?,?,?,?,?,?,?,?,?)");
$stmt -> bindParam(1,$userID);
$stmt -> bindParam(2,$about);
$stmt -> bindParam(3,$gender);
$stmt -> bindParam(4,$birthdate);
$stmt -> bindParam(5,$current_city);
$stmt -> bindParam(6,$home_city);
$stmt -> bindParam(7,$address);
$stmt -> bindParam(8,$languages);
$stmt -> bindParam(9,$workplace);
$stmt -> bindParam(10,$CREATED_AT);
$stmt -> bindParam(11,$UPDATED_AT);

$stmt -> execute();
	
}


$xmldata10 = $xmldoc -> getElementsByTagName('relationship');
$xmlcount10 = $xmldata10 -> length;

for ($i=0; $i<$xmlcount10; $i++) {

$relationshipID = $xmldata10->item($i)->getElementsByTagName('relationshipID')->item(0)->childNodes->item(0)->nodeValue;
$userID = $xmldata10->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$userID_2 = $xmldata10->item($i)->getElementsByTagName('userID_2')->item(0)->childNodes->item(0)->nodeValue;
$status = $xmldata10->item($i)->getElementsByTagName('status')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata10->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata10->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;

$stmt = $db->prepare("insert into relationship values(?,?,?,?,?,?)");
$stmt -> bindParam(1,$relationshipID);
$stmt -> bindParam(2,$userID);
$stmt -> bindParam(3,$userID_2);
$stmt -> bindParam(4,$status);
$stmt -> bindParam(5,$CREATED_AT);
$stmt -> bindParam(6,$UPDATED_AT);

$stmt -> execute();
	
}


$xmldata11 = $xmldoc -> getElementsByTagName('user');
$xmlcount11 = $xmldata11 -> length;

for ($i=0; $i<$xmlcount11; $i++) {

$userID = $xmldata11->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$first_name = $xmldata11->item($i)->getElementsByTagName('first_name')->item(0)->childNodes->item(0)->nodeValue;
$last_name = $xmldata11->item($i)->getElementsByTagName('last_name')->item(0)->childNodes->item(0)->nodeValue;
$email = $xmldata11->item($i)->getElementsByTagName('email')->item(0)->childNodes->item(0)->nodeValue;
$password = $xmldata11->item($i)->getElementsByTagName('password')->item(0)->childNodes->item(0)->nodeValue;
$privacy = $xmldata11->item($i)->getElementsByTagName('privacy')->item(0)->childNodes->item(0)->nodeValue;
$admin = $xmldata11->item($i)->getElementsByTagName('admin')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata11->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata11->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;

$stmt = $db->prepare("insert into user values(?,?,?,?,?,?,?,?,?)");
$stmt -> bindParam(1,$userID);
$stmt -> bindParam(2,$first_name);
$stmt -> bindParam(3,$last_name);
$stmt -> bindParam(4,$email);
$stmt -> bindParam(5,$password);
$stmt -> bindParam(6,$privacy);
$stmt -> bindParam(7,$admin);
$stmt -> bindParam(8,$CREATED_AT);
$stmt -> bindParam(9,$UPDATED_AT);

$stmt -> execute();
	
}


?>