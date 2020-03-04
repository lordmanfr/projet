
<section>
  <h2>news</h2>

  <div class="principal2">
    <img class="imagePrincipal2" src="assets/img/a2.jpeg" alt="">
    <h3 class="categoriePrincipal2">categorie</h3>
    <h4 class="titrePrincipal2">titre</h4>


    <p class="contenuPrincipal2">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
      Sint alias laboriosam voluptas laudantium sunt, distinctio ab,
      quod labore quae
      , laborum a ea earum quis error fugiat soluta esse. Adipisci, ex?</p>
    <h5 class="datePrincipal2">datePublication</h5>
  </div>
  
  <div class="listeArticle2">
    <?php
    //$pdo = new PDO("mysql:host=localhost;dbname=blog;charset=utf8;", "root", "");


    $requeteSQL =
      <<<CODESQL
              
      SELECT * FROM `articles`
       ORDER BY datePublication DESC

CODESQL;
    $tabAssoColonneValeur = [];

    require_once "php/model/envoyer-sql.php";




    $tabLigne = $pdoStatement->fetchAll();

    foreach ($tabLigne as $tabAsso) {
      $id         = $tabAsso["id"];
      $titre      = $tabAsso["titre"];
      $contenu    = $tabAsso["contenu"];
      $image      = $tabAsso["image"];
      $categorie  = $tabAsso["categorie"];
      $datePublication = $tabAsso["datePublication"];
      echo
        <<<CODEHTML
    
        <article class="$categorie">
            <img src="$image" alt="photo1">
            <h3>$categorie</h3>
            <h4>$titre</h4>
            <p>$contenu</p>
            <h5>$datePublication</h5>
        </article>
    
CODEHTML;
    }
    ?>
</section>

<section>
  <h2>liste des articles </h2>
  
  <img class="imagePrincipal" src="assets/img/a1.jpeg" alt="">
  <h3>categorie</h3>
  <h4>titre</h4>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
    Sint alias laboriosam voluptas laudantium sunt, distinctio ab,
    quod labore quae
    , laborum a ea earum quis error fugiat soluta esse. Adipisci, ex?</p>
    <h5>datePublication</h5>
  <div class="listeArticle">
    <article>
      <img src="assets/img/p1.jpg" alt="photo1">
      <h3>sport</h3>
      <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci mollitia alias nemo blanditiis eaque a sequi rem sit, cum dolorum placeat temporibus recusandae enim minus quia, aut fugit eos odit!
        consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
    </article>
    <article>
      <img src="assets/img/p2.jpg" alt="photo1">
      <h3>food</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni explicabo, quasi quod impedit laborum tempore natus velit cum eum obcaecati, quisquam ab! Porro laborum quam ipsa obcaecati nam dolorem at.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
    </article>
    <article>
      <img src="assets/img/p3.jpg" alt="photo1">
      <h3>shoping</h3>
      <p>Lorem ipsum dolor Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt veniam tempore officia enim, sint perspiciatis laboriosam veritatis, consequuntur molestias ad laudantium eum harum ex qui vel voluptatem placeat voluptate totam!
        sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
    </article>
    <article>
      <img src="assets/img/p4.jpg" alt="photo1">
      <h3>sea</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quos voluptatibus porro optio vel repellat quas modi soluta iusto, suscipit voluptate nemo ullam unde? Ab,
        delectus ut. Mollitia, est atque? Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
    </article>
    <article>
      <img src="assets/img/p5.jpg" alt="photo1">
      <h3>snow</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem ad nam, sed voluptatibus maiores asperiores hic, dolore sit cum culpa corrupti qui earum? Dolorum hic soluta vel! Quis, consectetur doloremque.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
    </article>
    <article>
      <img src="assets/img/p6.jpg" alt="photo1">
      <h3>desert</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi dolore adipisci unde omnis nam quisquam atque eos porro corrupti ad saepe, quasi odit sunt deserunt tempora, laborum ipsa quaerat ducimus!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
    </article>
  </div>
</section>



</div>


</section>

