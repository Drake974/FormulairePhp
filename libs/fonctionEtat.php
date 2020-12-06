<?php
// gestion de l'état et l'ajout des paramètres temps pour l'activation du timer
function fonctionEtat(){
    $filenameD = 'libs/data.json';                  //
    $jsonString = file_get_contents($filenameD);    //decode le fichier json
    $jsonArray = json_decode($jsonString, true);    //
    if(isset($_POST['activer'])){
        $id = $_POST['indiceActif'];                
        foreach($jsonArray as $key => $values){
            if($values['id'] == $id){               // on compare id du bouton(=la carte) avec celui du tableau json
                date_default_timezone_set("Indian/Reunion"); // fuseau horaire de la reunion puis on rajoute la durée à celui de l'heure actuelle pour l'utiliser dans le timer par la suite
                $jsonArray[$key]['date_fin'] = mktime(date("H") + (int)$values['duree'], date("i"), date("s"), date("m"), date("d"), date("Y"));
                $jsonArray[$key]['etat'] =  "actif"; // après clique sur le bouton activer -> change l'état en actif               
            }
        }        
    }
    if(isset($_POST['desactiver'])){
        $id = $_POST['indiceInactif'];
        foreach($jsonArray as $key => $values){
            if($values['id'] == $id){
                $jsonArray[$key]['etat'] =  "inactif"; // après clique sur le bouton inactiver -> change l'état en inactif              
            }
        }        
    }
    file_put_contents($filenameD,json_encode($jsonArray));  
};
?>