<?php
    if (isset($filename))
    {
        $filename = 'libs/data.json';
        $jsonString = file_get_contents($filename);
        $jsonArray = json_decode($jsonString, true);
/* $json = file_get_contents("libs/data.json");

$parsed_json = json_decode($json);
$description = $parsed_json->{'description'}; */
      
    }   

?>



<div id="articles" class="container-fluid mt-5">
    <h2 class="text-center mb-5 font-weight-bold">ARTICLES</h2>
    <div class=" d-flex justify-content-center flex-wrap">
        <!--Boucle pour chaque items dans le tableau $jsonArray-->
        
      
        <?php if (isset($jsonArray)) :?>
        <?php foreach($jsonArray as $values) :?>
          
            <div class="card  shadow m-lg-4" style="width: 18rem;">
                <div class="duree d-flex position-absolute w-50 justify-content-center align-items-center font-weight-bold"
                    id="<?= $values['id'] ?>">
                </div>
                <img src="ressources/img/<?= $values['image'] ?>" class="card-img-top img-fluid" style="height:230px;"
                    alt="image enchere ">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold"><?= $values['description'] ?></h5> 
                    <h4 class="display-6 font-weight-bold"><?= $values['prix_lancement'] ?> €</h4>
                    <p class="card-text m-0">Prix du clic : <?= $values['prix_clic'] ?> cts</p>
                    <p class="card-text mb-4">Prix de l'enchère : <?= $values['augmentation_prix'] ?> cts/clic</p>
                    <div class="text-center">
                        <form method="POST" action="#<?= $values['id'] ?>">
                            <input name="btnEncherir" value="<?= $values['id'] ?>" hidden>
                            <button id="" class="btn btn-primary btn-listEnchere p-0" name="encherir">Enchérir</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php endif; ?>   
    </div>
</div>