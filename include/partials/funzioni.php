<?php 

    session_start();

    //striga composta da lettere o da numeri o da simboli
    $str = '';

    //lunghezza dela password con o meno la riduzione se è stato selezionato solo lettere solo numeri o solo simboli
    $lunghezzaConFiltri = 0;

    //quantità di caratteri inseriti dall'utente
    $quantitaLettere = 0;
    $password = '';

    $quantitaLettere = (isset($_GET['lunghezzaCaratteri'])) ? intval( $_GET['lunghezzaCaratteri'] ) : '';


    $ripetizioni = (isset($_GET['radioValue'])) ? $_GET['radioValue']  : '';

    
    var_dump( $quantitaLettere, $ripetizioni);

    $arrayScelte = [
        
        [
            'type' => 'lettere',
            'argoments' => 'abcdefghijklmnopqrstuvwxyz',
            'active' => ( isset($_GET['checkboxLettere'])  ) ? true : false 
        ],
        [
            'type' => 'numeri',
            'argoments' => 'abcdefghijklmnopqrstuvwxyz',
            'active' => ( isset($_GET['checkboxNumeri'])  ) ? true : false 
        ],
        [
            'type' => 'simboli',
            'argoments' => 'abcdefghijklmnopqrstuvwxyz',
            'active' => ( isset($_GET['checkboxSimboli'])  ) ? true : false 
        ],

    ];

    var_dump($arrayScelte)

?>