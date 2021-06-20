
<?php
$verifName = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";

if(preg_match($verifName, $_POST['lastName']) && preg_match($verifName, $_POST['firstName'])){
    echo  'Bonjour' .' '. $_POST['lastName']. ' '. $_POST['firstName'];
}else{
    echo 'Pas bon';
}
?>



