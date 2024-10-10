import "./components/CharacterCard.js";
import { fecthURL } from "./utils/fetchData.js";

const mainContainer = document.querySelector(".mainContainer");
const charactersContainer = document.querySelector("#characters");

let actualPage = window.localStorage.getItem("actualPage") ?? 1;
let URL = `https://dragonball-api.com/api/characters?limit=12&page=${actualPage}`;
let data;
try {
  data = await fecthURL(URL);
} catch (err) {
  console.log(err);
}

renderCards(data);

// Guardar numero de paginas de personajes de la API
const pages = data.meta.totalPages;

// Renderizar personajes con los datos devueltos por la API usando la etiqueta html creada llamada <character-card />
function renderCards(data) {
  charactersContainer.innerHTML = "";
  data.items.forEach((character) => {
    charactersContainer.innerHTML += `<character-card 
    id="${character.id}"
    nombre="${character.name}"
    img="${character.image}" 
    raza="${character.race}"
    ki="${character.ki}">
    </character-card>`;
  });
}

// Creacion de div para botones y los propios botones
const buttons = document.createElement("div");
buttons.className = "buttons";
mainContainer.appendChild(buttons);
for (let i = 1; i <= pages; i++) {
  const buttonPage = document.createElement("button");
  buttonPage.textContent = i;
  buttonPage.className = "button-page";
  buttons.appendChild(buttonPage);
}

// Para cada boton al pulsarlo hacer una llamada al API con una pagina diferente y renderizarlas
document.querySelectorAll(".button-page").forEach((button) => {
  button.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
    URL = `https://dragonball-api.com/api/characters?limit=12&page=${button.textContent}`;
    window.localStorage.setItem("actualPage", button.textContent);
    fecthURL(URL).then((data) => {
      renderCards(data);
    });
  });
});

// Mostrar una alerta al pulsar el boton de suscribirse si ha puesto un email o no
document.querySelector('#suscribeBtn').addEventListener('click', (e) => {
  e.preventDefault()
  const emailInput = document.querySelector('#email');
  const email = emailInput.value;
  email
  ? alert(`Gracias por suscribirte ${email}`)
  : alert('Ingrese un email')
  emailInput.value = ''
})
