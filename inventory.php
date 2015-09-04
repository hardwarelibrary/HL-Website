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
                        
                     <!-- <a href='http://placehold.it/800x600' class = 'cloud-zoom' id='zoom1' rel="position:'inside',showTitle:false,adjustX:-4,adjustY:-4"><img src="http://placehold.it/800x600" alt='' title="Optional title display" width="560" /></a>-->
                     <div class="img" id="img_1">
                        <img src="http://placehold.it/800x600" data-src="http://placehold.it/600x400" alt="img" class="img-responsive mainimage">
                    </div>
                    
                    
                    
                    <div class="info">
                      <h3 id="title_1">Product 1</h3>
                      
                  </div></a></div>
                  <!-- end normal -->
                  
                  <div class="">
                    <div id="moreimg_1" class="none">   
                        <div class="mup">
                            <div class="col-sm-4 mtop"><img src="http://placehold.it/800x800"></div>
                            <div class="col-sm-4 mtop"><img src="http://placehold.it/600x600"></div>
                            <div class="col-sm-4 mtop"><img src="http://placehold.it/400x400"></div>
                        </div>
                    </div>
                    <div id="desc_1" class="none">
                        Lorem ipsum dolor sit amet, mandamus mediocrem cu mei, libris nonumes adolescens vim ei. No paulo dicunt aliquid mea, sale quidam ea mei. Debitis omittantur id qui, zril veritus democritum no eum, cu pri quas dicit. Aperiri discere delicatissimi ad vix. Vix simul praesent et. Unum soluta accusata ei est, sed mucius lucilius adversarium ex. Ne nostro audire eum. Sit eu appetere prodesset, te per populo regione. Per semper expetenda ei. Mundi homero et vim, vis probo repudiare id.
                        
                    </div>
                    <p id="price_1" class="">Price: $70</p>
                    <p id="qty_1" class="">Available: 6</p>
                    <div id="select_1" class="none">
                      <select name="qty" class='w15'> <option value=''>Select QTY</option>
                       <?php
                       $qty = 6;
                       for($i=1;$i<=$qty;$i++){
                           ?>
                           <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                           <?php	
                       }
                       ?>
                   </select>
               </div>
           </div>
           
       </div>
       <div class="col-sm-3 product" id="product_2">
           
        <!-- normal -->
        <div class="ih-item square effect3 bottom_to_top"><a class="inline" href="#inline_content">
            <div class="img" id="img_2"><img src="http://placehold.it/800x600" data-src="http://placehold.it/600x400" alt="img" class="img-responsive mainimage"></div>
            
            <div class="info">
              <h3 id="title_2">Product 2</h3>
              
          </div></a></div>
          <!-- end normal -->
          <div class="">
            <div id="moreimg_2" class="none">    
                <div class="mup">
                    <div class="col-sm-4 mtop"><img src="http://placehold.it/800x600"></div>
                    <div class="col-sm-4 mtop"><img src="http://placehold.it/800x600"></div>
                    <div class="col-sm-4 mtop"><img src="http://placehold.it/800x600"></div>
                </div>
            </div>
            <div id="desc_2" class="none">
                Lorem ipsum dolor sit amet, mandamus mediocrem cu mei, libris nonumes adolescens vim ei. No paulo dicunt aliquid mea, sale quidam ea mei. Debitis omittantur id qui, zril veritus democritum no eum, cu pri quas dicit. Aperiri discere delicatissimi ad vix. Vix simul praesent et. Unum soluta accusata ei est, sed mucius lucilius adversarium ex. Ne nostro audire eum. Sit eu appetere prodesset, te per populo regione. Per semper expetenda ei. Mundi homero et vim, vis probo repudiare id.
                
            </div>
            <p id="price_2" class="">Price: $20</p>
            <p id="qty_2" class="">Available: 4</p>
            <div id="select_2" class="none">
                <select name="qty" class='w15'> <option value=''>Select QTY</option>
                    <?php
                    $qty = 4;
                    for($i=1;$i<=$qty;$i++){
                        ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php	
                    }
                    ?>
                </select>
            </div>
        </div>
        
    </div>
    <div class="col-sm-3 product" id="product_3">
       
        <!-- normal -->
        <div class="ih-item square effect3 bottom_to_top"><a class="inline" href="#inline_content">
            <div class="img" id="img_3"><img src="http://placehold.it/800x600" data-src="http://placehold.it/600x400" alt="img" class="img-responsive mainimage"></div>
            
            
            <div class="info">
              <h3 id="title_3">Product 3</h3>
              
          </div></a></div>
          <!-- end normal -->
          <div class="">
            <div id="moreimg_3" class="none">    
                <div class="mup">
                   <div class="col-sm-4 mtop"><img src="http://placehold.it/800x600"></div>
                   <div class="col-sm-4 mtop"><img src="http://placehold.it/800x600"></div>
                   <div class="col-sm-4 mtop"><img src="http://placehold.it/800x600"></div>
               </div>
           </div>
           <div id="desc_3" class="none">
               Lorem ipsum dolor sit amet, mandamus mediocrem cu mei, libris nonumes adolescens vim ei. No paulo dicunt aliquid mea, sale quidam ea mei. Debitis omittantur id qui, zril veritus democritum no eum, cu pri quas dicit. Aperiri discere delicatissimi ad vix. Vix simul praesent et. Unum soluta accusata ei est, sed mucius lucilius adversarium ex. Ne nostro audire eum. Sit eu appetere prodesset, te per populo regione. Per semper expetenda ei. Mundi homero et vim, vis probo repudiare id.

           </div>
           <p id="price_3" class="">Price: $330</p>
           <p id="qty_3">Available: 3</p>
           <div id="select_3" class="none">
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
    
</div>
<div class="col-sm-3 product" id="product_4">
   
    <!-- normal -->
    <div class="ih-item square effect3 bottom_to_top"><a class="inline" href="#inline_content">
        <div class="img" id="img_4"><img src="http://placehold.it/800x600" data-src="http://placehold.it/600x400" alt="img" class="img-responsive mainimage"></div>
        
        
        <div class="info">
          <h3 id="title_4">Product 4</h3>
          
      </div></a></div>
      
      <!-- end normal -->
      
      <div class="">
        <div id="moreimg_4" class="none">   
            <div class="mup">
               <div class="col-sm-4 mtop"><img src="http://placehold.it/800x600"></div>
               <div class="col-sm-4 mtop"><img src="http://placehold.it/800x600"></div>
               <div class="col-sm-4 mtop"><img src="http://placehold.it/800x600"></div>
           </div>
       </div>
       <div id="desc_4" class="none">
           Lorem ipsum dolor sit amet, mandamus mediocrem cu mei, libris nonumes adolescens vim ei. No paulo dicunt aliquid mea, sale quidam ea mei. Debitis omittantur id qui, zril veritus democritum no eum, cu pri quas dicit. Aperiri discere delicatissimi ad vix. Vix simul praesent et. Unum soluta accusata ei est, sed mucius lucilius adversarium ex. Ne nostro audire eum. Sit eu appetere prodesset, te per populo regione. Per semper expetenda ei. Mundi homero et vim, vis probo repudiare id.

       </div>
       <p id="price_4" class="">Price: $74</p>
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
</div>

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
 <div id='inline_content' style='padding:10px; background:#fff;'>
    <div class="col-sm-12">
       <div class="col-sm-4"> <h2>&nbsp;</h2>
                    	<!--<div class="col-sm-3">
                       
                        	<ul class="moreimgs">
                            	
                            </ul>
                        </div>-->
                        
                        <div class="col-sm-12" id="product_image">
                        	
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

