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
                    <img id="1.png" class="imatges-imatge" src="assets/img/avatares/1.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="2.png" class="imatges-imatge" src="assets/img/avatares/2.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="3.png" class="imatges-imatge" src="assets/img/avatares/3.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="4.png" class="imatges-imatge" src="assets/img/avatares/4.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="5.png" class="imatges-imatge" src="assets/img/avatares/5.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="6.png" class="imatges-imatge" src="assets/img/avatares/6.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="7.png" class="imatges-imatge" src="assets/img/avatares/7.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="8.png" class="imatges-imatge" src="assets/img/avatares/8.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="9.png" class="imatges-imatge" src="assets/img/avatares/9.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="10.png" class="imatges-imatge" src="assets/img/avatares/10.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="11.png" class="imatges-imatge" src="assets/img/avatares/11.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="12.png" class="imatges-imatge" src="assets/img/avatares/12.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="13.png" class="imatges-imatge" src="assets/img/avatares/13.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="14.png" class="imatges-imatge" src="assets/img/avatares/14.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="15.png" class="imatges-imatge" src="assets/img/avatares/15.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="16.png" class="imatges-imatge" src="assets/img/avatares/16.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="17.png" class="imatges-imatge" src="assets/img/avatares/17.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="18.png" class="imatges-imatge" src="assets/img/avatares/18.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="19.png" class="imatges-imatge" src="assets/img/avatares/19.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="20.png" class="imatges-imatge" src="assets/img/avatares/20.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="21.png" class="imatges-imatge" src="assets/img/avatares/21.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="22.png" class="imatges-imatge" src="assets/img/avatares/22.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="23.png" class="imatges-imatge" src="assets/img/avatares/23.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="24.png" class="imatges-imatge" src="assets/img/avatares/24.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="25.png" class="imatges-imatge" src="assets/img/avatares/25.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="26.png" class="imatges-imatge" src="assets/img/avatares/26.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="27.png" class="imatges-imatge"src="assets/img/avatares/27.png" />
                  </div>
                  <div class="imatges-img">
                    <img id="28.png" class="imatges-imatge" src="assets/img/avatares/28.png"/>
                  </div>
                  <div class="imatges-img">
                    <img id="29.png" class="imatges-imatge" src="assets/img/avatares/29.png"/>
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
              "id" : '<?php echo $id;?>',
              "imatge" : $(this).attr("id")
            }
            // PARA ENVIAR EL NOMBRE DE LA IMAGEN AL CLICK Ej(1.png)
            console.log(parametres);


            $.ajax({
                    data: parametres,
                    url:'/php/guardaImatge.php',
                    type: 'post',
                    beforeSend: function(){

                    },
                    complete: function() {

                    },
                    success: function(){
                      location.reload(true);
                    }
                })


        });


        
        

      });


      


    </script>

    

</body>

</html>
