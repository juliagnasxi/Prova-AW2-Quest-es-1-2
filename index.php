<? php

require_once  'usuarios.php' ;
$ u = novo  Usuario ;
?>

<! DOCTYPE HTML >
< html >
    < cabeça >
        < title > Login </ title >
    </ head >
    < corpo >

  
  < form  method = ' post ' >
   < Entrada  tipo = " email " espaço reservado =" Usuario " nome =" email " >  < br >
   < Entrada  tipo = " password " espaço reservado =" Senha " nome =" Senha " > < br >
  < input  type = " submit " name = " Entrar " >
< A  href = " cadastrar.php " > Cadastro < strong >
</ form >
<? php

if ( isset ( $ _POST [ 'email' ])) {


    $ email = addslashes ( $ _POST [ 'email' ]);
    $ senha = adicionalashes ( $ _POST [ 'senha' ]);
   

    if (! empty ( $ email ) &&! empty ( $ senha )) {

    
        if ( $ u -> logar ( $ email , $ senha )) {

            $ u -> conectar ( "projeto_loginn" , "localhost" , "root" , "" );

cabeçalho ( "localização: AreaPrivada.php" );


}

else {

    echo "erro" ;
}
            
        }

        else {

            echo "erro" ;
        }
    }

    else {

        echo "preencha" ;
    }



?>
   

    </ body >
</ html >
