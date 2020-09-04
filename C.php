<? php

$ num1 = $ _GET [ "num1" ];
$ num2 = $ _GET [ "num2" ];
$ op = $ _GET [ "operação" ];

if ( $ op == "soma" )
    $ resultado = $ num1 + $ num2 ;

elseif ( $ op == "subtracao" )
    $ resultado = $ num1 - $ num2 ;

elseif ( $ op == "multiplicacao" )
    $ resultado = $ num1 * $ num2 ;

outro
    $ resultado = $ num1 / $ num2 ;
echo  "O resultado e: $ resultado" ;