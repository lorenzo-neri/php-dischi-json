<?php

/* 
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.

Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP

Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.

Bonus
Al click su un disco, recuperare e mostrare i dati del disco selezionato.
*/

#HEAD
include __DIR__ . '/assets/layout/head.php'
?>


<div id="app">
    <header class="p-3 text-white d-flex align-items-center">
        <h1 class="ms-5">{{title}}</h1>
    </header>

    <main>

        <div class="container">
            <div class="row">
                <div v-for="(disk, index) in disks" :key="disk + index" class="col-4">
                    <div class="card py-4 px-5 m-4 text-white">
                        <img :src="disk.poster" class="card-img-top" :alt="disk.title">
                        <div class="card-body text-center">
                            <h3 class="card-title">{{disk.title}}</h3>
                            <p class="card-text">{{disk.author}}</p>
                            <h3>{{disk.year}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- <ul>
        <li v-for="(disk, index) in disks" :key="disk + index">
            {{disk.title}}
            <ul>
                <li>{{disk.author}}</li>
                <li>{{disk.year}}</li>
                <li>{{disk.genre}}</li>
            </ul>
        </li>
    </ul> -->

</div>

<?php
#FOOTER
include __DIR__ . '/assets/layout/footer.php'
?>