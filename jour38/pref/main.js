  
fetch("https://api.ipify.org?format=json")
.then(function(responce) {
   return  responce.json()
    
})

//.then(responce => responce.json())
.then(function (data) {
    //console.log(data);
    const ip = data.ip

    fetch(`
    http://newsapi.org/v2/everything?q=bitcoin&from=2020-03-03&sortBy=publishedAt&apiKey=5055a1e5a0d14f94a6670bc2fa90c789`)
    .then(function(responce) {
       return  responce.json()
        
    })
    .then(function (data) {
       let title = data.title;
       
       title =title.split(" ")[0].toLowerCase();
      // console.log(city);
      
      fetch(`
      http://newsapi.org/v2/everything?q=bitcoin&from=2020-03-03&sortBy=publishedAt&apiKey=5055a1e5a0d14f94a6670bc2fa90c789`)
      .then(function(responce) {
       return responce.json()
          
      })

    .then(function (data) {


        const title = document.querySelector("h2");
        const publishedAt = document.querySelector("h3");
        const description = document.querySelector("p");
        const author = document.querySelector("h4");

        // ensuite j'injecte ces valeurs dans le DOM
        // par ex : je vais chercher la valeur de la propriété title de la propriété main de l'objet data

        const title1 = data.title;
        const publishedAt1 = data.publishedAt;
        const description1 = data.description;
        const author1 = data.author;
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
})
});
