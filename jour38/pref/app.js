var url = 'http://newsapi.org/v2/everything?' +
    'q=Apple&' +
    'from=2020-04-03&' +
    'sortBy=popularity&' +
    'apiKey=5055a1e5a0d14f94a6670bc2fa90c789';

var req = new Request(url);

fetch(req)
    .then(function (response) {
        console.log(response.json());
        return responce.json()
  
           
    }
    )
 


    .then(function (data) {
       


        // ici je récupère les éléments du DOM dans lesquels je veux afficher la valeur des infos météo que je récupère
        const title = document.querySelector("h2");
        const publishedAt = document.querySelector("h3");
        const description = document.querySelector("p");
        const author = document.querySelector("h4");

        // ensuite j'injecte ces valeurs dans le DOM
        // par ex : je vais chercher la valeur de la propriété title de la propriété main de l'objet data

        const title1 = data.articles.title;
        const publishedAt1 = data.articles.publishedAt;
        const description1 = data.articles.description;
        const author1 = data.articles.author;
        //  const description = response.articles[0].description;


        title.innerText += title1;
        publishedAt.innerText += publishedAt1;
        description.innerText += description1;
        author.innerText += author1;



        console.log(data);
        const title2 = document.querySelector('#title');
        title2.addEventListener('click', () => {
            title2.contentEditable = true;
        })


    })

    ;


