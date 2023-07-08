const buttonAddHomework = document.querySelector("#addButton");
var list = [{ inputHomework: 'Programar', emoji: '🧑🏻‍💻' }, { inputHomework: 'Correr', emoji: '🏃🏻' }];
var homeworkList = document.getElementById("homeworkList"); //Valor de la nueva tarea
var emojiList = document.getElementById("emojiList"); // Valor de la nueva tarea
var formulario = document.getElementById("formHomeworks"); // Formulario de la nueva tarea
var datos = document.getElementById("datos"); // Lugar donde se mostraran los datos.
var formSearch = document.getElementById("formSearch"); // Formulario de la busqueda
var searchButton = document.getElementById("searchButton"); // Click Button Search
var titleResult = document.getElementById("titleResult"); // Titulo de los resultados
titleResult.innerHTML = "Aquí verás tus tareas";
const srcButtonDelete = `https://img.icons8.com/ios-glyphs/30/FF0000/trash--v1.png`; // SRC del icono de eliminar
addTareas();

buttonAddHomework.addEventListener("click", (e) => {
    e.preventDefault();
    var inputHomework = document.getElementById("addHomework").value; // Valor de la nueva tarea
    var emoji = document.getElementById("selection-emoji").textContent; // Valor del nuevo emoji
    const tareas = new Object({ inputHomework: inputHomework, emoji: emoji, id: inputHomework });
    list.push(tareas);
    addTareas();
    document.getElementById('message').setAttribute('style', 'display: block');
    formulario.reset();
    setInterval(alertFlag, 2500);
});

searchButton.addEventListener("click", (e) => {
    e.preventDefault();
    var searchInput = document.getElementById("search").value; // Valor de la nueva busqueda
    filter(searchInput);
    formSearch.reset();
});

function addTareas() {
    var items = list.map(item =>
        `<div class="direction-items"><div class='col-sm-5 mb-small-items'><p id='homeworkList' class='decoration'> ${item.inputHomework} </p></div>
        <div class='col-sm-5  mb-small-items'><p id='emojiList' class='decoration'>${item.emoji}</p></div>
        <div class='col-sm-2 mb-small-items'><button class='iconDelete' id=${item.inputHomework} onClick='remove("${item.inputHomework}");'><img src=${srcButtonDelete} alt='icon image'/>Borrar</button></div></div> `
    ).join('');
    datos.innerHTML = items;
}

function remove(valueHomework) {
    console.log('tarea es', valueHomework);
    list.filter(function (item, index) {
        if (item.inputHomework === valueHomework) {
            list.splice(index, 1); 
            if (!list.length){
                datos.innerHTML = `<h2 class="pt-4">No hay datos</h2> `;
            } else {
                addTareas();
            }
        }
    });
}

function alertFlag() {
    document.getElementById('message').removeAttribute('style', 'display: block');
}

function filter(searchInput){
    list.filter(function (item) {
        if (item.inputHomework === searchInput) {
            titleResult.innerHTML = "Los datos encontrados son: ";
            datos.innerHTML = `<div class="direction-items">
                               <div class='col-sm-5 mb-small-items'><p id='homeworkList' class='decoration'> ${item.inputHomework} </p></div>
                               <div class='col-sm-5 mb-small-items'><p id='emojiList' class='decoration'>${item.emoji}</p></div>
                               <div class='col-sm-2 mb-small-items'><button class='iconDelete' id=${item.inputHomework} onClick='remove();'><img src=${srcButtonDelete} alt='icon image'/>Borrar</button></div>
                               </div> `;
        } else {
            titleResult.innerHTML = "Tu búsqueda no ha sido encontrada, intenta nuevamente.";
            datos.innerHTML = "";
        }
    });
}