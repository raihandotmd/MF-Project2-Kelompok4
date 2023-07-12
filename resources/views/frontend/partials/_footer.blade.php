 <!-- footer section -->
 <footer class="footer_section">
     <div class="container">
         <div class="row justify-content-center align-items-center">
             <div class="col-md-6 col-lg-3 footer-col">
                 <div class="footer_contact">
                     <h4>
                         Reach at..
                     </h4>
                     <div class="contact_link_box">
                         <a href="">
                             <i class="fa fa-map-marker" aria-hidden="true"></i>
                             <span>
                                 Location
                             </span>
                         </a>
                         <a href="">
                             <i class="fa fa-phone" aria-hidden="true"></i>
                             <span>
                                 Call +01 1234567890
                             </span>
                         </a>
                         <a href="">
                             <i class="fa fa-envelope" aria-hidden="true"></i>
                             <span>
                                 demo@gmail.com
                             </span>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3 footer-col">
                 <div class="footer_contact">
                     <h4>
                         Subscribe
                     </h4>
                     <form action="#">
                         <input type="text" placeholder="Enter email" />
                         <button type="submit">
                             Subscribe
                         </button>
                     </form>
                 </div>
             </div>
         </div>


     </div>

     <div class="w3agile_footer_copy py-4">
         <p>© 2023 MoFlix Pro. All rights reserved | Design by <a href="#">Mahasiswa STT-NF</a></p>
     </div>

 </footer>
 <!-- footer section -->
 <!-- jQery -->
 <script src="assets/js/jquery-3.4.1.min.js"></script>
 <!-- popper js -->
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
     integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
 </script>
 <!-- bootstrap js -->
 <script src="assets/js/bootstrap.js"></script>
 <!-- owl slider -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <!-- MDB -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
 <script src="assets/js/custom.js"></script>
 <!-- Google Map -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
 </script>
 <!-- End Google Map -->
 <!-- bootstrap -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <script>
     $('#carousel-related-product').slick({
         infinite: true,
         arrows: false,
         slidesToShow: 4,
         slidesToScroll: 3,
         dots: true,
         responsive: [{
                 breakpoint: 1024,
                 settings: {
                     slidesToShow: 3,
                     slidesToScroll: 3
                 }
             },
             {
                 breakpoint: 600,
                 settings: {
                     slidesToShow: 2,
                     slidesToScroll: 3
                 }
             },
             {
                 breakpoint: 480,
                 settings: {
                     slidesToShow: 2,
                     slidesToScroll: 3
                 }
             }
         ]
     });
 </script>
 <script type="text/javascript">
     $(".owl-carousel").owlCarousel({
         loop: true,
         margin: 35,
         navText: [],
         autoplay: true,
         autoplayHoverPause: true,
         responsive: {
             0: {
                 items: 1
             },
             600: {
                 items: 2
             },
             1000: {
                 items: 3
             }
         }
     });
 </script>
 </body>

 </html>
