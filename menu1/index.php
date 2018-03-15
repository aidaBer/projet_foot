
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Menu</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body background="restau.JPG">

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" id="top">Restaurant Chez Aida</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="entr">Entree</a></li>
              <li><a href="#plat">Plat de Resistance</a></li>
              <li><a href="#dessert">Dessert</a></li>
              <li><a href="#boiss">Boisson</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <div class="panel-group">
        <form action="menu.php" method="GET" target="_blank"> 
          <div class="panel panel-default">
            <div class="panel-heading" id="entr">Entree</div>
            <div class="panel-body">
              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="ent" value="1"> Salade de Thon ................................................................................2000F
                  </label>
                </div>
             </div>
             <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="ent" value="2"> Choux a la sauce bechamelle...........................................................2200F
                  </label>
                </div>
             </div>
             <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="ent" value="3">  Salade de legumes............................................................................2400F 
                  </label>
                </div>
             </div>
             <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="ent" value="4">  Oeuf garni.........................................................................................1800F 
                  </label>
                </div>
             </div>
            </div>

          </div>

          <div class="panel panel-primary">
            <div class="panel-heading" id="plat">Plat de Resistence</div>
            <div class="panel-body">
              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="plat" value="1">  Filet de boeuf..................................................................................7000F 
                  </label>
                </div>
             </div>
             <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="plat" value="2"> Brochettes mix................................................................................8500F
                  </label>
                </div>
             </div>
             <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="plat" value="3"> Gambas Provincale.........................................................................9000F  
                  </label>
                </div>
             </div>
             <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="plat" value="4"> Fajitas..............................................................................................6500F 
                  </label>
                </div>
             </div>
            </div>
          </div>

          <div class="panel panel-success">
            <div class="panel-heading" id="dessert">Dessert</div>
            <div class="panel-body">
              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="dess" value="1">  Fondant Chocolat.............................................................................3000F 
                  </label>
                </div>
             </div>
             <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="dess" value="2"> Choux a la sauce bechamelle...........................................................2200F
                  </label>
                </div>
             </div>
             <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="dess" value="3">   Dame blanche...................................................................................4500F  
                  </label>
                </div>
             </div>
             <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="dess" value="4"> Gateaux.............................................................................................2500F
                  </label>
                </div>
             </div>
            </div>
          </div>
        </div>

        <div class="panel panel-info">
          <div class="panel-heading" id="boiss">Boisson</div>
          <div class="panel-body">
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                 <input class="form-check-input" type="checkbox" name="boiss" value="1">Virgin Mojito..................................................................................2500F
                </label>
              </div>
           </div>
           <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                 <input class="form-check-input" type="checkbox" name="boiss" value="2"> Boisson gazeuze (Coca,Fanta,Sprite).............................................1500F
                </label>
              </div>
           </div>
           <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                 <input class="form-check-input" type="checkbox" name="boiss" value="3">  Jus locaux (Bouye, bissap, cocktail, ditakh )..................................1000F 
                </label>
              </div>
           </div>
           <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                 <input class="form-check-input" type="checkbox" name="boiss" value="4">Eau minerale....................................................................................800F 
                </label>
              </div>
           </div>
          </div>
        </div>
        <input type="submit" class="btn btn-success" value=" Passer la commande ">
      </div>
    </form>
       <a href="#top"><img src="top.PNG" width="50px" height="50px"></a>
    </div>
 
    </div> <!-- /container -->

  </body>
</html>
