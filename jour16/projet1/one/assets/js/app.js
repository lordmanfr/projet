const btn = document.querySelector("#ajax");

// add listener to button and call function to execute when button clicked
btn.addEventListener("click", makeRequest);

// AJAX call using XMLHttpRequest
function makeRequest() {
    // Steps
    // Instanciate object XMLHttpRequest
    const xml = new XMLHttpRequest();

    // open request
    xml.open("get", "https://api.le-systeme-solaire.net/rest/bodies/");

    // Check for onload event (status)
    xml.onload = function () {
        if (xml.status == 200) {
            console.log(JSON.parse(xml.responseText));
        }
    };
    // Send request
    xml.send();
}

// Fetch API
// AJAX call using XMLHttpRequest
function makeFetchRequest() {
    fetch("lib/process.php")
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            console.log(data);
        })
        .catch(function (error) {
            console.log(error);
        });
}

// AJAX example with API call
function getRandomCocktail() {
    fetch("https://api.le-systeme-solaire.net/rest/bodies/")
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            const index = getRandomIndex(data.bodies)
            // console.log(index)
            console.log(data.bodies[index])
            // console.log(data);

            document.getElementById('users-list').innerHTML = `<h1>${data.bodies[index].name}</h1>
            `

        });
    // console.log(users);
}

//creeation tableau

function getRandomIndex(bodies) {
    return Math.floor(Math.random() * bodies.length);

    // const data= users[randomIndex];

    // return data;
}

const btn2 = document.getElementById("btn2")
const userinfo = document.getElementById("userinfo");

btn2.addEventListener('click', getRandomCocktail)




//user.innerHTML ="<div><h1>"${data.bodies[index].name}"</h1></div>";

//user.innerHTML = "<div><h1>data.bodies[index].name</h1></div>"
/*`<div>
    <h1>${data.bodies[index].name}</h1>
</div>`*/
 //document.body.innerHTML = `<h1>${data.bodies[index].name}</h1>`
