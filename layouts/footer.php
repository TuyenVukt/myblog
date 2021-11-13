<footer class="footer">
        <div class="footer-body">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h2>About me</h2>
                <p>Website cá nhân</p>
              </div>
              <div class="col-md-4">
                <h2>Tags</h2>
                <ul class="menu-footer">
                  <?php foreach ($arr4 as $key) { ?>
                  <li><a href="loai-tin.php?type=<?php echo $key['id_type']; ?>"><?php echo $key['typename']; ?></a></li>
                  <?php } ?>
                </ul>
              </div>
              <div class="col-md-4">
                <h2>Contact</h2>
                <ul class="menu-footer">
                  <li><a href="https://www.facebook.com/bui.congquynh" target="_blank">Nickname: 14thFeb</a></li>
                  <li><a href="mailto:qbc14thfebruary@gmail.com">Email: qbc14thfebruary@gmail.com</a></li>
                  <li><a href="callme:0345604696">Số điện thoại: 0345604696</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- footer body -->
        <div class="footer-bottom">
          <h2>Design by <a href="https://www.facebook.com/bui.congquynh" target="_blank">Bùi Công Quỳnh</a></h2>
        </div>
        <!-- footer bottom -->
      </footer>
      <!-- footer -->
    </div>

  </body>


<!-- Jquery -->
<script src="assets/owlcarousel/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="assets/owlcarousel/owl.carousel.min.js"></script>
  <script>
    $('.owl-slider').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots:false,
      autoplay:true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:1
        },
        1000:{
          items:1
        }
      }
    })

    $('.owl-relation').owlCarousel({
      loop:false,
      margin:10,
      nav:false,
      dots:false,
      autoplay:true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:1
        },
        1000:{
          items:3
        }
      }
    })

  </script>
</html>
