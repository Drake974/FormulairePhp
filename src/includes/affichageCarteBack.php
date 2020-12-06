
<?php   
    //include '/libs/fonctionEtat.php';
     fonctionEtat();
    $filenameA = 'libs/data.json';
    $jsonString = file_get_contents($filenameA);
    $jsonArray = json_decode($jsonString, true);

?>
<div id="articles" class="container-fluid mt-5">
    <h2 class="text-center mb-5 font-weight-bold">ARTICLES AJOUTES</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="align-middle text-center" scope="col">Image</th>
                    <th class="align-middle text-center" scope="col">Decription</th>
                    <th class="align-middle text-center" scope="col">Etat</th>
                    <th class="align-middle text-center" scope="col">Prix de lancement</th>
                    <th class="align-middle text-center" scope="col">Durée de l'enchère</th>
                    <th class="align-middle text-center" scope="col">Prix du clic</th>
                    <th class="align-middle text-center" scope="col">Augmentation du prix</th>
                    <th class="align-middle text-center" scope="col">Augmentation durée</th>
                    <th class="align-middle text-center" scope="col">Gain</th>
                    <th class="align-middle text-center" scope="col">Activer / Desactiver</th>
                </tr>
            </thead>
            <tbody>
            <?php if (isset($jsonArray)) :?>
            
            <!--Boucle pour chaque items dans le tableau dans la variable session-->
            <?php foreach( $jsonArray as $values) :?>
                <tr>
                    <td id="tab_<?= $values['id'] ?>" class="">
                        <img src="ressources/img/<?= $values['image'] ?>" alt="" class="img-thumbnail"
                            style="max-width: 150px; border: none;">
                    </td>
                    <td class="align-middle text-center"><?= $values['description'] ?></td>
                    <td class="align-middle text-center"><?= $values['etat'] == 'actif' ? 'Actif' : 'Inactif' ?></td>
                    <td class="align-middle text-center"><?= $values['prix_lancement'] ?> €</td>
                    <td class="align-middle text-center"><?= $values['duree']?> h</td>
                    <td class="align-middle text-center"><?= $values['prix_clic'] ?> €</td>
                    <td class="align-middle text-center"><?= $values['augmentation_prix'] ?> €</td>
                    <td class="align-middle text-center"><?= $values['augmentation_duree'] ?> s</td>
                    <td class="align-middle text-center"><?= $values['gain'] ?> €</td>
                    <td class="align-middle text-center">
                        <form method="POST"  action="#tab_<?= $values['id']?> ">
                            <input name="indiceActif" value="<?= $values['id'] ?>" hidden>
                            <button class="btn btn-primary" name="activer" type="submit" <?php // Si l'état de l'article est 'inactif', on ajoute l'attribut 'disabled' au bouton
                                    $attribut = "";
                                    if($values['etat'] == 'actif') {
                                        $attribut = "disabled";
                                    } else {
                                        $attribut = "";
                                    }
                                    echo $attribut;
                                    ?>>Activer</button>
                           
                        <form method="POST"  action="#tab_<?= $values['id']?> ">
                            <input name="indiceInactif"  value="<?= $values['id'] ?>" hidden>
                            
                            <button class="btn btn-primary" name="desactiver" type="submit" <?php // Si l'état de l'article est 'inactif', on ajoute l'attribut 'disabled' au bouton
                                    $attribut = "";
                                    if($values['etat'] == 'inactif') {
                                        $attribut = "disabled";
                                    } else {
                                        $attribut = "";
                                    }
                                    echo $attribut;
                                    ?>>Désactiver</button>
                        </form>
                        <form method="POST"  action="index.php?id=<?= $values['id']?>">
                           
                            <button class="btn btn-primary" name="btn_modifier" type="submit" 
                            <?php // Si l'état de l'article est 'inactif', on ajoute l'attribut 'disabled' au bouton
                                    $attribut = "";
                                    if($values['etat'] == 'actif') {
                                        $attribut = "disabled";
                                    } else {
                                        $attribut = "";
                                    }
                                    echo $attribut;
                                    ?>>Modifier</button>
                            
                        </form>
                        
                    </td>
                </tr>
            <?php endforeach ?>
            
            <?php endif; ?> 
            
            </tbody>
        </table>
    </div>
</div>
