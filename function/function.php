<?php 

function generatorpassword($allcharacters, $passwordlength) {

    $password= "";

    for ($i=0; $i < $passwordlength; $i++) {
       
        $password .=  $allcharacters[rand(0, strlen($allcharacters) - 1)];
    
    }

    return $password;
};

?>