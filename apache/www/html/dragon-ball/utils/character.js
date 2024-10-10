import { fecthURL, getURLPath } from "./fetchData.js";

// Recuperar el id de la barra de busqueda
const characterId = getURLPath();

// Hacer una llamada a la api con la ID de la url
const data = await fecthURL(
  `https://dragonball-api.com/api/characters/${characterId}`
);

// Poner el titulo con el nombre del personaje
document.title = `${data.name} | Dragon Ball`;

// Recuperar los elementos html
const nameField = document.querySelector('.character-name')
const imageField = document.querySelector('.character-image')
const kiField = document.querySelector('.character-ki')
const raceField = document.querySelector('.character-race')
const descriptionField = document.querySelector('.character-description')

if (data.name === "Zeno") data.race = "Zeno Sama";
if (data.ki === "unknown") data.ki = "Desconocido";

// Insertar en los elementos los datos
nameField.textContent = data.name;
imageField.src = data.image;
imageField.alt = `Imagen de ${data.name}`
kiField.textContent = `Ki: ${data.ki}`;
raceField.textContent = data.race;
raceField.classList.add(data.race.split(' ').slice(0, 1).join('').toLowerCase())
raceField.classList.add('race')
descriptionField.textContent = data.description;

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