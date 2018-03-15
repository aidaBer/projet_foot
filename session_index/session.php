 
<?php 
session_start() ; 

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title> </title>
 </head>
 <body>
 	   
       <center>
      <fieldset style="width:50%">
        <legend>Formulaire Sessions </legend>
          <form  action="session_compte.php" method="post">
            
            <input type="submit" name="submit" value="Count">
          </form>
      </fieldset>
    </center>


 <?php 
          session_start() ;
          if (!isset($_SESSION ['expire']) || time() >$_SESSION ['expire'] ) 
          {
            session_destroy () ;
            session_start() ;
            $_SESSION ['expire'] = time () + 30 ;
            $_SESSION ['Count'] = 1 ;
          }

          else 
          {
            $_SESSION ['Count'] ++ ;
          }


          // redirection
          //header ("Location: session.php") ;

 ?>


 <?php 
           if (!isset($_SESSION ['Count']))
          	$_SESSION ['Count'] = 0 ;
             echo "Vous en etes a " . $_SESSION ['Count'] . " session (s)";
                     

 ?>
 </body>
 </html>