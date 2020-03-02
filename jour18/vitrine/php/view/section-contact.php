<section id="section-contact">
    <h2>contact</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Eum cupiditate quisquam quos fugiat pariatur odit molestias numquam
        perferendis, incidunt id repellendus, nisi quae fugit
        officiis consequatur aliquid totam, dolorum maxime!</p>

    <form action="#section-contact" method="post">
        <input type="text" name="nom" requist placeholder="votre nom">
        <input type="email" name="email" requist placeholder="votre email">
        <textarea name="message" cols="60" rows="10" requist placeholder="votre message"></textarea>
        <button type="submit">votre confermer</button>

    </form>
    <div class="conformation">
        <?php
        if (count($_REQUEST) > 0) {

            $nom        = $_REQUEST["nom"];
            $email      = $_REQUEST["email"];
            $message    = $_REQUEST["message"];


            echo "merci de votre message $nom ($email)";
            $requeteSQL =
                <<<CODESQL
                    
                    INSERT INTO contact 
                    (name, email, message) 
                    VALUES 
                    ('$nom', '$email', '$message');
                    
                    CODESQL;


            $pdo = new PDO("mysql:dbname=vitrine;host=localhost;charset=utf8;", "root", "");



            $pdo->exec($requeteSQL);
        }
        ?>


    </div>
    <img src="assets/img/car2.jpeg" alt="">

</section>