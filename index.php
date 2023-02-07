<?php
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

$keys = array_keys($hotels[0]);

?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Giuseppe-Dattilo">
        <title>php-hotel</title>

        <!-- Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


        <!-- Font Awesome -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css' integrity='sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ==' crossorigin='anonymous'>


        <!-- Style -->
        <link rel="stylesheet" href="style.css"> 
        
    </head>
<body>
    <div class="container">
        <h1 class="my-5 text-center fw-bold">Hotels</h1>
        <table class="table">
            <thead>
                <tr>
                    <?php foreach ($keys as $key) : ?>
                        <th scope="col"><?= ucfirst($key)?></th>
                    <?php endforeach;?>
                </tr>  
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) : ?>
                    <tr>
                        <td><?= $hotel['name']?></td>
                        <td><?= $hotel['description']?></td>
                        <td><?= $hotel['parking'] ? '<i class="fas fa-circle-check"></i>' : '<i class="fas fa-circle-xmark"></i>'?></td>
                        <td><?= $hotel['vote']?></td>
                        <td><?= $hotel['distance_to_center']?> kms</td>
                    </tr>
                </tbody>
            <?php endforeach;?>
        </table>
    </div>    
</body>
</html>