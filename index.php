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

    $filter_parking = $_GET["parking"];

    $filtered_hotels = $hotels;

    if($filter_parking != "both") {
        $temp_hotels = [];
        foreach($filtered_hotels as $hotel) {
            if($hotel["parking"] ) {
                $temp_hotels[] = $hotel;
            }
        }
    };
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
        <div class="card">
            <div class="card-header">
                <h3>Filtra Hotel</h3>
            </div>
            <div class="card-body">
                <form method="GET">

                    <div class="mb-3">
                        <label for="vote" class="form-label">Voto medio</label>
                        <input type="number" class="form-control" id="vote" name="vote" min=1 max=5>
                    </div>

                    <div class="form-control mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="parking" id="yes-parking">
                            <label class="form-check-label" for="yes-parking">
                                Con parcheggio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="parking" id="no-parking">
                            <label class="form-check-label" for="no-parking">
                                Senza parcheggio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="parking" id="both">
                            <label class="form-check-label" for="both">
                                Entrambi
                            </label>
                        </div>
                    </div>

                    <button class="btn btn-primary">Filtra la ricerca</button>
                </form>
            </div>
        </div>

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
                        <?php foreach($filtered_hotels as $key => $hotel) : ?>
                        <tr>
                            <th scope="row"><?= $key + 1 ?></th>
                            <td><?= $hotel["name"] ?></td>
                            <td><?= $hotel["parking"] ? "Sì" : "No" ?></td>
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