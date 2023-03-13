<?php 
    /**Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
    Stampare tutti i nostri hotel con tutti i dati disponibili.
    Iniziate in modo graduale.
    Prima stampate in pagina i dati, senza preoccuparvi dello stile.
    Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
    Bonus
    1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
    2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
    NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
    Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. */

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container my-5">


        <div class="card mt-4">
            <div class="card-header">
                <h3> Hotel Disponibili </h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">Media recensioni</th>
                            <th scope="col">Distanza dal centro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($hotels as $key => $hotel) : ?>
                        <tr>
                            <th scope="row"><?= $key + 1 ?></th>
                            <td><?= $hotel["name"] ?></td>
                            <td><?= $hotel["parking"] ?></td>
                            <td><?= $hotel["vote"] ?></td>
                            <td><?= $hotel["distance_to_center"] ?> Km</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>