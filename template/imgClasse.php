<?php include 'head.php';?>
 <body>
	<div class="wrapper">
        <?php
            include 'header.php';
            include 'aside.php';
        ?>
		<main>
            <h1 style="text-align:center;margin-top:0;">Tria la teva imatge de perfil</h1>
            <div class="imatges">
                  <div class="imatges-img">
                    <img id="1.png" class="imatges-imatge" src="assets/img/assignaturas/1.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="2.png" class="imatges-imatge" src="assets/img/assignaturas/2.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="3.png" class="imatges-imatge" src="assets/img/assignaturas/3.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="4.png" class="imatges-imatge" src="assets/img/assignaturas/4.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="5.png" class="imatges-imatge" src="assets/img/assignaturas/5.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="6.png" class="imatges-imatge" src="assets/img/assignaturas/6.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="7.png" class="imatges-imatge" src="assets/img/assignaturas/7.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="8.png" class="imatges-imatge" src="assets/img/assignaturas/8.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="9.png" class="imatges-imatge" src="assets/img/assignaturas/9.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="10.png" class="imatges-imatge" src="assets/img/assignaturas/10.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="11.png" class="imatges-imatge" src="assets/img/assignaturas/11.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="12.png" class="imatges-imatge" src="assets/img/assignaturas/12.png"/>
                  </div>
            </div>
            <div style="display:hidden;"></div>
		</main>
	</div>

    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script>

      $(document).ready(function () {


        // Listen for clicks to "img" elements inside the element where id="sinistra"
        $(".imatges img").click(function () {
          // Displays the source of the image clicked
          var parametres = {
              "id" : '<?php echo $_GET['id'];?>',
              "imatge" : $(this).attr("id")
            }
            // PARA ENVIAR EL NOMBRE DE LA IMAGEN AL CLICK Ej(1.png)
            console.log(parametres);


            $.ajax({
                    data: parametres,
                    url:'/php/imatgeClasse.php',
                    type: 'post',
                    beforeSend: function(){

                    },
                    complete: function() {

                    },
                    success: function(){
                      location.assign("?espai=home");
                    }
                })


        });


        
        

      });


      


    </script>

    

</body>

</html>
