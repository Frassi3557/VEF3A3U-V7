@extends('verk7.layouts.master')

@section('title')
  UFC fighters
@endsection

@section('list')

    <?php
      $string_json = file_get_contents('/var/www/laravel/resources/views/verk7/fighter/fighters.json');
        $json_fighters = json_decode($string_json, true);

    ?>

    <div class="group">
      <div class="fighter">
        <img class="fighter-img" src="<?= ($json_fighters['fightersArray'][0]['img']) ?>">
        <h1><?php echo ucfirst($json_fighters['fightersArray'][0]['name']) ?></h1>
        <p>Date of Birth: <?php echo ucfirst($json_fighters['fightersArray'][0]['dob']) ?></p>
        <p>Country of Origin: <?php echo ucfirst($json_fighters['fightersArray'][0]['country']) ?></p>
        <p>Height: <?php echo ucfirst($json_fighters['fightersArray'][0]['height']) ?></p>
        <p><?php echo ucfirst($json_fighters['fightersArray'][0]['description']) ?></p>
      </div>
    </div>


redirecta a sidu sem keyrir kodann fyrir nedan, redirectar svo a adra osfrv...

<?php /*
    $ordtak = $_POST['ordtak'];
    $utskyring = $_POST['utskyra'];
    $uppruni = $_POST['uppruni'];
    $daemi = $_POST['daemi'];
    //get from file
    $jso = file_get_contents('../ordtok/ordtok.json');
    //dceode object from file
    $obj = json_decode($jso);
    //display error

    if (!$obj) trigger_error('JSON FAIL: ' .  json_last_error(), E_USER_ERROR);
    // CREATE SOME NEW DATA TO APPEND TO THE komp ARRAY

    $new = new StdClass;
    $new->ordtak = $ordtak;
    $new->utskyring = $utskyring;
    $new->uppruni = $uppruni;
    $new->daemi = $daemi;
    // INJECT SOME DATA INTO THE OBJECT

    $obj->ordtokFylki[] = $new;

    // RENDER THE NEW JSON STRING
    //encode back to json for storage
    $final_obj = json_encode($obj);
    file_put_contents('../ordtok/ordtok.json', $final_obj);
    header('Location:http://46.101.26.121/verk7/fighters');
*/?>
  
@endsection