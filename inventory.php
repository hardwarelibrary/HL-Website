<?php
include("includes/site_header.php");
?>
<link rel="stylesheet" href="resources/css/colorbox.css">
<link href="resources/css/ihover.css" rel="stylesheet">


<!-- Members Section -->
<section class="about-seccss">
 <div id="members-section">
    <div class="container">
       <div class="row">

          <div class="col-md-12">

             <div class="title">
                <h2 class="product_title">What would you like to borrow?
                </h2>
            </div> <!-- end title -->

            <div class="holder col-sm-12">
               	<div class="row">

    <div class="col-sm-3 product" id="product_1">

        <!-- normal -->
        <div class="ih-item square effect3 bottom_to_top"><a class="inline" href="#inline_content">
            <div class="img" id="img_1"><img src="resources/images/inventory/Oculus Rift CV1 - 1.jpg" data-src="resources/images/inventory/Oculus Rift CV1 - 1.jpg" alt="img" class="img-responsive mainimage"></div>


            <div class="info">
              <h3 id="title_1">Oculus Rift CV1</h3>

          </div></a></div>
          <!-- end normal -->
          <div class="">
            <div id="moreimg_1" class="none">
                <div class="mup">
                     <div class="col-sm-4 mtop"><img src="resources/images/inventory/Oculus Rift CV1 - 1.jpg"></div>
                     <div class="col-sm-4 mtop"><img src="resources/images/inventory/Oculus Rift CV1 - 2.jpg"></div>
                     <div class="col-sm-4 mtop"><img src="resources/images/inventory/Oculus Rift CV1 - 3.jpg"></div>
               </div>
           </div>
           <div id="desc_1" class="none">
               Step into the first commercially available Oculus Rift and you'll
               be stepping into a whole new world. Famous for pioneering the
               Virtual Reality space, it comes with an integrated headset, camera,
               and HMD.
               Develop whole new worlds. Escape into the games you love. Or even
               rent it out for a party or corporate event. Whatever it is,
               the Oculus Rift will amaze you.
           </div>
<!--           <p id="price_3" class="">Price: $50</p>-->
           <p id="qty_1">COMING SOON - Q1 2016</p>

 <!-- BLOCKED UNTIL PRODUCT AVAILABLE - SAAD
           <div id="select_1" class="none">
           <select name="qty" class='w15'> <option value=''>Select QTY</option>
                <?php
                $qty = 3;
                for($i=1;$i<=$qty;$i++){
                    ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php
                }
                ?>
            </select>
               	</div>
   -->
           </div>

       </div> <!-- end product_1 -->


    <div class="col-sm-3 product" id="product_2">
       <!-- normal -->
                    <div class="ih-item square effect3 bottom_to_top"><a class="inline" href="#inline_content">

                     <!-- <a href='http://placehold.it/800x600' class = 'cloud-zoom' id='zoom1' rel="position:'inside',showTitle:false,adjustX:-4,adjustY:-4"><img src="http://placehold.it/800x600" alt='' title="Optional title display" width="560" /></a>-->
                     <div class="img" id="img_2">
                        <img src="resources/images/inventory/Oculus Rift DK2 - 1.jpg" data-src="resources/images/inventory/Oculus Rift DK2 - 1.jpg" alt="img" class="img-responsive mainimage">
                    </div>

                    <div class="info">
                      <h3 id="title_2">Oculus Rift DK2</h3>

                  </div></a></div>
                  <!-- end normal -->

                  <div class="">
                    <div id="moreimg_2" class="none">
                        <div class="mup">
                            <div class="col-sm-4 mtop"><img src="resources/images/inventory/Oculus Rift DK2 - 1.jpg"></div>
                            <div class="col-sm-4 mtop"><img src="resources/images/inventory/Oculus Rift DK2 - 2.jpg"></div>
                            <div class="col-sm-4 mtop"><img src="resources/images/inventory/Oculus Rift DK2 - 3.jpg"></div>
                        </div>
                    </div>
                    <div id="desc_2" class="none">
                        The Oculus Rift Dk2 is a next level in Virtual Reality. This is the second developer kit released to the public and will teleport from this world into the next. Fully capable immersion and unparalleled in gameplay, virtual reality has become the next frontier for developers, enthusiests, and early-adopters alike.

                    </div>
                    <p id="price_2" class="">Price: $150</p>
                    <p id="qty_2" class="">Available: 5</p>
                    <div id="select_2" class="none">
                      <select name="qty" class='w15'> <option value=''>Quantity</option>
                       <?php
                       $qty = 5;
                       for($i=1;$i<=$qty;$i++){
                           ?>
                           <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                           <?php
                       }
                       ?>
                   </select>
            </div>
        </div>
    </div> <!-- end product_2 -->

