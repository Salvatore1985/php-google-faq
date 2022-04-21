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

$implementing = [
    'request' => ['Come state implementando la recente decisione 
                della Corte di giustizia dell\'Unione europea (CGUE) relativa 
                al diritto all\'oblio?'],


    'answer' => [
        ['La recente decisione della Corte di giustizia dell\'Unione europea 
                ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito 
                che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di 
                rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per 
                poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti 
                o non più rilevanti, o eccessivi.'],

        ['Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato 
                incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché 
                dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto 
                dell\'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere 
                e distribuire le informazioni.'],

        ['Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta 
                automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso 
                (tieni presente che potrebbe occorrere un po\' di tempo perché abbiamo già ricevuto tante richieste simili).
                Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata.
                Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, 
                ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione
                a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo 
                non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'accordo con la nostra valutazione,
                    puoi rivolgerti all\'Autorità garante per la protezione dei dati personali nel tuo paese.'],

        ['Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il 
                nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per 
                le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre 
                una procedura conforme alla legge.'],

        ['Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel 
                rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior 
                parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.']
    ],
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
    <main>
        <div class="container">
            <div class="row py-5">
                <div class="col-8 offset-2">
                    <?php foreach ($implementing  as $key) { ?>
                        <?php foreach ($key  as  $value) { ?>
                            <h3><strong><?php echo  $value ?></strong></h3>

                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>