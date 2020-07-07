<?php
include('classes/mailValidation.php');
include('classes/template.php');
$template = new template();
?>
<!DOCTYPE html>
<html>
	<title><?php $template->showTitle(); ?> </title>
  <?php template::getLibs(); ?>
<body class="w3-black">
<?php template::getMenu(); ?>


       <!-- About  -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Par mums</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
   </div>

  <!-- Portfolio -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Mūsu darbi</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
          <a href="img/1.jpg" data-lightbox="gallery">
          	<img src="img/1.jpg" alt="carpet" style="width:100%">
          </a>

          <a href="img/2.jpg" data-lightbox="gallery">
          	<img src="img/2.jpg" alt="carpet" style="width:100%">
          </a>

           <a href="img/3.jpg" data-lightbox="gallery">
          	<img src="img/3.jpg" alt="carpet" style="width:100%">
          </a>

           <a href="img/4.jpg" data-lightbox="gallery">
          	<img src="img/4.jpg" alt="carpet" style="width:100%">
          </a>
      </div>



      <div class="w3-half">
           <a href="img/1.jpg" data-lightbox="gallery">
          	<img src="img/1.jpg" alt="carpet" style="width:100%">
          </a>

            <a href="img/2.jpg" data-lightbox="gallery">
          	<img src="img/2.jpg" alt="carpet" style="width:100%">
          </a>

            <a href="img/3.jpg" data-lightbox="gallery">
          	<img src="img/3.jpg" alt="carpet" style="width:100%">
          </a>

            <a href="img/4.jpg" data-lightbox="gallery">
          	<img src="img/4.jpg" alt="carpet" style="width:100%">
          </a>
      </div>
   
    </div>

  </div>

  <!-- Contacts -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Kontakti</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Sigulda, LV</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Telefons: 2076 9076</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Epasts: mallerart@gmail.com</p>
    </div><br>
	 <!-- map -->
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34615.369556668105!2d24.810371226058418!3d57.16337641591084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e94e2d43517dc1%3A0x400cfcd68f31f60!2sSigulda%2C%20Siguldas%20pils%C4%93ta%2C%20LV-2150!5e0!3m2!1slv!2slv!4v1594131196559!5m2!1slv!2slv" width="100%" height="300" frameborder="0" style="border:1px solid black;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <p>Sazinieties ar mums:</p>

 <form method="post" id="form" target="_self">
        <?php include('classes/errorsHandler.php'); ?>
        <?php include('classes/succesMessage.php'); ?>

      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Vārds" name="name" value="<?php echo 
        $name;?>"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="E-pasts" name="email" value="<?php echo$email;?>"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Telefons" name="phone" value="<?php echo$phone;?>"></p>
      <textarea style="resize:none" name="message" id="message" rows="4"
      class="form-control input-sm w3-input w3-padding-16 w3-border" placeholder="Ziņa"
      onkeyup="countDown('message', 'count', 500);" onkeydown="countDown('message', 'count', 500);"><?php echo $message?></textarea>
      </p>
      <div style="color: #FFFF00" id="count"></div>
        <button class="w3-button w3-light-grey w3-padding-large" id="btn" type="submit" name="send_message_btn">
          <i class="fa fa-paper-plane"></i> Nosūtīt ziņu
        </button>
    </form>

  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/uas/login?_l=en" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  <!-- End footer -->
  </footer>


</div>
<script>
    // message input area countdown function
    function countDown(inputAreaId, countAreaId, stringLength)
    {
        var input = document.getElementById(inputAreaId);
        var count = document.getElementById(countAreaId);
        var length = input.value.length;

        if (length > stringLength)
        {
            input.value = input.value.substring(0, stringLength);
        }
        else
        {
            count.innerHTML = 'Atlikuši' + ' ' +(stringLength - length) + ' simboli.';
        }
    }
    </script>

<?php template::getJsLibs(); ?>
</body>
</html>
