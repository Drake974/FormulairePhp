
<?php include 'libs/fonctionValidation.php'; ?>
<?php   
   modificationCarte();
    
    $filenameE = 'libs/data.json';
    $jsonString = file_get_contents($filenameE);
    $jsonArray = json_decode($jsonString, true);

?>
         <?php if(isset($_POST['submit_modifier'])){
                validationDuFormulaireM();
            };
        ?>
        <div class="d-flex justify-content-center">
            <h2 class="mb-5 text-uppercase font-weight-bold">MODIFICATION DE L'ENCHERE</h2>
        </div>
       <?php if(isset($_POST['btn_modifier'])) :?>
        <?php foreach($jsonArray as $values) :?>
            <?php if($_GET['id'] == $values['id']):?>
               
     
        <form class="container-fluid w-100 d-flex justify-content-center align-items-center flex-column" method="POST"
             enctype="multipart/form-data" action="modifierCarte.php">
            <div class="d-flex justify-content-center align-items-center mb-3 items bg-light">
                <label class="labelForm" for="#description">Description :</label>
                <input type="text" class="form-control" id="description" maxlength="24" placeholder="24 caractères maximum"
                    name="description" value="<?= $values['description'] ?>" required>
            </div>
            
            <img src="ressources/img/<?=$values['image']?>" width="300px" height="200px" class="mb-3"
                            alt="image enchere">
           <div class="d-flex justify-content-center align-items-center">
                <label class="fileUpload d-flex justify-content-center align-items-center bg-light">
                    Image upload 
                    <input type="file" name="image" hidden id="image_upload">
        
                </label>
            </div>
            <h3 class="mb-5 mt-4 d-flex justify-content-center text-center text-uppercase">Paramètres de l'enchère</h3>
            <div class="d-flex justify-content-center align-items-center mb-3 items bg-light">
                <label class="labelForm" for="#prix_lancement">Prix de lancement (€):</label>
                <input type="number" class="form-control" aria-label="Prix de lancement" placeholder="En euros"
                    name="prix_lancement" id="prix_lancement" min="0.01" value="<?= $values['prix_lancement'] ?>" step="0.01" required aria-describedby="basic-addon1">
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3 items bg-light">
                <label class="labelForm" for="#duree">Durée (h):</label>
                <input type="number" class="form-control" aria-label="duree" placeholder="En heures" id="duree" name="duree"
                    min="1" value="<?= $values['duree'] ?>" required aria-describedby="basic-addon1">
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3 items bg-light">
                <label class="labelForm" for="#prix_clic">Prix du clic (cts):</label>
                <input type="number" class="form-control" placeholder="En centimes" aria-label="prix_clic" name="prix_clic"
                    id="prix_clic" value="<?= $values['prix_clic'] ?>" required aria-describedby="basic-addon1" max="0.99" min="0.01" step="0.01">
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3 items bg-light">
                <label class="labelForm" for="#augmentation_prix">Augmentation du prix (cts):</label>
                <input type="number" class="form-control" aria-label="augmentation_prix" placeholder="En centimes"
                    name="augmentation_prix" value="<?= $values['augmentation_prix'] ?>" required id="augmentation_prix" aria-describedby="basic-addon1"
                    max="0.99" min="0.01" step="0.01">
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3 items bg-light">
                <label class="labelForm" for="#augmentation_duree">Augmentation durée (s):</label>
                <input type="number" class="form-control" aria-label="augmentation_duree" placeholder="En secondes"
                    name="augmentation_duree" value="<?= $values['augmentation_duree'] ?>" required id="augmentation_duree" min="0"
                    aria-describedby="basic-addon1">
            </div>
            <div class="d-flex justify-content-center align-items-center">
            <input name="indiceModifier" value="<?= $values['id'] ?>" hidden>
                <button type="submit" name="submit_modifier"
                    class="btn btn-warning text-uppercase text-white font-weight-bold btnAjoutEnchere mb-5 shadow"
                    style="width:220px;">Modifier l'enchère</button>
            </div>
            <?php endif ?>
            
            <?php endforeach ?>
            
            <?php endif ?>
        </form>