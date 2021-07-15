<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nome="";
    $email="";
    $mensagem="";
    
    if(isset($_POST['nome'])){
        $nome=$_POST['nome'];
    }
    else{
        echo '<script>alert("É obrigatorio o preenchimento do nome.");</script>';
        }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        }
    if(isset($_POST['mensagem'])){
        $mensagem = $_POST['mensagem'];

}

       
$con=new mysqli("localhost","root","","papatualizada");

if($con->connect_errno!=0){
    echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
    exit;

    }
else{

    $sql='insert into formulario(nome,email,mensagem)values(?,?,?)';
        $stm=$con->prepare( $sql);
        if($stm!=false){

            $stm->bind_param('sss',$nome,$email,$mensagem,);
            $stm->execute();
            $stm->close();

            echo '<script>alert ("Compra adicionada com sucesso");</script>';

            echo 'Aguarde um momento.A reencaminhar página';
            header("refresh:5;url=home.php");
        }
        else{
            echo ($con->error);
            echo "Aguarde um momento.A reencaminhar página";
            header("refresh:5;url=home.php");
        }
        }//end if-if($con->connect_errno!=0)
}//if($_SERVER´['REQUEST_METHOD']=="POST")


  ?>



<!DOCTYPE html>
      <html>
      <head>
          <meta charset="ISO_8859-1">
          <title>Faz o teu pedido</title>

           <meta charset="utf-8">
   <link rel="stylesheet" href="style.css" />
   <link rel="stylesheet" type="styles2.css" href="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="magicslideshow/magicslideshow.css"/>

<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="style.css">



          
      </head>
      <body style="background-color:    #363636">

      <h2 class="title text-center" style="color: white;"><br>Compra este curso</h2>
    <div align="center" >
      <form action="form.php" method="post">
        <br>
        <br><br>
      <center><label><h2 style="color: white;">Nome&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
  <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
</svg><i class="bi bi-at"></i></h2></label><br><input type="text" name="nome" class="" required="required" placeholder="Insira o seu nome"><br><br>
      <br>
      <br>
      <br>
      
      <label><i class="bi bi-envelope"></i>
       <h2 style="color: white;">Email  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg></h2></label><br><input type="text" name="email" class="" required="required" placeholder="Insira o seu email">
      <br>
      <br>
      <br>
      <br>
    
      <label><h2 style="color: white;">Mensagem&nbsp;<i class="bi bi-chat-left-dots"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg></h2></label><br><input type="text" name="mensagem" class="" required="required" placeholder="Insira a sua mensagem">
    <br><br><button align="center" type="submit" name="submit" class="btn btn-primary pull-center" value="Submit">Submit</button>
      </form>
      </div>
      </body>

      </html>



<?php

?>