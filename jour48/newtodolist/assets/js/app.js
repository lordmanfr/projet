console.log("hiiii there");

// DOM elements
const todosContainer = document.querySelector(".todos");

function getTodos() {
  // appel ajax au mainController de l'API
  fetch("api/controller/control.php")
    .then(response => response.json())
    .then(data => {
      //console.log(data);
      const todos = data.payload;
      todos.forEach(elem => {
        todosContainer.innerHTML += `
          <div style="border: 1px solid #333; margin-top: 1rem;">
            <h2>${elem.title}</h2>
            <p>${elem.description}</p>
          </div>
          `;
      });
    });
}

window.addEventListener("load", getTodos);