<?php 

   session_start();

   if (!isset($_SESSION['id'])) {
   	   header('Location: index.php');
   }

   $acao = 'recuperar_postagens';

   require '../../social/controller.php';
  
  // echo "<pre>"; 
  // print_r($array_de_postagens);
  // echo "</pre>"; 
  
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	
	<body>

                <!-- As a link -->
        <nav class="navbar navbar-dark bg-dark">
          <a href="controller.php?acao=deslogar" style="color: white;">Sair</a>
          <a href="todos_os_usuarios.php" style="color: white;">Todos os Usuários</a>
        
        </nav>



        
        
        
        <br>

        <br>
        <br>
        
        <form method="POST" action="controller.php?acao=postar">
        	
            <textarea class="form-control" name="postagem" style="width: 70%; margin-left: 1em;"></textarea>
            <input type="hidden" name="id_usuario" value="<?= $_SESSION['id'] ?>">
            <br>
            <button class="btn btn-dark" style="margin-left: 1em;">Postar</button>
        
        </form>
            
        <div>
            
        </div>

        <? foreach ($array_de_postagens as $key => $posts) { ?>
           
           <? if ($posts->descricao != '') { ?>
                  
            <div style="width: 50%; margin-left: 12em; height: 6em; background-color: whitesmoke;">
               <div class="container">
                 
                 <h4><?= $posts->email ?></h4>
                 <h7><?= $posts->descricao ?></h7>
                 
               </div> 
           </div>
           <br>
           <br>

           <? } ?>

           
        <? } ?>
   

	</body>
</html>