<?php /* Riscrivere questa pagina del sito google https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. */

$navMenu = [
    'introduzione',
    'norme sulla privacy',
    'termini di servizio',
    'tecnologie',
    'domande frequenti',
];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/x-icon" href="./img/logo_google_favicon.png">
    <title>Domande frequenti - Privacy e termini</title>
</head>

<body>
    <header class="container-fluid text-secondary px-5">
        <nav class="py-3 d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center" id="nav-logo">
                <a href="#">
                    <img class="img-fluid" src="./img/logo_google.png" alt="">
                </a>
                <h5 class="px-2">Privacy e termini</h5>
            </div>
            <div class="d-flex align-items-center">
                <div class="px-3">
                    <a href="#" class="text-decoration-none text-secondary">
                        <i class="fa-solid fa-table-cells"></i>
                    </a>
                </div>
                <div class=" bg-danger rounded-circle my-user d-flex justify-content-center align-items-center ">
                    <a href="#" class="text-decoration-none text-white">
                        <h5>S</h5>
                    </a>
                </div>
            </div>

        </nav>
        <nav id="nav-menu">
            <ul class="d-flex ">
                <?php for ($i = 0; $i < count($navMenu); $i++) { ?>
                    <li class="px-4">
                        <a href="#" class="text-decoration-none text-secondary ">
                            <?php echo $navMenu[$i] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <hr class="text-secondary ">
    </header>
</body>

</html>