<?php
      $string_json = file_get_contents('/var/www/laravel/resources/views/verk7/fighter/fighters.json');
        $json_fighters = json_decode($string_json, true);
    ?>
		
    <div class="group">
      <h1><?php echo ucfirst($json_fighters['fightersArray'][0]['img']) ?></h1>
      <div class="fighter">
          <p><?php echo ucfirst($json_fighters['fightersArray'][0]['name']) ?></p>
        <p><?php echo ucfirst($json_fighters['fightersArray'][0]['dob']) ?></p>
      </div>
    </div>