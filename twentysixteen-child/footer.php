<!--Footer Starts-->
    <div class="container-fluid">
        
        <!-- Footer Section  -->
        <div class="row footer_section">
            <div class="container">
                <div class="col-md-12">
                    <div class="footer_content">
                        <div class="footer_logo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block">
                        </div>
                    </div>  
                </div>
                <div class="col-md-12">
                    <ul class="list-inline footer_links">
                        <li><a href="http://coderzz.com/arunendra/leadbgone">Home</a></li>
                        <li><a href="http://coderzz.com/arunendra/leadbgone/general-inforegistration">GENERAL INFOREGISTRATION</a></li>
                        <li><a href="http://coderzz.com/arunendra/leadbgone/lead-rrp-epa-training-schedul">LEAD RRP-EPA-TRAINING  SCHEDUL  </a></li>
                        <li><a href="http://coderzz.com/arunendra/leadbgone/contact-us">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Footer Section  -->

        <!-- Footer Bottom Section -->
        <div class="row footer_bottom">
            <div class="container">
                <p class="footer_text">&copy; Lorem Ipsum. All Rights Reserved. |<a href="#"> Return Policy</a> | <a href="#">Terms & Conditions</a></p>
            </div>
        </div>
        <!-- Footer Bottom Section -->
    </div>  
<!--Footer End-->

    <script>
     jQuery('.training_slider').owlCarousel({
        dots:false,
        loop:true,
        nav:true,
        margin:10,
        autoplay:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
                nav:true,
                loop:true
            }
        }
     });
    </script>

    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</body>
</html>
