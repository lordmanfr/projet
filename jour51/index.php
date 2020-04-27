<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISTRIBUTEUR</title>
    <style>
        html,
        header {
            background-color: 0;
            background-image: url(assets/photo/euro.jpeg);
            background-position: 100% 100%;
            background-repeat: no-repeat;
        }

        body {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            font-size: 16px;
        }

        * {
            box-sizing: border-box;
        }

        h1,
        h2,
        h3 {
            padding: 0.5rem;
            text-align: center;
            margin: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%;
            padding: 1rem;
        }

        form>* {
            margin: 0.2rem;
            padding: 0.2rem;
            font-family: monospace;
            width: 100%;
        }

        .listTodo {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            justify-content: center;
        }

        .listTodo article {
            border: 1px solid #aaaaaa;
            padding: 0.25rem;
            margin: 0.25rem;
            width: calc(100% / 3 - 0.5rem);
            /* IL FAUT ENLEVER LE MARGIN */
            min-width: 200px;
        }

        article img {
            width: 100%;
            height: 15vh;
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

        article {
            transition: all 0.5s;
        }

        article:hover {
            border: 1px solid #ffffff;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.8);
        }


        body {
            display: flex;
            flex-direction: column;
            width: 100%;
            align-items: center;
        }

        body>* {
            max-width: 960px;
        }

        .cache {
            display: none;
        }
    </style>
</head>

<body>
    <header>

    </header>



    <main>
        <section>
            <h2>DISTRIBUTEUR</h2>
            <form class="ajax" action="" method="POST">
                <input type="text" name="titre" required placeholder="entrez le titre">
                <textarea name="description" cols="60" rows="5" required placeholder="entrez la description"></textarea>
                <select name="image" class="deroulant">
                    <option name="statut" value="assets/photo/5.jpg">5 EURO</option>
                    <option name="statut" value="assets/photo/10.jpg">10 EURO</option>
                    <option name="statut" value="assets/photo/20.jpg">20 EURO</option>
                    <option name="statut"  value="assets/photo/50.jpg">50 EURO</option>
                  
                    <option name="statut" value="assets/photo/100.jpg">100 EURO</option>
                    <option name="statut" value="assets/photo/200.jpg">200 EURO</option>
                    <option name="statut" value="assets/photo/500.jpg">500 EURO</option>
                </select>
                <button type="submit">yes that it</button>
                <!-- ON AJOUTE UNE INFO NON VISIBLE AU VISITEUR MAIS QUI SERA ENVOYEE AU SERVEUR -->
                <input type="hidden" name="identifiantFormulaire" value="create">
            </form>
        </section>
        <section>
            <h2>my money</h2>
            <!-- FORMULAIRE POUR RAFRAICHIR LA LISTE DES TACHES -->
            <form class="ajax read" action="" method="POST">
                <button type="submit">yeeeeeeeeeeeeeeeeeeees</button>
                <!-- ON AJOUTE UNE INFO NON VISIBLE AU VISITEUR MAIS QUI SERA ENVOYEE AU SERVEUR -->
                <input type="hidden" name="identifiantFormulaire" value="read">
            </form>
            <div class="listTodo">

            </div>

        </section>
        <script>
            var formulaire = document.querySelector("form.ajax");

            function envoyerFormulaireAjax(event) {
                // LE PARAMETRE event NOUS SERT A BLOQUER LE FORMULAIRE CLASSIQUE...
                event.preventDefault();
                console.log("FORMULAIRE AJAX EN COURS...");


                var formulaire = event.target;
                // ON VA UTILISER UN OBJET DE LA CLASSE FormData
                // => CET OBJET SERVIRA DE CONTAINER AUX INFOS DU FORMULAIRE
                var formData = new FormData(formulaire);

                var contenuForm = {
                    method: 'POST', // NECESSAIRE POUR UPLOAD DE FICHIER
                    body: formData
                };
                fetch("api-ajax.php", contenuForm)
                    .then(function(responseServer) {
                        return responseServer.json();
                    })
                    .then(function(objetJSON) {
                        // DEBUG
                        console.log(objetJSON);

                        if ('tableauArticle' in objetJSON) {
                            // ON COPIE LE TABLEAU DANS NOTRE VARIABLE tableauArticle
                            tableauArticle = objetJSON.tableauArticle;

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

                                var baliseListTodo = document.querySelector(".listTodo");
                                baliseListTodo.innerHTML += codeHTML;
                            }
                        }
                    });

            };
            formulaire.addEventListener("submit", envoyerFormulaireAjax);




            var tableauArticle = [];
        </script>
    </main>
    <footer>

    </footer>

</body>

</html>