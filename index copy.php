<!DOCTYPE html>
<!--
    Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this licenseClick nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template

https://www.php.net/manual/en/pgsql.examples-basic.php

****************
http://localhost/PHP-BOOTSTRAP-VUE/
****************

<html lang="bt-br" data-bs-theme="dark"> 
-->
<html lang="bt-br">

<head>
    <meta charset="UTF-8">
    <title>bootstrap teste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        #app {
            display: inline-block;
            padding: 10px;
            font-size: x-large;
            border: dashed black 1px;
            width: 130px;
            padding-left: 20px;
            font-weight: bold;
            background-color: lightgreen;
            display: inline-block;
            padding: 10px;
            font-size: x-large;
            background-color: lightgreen;
        }

        #app4 {
            display: inline-block;
            padding: 10px;
            font-size: x-large;
            background-color: lightgreen;
        }
    </style>

</head>

<body>

    <h1>Vue Example</h1>


    <div id="app">
        <p v-if="typewriterCount>0">
            in stock
        </p>
        <p v-else>
            not in stock
        </p>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
        const app = Vue.createApp({
            data() {
                return {
                    typewriterCount: 3
                }
            }
        })
        app.mount('#app')
    </script>



    <?php
    echo "<h2>PHP is Fun!</h2>";
    $i = 1;
    for ($i; $i < 3; $i++) {
        echo "Postado:";
        echo '</br>';
    }

    ?>

    <div class="container-fluid mt-3">
        <h1>2 colunas iguais</h1>

        <div class="row">
            <div class="col p-3 text-black text-bg-warning">.col
                <div class="row">
                    <div class="col-sm-4">.col-sm-3</div>
                    <div class="col-sm-4">.col-sm-3</div>
                    <div class="col-sm-4">.col-sm-3</div>
                </div>
            </div>

            <div class="col p-3 bg-danger text-white">.col
                <div class="row">
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner container-fluid pt-3 pb-3 my-5 bg-primary  text-white">
    <div class="carousel-item active">
        <img src="la.jpg" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
        <img src="chicago.jpg" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
        <img src="ny.jpg" alt="New York" class="d-block" style="width:100%">
    </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
</button>
</div>
                </div>
            </div>

        </div>
    </div>

    <div class="container mt-3">
        <h2>Responsive Table</h2>
        <p>The .table-responsive class adds a scrollbar to the table when needed:</p>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Sex</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                        <td>Female</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="container mt-3">
        <h3>Tooltip Positioning</h3>
        <p>The data-bs-placement attribute specifies the tooltip position.</p>
        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Hooray!">Top</a>
        <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hooray!">Bottom</a>
        <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Hooray!">Left</a>
        <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Hooray!">Right</a>
    </div>


    <div class="container mt-3">
        <h2>Flush / Remove Borders</h2>
        <p>Use the .list-group-flush class to remove some borders and rounded corners:</p>
    </div>


    <div class="container mt-3">
        <ul class="list-group">
            <a href="https://www.google.com" class="list-group-item list-group-item-action list-group-item-success" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Hooray!">bootstrap5</a>
            <a href="https://www.google.com" class="list-group-item list-group-item-action list-group-item-secondary" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Hooray!">Secondary item</a>
            <a href="https://www.google.com" class="list-group-item list-group-item-action list-group-item-info" target=" _blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Hooray!">Info item</a>
        </ul>
    </div>




    <div class="container mt-3">
        <h3>Modal Example</h3>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#meuModal">
            abrir modal
        </button>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="meuModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">cabecalho do modal</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    corpo do modal
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>













    <div class="container mt-3">
        <h2>Steps in a Range</h2>
        <p>By default, the interval between the range numbers is 1. You can change it by using the step attribute:</p>
        <form action="/action_page.php">
            <label for="customRange" class="form-label">Custom range</label>
            <input type="range" class="form-range" id="customRange" step="10" name="points">
            <button type="submit" class="btn btn-primary mt-3">Entrar</button>
        </form>
    </div>



    <div class="container-fluid mt-3">
        <h2>Three Unequal Columns</h2>
        <p>It is enough to only set the width of one column, and have the sibling columns automatically resize around it. The following example will create a 25%/50%/25% split:</p>
        <div class="row">
            <div class="col-8 bg-success">.col</div>
            <div class="col bg-warning">.col-6</div>
            <div class="col bg-success">.col</div>
        </div>
    </div>


    <div class="container mt-3">
        <h2>Floating Labels - Inputs</h2>
        <p>Click inside the input field to see the floating label effect:</p>
        <form action="/action_page.php">
            <div class="form-floating mb-1 mt-1">
                <input type="text" class="form-control" id="usu" placeholder="Entre o nome de Usuário" name="usu">
                <label for="usu">Usuário</label>
            </div>
            <div class="form-floating mt-1 mb-1">
                <input type="text" class="form-control" id="pwd" placeholder="Senha" name="pswd">
                <label for="pwd">Senha</label>
            </div>
            <button type="submit" class="btn btn-primary">entrar no sistema</button>
        </form>
    </div>



    <div class="container mt-3">
        <h2>Aligning images</h2>
        <p>Use the float classes to float the image to the left or to the right:</p>
        <img src="paris.jpeg" class="float-start" alt="Paris" width="200" height="200">
    </div>



    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-black text-bg-primary" href="https://www.google.com/">Link</a></li>
                            <li><a class="dropdown-item text-black text-bg-success" href="https://www.google.com/">Another link</a></li>
                            <li><a class="dropdown-item text-black text-bg-warning" href="https://www.google.com/">A third link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-3">
        <h3>Navbar With Dropdown</h3>
        <p>This example adds a dropdown menu in the navbar.</p>
    </div>

    <div class="alert alert-success">
        <strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
    </div>




    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner container-fluid pt-3 pb-3 my-5 bg-primary  text-white">
            <div class="carousel-item active">
                <img src="la.jpg" alt="Los Angeles" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="chicago.jpg" alt="Chicago" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="ny.jpg" alt="New York" class="d-block" style="width:100%">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- quadro abaixo do Carousel -->
    <div class="container p-5 my-5 bg-dark text-white">
        <h2>Carousel Example</h2>
        <p>The following example shows how to create a basic carousel with indicators and controls.</p>
    </div>




</body>

</html>