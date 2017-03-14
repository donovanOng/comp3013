<?php
ini_set('display_errors', 1);

$con2 = mysqli_connect("localhost","root","root");
if (!$con2)  {  
    die('Could not connect: ' . mysql_error());  
}

$selectdb = mysqli_select_db($con2, "group8");
if (!$selectdb)  { 
    die('Database not used: ; ' . mysql_error());  
}

echo "connected to DB<br /><br />";

$db = new PDO('mysql:host=localhost;dbname=group8', 'root', 'root');

$xmldoc=new DOMDocument();
$xmldoc->load('new_data.xml');


$xmldata1 = $xmldoc -> getElementsByTagName('annotation');
$xmlcount1 = $xmldata1 -> length;

for ($i=0; $i<$xmlcount1; $i++) {

$photoID = $xmldata1->item($i)->getElementsByTagName('photoID')->item(0)->childNodes->item(0)->nodeValue;
$userID = $xmldata1->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata1->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata1->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;

    $check="SELECT count(*) FROM annotation WHERE photoID = '$photoID' AND userID = '$userID'";
    $rs = mysqli_query($con2,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

    if ($data[0] > 0) {
        $query = "UPDATE annotation SET photoID = '$photoID', userID='$userID', CREATED_AT='$CREATED_AT', UPDATED_AT='$UPDATED_AT' WHERE photoID = '$photoID' AND userID = '$userID'"; 
    } else {
        $query = "INSERT INTO annotation (photoID, userID, CREATED_AT, UPDATED_AT)
                        VALUES ('$photoID', '$userID', '$CREATED_AT', '$UPDATED_AT')"; 
    }
    echo $query;
    mysqli_query($con2, $query);

}


$xmldata2 = $xmldoc -> getElementsByTagName('blog');
$xmlcount2 = $xmldata2 -> length;

for ($i=0; $i<$xmlcount2; $i++) {

    $blogID = $xmldata2->item($i)->getElementsByTagName('blogID')->item(0)->childNodes->item(0)->nodeValue;
    $userID = $xmldata2->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
    $name = $xmldata2->item($i)->getElementsByTagName('name')->item(0)->childNodes->item(0)->nodeValue;
    $CREATED_AT = $xmldata2->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
    $UPDATED_AT = $xmldata2->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;


    $check="SELECT count(*) FROM blog WHERE blogID = '$blogID'";
    $rs = mysqli_query($con2,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

    if ($data[0] > 0) {
        $query = "UPDATE blog SET userID='$userID', name='$name', CREATED_AT='$CREATED_AT', UPDATED_AT='$UPDATED_AT' WHERE blogID='$blogID'"; 
    } else {
        $query = "INSERT INTO blog (blogID, userID, name, CREATED_AT, UPDATED_AT)
                        VALUES ('$blogID', '$userID', '$name', '$CREATED_AT', '$UPDATED_AT')"; 
    }
    echo $query;
    mysqli_query($con2, $query);

    // $query =    "INSERT INTO blog (blogID, userID, name, CREATED_AT, UPDATED_AT)
    // VALUES ('$blogID', '$userID', '$name', '$CREATED_AT', '$UPDATED_AT')"; 

    // $query = "UPDATE blog SET blogID='$blogID', userID='$userID', name='$name', CREATED_AT='$CREATED_AT', UPDATED_AT='$UPDATED_AT' WHERE blogID='$blogID'"; 
	
}

$xmldata3 = $xmldoc -> getElementsByTagName('circle');
$xmlcount3 = $xmldata3 -> length;

for ($i=0; $i<$xmlcount3; $i++) {

$circleID = $xmldata3->item($i)->getElementsByTagName('circleID')->item(0)->childNodes->item(0)->nodeValue;
$userID = $xmldata3->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$name = $xmldata3->item($i)->getElementsByTagName('name')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata3->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata3->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;


    $check="SELECT count(*) FROM circle WHERE circleID = '$circleID'";
    $rs = mysqli_query($con2,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

    if ($data[0] > 0) {
        $query = "UPDATE circle SET userID='$userID', name='$name', CREATED_AT='$CREATED_AT', UPDATED_AT='$UPDATED_AT' WHERE circleID='$circleID'"; 
    } else {
        $query = "INSERT INTO circle (circleID, userID, name, CREATED_AT, UPDATED_AT)
                        VALUES ('$circleID', '$userID', '$name', '$CREATED_AT', '$UPDATED_AT')"; 
    }
    echo $query;
    mysqli_query($con2, $query);
    
}


$xmldata4 = $xmldoc -> getElementsByTagName('circleFriends');
$xmlcount4 = $xmldata4 -> length;

for ($i=0; $i<$xmlcount4; $i++) {

$cFriendsID = $xmldata4->item($i)->getElementsByTagName('cFriendsID')->item(0)->childNodes->item(0)->nodeValue;
$circleID = $xmldata4->item($i)->getElementsByTagName('circleID')->item(0)->childNodes->item(0)->nodeValue;
$userID = $xmldata4->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata4->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata4->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;

    $check="SELECT count(*) FROM circleFriends WHERE cFriendsID = '$cFriendsID'";
    $rs = mysqli_query($con2,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

    if ($data[0] > 0) {
        $query = "UPDATE circleFriends SET circleID='$circleID', userID='$userID', CREATED_AT='$CREATED_AT', UPDATED_AT='$UPDATED_AT' WHERE cFriendsID='$cFriendsID'"; 
    } else {
        $query = "INSERT INTO circleFriends (cFriendsID, circleID, userID, CREATED_AT, UPDATED_AT)
                        VALUES ('$cFriendsID', $circleID', '$userID', '$CREATED_AT', '$UPDATED_AT')"; 
    }
    echo $query;
    mysqli_query($con2, $query);
    
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

    $check="SELECT count(*) FROM comment WHERE commentID = '$commentID'";
    $rs = mysqli_query($con2,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

    if ($data[0] > 0) {
        $query = "UPDATE comment SET userID='$userID', photoID='$photoID', content='$content', CREATED_AT='$CREATED_AT', UPDATED_AT='$UPDATED_AT' WHERE commentID='$commentID'"; 
    } else {
        $query = "INSERT INTO comment (commentID, userID, photoID, content, CREATED_AT, UPDATED_AT)
                        VALUES ('$commentID', $userID', '$photoID', '$content', '$CREATED_AT', '$UPDATED_AT')"; 
    }
    echo $query;
    mysqli_query($con2, $query);

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

    $check="SELECT count(*) FROM message WHERE messageID = '$messageID'";
    $rs = mysqli_query($con2,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

    if ($data[0] > 0) {
        $query = "UPDATE message SET circleID='$circleID', userID='$userID', content='$content', CREATED_AT='$CREATED_AT', UPDATED_AT='$UPDATED_AT' WHERE messageID='$messageID'"; 
    } else {
        $query = "INSERT INTO message (messageID, circleID, userID, content, CREATED_AT, UPDATED_AT)
                        VALUES ('$messageID', $circleID', '$userID', '$content', '$CREATED_AT', '$UPDATED_AT')"; 
    }
    echo $query;
    mysqli_query($con2, $query);
    
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

    $check="SELECT count(*) FROM photo WHERE photoID = '$photoID'";
    $rs = mysqli_query($con2,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

    if ($data[0] > 0) {
        $query = "UPDATE photo SET collectionID='$collectionID', userID='$userID', path='$path', CREATED_AT='$CREATED_AT', UPDATED_AT='$UPDATED_AT' WHERE photoID='$photoID'"; 
    } else {
        $query = "INSERT INTO photo (photoID, collectionID, userID, path, CREATED_AT, UPDATED_AT)
                        VALUES ('$photoID', $collectionID', '$userID', '$path', '$CREATED_AT', '$UPDATED_AT')"; 
    }
    echo $query;
    mysqli_query($con2, $query);
    
}

$xmldata8 = $xmldoc -> getElementsByTagName('photoCollection');
$xmlcount8 = $xmldata8 -> length;

for ($i=0; $i<$xmlcount8; $i++) {

$collectionID = $xmldata8->item($i)->getElementsByTagName('collectionID')->item(0)->childNodes->item(0)->nodeValue;
$userID = $xmldata8->item($i)->getElementsByTagName('userID')->item(0)->childNodes->item(0)->nodeValue;
$accessRights = $xmldata8->item($i)->getElementsByTagName('accessRights')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata8->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata8->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;

    $check="SELECT count(*) FROM photoCollection WHERE collectionID = '$collectionID'";
    $rs = mysqli_query($con2,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

    if ($data[0] > 0) {
        $query = "UPDATE photoCollection SET userID='$userID', accessRights='$accessRights', CREATED_AT='$CREATED_AT', UPDATED_AT='$UPDATED_AT' WHERE collectionID='$collectionID'"; 
    } else {
        $query = "INSERT INTO photoCollection (collectionID, userID, accessRights, CREATED_AT, UPDATED_AT)
                        VALUES ($collectionID', '$userID', '$accessRights', '$CREATED_AT', '$UPDATED_AT')"; 
    }
    echo $query;
    mysqli_query($con2, $query);
    
}


$xmldata12 = $xmldoc -> getElementsByTagName('post');
$xmlcount12 = $xmldata12 -> length;

for ($i=0; $i<$xmlcount12; $i++) {

$postID = $xmldata12->item($i)->getElementsByTagName('postID')->item(0)->childNodes->item(0)->nodeValue;
$blogID = $xmldata12->item($i)->getElementsByTagName('blogID')->item(0)->childNodes->item(0)->nodeValue;
$title = $xmldata12->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
$body = $xmldata12->item($i)->getElementsByTagName('body')->item(0)->childNodes->item(0)->nodeValue;
$CREATED_AT = $xmldata12->item($i)->getElementsByTagName('CREATED_AT')->item(0)->childNodes->item(0)->nodeValue;
$UPDATED_AT = $xmldata12->item($i)->getElementsByTagName('UPDATED_AT')->item(0)->childNodes->item(0)->nodeValue;

    $check="SELECT count(*) FROM post WHERE postID = '$postID'";
    $rs = mysqli_query($con2,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

    if ($data[0] > 0) {
        $query = "UPDATE post SET blogID='$blogID', title='$title', body='$body', CREATED_AT='$CREATED_AT', UPDATED_AT='$UPDATED_AT' WHERE postID='$postID'"; 
    } else {
        $query = "INSERT INTO post (postID, blogID, title, body, CREATED_AT, UPDATED_AT)
                        VALUES ($postID', '$blogID', '$title', '$body', '$CREATED_AT', '$UPDATED_AT')"; 
    }
    echo $query;
    mysqli_query($con2, $query);
    
}


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

    $check="SELECT count(*) FROM profile WHERE userID = '$userID'";
    $rs = mysqli_query($con2,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

    if ($data[0] > 0) {
        $query = "UPDATE profile SET about='$about', gender='$gender', birthdate='$birthdate', current_city='$current_city', home_city='$home_city', address='$address', languages='$languages', workplace='$workplace', CREATED_AT='$CREATED_AT', UPDATED_AT='$UPDATED_AT' WHERE userID='$userID'"; 
    } else {
        $query = "INSERT INTO profile (userID, about, gender, birthdate, current_city, home_city, address, languages, workplace, CREATED_AT, UPDATED_AT)
                        VALUES ($userID, $about', '$gender', '$birthdate', '$current_city', '$home_city', '$address', '$languages', 'workplace', '$CREATED_AT', '$UPDATED_AT')"; 
    }
    echo $query;
    mysqli_query($con2, $query);

    
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

    $check="SELECT count(*) FROM relationship WHERE relationshipID = '$relationshipID'";
    $rs = mysqli_query($con2,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

    if ($data[0] > 0) {
        $query = "UPDATE relationship SET userID='$userID', userID_2='$userID_2', status='$status', CREATED_AT='$CREATED_AT', UPDATED_AT='$UPDATED_AT' WHERE relationshipID='$relationshipID'"; 
    } else {
        $query = "INSERT INTO relationship (relationshipID, userID, userID_2, CREATED_AT, UPDATED_AT)
                        VALUES ($relationshipID', '$userID', '$userID_2', '$CREATED_AT', '$UPDATED_AT')"; 
    }
    echo $query;
    mysqli_query($con2, $query);
    
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

    $check="SELECT count(*) FROM user WHERE userID = '$userID'";
    $rs = mysqli_query($con2,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

    if ($data[0] > 0) {
        $query = "UPDATE user SET first_name='$first_name', last_name='$last_name', email='$email', password='$password', privacy='$privacy', admin='$admin', CREATED_AT='$CREATED_AT', UPDATED_AT='$UPDATED_AT' WHERE userID='$userID'"; 
    } else {
        $query = "INSERT INTO user (userID, first_name, last_name, email, password, privacy, admin, CREATED_AT, UPDATED_AT)
                        VALUES ($userID', '$first_name', '$last_name', '$email', '$password', '$privacy', '$admin' '$CREATED_AT', '$UPDATED_AT')"; 
    }
    echo $query;
    mysqli_query($con2, $query);
    
}


    //show updated records            
    printf ("Records inserted: %d\n", mysqli_affected_rows($con2)); 

mysqli_close($con2);

?>