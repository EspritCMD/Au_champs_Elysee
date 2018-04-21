
/**
 * Created by PhpStorm.
 * User: abderrahimgdah
 * Date: 4/17/18
 * Time: 10:30
 */
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
print_r($photo_array) ;


