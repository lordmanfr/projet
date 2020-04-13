?>
    </div>

  </form>
</section>


</div>
            <form class="search" action="">
            <input type="text" name="recherche" required placeholder="entrez un mot">
            <button type="submit">lancer la recherche</button>
        </form>
            <div class="listeJSON"></div>
        </section>
        <script>
            // FORMULAIRE DE RECHERCHE
// BLOQUER LE FORMULAIRE CLASSIQUE
var baliseForm  = document.querySelector(".search");
var baliseInput = document.querySelector("input[name=recherche]");
var listeJSON   = document.querySelector(".listeJSON");
var tableauJSON = [];   // AU DEPART LE TABLEAU EST VIDE

baliseForm.addEventListener("submit", function(event){
    // POUR BLOQUER L'ENVOI DU FORMULAIRE
    event.preventDefault();

    // ON DOIT RECUPERER LE TEXTE SAISI
    var texteSaisi = baliseInput.value;

    // DEBUG
    console.log(texteSaisi);

    // ET ON DOIT ENVOYER UNE REQUETE AJAX VERS recherche-api.php
    // ET ENSUITE ON RECUPERE LES INFOS JSON
    // ET ON CONSTRUIT LE HTML POUR AFFICHER LES ARTICLES

    // formData PERMET DE RAJOUTER DES INFORMATIONS SUPPLEMENTAIRES A ENVOYER VERS PHP
    formData = new FormData();
    // ON VA AJOUTER LE TEXTE SAISI
    formData.append("recherche", texteSaisi);

    fetch('recherche.php',
    {
        method: 'POST',
        body:   formData
    })
    .then(function(reponseServeur) {
        return reponseServeur.json();
    })
    .then(function(objetJSON) {
        tableauJSON = objetJSON;

        // ON VA REINITIALISER LA LISTE
        listeJSON.innerHTML = "";
        
        for(var a=0; a < tableauJSON.length; a++)
        {
            listeJSON.innerHTML += 
            `
                <article>
                    <h3>${tableauJSON[a].lieu}</h3>
                    <h4>${tableauJSON[a].pays}</h4>
                    <h5>${tableauJSON[a].categorie}</h5>
                    <h6>${tableauJSON[a].saison}</h6>
                    <p>${tableauJSON[a].description}</p>
                  
                    <h6>${tableauJSON[a].prix} €</h6>
                  
                    <img class="image-destination" src="${tableauJSON[a].image}" alt="image">
                   
                 
                    
                  
                    
               
                    
                </article>
            `
        }

    });

});
        </script>
=======
      </form>
</section>