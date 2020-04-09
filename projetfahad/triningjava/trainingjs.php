
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>form contact </h1>
<section class="update hidden">
<form>

<input type="text" requiredname="name"><br>

<input type="text" requiredname="surname"><br>

<input type="text" requiredname="email"><br>
</form>
</section>
    <style>
        .hidden{display:none;}
    </style>

<button type="submit" class="btn">OK</button>
<script>

    var update=document.querySelector(".update");

    var bouton=document.querySelector(".btn");

    bouton.addEventListener("click",function(){

        update.classList.toggle("hidden");
    });





</script>

