<section>
    <h2>are you sur</h2>
    <form id="create" class="admin" action="" method="POST">
        <input type="text" name="titre" required placeholder="entrer le titre">
        <textarea name="contenu" cols="60" rows="8" required placeholder="entrer le contenu"></textarea>
        <!-- POUR L'IMAGE, ON DEVRAIT PROPOSER UN UPLOAD => PLUS TARD... -->

        <!-- https://www.php.net/manual/fr/function.date.php -->
        <input type="text" name="datePublication" value="<?php echo date("Y-m-d H:i:s") ?>">
        <input type="text" name="categorie" required placeholder="entrez la catégorie">
        <!--
        <input type="text" style="display:none;" name="identifiantFormulaire" value="create" readonly>
        -->
        <input type="hidden" name="identifiantFormulaire" value="create">
        <select name="image" class="deroulant">
            <option value="assets/img/cinema.jpg">cinema</option>
            <option value="assets/img/mode.jpg">mode</option>
            <option value="assets/img/nature.jpg">nature</option>
            <option value="assets/img/socio.jpg">socio</option>
            <option value="assets/img/sport.jpg">sport</option>
            <option value="assets/img/c.jpeg">culture</option>
            <option value="assets/img/ecrivin.jpg">ecrivin</option>
            <option value="assets/img/politique.jpg">politique</option>
            <option value="assets/img/war.jpg">guerre</option>
            <option value="assets/img/crime.jpg">crime</option>
            <option value="assets/img/accident.jpg">accident</option>
            <option value="assets/img/histoir.jpg">histoir</option>
            <option value="assets/img/fantasy.jpg">fantasy</option>
        </select>
        <button type="submit">PUBLIER L'ARTICLE</button>
        <div class="confirmation">
            <?php
            require "php/controller/form-article.php";
            ?>
        </div>
    </form>
    <section class="updateSection cache">
        <button class="closePopup">close</button>
        <h2>again</h2>
        <form id="update" class="admin" action="" method="POST">
            <div class="infosUpdate">
                <input type="text" name="titre" required placeholder="entrer le titre">
                <textarea name="contenu" cols="60" rows="8" required placeholder="entrer le contenu"></textarea>
                <!-- POUR L'IMAGE, ON DEVRAIT PROPOSER UN UPLOAD => PLUS TARD... -->
                <input type="text" name="image" required value="assets/img/photo1.jpg">
                <!-- https://www.php.net/manual/fr/function.date.php -->
                <input type="text" name="datePublication" value="<?php echo date("Y-m-d H:i:s") ?>">
                <input type="text" name="categorie" required placeholder="entrez la catégorie">
                <!-- POUR LE UPDATE ON DOIT SAVOIR QUELLE LIGNE ON VEUT MODIFIER -->
                <input type="text" name="id" required placeholder="entrez id ligne">
                <input type="text" name="id" required placeholder="entrez id ligne">
            </div>

            <!-- PARTIE TECHNIQUE POUR SAVOIR QUEL EST LE FORMULAIRE A TRAITER POUR LE SERVEUR -->
            <input type="hidden" name="identifiantFormulaire" value="update">
            <button type="submit">UPLOAD L'ARTICLE</button>
            <div class="confirmation">
                <?php
                $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
                if ($identifiantFormulaire == "update") {
                    require "php/controller/form-articles.php";
                }
                ?>
            </div>

        </form>
    </section>
    <section class="cache">
        <h2>your problime</h2>
        <form id="delete" action="" method="POST">
            <input type="text" name="id" required placeholder="entrez id">
            <!-- CODE BARRE TECHNIQUE POUR DISTINGUER LES FORMULAIRES -->
            <input type="hidden" name="identifiantFormulaire" value="delete">
            <button>SUPPRIMER LA LIGNE</button>
            <div class="confirmation">

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Sint alias laboriosam voluptas laudantium sunt, distinctio ab,
                    quod labore quae
                    , laborum a ea earum quis error fugiat soluta esse. Adipisci, ex?</p>
                <img src="assets/img/n2.jpg" alt="">



                <?php
                $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
                if ($identifiantFormulaire == "delete") {
                    require "php/controller/form-articles.php";
                }
                ?>
            </div>
        </form>
    </section>
    <section>
        <h2>LISTE DES ARTICLES</h2>

        <table>
            <thead>
                <!-- TITRE DES COLONNES -->
                <!-- LIGNE => TABLE ROW => tr -->
                <tr>
                    <td>id</td>
                    <td>titre</td>
                    <td>contenu</td>
                    <td>image</td>
                    <td>categorie</td>
                    <td>modifier</td>
                    <td>supprimer</td>
                </tr>
            </thead>
            <tbody>
                <!-- LIGNES -->
                <?php

                $requeteSQL =
                    <<<CODESQL
        
        SELECT * FROM `articles`
        ORDER BY datePublication DESC
        
        CODESQL;
                $tabAssoColonneValeur = [];

                // JE CHARGE LE CODE PHP POUR ENVOYER LA REQUETE
                require "php/model/envoyer-sql.php";

                
                $tabLigne = $pdoStatement->fetchAll();

                foreach ($tabLigne as $tabAsso) {
                
                    extract($tabAsso);

                    echo
                    <<<CODEHTML

                    <tr>
                        <td>$id</td>
                        <td>$titre</td>
                        <td>$contenu</td>
                        <td>$image</td>
                        <td>$categorie</td>
                        <td>
                            <button data-id="$id" class="update">modifier</button>
                            <!-- ON PEUT DONNER PLUSIEURS CLASSES A UNE BALISE -->
                            <div class="infosUpdate cache">
                                <input type="text" name="titre" required placeholder="entrer le titre" value="$titre">
                                <textarea name="contenu" cols="60" rows="8" required placeholder="entrer le contenu">$contenu</textarea>
                                <!-- POUR L'IMAGE, ON DEVRAIT PROPOSER UN UPLOAD => PLUS TARD... -->
                                <input type="text" name="image" required value="$image">
                                <!-- https://www.php.net/manual/fr/function.date.php -->
                                <input type="text" name="datePublication" value="$datePublication">
                                <input type="text" name="categorie" required placeholder="entrez la catégorie" value="$categorie">
                                <!-- POUR LE UPDATE ON DOIT SAVOIR QUELLE LIGNE ON VEUT MODIFIER -->
                                <input type="text" name="id" required placeholder="entrez id ligne" value="$id">
                            </div>
                    
                        </td>  
                        <td><button data-id="$id" class="delete">supprimer</button></td>  
                    </tr>
                    
                    CODEHTML;
                    }
                ?>
            </tbody>
        </table>
    </section>
    <script>
     
        var boutonClose = document.querySelector("button.closePopup");
        boutonClose.addEventListener("click", function() {
            var baliseSectionUpdate = document.querySelector("section.updateSection");
            baliseSectionUpdate.classList.add("cache");
        });
        var listeBoutonUpdate = document.querySelectorAll("button.update");
        // BOUCLE EN JS SUR CHAQUE BOUTON
        listeBoutonUpdate.forEach(function(bouton) {
            bouton.addEventListener("click", function(event) {
                console.log("CLICK SUR UN BOUTON modifier");
              
                var baliseBouton = event.target;
                var baliseTd = baliseBouton.parentNode;
                var baliseUpdate = baliseTd.querySelector(".infosUpdate");

                // DEBUG
                console.log(baliseBouton);
                console.log(baliseTd);
                console.log(baliseUpdate);

                // IL FAUT COPIER CE CODE HTML POUR REMPLACER LE FORMULAIRE VIDE
                // baliseUpdate.innerHTML;
                // JE VEUX AGIR SUR LE FORMULAIRE ET LA DIV class="infosUpdate"
                var baliseUpdateForm = document.querySelector("form#update div.infosUpdate");
                // ON COPIE LE CODE HTML D'UNE BALISE A UNE AUTRE
                baliseUpdateForm.innerHTML = baliseUpdate.innerHTML;

                // ET MAINTENANT, ON DOIT AUSSI AFFICHER LA SECTION
                // => SUR LA BALISE section JE VAIS ENLEVER LA CLASSE cache
                var baliseSection = document.querySelector(".updateSection");
                baliseSection.classList.remove("cache"); // ATTENTION, PAS DE . POUR LA CLASSE
            });

        });
    
        // QUAND LE CLIENT VA CLIQUER SUR LE BOUTON supprimer    
        var listeBoutonDelete = document.querySelectorAll("button.delete");
       
        listeBoutonDelete.forEach(function(bouton) {
            // DEBUG
            // console.log(bouton);
            // SUR CHAQUE BOUTON, ON AJOUTE UN EVENT LISTENER SUR LE CLICK
            bouton.addEventListener("click", function() {
                console.log("TU AS CLIQUE");
                // JE VOUDRAIS RECOPIER L'id DE LA LIGNE DANS LE FORMULAIRE DE DELETE
                // JA VAIS RECUPERER L'ATTRIBUT data-id SUR LE BOUTON
                var idBouton = event.target.getAttribute("data-id");
                console.log(idBouton);
                // MAINTENANT, JE VAIS COPIER LA VALEUR DANS LE CHAMP DU FORMULAIRE
                var champId = document.querySelector("form#delete input[name=id]");
                //console.log(champId);
                // JE DOIS CHANGER LA VALEUR DU CHAMP DU FORMULAIRE
                champId.value = idBouton;

                // ON PEUT FAIRE PLUS COMPLIQUE QUE LA POPUP...
                var confirmation = window.confirm("ES TU SUR DE CE QUE TU FAIS");
                if (confirmation) {
                    // ON VA DECLENCHER LE FORMULAIRE DE DELETE DIRECTEMENT
                    var formDelete = document.querySelector("form#delete");
                    
                    formDelete.submit();
                } else {
                   
                }
            });

        });
    </script>