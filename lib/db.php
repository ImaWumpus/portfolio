<?php
try{
   $db = new PDO('mysql:host=nl-srv-web712.main-hosting.eu;dbname=u565881342_portfolio', 'u565881342_ImaWumpus', 'B@joue92Lfpsc8');
   $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}catch (Exception $e){
    echo "Impossible de se connecter à la base de donnée";
    echo $e->getMessage();
    die();
}
?>
