<section id="section-contact">
    <h2>contact</h2>
    <form action="#section-contact" method="post" class="contact">
        <input type="text" name="titre" requist placeholder=" titre">
        <input type="text" name="categorie" requist placeholder="categorie">
        <input type="text" name="datePublication" value="<?php echo date("y-m-d h:i:s") ?>">
        <select name="image" class="deroulant">
            <option value="assets/img/cinema.jpg">cinema</option>
            <option value="assets/img/mode.jpg">mode</option>
            <option value="assets/img/nature.jpg">nature</option>
            <option value="assets/img/socio.jpg">socio</option>
            <option value="assets/img/sport.jpg">sport</option>
            <option value="assets/img/c.jpeg">culture</option>
        </select>
        <textarea name="contenu" cols="60" rows="10" requist placeholder="contenu"></textarea>
        <button type="submit">publie</button>


        <div class="conformation">
            <?php
           

               require_once "php/controller/form-article.php";
            
            ?>


        </div>
    </form>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        Sint alias laboriosam voluptas laudantium sunt, distinctio ab,
        quod labore quae
        , laborum a ea earum quis error fugiat soluta esse. Adipisci, ex?</p>
    <img src="assets/img/a1.jpeg" alt="">

</section>