<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h2>Offre d'emploi</h2>
    </header>
    <main>
        <section>
            <form method="POST" action="" class="offreemploi">
                <input type="text" name="titre" placeholder="entrez le titre d'emploi">
                <textarea name="description" id="" cols="70" rows="10" required placeholder="entrez la description"></textarea>
                <input type="text" name="image" required placeholder="entrez la photo" value="assets/img/photo.jpg">
                <input type="hidden" name="formulaire1" value="create">
                <button type="submit">publer</button>


            </form>

        </section>
        <section>
            <H2>reload</H2>
            <form action="" class="offreemploi" method="POST">


                <button type="submit">LOAD</button>

                <input type="hidden" name="formulaire1" value="read">

            </form>

            <div class="lesOffres"></div>
        </section>

    </main>
    <footer>
        <h3>les droits reserve</h3>
    </footer>
    <script>
        var listfolmulaire = document.querySelectorAll("form.offreemploi");
        listfolmulaire.forEach(function(formulaire) {
            formulaire.addEventListener('submit', envoyer);

        });
        document.querySelector("form.offreemploi button[type=submit]").click();

        function envoyer(event) {
            event.preventDefault();
            //console.log("fuck you");
            var formulaire = event.target;
            var formData = new FormData(formulaire);
            var contenue = {
                method: "POST",
                body: formData


            };
            fetch("api.php",contenue)
                .then(function(res) {
                    console.log(res);
                    return res.json();

                })
                .then(function(data) { 
                    console.log(data);

                    if ("tableau" in data) {
                        tableau = data.tableau;
                        buttonload();


                    }

                });

        }

        function buttonload() {
            var lesoffres = document.querySelector(".lesOffres");
            lesoffres.innerHTML = "";
            for (var i = 0; i < tableau.length; i++) {
                var offre = tableau[i];
                tableau[i];
                var codeHTML =
                    `
                   <article>
                        <h3>${offre.titre}</h3>
                        <p>${offre.description}</p>
                        <img src="${offre.image}"></article>
                    
        `;
                lesoffres.innerHTML += codeHTML;



            }
        }
    </script>


</body>

</html>