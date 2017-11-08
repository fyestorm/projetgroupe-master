<!DOCTYPE html>
<html>
	<head>
          <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
    	   <script src="https://use.fontawesome.com/6f31503715.js"></script>
	        <title></title>
	        <meta charset="utf-8">
	</head>
		<body>
          <header>
 
      <?php require_once 'include/nav.php' ?>
      
           <div class="container-fluid red">
            <div class="container" id="logodepresentation">
              <img src="img/4.png" alt="logo">
            </div>
           </div>
      
          </header>

          <section id="formation">
            <?php require_once 'include/techno.php' ?>
          </section>

          <section id="avenir">
            <?php require_once 'include/avenir.php' ?>
          </section>

          <section id="slider">
             <?php require_once 'include/carousel.php' ?>
          </section>

          <section>
          <?php require_once 'include/equipe.php' ?>
          </section>

          <section id="googlemap">
             <?php require_once 'include/map.php'; ?>
          </section>

            <section>
             <?php require_once 'include/formulaire.php'; ?>
          </section>

        <footer>
         <?php require_once 'include/footer.php'; ?>
        </footer>
      <script src="js/popper.min.js" type="text/JavaScript"></script>
      <script src="js/jquery-3.2.1.min.js"></script>
         <script type="text/javascript" src="js/formulaire.js"></script>
         <script src="js/bootstrap.min.js"></script>
    </body>
</html>