<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lung hai crud</title>
    <style>
        html,
        body {
            font-size: 16px;
        }

        * {
            box-sizing: border-box;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form>* {
            margin: 0.2rem;
            padding: 0.2rem;
        }

        .listTodo {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }

        .listTodo article {
            border: 1px solid #aaaaaa;
            padding: 0.2rem;
            margin: 0.2rem;
            width: calc(100% / 3 - 0.4rem);
            /* IL FAUT ENLEVER LE MARGIN */
        }

        article img {
            width: 100%;
            height: 30vh;
            object-fit: cover;
        }

        article.todo {
            background-color: yellow;
        }

        article.done {
            background-color: green;
        }

        article.ongoing {
            background-color: orange;
        }
    </style>

</head>

<body>

    <head>
        <h1>dare you</h1>

    </head>
    <main>
        <section>
            <h2>FORMULAIRE DE CREATION</h2>
            <form class="ajax" action="" method="POST">
                <input type="text" name="titre" required placeholder="entrez le titre">
                <textarea name="description" cols="60" rows="5" required placeholder="entrez la description"></textarea>

                <label>
                    <input type="radio" name="statut" value="love" required placeholder="entrez le statut">
                    <span>love</span>
                </label>
                <label>
                    <input type="radio" name="statut" value="hate" required placeholder="entrez le statut">
                    <span>hate</span>
                </label>
                <label>
                    <input type="radio" name="statut" value="sex" required placeholder="entrez le statut">
                    <span>sex</span>
                </label>

                <!-- temporaire en attendant upload... -->
                <input type="text" name="photo" required placeholder="entrez la photo">
                <button type="submit">CREER UNE TACHE</button>
            </form>
        </section>
        <section>
            <h2>AFFICHAGE DES TACHES (READ)</h2>
            <div class="listTodo">
                <!--
                <article>
                    <h3>tache1</h3>
                    <p>description1</p>
                </article>
                <article>
                    <h3>tache2</h3>
                    <p>description2</p>
                </article>
                <article>
                    <h3>tache3</h3>
                    <p>description3</p>
                </article>
                <article>
                    <h3>tache4</h3>
                    <p>description4</p>
                </article>
                <article>
                    <h3>tache5</h3>
                    <p>description5</p>
                </article>
                <article>
                    <h3>tache6</h3>
                    <p>description6</p>
                </article>
                -->
            </div>

        </section>

    </main>
    <footer>
        <h4>le droit reserve</h4>
    </footer>
    <script>
        // ON VA PRENDRE LA MAIN SUR LE FORMULAIRE
        // ON VA BLOQUER L'ENVOI CLASSIQUE DU FORMULAIRE    => EVENEMENT submit SUR LE FORMULAIRE
        // ET ON VA ENVOYER LES INFOS DU FORMULAIRE PAR AJAX
        // AVANTAGE: ON NE RECHARGE PAS LA PAGE... 
        //          (PLUS FLUIDE POUR LE VISITEUR, PLUS PERFORMANT...)

        // ETAPE1: DECLARATION DE LA FONCTION
        // => CODE EN ATTENTE
        // POUR SAVOIR QUE CETTE FONCTION CALLBACK A UN PARAMETRE => DOC DE JS...

        var formulaire = document.querySelector("form.ajax");
        // LA FONCTION envoyerFormulaireAjax SERA APPELEE PAR JS (PAS PAR MOI)
        //      (ET JS FOURNIRA LE PARAMETRE event...)
        // QUAND IL SE PRODUIRA L'EVENEMENT submit SUR LE FORMULAIRE
        // (QUAND LE VISITEUR VA APPUYER SUR LE BOUTON "CREER UNE TACHE")
        // => FONCTION "CALLBACK"
        // VERSION1: CLASSIQUE
        function envoyerFormulaireAjax(event) {
            // LE PARAMETRE event NOUS SERT A BLOQUER LE FORMULAIRE CLASSIQUE...
            event.preventDefault();
            console.log("FORMULAIRE AJAX EN COURS...");

            // https://developer.mozilla.org/fr/docs/Web/Guide/Using_FormData_Objects
            // ON VA RECUPERER LES INFOS DU FORMULAIRE
            // ET ENSUITE ON VA ENVOYER LE REQUETE AJAX AVEC fetch

            var formulaire = event.target;
            // ON VA UTILISER UN OBJET DE LA CLASSE FormData
            // => CET OBJET SERVIRA DE CONTAINER AUX INFOS DU FORMULAIRE
            var formData = new FormData(formulaire);
            // => AUTOMATIQUEMENT, 
            // formData VA ASPIRER TOUTES LES INFOS DU formulaire
            // COOL POUR NOUS ;-p

            // MAINTENANT ON PEUT ENVOYER LA REQUETE AJAX AVEC fetch
            var contenuForm = {
                method: 'POST', // NECESSAIRE POUR UPLOAD DE FICHIER
                body: formData
            };
            // LA FONCTION fetch DE JS ENVOIE UNE REQUETE AJAX VERS api-ajax.php (le premier paramètre)
            fetch("api-ajax.php", contenuForm)
                // POUR LE READ IL FAUT COMPLETER LE CODE POUR RECUPERER LES DONNEES RENVOYEES PAR LE SERVEUR
                .then(function(responseServer) {
                    return responseServer.json();
                })
                .then(function(objetJSON) {
                    // DEBUG
                    console.log(objetJSON);

                    // SI LE TABLEAU DES ARTICLES EST FOURNI PAR LE SERVEUR
                    // ALORS JE VAIS M'EN SERVIR POUR CONSTRUIRE LE HTML
                    if ('tableauArticle' in objetJSON) {
                        // ON COPIE LE TABLEAU DANS NOTRE VARIABLE tableauArticle
                        tableauArticle = objetJSON.tableauArticle;
                        // => CE TABLEAU JSON SERA EN FAIT FOURNI PAR LE SERVEUR WEB (PHP + TABLE SQL)
                        // => LES PROPRIETES SERONT CONSTRUITES A PARTIR DES NOMS DES COLONNES SQL

                        for (var indice = 0; indice < tableauArticle.length; indice++) {
                            var article = tableauArticle[indice];
                            var codeHTML =
                                `
                            <article class="${article.statut}">
                                <h3>${article.titre}</h3>
                                <p>${article.description}</p>
                                <p>${article.statut}</p>
                                <p>${article.id}</p>
                                <img src="${article.photo}">
                            </article>
                `;
                            // AJOUTER DANS LA BALISE listTodo
                            var baliseListTodo = document.querySelector(".listTodo");
                            baliseListTodo.innerHTML += codeHTML;
                        }
                    }
                });

        };
        formulaire.addEventListener("submit", envoyerFormulaireAjax);

        /*
        // VERSION 2: FONCTION ANONYME
        var envoyerFormulaireAjax = function (event) 
        {
            // LE PARAMETRE SERT A BLOQUER LE FORMULAIRE CLASSIQUE...
            event.preventDefault();
            console.log("FORMULAIRE AJAX EN COURS...");
        };

        formulaire.addEventListener("submit", envoyerFormulaireAjax);

        // VERSION 3: COMPACTE
        formulaire.addEventListener("submit", function (event) {
            // LE PARAMETRE SERT A BLOQUER LE FORMULAIRE CLASSIQUE...
            event.preventDefault();
            console.log("FORMULAIRE AJAX EN COURS...");
        });

        */


        // ON VEUT LE CODE JS 
        // QUI PRODUISE LE HTML POUR LA LISTE DES TACHES
        // REPETITION => TECHNIQUE:             BOUCLE
        //                  AVEC COMME COMBO :  UN TABLEAU
        /*
                        <article>
                            <h3>tache1</h3>
                            <p>description1</p>
                        </article>
                        <article>
                            <h3>tache2</h3>
                            <p>description2</p>
                        </article>

        var tableauArticle = [
            { titre: 'tache1', description: 'description1' },
            { titre: 'tache2', description: 'description2' },
            { titre: 'tache3', description: 'description3' },
            { titre: 'tache4', description: 'description4' },
            { titre: 'tache5', description: 'description5' }    // NE PAS OUBLIER D'ENLEVER LA VIRGULE SUR LE DERNIER ELEMENT
        ];

        */


        var tableauArticle = []; // CE SERA LE SERVEUR QUI VA ME CONSTRUIRE CE TABLEAU
    </script>
</body>

</html>