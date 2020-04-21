<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<nav>
    <ul class="menu">
        <li><a href="">Accueil</a></li>
        <li><a href="">Peinture</a></li>
        <li><a href="">Couture</a></li>
        <li><a href="">Produits</a></li>
        <li><a href="">Message</a></li>
        <li><a href="">Histoire</a></li>
    </ul>
</nav>

<div  class="wrapper">
    <p>Lorem ipsum dolor sit amet, <a href="">consectetur</a> adipisicing elit. Est <a href="">explicabo</a> unde natus necessitatibus esse obcaecati distinctio, aut itaque, qui vitae!</p>
      <p>Aspernatur sapiente quae sint <a href="">soluta</a> modi, atque praesentium laborum pariatur earum <a href="">quaerat</a> cupiditate consequuntur facilis ullam dignissimos, aperiam quam veniam.</p>
      <p>Cum ipsam quod, incidunt sit ex <a href="">tempore</a> placeat maxime <a href="">corrupti</a> possimus <a href="">veritatis</a> ipsum fugit recusandae est doloremque? Hic, <a href="">quibusdam</a>, nulla.</p>
      <p>Esse quibusdam, ad, ducimus cupiditate <a href="">nulla</a>, quae magni odit <a href="">totam</a> ut consequatur eveniet sunt quam provident sapiente dicta neque quod.</p>
      <p>Aliquam <a href="">dicta</a> sequi culpa fugiat <a href="">consequuntur</a> pariatur optio ad minima, maxime <a href="">odio</a>, distinctio magni impedit tempore enim repellendus <a href="">repudiandae</a> quas!</p>
 </div>

 <script>

const triggers=document.querySelectorAll('a');
const highlight=document.createElement('span');

highlight.classList.add('highlight');
document.body.append(highlight);

function highlightlink(){
    const linkcoords=this.getBoundingClientRect();
    console.log(linkcoords);

    const coords={
       
        width:linkcoords.width,
        height:linkcoords.height,
        top:linkcoords.top+window.scrollY,
        left:linkcoords.left+window.scrollX,
    };

    highlight.style.width=`${coords.width}px`;
    highlight.style.height=`${coords.height}px`;
    highlight.style.transform=`translate(${coords.left}px,${coords.top}px)`;
}

triggers.forEach(a=>a.addEventListener("mouseenter",highlightlink));



</script>
</body>
</html>