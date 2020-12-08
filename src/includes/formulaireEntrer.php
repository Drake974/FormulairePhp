

        <div class="d-flex justify-content-center">
            <h2 class="mb-5 text-uppercase font-weight-bold">Ajout d'une enchère</h2>
        </div>
        <?php if(isset($_POST['submit'])):?>
            <?php validationDuFormulaire()?>
        <?php endif ?>
     
        <form class="container-fluid w-100 d-flex justify-content-center align-items-center flex-column" method="POST"
             enctype="multipart/form-data" action="ajoutProduit.php">
            <div class="d-flex justify-content-center align-items-center mb-3 items bg-light">
                <label class="labelForm" for="#description">Description :</label>
                <input type="text" class="form-control" id="description" maxlength="24" placeholder="24 caractères maximum"
                    name="description" required>
            </div>
           <div class="d-flex justify-content-center align-items-center">
                <label class="fileUpload d-flex justify-content-center align-items-center bg-light">
                    Image upload 
                    <input type="file" name="image" hidden id="image_upload">
        
                </label>
            </div>
            <h3 class="mb-5 mt-4 d-flex justify-content-center text-center text-uppercase">Paramètres de l'enchère</h3>
            <div class="d-flex justify-content-center align-items-center mb-3 items bg-light">
                <label class="labelForm" for="#prix_lancement">Prix de lancement (€):</label>
                <input type="number" class="form-control" aria-label="Prix de lancement" placeholder="exemple 1,00"
                    name="prix_lancement" id="prix_lancement" min="0.01" value="" step="0.01" required aria-describedby="basic-addon1">
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3 items bg-light">
                <label class="labelForm" for="#duree">Durée (h):</label>
                <input type="number" class="form-control" aria-label="duree" placeholder="exemple 24" id="duree" name="duree"
                    min="1" value="" required aria-describedby="basic-addon1">
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3 items bg-light">
                <label class="labelForm" for="#prix_clic">Prix du clic (cts):</label>
                <input type="number" class="form-control" placeholder="exemple 0,50" aria-label="prix_clic" name="prix_clic"
                    id="prix_clic" value="" required aria-describedby="basic-addon1" max="0.99" min="0.01" step="0.01">
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3 items bg-light">
                <label class="labelForm" for="#augmentation_prix">Augmentation du prix (cts):</label>
                <input type="number" class="form-control" aria-label="augmentation_prix" placeholder="exemple 0,05"
                    name="augmentation_prix" value="" required id="augmentation_prix" aria-describedby="basic-addon1"
                    max="0.99" min="0.01" step="0.01">
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3 items bg-light">
                <label class="labelForm" for="#augmentation_duree">Augmentation durée (s):</label>
                <input type="number" class="form-control" aria-label="augmentation_duree" placeholder="exemple 30"
                    name="augmentation_duree" value="" required id="augmentation_duree" min="0"
                    aria-describedby="basic-addon1">
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" name="submit"
                    class="btn btn-warning text-uppercase text-white font-weight-bold btnAjoutEnchere mb-5 shadow"
                    style="width:220px;">Ajouter l'enchère</button>
            </div>
        </form>
        
      