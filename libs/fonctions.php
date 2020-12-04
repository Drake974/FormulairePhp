


<?php function validationDuFormulaire(){

//Test si le fichier a bien été envoyé et s'il n'y a pas d'erreur
$fileName = $_FILES['image']['name']; //on stock le nom de l'image
            if($fileName !== ""){ //différent de vide
                $validExt = array('.jpg', '.jpeg', '.gif', '.png'); //On attribue les extensions qu'on veut garder
                if($_FILES['image']['error'] > 0)//On verifie d $_FILES s'il n'y a pas d'erreur interne
                {
                    echo '<div class="alert alert-danger">Erreur survenue lors du transfert de l\'image</div>'; 
                    die;
                }
                $maxSize = 10000000; //la taille maximale de l'image
                $fileSize = $_FILES['image']['size'];//On recupere via la $_FILES la taille de l'image ajoutée dans l'input
                if($fileSize > $maxSize) //Taille de l'image doit être < à $maxSize
                {
                    echo '<div class="alert alert-danger"> Le fichier est trop lourd !!</div>'; 
                }
                $fileExt = strtolower(substr(strrchr($fileName, '.'), 1)); //On met en minuscule tout le nom du fichier puis à partir du . on récupère tout ce qu'il y a à la suite soit l'extension et on enregistre dans une nouvelle variable
                if(!in_array("." . $fileExt, $validExt))//On recherche dans le tableau des extensions valides si l'extension du fichier ajouté correspond
                { 
                    echo '<div class="alert alert-danger">Le fichier n\'est pas une image !!</div>';
                    die;
                }
                //Arrive ici cela veut dire que nos vérifications on été validées alors on peut procéder à l'envoie de l'image dans son bon dossier
                $tmpName = $_FILES['image']['tmp_name']; //On recupère le nom temporaire ajouté par le serveur pour la gestion de l'image
                $idName = md5(uniqid(rand(), true)); //On attribue un id unique à l'image via la fonction md5 uniqid et random
                $fileDir = "ressources/img/" . $idName . "." . $fileExt; //On spécifie la direction d'enregistrement de l'image
                $_POST['image'] = $idName . "." . $fileExt; //On attribue dans la superglobale $_POST le nom de l'image qui ira dans le tableau
                
                $resultat = move_uploaded_file($tmpName, $fileDir);//On utilise la fonction de la superglobale pour transferer le nom temporaire attribué vers le dossier indiqué
                //Si le fichier a bien été déplacé alors on ajoute toutes les données dans le tableau et on ajoute les dernieres données necessaires pour une enchere
                
                
            }
           
        }

?>
