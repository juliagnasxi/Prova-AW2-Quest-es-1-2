<? php

require_once  'usuarios.php' ;
$ u = novo  Usuario ;
?>


<! DOCTYPE HTML >
< html >
    < cabeça >
        < title > Cadastro </ title >
    </ head >
    < corpo >

  
    < form  method = ' post ' >
    < Entrada  tipo = " texto " espaço reservado =" Nome " nome =" Nome " maxlenght =" 30 " >  < br >
    < Entrada  tipo = " texto " espaço reservado =" Telefone " nome =" telefone " maxlenght =" 30 " >  < br >
   < Entrada  tipo = " email " espaço reservado =" Usuario " nome =" email " maxlenght =" 40 " >  < br >
   < Entrada  tipo = " password " espaço reservado =" Senha " nome =" Senha " maxlenght =" 15 " > < br >
   < Entrada  tipo = " password " espaço reservado =" Confirmar Senha " nome =" confirmarsenha " maxlenght =" 15 " > < br >
  < input  type = " submit " name = " Cadastrar " >
</ form >
<? php
 if ( isset ( $ _POST [ 'nome' ])) {

    $ nome = adicionalashes ( $ _POST [ 'nome' ]);
    $ telefone = adiciona barras ( $ _POST [ 'telefone' ]);
    $ email = addslashes ( $ _POST [ 'email' ]);
    $ senha = adicionalashes ( $ _POST [ 'senha' ]);
    $ confirmarsenha = addslashes ( $ _POST [ 'confirmarsenha' ]);

    if (! empty ( $ nome ) &&! empty ( $ telefone ) &&! empty ( $ email ) &&! empty ( $ senha ) &&! empty ( $ confirmarsenha )) {

$ u -> conectar ( "projeto_loginn" , "localhost" , "root" , "" );
    if ( $ senha == $ confirmarsenha ) {
    if ( $ u -> cadastrar ( $ nome , $ telefone , $ email , $ senha ))
    {
 echo "cadastrado" ;


    }
    else {

        echo "ja cadastrado" ;
    }
    }
    else {

        echo  "sem correspondencia" ;
    }


  }
else {

    echo  "Preencha" ;
}
}
    
?>


    </ body >
</ html >
