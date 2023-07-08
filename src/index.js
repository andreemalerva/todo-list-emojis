const buttonAddHomework = document.querySelector("#addButton");
        var list = [{ inputHomework: 'Programar', emoji: '🧑🏻‍💻'}];
        var homeworkList = document.getElementById("homeworkList");
        var emojiList = document.getElementById("emojiList");
        var formulario = document.getElementById("formHomeworks");
        var datos = document.getElementById("datos");
        addTareas();

        buttonAddHomework.addEventListener("click", (e) => {
            e.preventDefault();
            var inputHomework = document.getElementById("addHomework").value;
            var emoji = document.getElementById("addEmoji").value;
            const tareas = new Object({ inputHomework: inputHomework, emoji: emoji});
            list.push(tareas);
            addTareas();
            document.getElementById('message').setAttribute('style', 'display: block');
            formulario.reset();
            setInterval(alertFlag, 2500);
        });

        function addTareas() {
            var items = list.map(item => 
                `<div class='col-sm-6 mb-small-items file'><p id='homeworkList' class='decoration'>
                ${item.inputHomework}
                 </p></div><div class='col-sm-6 file mb-small-items'><p id='emojiList' class='decoration'>
                 ${item.emoji}</p></div>`
            ).join('');
            datos.innerHTML = items;
        }

        function remove() {
            var items = list.map(item => 
                `<div class='col-sm-6 mb-3 file'><p id='homeworkList' class='decoration'>
                ${item.inputHomework}
                 </p></div><div class='col-sm-6 file mb-3'><p id='emojiList' class='decoration'>
                 ${item.emoji}</p></div>`
            ).join('');
            datos.innerHTML = items;
        }


        function alertFlag() {
            document.getElementById('message').removeAttribute('style', 'display: block');
        }