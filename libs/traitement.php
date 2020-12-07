
<?php

if (isset($_POST['submit'])){
    $itemsId = md5(uniqid(rand(), true)); // id unique
    $_POST['id'] = $itemsId; // rajout de l'id 
    $_POST['etat'] = "inactif";
    $_POST['gain'] = 0;
    $_POST['date_fin'] = null;
    unset($_POST['submit']);
    echo 
    '<div class="col-12 d-flex justify-content-center">
    <div class="alert alert-success">Le produit a bien été ajouté !</div>
    </div>';

    //on test si le fichier existe 
    $filename = 'libs/data.json';
    if (isset($filename)){
        //fichier existe alors on récupère son contenu on transforme en array
        //retourne le contenu du fichier dans une variable de type string
        $jsonString = file_get_contents($filename);
        //Transforme la structure json en array PHP
        $jsonArray = json_decode($jsonString, true);
        if ($jsonArray){
            array_unshift($jsonArray,$_POST);
            file_put_contents($filename,json_encode($jsonArray));
        }else{
            $jsonArray = [];
            array_unshift($jsonArray,$_POST);
            file_put_contents($filename,json_encode($jsonArray));
           
        }                      
    }

}

  

?>













