<?php    

        $filenameA = 'libs/data.json';
        $jsonString = file_get_contents($filenameA);
        $jsonArray = json_decode($jsonString, true);         
?>

<div id="articles" class="container-fluid mt-5">
    <h2 class="text-center mb-5 font-weight-bold">ARTICLES</h2>
    <div class=" d-flex justify-content-center flex-wrap">
        <!--Boucle pour chaque items dans le tableau $jsonArray-->
        <?php if (isset($jsonArray)) :?>
        
        <?php foreach($jsonArray as $values) :?>
            <?php if($values['etat'] == "actif"):?>

            <div class="card  shadow m-lg-4" style="width: 18rem;">
                <div class="duree d-flex position-absolute  justify-content-center align-items-center font-weight-bold"
                    id="carte_<?= $values['id'] ?>">
                </div>
                <img src="ressources/img/<?= $values['image'] ?>" class="card-img-top img-fluid" style="height:230px;"
                    alt="image enchere ">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold"><?= $values['description'] ?></h5> 
                    <h4 class="display-6 font-weight-bold"><?= $values['prix_lancement'] ?> €</h4>
                    <p class="card-text m-0">Prix du clic : <?= $values['prix_clic'] ?> cts</p>
                    <p class="card-text mb-4">Prix de l'enchère : <?= $values['augmentation_prix'] ?> cts/clic</p>
                    <div class="text-center" id="">
                        <form method="POST" action="#carte_<?= $values['id'] ?>">
                            <input name="inputEncherir" value="<?= $values['id'] ?>" hidden>
                            <button id="btn_<?= $values['id'] ?>" class="btn btn-warning btnEncherir p-0 shadow" name="encherir">Enchérir</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php include 'libs/timer.php';?>
            <?php endif; ?>
        <?php endforeach; ?>
        <?php endif; ?>   
    </div>
</div>