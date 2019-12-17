  <?php include 'inc/header.php';?>
       
       
        <!-- Start Bradcaump area -->
        <div id="disable-content" class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(images/bg/2.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center" id="modal_hide">
                                <h2 class="bradcaump-title">Product Gallery</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Service Area -->
     
      
       
<div id="product-catalogue">
    <div class="container">   

        <div id="product-gallery">
           
           
        <!-- Start product image block-1 -->
            <div id="product-images-block">

       
       
        <!-- Start row-1 -->

            <div class="row" id="image-row">
             
               <div class="image-row-start">
                  <div class="col-md-3 col-sm-12 column">
                    <img src="images/products/tab-3.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                  </div>
                  <div class="col-md-3 col-sm-12 column">
                    <img src="images/products/tab-2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                  </div>
                  <div class="col-md-3 col-sm-12 column">
                    <img src="images/products/tab-3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                  </div>
                  <div class="col-md-3 col-sm-12 column">
                    <img src="images/products/tab-1.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                  </div>
                </div>
              
              
               <div class="image-row-start">
                      <div class="col-md-3 col-sm-12 column">
                        <img src="images/products/tab-2.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                      </div>
                      <div class="col-md-3 col-sm-12 column">
                        <img src="images/products/tab-3.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                      </div>
                      <div class="col-md-3 col-sm-12 column">
                        <img src="images/products/tab-1.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                      </div>
                      <div class="col-md-3 col-sm-12 column">
                        <img src="images/products/tab-3.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
                      </div>
                </div>
             
            </div>
            <!-- End of row-1 -->

           
            <!-- Start of image modal -->
            <div id="myModal" class="modal">
              <span class="close cursor" onclick="closeModal()">&times;</span>
              <div class="modal-content">

                <div class="mySlides">
                  <a href=""><img src="images/products/tab-3.jpg" style="width:100%"></a>
                </div>

                <div class="mySlides">
                  <a href=""><img src="images/products/tab-2.jpg" style="width:100%"></a>
                </div>

                <div class="mySlides">
                  <a href=""><img src="images/products/tab-3.jpg" style="width:100%"></a>
                </div>

                <div class="mySlides">
                  <a href=""><img src="images/products/tab-1.jpg" style="width:100%"></a>
                </div>
                <div class="mySlides">
                  <a href=""><img src="images/products/tab-2.jpg" style="width:100%"></a>
                </div>

                <div class="mySlides">
                  <a href=""><img src="images/products/tab-3.jpg" style="width:100%"></a>
                </div>

                <div class="mySlides">
                  <a href=""><img src="images/products/tab-1.jpg" style="width:100%"></a>
                </div>

                <div class="mySlides">
                  <a href=""><img src="images/products/tab-3.jpg" style="width:100%"></a>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>


            </div>

            </div>
            
            
            <!-- End of image modal -->
        
        
        
        </div>
        
        
        
        
        </div>


        </div>
</div>


<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
  document.getElementById("header").style.display = "none";
  document.getElementById("modal_hide").style.display = "none";
  document.getElementById("disable-content").style.display = "none";
  document.getElementById("image-row").style.display = "none";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
  document.getElementById("header").style.display = "block";
  document.getElementById("modal_hide").style.display = "block";
  document.getElementById("disable-content").style.display = "block";
  document.getElementById("image-row").style.display = "block";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    


  <?php include 'inc/footer.php';?>