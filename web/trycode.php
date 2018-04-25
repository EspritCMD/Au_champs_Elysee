
<html>
<header>

</header>
<body>

<form action="#" method="post">
    <input type="checkbox" name="gender" value="Male22">Male</input>
    <input type="checkbox" name="gender" value="Female">Female</input>
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
if (isset($_POST['gender'])){
	echo $_POST['gender'];}
?>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ef8d1f47-6408-4556-ab6c-9e221d6dd140", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
<span class='st_facebook' displayText='Facebook'></span>
<span class='st_twitter' displayText='Tweet'></span>
<span class='st_googleplus' displayText='Google +'></span>
<span class='st_email' displayText='Email'></span>
<span class='st_' displayText=''></span>













<br><br><BR><br><br><br>



<?php
$api_key = '8d0b1dbcde36eea77b81633c6090665f';

	$i = rand(0,4) ;
	$j = rand(0,5) ;
	echo $i.$j ;
$tag = "pizza" ;
//$tag = 'pizza,spagethi';
$perPage = 25;
$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
$url.= '&api_key='.$api_key;
$url.= '&tags='.$tag;
$url.= '&per_page='.$perPage;
$url.= '&format=json';
$url.= '&nojsoncallback=1';
$url.= '&sort=interestingness-desc' ;
$url.= "&content_type=1";
$response = json_decode(file_get_contents($url));
$photo_array = $response->photos->photo;
//print_r($photo_array) ;
foreach($photo_array as $single_photo){

	$farm_id = $single_photo->farm;
	$server_id = $single_photo->server;
	$photo_id = $single_photo->id;
	$secret_id = $single_photo->secret;
	$size = 'm';

	$title = $single_photo->title;

	$photo_url = 'https://farm'.$farm_id.'.staticflickr.com/'.$server_id.'/'.$photo_id.'_'.$secret_id.'_'.$size.'.'.'jpg';

	print "<img title='".$title."' src='".$photo_url."' width='150px' height='150px' />";

}

?>
</body>
</html>