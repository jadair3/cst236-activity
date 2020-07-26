<?php

require_once 'User.php';


$pw = 'fdsafd';

if(User::validatePassword($pw)){
    echo "Password is long enough.";
}
else{
    echo "Password is too short.";
}

?>