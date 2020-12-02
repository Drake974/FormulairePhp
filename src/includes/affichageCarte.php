<?php
$json = file_get_contents("libs/data.json");

$parsed_json = json_decode($json);
$description = $parsed_json->{'description'};

?>


<div id="articles" class="container-fluid mt-5">
    <h2 class="text-center mb-5 font-weight-bold">ARTICLES AJOUTES</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th class="align-middle text-center" scope="col">Image</th>
                    <th class="align-middle text-center" scope="col">Decription</th>
                    <th class="align-middle text-center" scope="col">Prix de lancement</th>
                    <th class="align-middle text-center" scope="col">Durée de l'enchère</th>
                    <th class="align-middle text-center" scope="col">Prix du clic</th>
                    <th class="align-middle text-center" scope="col">Augmentation du prix</th>
                    <th class="align-middle text-center" scope="col">Augmentation durée</th>
                    
                    
                </tr>
            </thead>
            <tbody>

            
                <tr>
                    <td  class="">
                        <img src="ressources/img/<?php $image_upload ?>" alt="" class="img-thumbnail"
                            style="max-width: 150px; border: none;">
                    </td>
                    <td class="align-middle text-center"><?php echo $description  ?></td>
                    <td class="align-middle text-center"><?php echo  ?> €</td>
                    <td class="align-middle text-center"><?php echo  ?> h</td>
                    <td class="align-middle text-center"><?php echo  ?> €</td>
                    <td class="align-middle text-center"><?php echo  ?> €</td>
                    <td class="align-middle text-center"><?php echo  ?> sec</td>
                    <td class="align-middle text-center"></td>
                    
                  
                      
                    </td>
                </tr>
            
            </tbody>
        </table>
    </div>
</div>
