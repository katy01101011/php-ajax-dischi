<!--
Seconda Milestone:
Attraverso l’utilizzo di axios:
al caricamento della pagina axios chiederà,
attraverso una chiamata api,
i dischi a php e li stamperà attraverso vue.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone2</title>
    <!-- STYLE -->
    <link rel="stylesheet" href="css/style.css">
    <!-- VUEJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.7.0-alpha.6/vue.common.dev.min.js"></script>
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.7.0-alpha.6/vue.common.dev.min.js"></script>
</head>

<body>
    <!-- HEADER -->
    <header>
        <img src="img/logo-small.svg" alt="logo spotify">
    </header>
    <!-- /HEADER -->

    <!-- MAIN -->
    <main id="app">
        <div class="container">
            <div v-for="card in database" class="card">
                <img :src="card.poster" alt="">
                <h2>
                    {{ card.title }}
                </h2>
                <h3>
                    {{ card.author }}
                </h3>
                <h4>
                    {{ card.year }}
                </h4>
            </div>
        </div>
    </main>
    <!-- /MAIN -->
    <script src="js/script.js"></script>
</body>

</html>