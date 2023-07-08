<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO-DO LIST EMOJI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('resources/css/main.css'); ?>">
</head>

<body>
    <header class="header-todo">
        <nav class="navbar container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url('resources/images/icon.png'); ?>" width="35" height="35" class="d-inline-block align-top" alt="icon image"> TO-DO List Emojis
            </a>
        </nav>
    </header>

    <div class="container body-todo">
        <div class="card card-search">
            <div class="card-body">
                <h5 class="card-title">Busca tus tareas aquí</h5>
                <p class="card-text">Aquí puedes buscar y agregar tareas con un emoji.</p>
                <form class="row d-flex" id="formSearch">
                    <div class="col-sm-6 mb-small">
                        <input type="text" name="search" id="search" class="search">
                    </div>
                    <div class="col-sm mb-small">
                        <button class="searchButton" id="searchButton">Buscar tareas</button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="add" data-toggle="modal" data-target="#addHomeworkModal">Agregar tarea</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="listHomework" class="mt-4 mb-4 card">
            <h2 id="titleResult"></h2>
            <div id="datos"></div>
        </div>

        <div class="modal fade" id="addHomeworkModal" tabindex="-1" aria-labelledby="eaddHomeworkModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agrega tarea</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="row d-flex flex-column" id="formHomeworks">
                            <div class="col-sm-12 pb-4 pr-0 pl-0">
                                <div class="col-sm pb-3">
                                    <label for="tareas">Nombre de la tarea:</label>
                                    <input type="text" name="tareas" id="addHomework" placeholder="Ej. Programar" required>
                                </div>
                                <div class="col-sm">
                                    <label for="tareas">Emoji:</label>
                                    <div class="row">
                                        <div class="col-sm">
                                            <button id="addEmoji">Elije un emoji</button>
                                        </div>
                                        <div class="col-sm emojiSelect">
                                            <p id="selection-emoji"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button class="addButton" id="addButton">Agregar tarea</button>
                            </div>
                        </form>
                        <div class="message pt-3" id="message">
                            <div class="flag">
                                <h3>¡Tu tarea ha sido agregada!</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/picmo@latest/dist/umd/index.js"></script>
    <script src="<?php echo base_url('resources/javascript/index.js'); ?>"></script>
    <script type="module" src="../../resources/javascript/emoji.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>