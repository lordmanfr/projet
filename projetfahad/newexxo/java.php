<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <head>
        <h1>lord</h1>

        <a href="home">home</a>
        <a href="contact">const</a>
        <a href="service">service</a>
    </head>
    <main>
        <section class="container">

            <h1>je veus afficher bdd</h1>

            <button class="btn">click</button>
            <div class="results"></div>

        </section>



    </main>
    <script>
        const companies = [{
                name: "Company One",
                category: "Finance",
                start: 1981,
                end: 2003
            },
            {
                name: "Company Two",
                category: "Retail",
                start: 1992,
                end: 2008
            },
            {
                name: "Company Three",
                category: "Auto",
                start: 1999,
                end: 2007
            },
            {
                name: "Company Four",
                category: "Retail",
                start: 1989,
                end: 2010
            },
            {
                name: "Company Five",
                category: "Technology",
                start: 2009,
                end: 2014
            },
            {
                name: "Company Six",
                category: "Finance",
                start: 1987,
                end: 2010
            },
            {
                name: "Company Seven",
                category: "Auto",
                start: 1986,
                end: 1996
            },
            {
                name: "Company Eight",
                category: "Technology",
                start: 2011,
                end: 2016
            },
            {
                name: "Company Nine",
                category: "Retail",
                start: 1981,
                end: 1989
            }
        ];

        //const ages = [33, 12, 20, 16, 5, 54, 21, 44, 61, 13, 15, 45, 25, 64, 32];

        // console.log(companies);

        var container = document.querySelector(".container");
        var btn = document.querySelector(".btn");

        btn.addEventListener("click", function() {

            var b = Math.floor(Math.random() * companies.length)+1;
            console.log(companies[b]);


           output = `<article><h1>${companies[b].name}</h1>
                                  <h1>${companies[b].end}</h1>
                                  <h1>${companies[b].start}</h1>
                                  <h1>${companies[b].category}</h1>
                         </article>`

            //container.innerHTML += donne;
            document.querySelector(".results").innerHTML+=output;

        })

        // for (var i = 0; i < companies.length; i++) {

        // console.log(companies[i]);
    </script>

</body>

</html>