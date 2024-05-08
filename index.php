<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- collegamento tramite cdn di AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- collegamento tramite cdn di VUE -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>

    <div>
        <ul class="row list-unstyled justify-content-center" id="app">
            <li class="col-3 m-4" v-for="disco in dischi">
                <div class="card h-100">
                    <img :src=`${disco.poster}` class="card-img-top p-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center text-white">{{ disco.title }}</h5>
                        <p class="card-text text-center text-white">{{ disco.author }} <br> {{ disco.year }} </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- collegamento di vue a js -->
    <script src="./app.js"></script>


</body>

</html>