<div class="col-sm-3 product" id="product_3">
           <!-- normal -->
        <div class="ih-item square effect3 bottom_to_top"><a class="inline" href="#inline_content">
            <div class="img" id="img_3"><img src="resources/images/inventory/Alienware Laptop - 1.jpg" data-src="resources/images/inventory/Alienware Laptop - 1.jpg" alt="img" class="img-responsive mainimage"></div>

            <div class="info">
              <h3 id="title_3">Alienware 17 Laptop</h3>

          </div></a></div>
          <!-- end normal -->
          <div class="">
            <div id="moreimg_3" class="none">
                <div class="mup">
                            <div class="col-sm-4 mtop"><img src="resources/images/inventory/Alienware Laptop - 1.jpg"></div>
                            <div class="col-sm-4 mtop"><img src="resources/images/inventory/Alienware Laptop - 2.jpg"></div>
                            <div class="col-sm-4 mtop"><img src="resources/images/inventory/Alienware Laptop - 3.jpg"></div>
                </div>
            </div>
            <div id="desc_3" class="none">
                With unparalleled graphic and amazing speed, this is the laptop many dream of.
                Attach it to your VR head set or use it for the most epic lan party
                imaginable. After all, it's not every day you get to play with the big guns.
            </div>
            <p id="price_3" class="">Price: $400</p>
            <p id="qty_3" class="">Available: 5</p>
            <div id="select_3" class="none">
                <select name="qty" class='w15'> <option value=''>Select QTY</option>
                    <?php
                    $qty = 5;
                    for($i=1;$i<=$qty;$i++){
                        ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php
                    }
                    ?>
                </select>
        </div>
    </div>

</div> <!-- end product_3 -->

<div class="col-sm-3 product" id="product_4">

    <!-- normal -->
    <div class="ih-item square effect3 bottom_to_top"><a class="inline" href="#inline_content">
        <div class="img" id="img_4"><img src="resources/images/inventory/Apple Watch - 1.jpg" data-src="resources/images/inventory/Apple Watch - 1.jpg" alt="img" class="img-responsive mainimage"></div>


        <div class="info">
          <h3 id="title_4">Apple Watch</h3>

      </div></a></div>

      <!-- end normal -->

      <div class="">
        <div id="moreimg_4" class="none">
            <div class="mup">
               <div class="col-sm-4 mtop"><img src="resources/images/inventory/Apple Watch - 1.jpg"></div>
               <div class="col-sm-4 mtop"><img src="resources/images/inventory/Apple Watch - 2.jpg"></div>
               <div class="col-sm-4 mtop"><img src="resources/images/inventory/Apple Watch - 3.jpg"></div>
           </div>
       </div>
       <div id="desc_4" class="none">
           The Apple Watch is the latest in smart watches and the first to be released by Apple.
           Unlike any other device, it's built with functionality while maintaining
           ease and intuitive use that Apple is known for. It's an all-new way to select,
           navigate, and input that are ideally suited to a smaller device worn on the wrist.
       </div>
       <p id="price_4" class="">Price: $75</p>
       <p id="qty_4">Available: 3</p>
       <div id="select_4" class="none">
        <select name="qty" class='w15'> <option value=''>Select QTY</option>
            <?php
            $qty = 3;
            for($i=1;$i<=$qty;$i++){
                ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php
            }
            ?>
        </select>
    </div>
</div>
</div> <!-- End product-4 -->

</div>
</div>

</div> <!-- end col-md-6 -->
</div> <!-- end row -->
</div> <!-- end container -->
</div>
</section>
<!-- End Members-section -->


<?php
include("includes/site_footer.php");
?>

<script src="resources/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="resources/js/inventory.js"></script>

<div style='display:none'>
 <div id='inline_content' style='padding:1  0px; background:#fff;'>
    <div class="col-sm-12">
       <div class="col-sm-4"> <h2>&nbsp;</h2>
                    	<!--<div class="col-sm-3">

                        	<ul class="moreimgs">

                            </ul>
                        </div>-->

                        <div class="col-sm-10" id="product_image">

                        </div>
                    </div>

                    <div class="col-sm-8">
                    	<div class="col-sm-12">
                           <h2 id="product_title"></h2>
                           <div id="product_desc">

                           </div>

                           <div id="product_price"></div>
                           <div id="product_select">Select QTY: </div>
                           <div id="product_qty"></div>
                           <div><input type="button" class="btn btn-danger orange" value="Borrow" onClick="location.href='order.php'"></div>

                       </div>
                   </div>
               </div>
           </div>

       </div>
