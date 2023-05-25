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
            'arguments' => 'abcdefghijklmnopqrstuvwxyz',
            'active' => ( isset($_GET['checkboxLettere'])  ) ? true : false 
        ],
        [
            'type' => 'numeri',
            'arguments' => '1234567890',
            'active' => ( isset($_GET['checkboxNumeri'])  ) ? true : false 
        ],
        [
            'type' => 'simboli',
            'arguments' => '|!"£$%&(=)?^@#[]*ç',
            'active' => ( isset($_GET['checkboxSimboli'])  ) ? true : false 
        ],

    ];

    // var_dump($arrayScelte);

    foreach( $arrayScelte as $elem)
    if( $elem['active']){
        $str .= $elem['arguments'];
        $lunghezzaConFiltri += strlen( $elem['arguments']);
    }
    
    var_dump( $str, $lunghezzaConFiltri );

    function generaPassword( $quantitaLettere, $password, $lunghezzaConFiltri, $str, $ripetizioni ){
        if($quantitaLettere > 0 && $lunghezzaConFiltri > 0){

            if( $ripetizioni == 'no'){

                for( $i = 0; strlen($password) < $quantitaLettere; $i++ ){
                    $letteraRandom = $str[rand(0, strlen( $str ) - 1 ) ];

                    if( !preg_match("/$letteraRandom/", $password)){
                        $password .= $letteraRandom;
                    }
                }
            } 
            else {
                for( $i = 0; strlen($password) < $quantitaLettere; $i++ ){
                    $password .= $str[rand(0, strlen( $str ) - 1 ) ];
                }
            }
        }

        return $password;
    } 
    
    var_dump( generapassword( $quantitaLettere, $password, $lunghezzaConFiltri, $str, $ripetizioni ) );

    $_SESSION['password'] = generapassword( $quantitaLettere, $password, $lunghezzaConFiltri, $str, $ripetizioni )

?>   