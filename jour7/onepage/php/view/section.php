<section id="s1">
        <h2>mes objectife</h2>
        <h3>contrbuer a laisser ma propre touch dans l'espace numérique</h3>
        <div class="container">
                <?php
                $tableau = glob("assets/img/sun*.{jpg,jpeg}", GLOB_BRACE);
                foreach ($tableau as $s => $sun) {
                        echo
                                <<<codehtml
                        <img src="$sun" alt="$sun">
                codehtml;
                }
                ?>

        </div>
</section>
<section id="s2">

        <h2> expérience professionnelle </h2>
        <div class="container1">
                <?php

                $tableauAlt = ["alt1", "alt2", "alt3"];
                // $tableau    = ["assets/img/sun1.jpeg", "assets/img/sun2.jpeg", "assets/img/sun3.jpg", "assets/img/sun4.jpeg", "assets/img/sun5.jpeg"];
                $tableau = glob("assets/img/sun*.{jpg,jpeg}", GLOB_BRACE);

                for ($i = 0; $i < count($tableau); $i++) {
                        echo
                                <<<CODEHTML
                        <img src="$tableau[$i]" alt="$tableau[$i]">
 
                  CODEHTML;
                }
                ?>

        </div>
        <h4>BVA Group Marseille 2019</h4>
        <h5>enquéter sur transport public</h5>
        <h4>MJH Rénovation Marseille 2017</h4>
        <H5>electricen</H5>
        <h4>Cyper café MADAYA 2006</h4>
        <h5>Gerant d'un cyper café</h5>
</section>
<section id="s3">
        <h2>formation</h2>
        <div class=container2>
                <?php
                $tableau = glob("assets/img/sun*.{jpg,jpeg}", GLOB_BRACE);

                $i = 0;
                while ($i < count($tableau)) {
                        echo
                                <<<CODEHTML
                            <img src="$tableau[$i]" alt="$tableau[$i]">
                 
                CODEHTML;
                        $i++;
                }
                ?>
        </div>
        <h4>langue anglais univérsité</h4>
        <h4>informatique univérsité</h4>
        <h4>AFC renforce</h4>

</section>
<section id="s4">
        <h2> langues</h2>
        <div class="container3">
                <?php
                $tableau = glob("assets/img/sun*.{jpg,jpeg}", GLOB_BRACE);
                foreach ($tableau as $s => $sun) {
                        echo
                                <<<codehtml
                <img src="$sun" alt="$sun">
         codehtml;
                }
                ?>
        </div>
        <h3>Arab</h3>
        <h3>Anglais</h3>

</section>
<section id="s5">
        <h2>compétence</h2>
        <H3>Ponctuel</H3>
        <h3>Dynamique</h3>
        <h3>Sériex</h3>

</section>
<section id="s6">
        <h2>Mes formation</h2>
        <h3>Adress</h3>
        <h4>30 Chemin du Bassin</h4>
        <h3>Email</h3>
        <h4>husseinmahmoudfr@gmail.com</h4>
        <h3>portable</h3>
        <h4>06 20 00 44 94</h4>
        <section id="s7">
                <h2>contact</h2>
                <form action="#s7" method="GET">
                        <input type="text" name="nom" placeholder="entrez votre nom" required>
                        (*) <br>
                        <input type="email" name="email" placeholder="entrez votre email" required>
                        (*) <br>
                        <input type="tel" name="phone" placeholder="numero de telefon">(*) <br>
                        
                        <textarea name="message" cols="60" rows="8" maxlength="1000" placeholder="entrez votre message" required></textarea><br>
   
                      
                        <button type="submit">envoyer votre message</button><br><br><br>

                        <div>
                                <?php require_once "php/control/traitement-contact.php" ?>
                        </div>
                </form>

        </section>



</section>