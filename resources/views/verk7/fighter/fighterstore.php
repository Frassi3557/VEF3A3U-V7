<?php 

	$url = $_POST['img'];
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$country = $_POST['country'];
	$height = $_POST['height'];
	$description = $_POST['description'];

    //get from file
    $jso = file_get_contents('/var/www/laravel/resources/views/verk7/fighter/fighters.json');
    //dceode object from file
    $obj = json_decode($jso);
    //display error
    if (!$obj) trigger_error('JSON FAIL: ' .  json_last_error(), E_USER_ERROR);
	

		$new = new StdClass;
    $new->url = $url;
    $new->name = $name;
    $new->dob = $dob;
    $new->country = $country;
    $new->height = $height;
    $new->description = $description;

		$obj->fightersArray[] = $new;

		$final_obj = json_encode($obj);
    file_put_contents('/var/www/laravel/resources/views/verk7/fighter/fighters.json', $final_obj);
    header('Location:http://46.101.26.121/verk7/fighters');
?>