<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>sex</title>

</head>

<body>
    <header>
        <h1>fuck your self</h1>
    </header>
    <main>
        <section>
            <h2>enter your information</h2>
            <form class="ajax" action="" method="POST">
                <input type="text" name="name" required placeholder="kinectic name">
                <textarea name="description" cols="60" rows="5" required placeholder="describte your body"></textarea>
                <h3>i am loking for</h3>
                <label>
                    <input type="radio" name="way" value="frendship" required placeholder="entrez le statut">
                    <span>frendship</span>
                </label>
                <label>
                    <input type="radio" name="way" value="hate" required placeholder="entrez le statut">
                    <span>hate</span>
                </label>
                <label>
                    <input type="radio" name="way" value="love" required placeholder="entrez le statut">
                    <span>love</span>
                </label>

                <label>
                    <input type="radio" name="way" value="soft sex" required placeholder="entrez le statut">
                    <span>soft sex</span>
                </label>

                <label>
                    <input type="radio" name="way" value="hard sex" required placeholder="entrez le statut">
                    <span>hard sex</span>
                </label>

                <label>
                    <input type="radio" name="way" value="complix" required placeholder="entrez le statut">
                    <span>complix</span>
                </label>
                <input type="text" name="favorite" required placeholder="favorite sex position">

                <!-- temporaire en attendant upload... -->
                <input type="text" name="photo" required placeholder="photo of favorite sex position">
                <button type="submit">creat my file</button>
                <!-- ON AJOUTE UNE INFO NON VISIBLE AU VISITEUR MAIS QUI SERA ENVOYEE AU SERVEUR -->
                <input type="hidden" name="identifiantFormulaire" value="create">
            </form>
        </section>

        <section>
            <h2>loaded</h2>
            <!-- FORMULAIRE POUR RAFRAICHIR LA LISTE DES TACHES -->
            <form class="ajax read" action="" method="POST">
                <button type="submit">load</button>
                <!-- ON AJOUTE UNE INFO NON VISIBLE AU VISITEUR MAIS QUI SERA ENVOYEE AU SERVEUR -->
                <input type="hidden" name="identifiantFormulaire" value="read">
            </form>
            <div class="listTodo">
           
            </div>

        </section>
    </main>
    <footer>
        <p>le droits réservés </p>
    </footer>



    <script src="assets/js/app.js"></script>
</body>

</html>