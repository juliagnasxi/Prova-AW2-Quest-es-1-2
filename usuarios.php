<? php

Classe  Usuario {

    private  $ pdo ;
    public  $ erro = "" ;

public  function  conectar ( $ nome , $ host , $ usuario , $ senha ) {
global  $ pdo ;
tente {
    $ pdo = new  PDO ( "mysql: dbname" . $ nome . "; host =" . $ host , $ usuario , $ senha );
} catch ( PDOExeption  $ e ) {
    global  $ erro ;
    $ erro = $ e -> getMessage ();
}

}


public  function  cadastrar ( $ nome , $ telefone , $ email , $ senha ) {

    global  $ pdo ;
    $ sql = $ pdo -> prepare ( "SELECT id_usuario FROM usuarios WHERE email =: e" );
    $ sql -> bindValue ( ": e" , $ email );
    $ sql -> execute ();
    if ( $ sql -> rowCount ()> 0 ) {

return  false ;

    }

    else {

$ sql = $ pdo -> prepare ( "INSERT INTO usuarios (nome, telefone, email, senha) VALORES (: n,: t,: e,: s)" );
    }
    $ sql -> bindValue ( ": n" , $ nome );
    $ sql -> bindValue ( ": t" , $ telefone );
    $ sql -> bindValue ( ": e" , $ email );
    $ sql -> bindValue ( ": s" , md5 ( $ senha ));
    $ sql -> execute ();
    return  true ;
}

 logar de função  pública ( $ email , $ senha ) {
    
    global  $ pdo ;
    $ sql = $ pd -> prepare ( "SELECT id_usuario FROM usuarios WHERE email =: e AND senha =: s" );
    $ sql -> bindValue ( ": e" , $ email );
    $ sql -> bindValue ( ": s" , md5 ( $ senha ));
    $ sql -> execute ();
    if ( $ sql -> rowCount ()> 0 ) {

$ dado = $ sql -> fetch ();
session_start ();
$ _SESSION [ 'id_usuario' ] = $ dado [ 'id_usuario' ];
return  true ;

    }

    else {
    return  false ;
}
}



}

?>
