<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/ico/favicon.png">

    <title>Know Your Offer</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- jquery-ui CSS -->
    <link href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- header section starts -->
    <header>
      <!-- header top section starts -->
      <div class="header-top">
        <div class="container">
          <div class="row">
            <!-- top bar menu -->
            

                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- header top section ends -->

      <!-- header main section starts -->
      <div class="header-main">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <!-- logo section starts  -->
              <div class="logo-wrapper">
               
              </div>
              <!-- logo section ends  -->
            </div>

            <div class="col-md-12">
              <!-- header top shopping cart button -->
               
            <div class="col-md-12">
              <!-- main navigation menu starts -->
              
              <!-- main navigation menu ends -->
            </div>

          </div>
        </div>
      </div>
      <!-- header main section ends -->
    </header>
    <!-- header section ends -->

    <!-- main body section starts -->
    <div class="main-body-wrapper">
      <div class="main-banner-unit home-one  block-45">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="hero-unit">
                
                <div>
                  <h1>Best offers <span>for</span></h1>
                  <h1>Your <?php $url="https://sphirelabs-indian-caller-info-with-name-v1.p.mashape.com/caller/v1/get/callerinfo.php?number=";
$url.=$_POST['phone'];
require_once 'lib/Unirest.php';
$response = Unirest::get($url,
  array(
    "X-Mashape-Key" => "ksnlLT3a05mshLQIglYFp5qeHhqip1FCKV9jsnJq8WYyaGQQPC"
  )
);

$row=(array)$response->body;
$circle= $row['Telecom circle'];
$operator= $row['Operator']; echo $operator.'<br>'.$circle;
    
    ?>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- slider section starts -->
              
                <!-- flexSlider ends -->
              </div>
              <!-- slider section ends -->
            </div>
          </div>
        </div>
      </div>

      <!-- main body block starts -->
      <div class="container main-body-block">
        <!-- top panel starts -->
       
        <!-- top panel ends -->

        <!-- home page featured product section starts -->
        <div class="row block-45">
          <div class="col-md-12">
            <div class="product-display featured-product">
              <!-- product display tab -->
              
              <div class="tab-content">
                <div class="tab-pane" id="man">
                  <!-- product display carousel -->
                  <div class="product-carousel">
                    <div class="list_carousel responsive">
                      <ul id="carousel-featured-1" class="carousel-product">
                        <!-- product item -->
                        <li>
                          <div class="product-item-block">
                            
                            
                            <div class="product-item-desc">
                              <a href="#"><h1>Inceptos orci hac libero</h1></a>
                              <div class="item-price item-price-sale">
                                <span class="prev-price">Rs 300.00</span>Rs 250.00
                              </div>  
                            </div>
                            <div class="price-item-desc-detail">                            
                              <a class="add-to-cart" href="single.html" >
                                Add to Cart
                              </a>
                              
                            </div>
                          </div>
                        </li>
                        <!-- product item -->
                        
                        <li>
                          <div class="product-item-block">
                            <div class="product-item-visual">
                              <img src="images/products/item-10.jpg" alt="product">
                            </div>
                            <div class="product-badge sale">
                              Sale
                            </div>
                            
                            <div class="product-item-desc">
                              <a href="#"><h1>Inceptos orci hac libero</h1></a>
                              <div class="item-price item-price-sale">
                                <span class="prev-price">$ 300.00</span>$ 250.00
                              </div>  
                            </div>
                            <div class="price-item-desc-detail">                            
                              <a class="add-to-cart" href="single.html" >
                                Add to Cart
                              </a>
                              <div class="btn-group">
                                <a href="#" class="btn btn-link">+ Add to Wishlist</a>
                                <a href="#" class="btn btn-link">+ Compare</a>
                              </div>
                            </div>
                          </div>
                        </li>
                        
                      </ul>
                      <div class="clearfix"></div>
                      <a id="prev4" class="prev" href="#">
                        <span class="fa  fa-angle-left"></span>
                      </a>
                      <a id="next4" class="next" href="#">
                        <span class="fa  fa-angle-right"></span>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="women">
                  <!-- product display carousel -->
                  <div class="product-carousel">
                    <div class="list_carousel responsive">
                      <ul id="carousel-featured-2" class="carousel-product">
                        <!-- product item -->
                        <li>
                          <div class="product-item-block">
                            <div class="product-item-visual">
                              <img src="images/products/item-10.jpg" alt="product">
                            </div>
                            <div class="product-badge sale">
                              Sale
                            </div>
                            
                            <div class="product-item-desc">
                              <a href="#"><h1>Inceptos orci hac libero</h1></a>
                              <div class="item-price item-price-sale">
                                <span class="prev-price">$ 300.00</span>$ 250.00
                              </div>  
                            </div>
                            <div class="price-item-desc-detail">                            
                              <a class="add-to-cart" href="single.html" >
                                Add to Cart
                              </a>
                              <div class="btn-group">
                                <a href="#" class="btn btn-link">+ Add to Wishlist</a>
                                <a href="#" class="btn btn-link">+ Compare</a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- product item -->
                        <li>
                          <div class="product-item-block">
                            <div class="product-item-visual">
                              <img src="images/products/item-10.jpg" alt="product">
                            </div>
                            <div class="product-badge sale">
                              Sale
                            </div>
                            
                            <div class="product-item-desc">
                              <a href="#"><h1>Inceptos orci hac libero</h1></a>
                              <div class="item-price item-price-sale">
                                <span class="prev-price">$ 300.00</span>$ 250.00
                              </div>  
                            </div>
                            <div class="price-item-desc-detail">                            
                              <a class="add-to-cart" href="single.html" >
                                Add to Cart
                              </a>
                              <div class="btn-group">
                                <a href="#" class="btn btn-link">+ Add to Wishlist</a>
                                <a href="#" class="btn btn-link">+ Compare</a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- product item -->
                        <li>
                          <div class="product-item-block">
                            <div class="product-item-visual">
                              <img src="images/products/item-20.jpg" alt="product">
                            </div>
                            
                            <div class="product-item-desc">
                              <a href="#"><h1>Inceptos orci hac libero</h1></a>
                              <div class="item-price item-price-sale">
                                <span class="prev-price">$ 300.00</span>$ 250.00
                              </div>  
                            </div>
                            <div class="price-item-desc-detail">                            
                              <a class="add-to-cart" href="single.html" >
                                Add to Cart
                              </a>
                              <div class="btn-group">
                                <a href="#" class="btn btn-link">+ Add to Wishlist</a>
                                <a href="#" class="btn btn-link">+ Compare</a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- product item -->
                        <li>
                          <div class="product-item-block">
                            <div class="product-item-visual">
                              <img src="images/products/item-30.jpg" alt="product">
                            </div>
                            <div class="product-badge new">
                              Sale
                            </div>
                            
                            <div class="product-item-desc">
                              <a href="#"><h1>Inceptos orci hac libero</h1></a>
                              <div class="item-price item-price-sale">
                                <span class="prev-price">$ 300.00</span>$ 250.00
                              </div>  
                            </div>
                            <div class="price-item-desc-detail">                            
                              <a class="add-to-cart" href="single.html" >
                                Add to Cart
                              </a>
                              <div class="btn-group">
                                <a href="#" class="btn btn-link">+ Add to Wishlist</a>
                                <a href="#" class="btn btn-link">+ Compare</a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- product item -->
                        <li>
                          <div class="product-item-block">
                            <div class="product-item-visual">
                              <img src="images/products/item-40.jpg" alt="product">
                            </div>
                            
                            <div class="product-item-desc">
                              <a href="#"><h1>Inceptos orci hac libero</h1></a>
                              <div class="item-price item-price-sale">
                                <span class="prev-price">$ 300.00</span>$ 250.00
                              </div>  
                            </div>
                            <div class="price-item-desc-detail">                            
                              <a class="add-to-cart" href="single.html" >
                                Add to Cart
                              </a>
                              <div class="btn-group">
                                <a href="#" class="btn btn-link">+ Add to Wishlist</a>
                                <a href="#" class="btn btn-link">+ Compare</a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- product item -->
                        <li>
                          <div class="product-item-block">
                            <div class="product-item-visual">
                              <img src="images/products/item-10.jpg" alt="product">
                            </div>
                            <div class="product-badge sale">
                              Sale
                            </div>
                            
                            <div class="product-item-desc">
                              <a href="#"><h1>Inceptos orci hac libero</h1></a>
                              <div class="item-price item-price-sale">
                                <span class="prev-price">$ 300.00</span>$ 250.00
                              </div>  
                            </div>
                            <div class="price-item-desc-detail">                            
                              <a class="add-to-cart" href="single.html" >
                                Add to Cart
                              </a>
                              <div class="btn-group">
                                <a href="#" class="btn btn-link">+ Add to Wishlist</a>
                                <a href="#" class="btn btn-link">+ Compare</a>
                              </div>
                            </div>
                          </div>
                        </li>
                        
                      </ul>
                      <div class="clearfix"></div>
                      <a id="prev5" class="prev" href="#">
                        <span class="fa  fa-angle-left"></span>
                      </a>
                      <a id="next5" class="next" href="#">
                        <span class="fa  fa-angle-right"></span>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="tab-pane active" id="best-sale">
                  <!-- product display carousel -->
                  <div class="product-carousel">
                    <div class="list_carousel responsive">
                      <ul id="carousel-featured" class="carousel-product">
                        <!-- product item -->
                          
                          <?php

//First API
$url="https://sphirelabs-indian-caller-info-with-name-v1.p.mashape.com/caller/v1/get/callerinfo.php?number=";
$url.=$_POST['phone'];
require_once 'lib/Unirest.php';
$response = Unirest::get($url,
  array(
    "X-Mashape-Key" => "ksnlLT3a05mshLQIglYFp5qeHhqip1FCKV9jsnJq8WYyaGQQPC"
  )
);

$row=(array)$response->body;
$circle= $row['Telecom circle'];
$operator= $row['Operator'];
//storing

/*$circle_array= array( 
                    
                    "Assam" => "as",
                    "Bihar" => "br",
                    "Chennai" =>  "ch",
                    "Delhi" =>"dl",
                    "Himachal Pradesh" => "hp",
                    "Karnataka" => "ka",
                    "Kolkata" => "kk",
                    "Maharashtra" => "mh",
                    "Mumbai" => "mb",
                    "North East" => "ne",
                    "Orissa" => "or",
                    "Punjab" => "pb",
                    "Rajasthan" => "rj",
                    "Tamil Nadu" => "tn",
                    "Uttar Pradesh E" => "upe",
                    "Uttar Pradesh W" => "upw",
                    "West Bengal" =>"wb",
                    "Jammu" => "jk",
                    "Andhra Pradesh" => "ap",
                    "Gujarat" => "gj",
                    "Haryana" => "hr",
                    "Kerala" => "kl",
                    "Madhya Pradesh" => "mp"
                    ); 
$operator_array= array(

                     Aircel – aircel, Airtel – airtel, BSNL – bsnl, Tata Docomo GSM – tatadocomogsm, Idea – idea, Loop Mobile – loopmobile, MTNL Delhi – mtnldelhi, Reliance CDMA – reliancecdma, Tata Indicom – tataindicom, Uninor – uninor, Vodafone – Vodafone, MTS – mts, Videocon Mobile – videoconmobile, Virgin GSM – virgingsm, Tata Docomo CDMA – tatadocomocdma, MTNL Mumbai - mtnlmumbai
                    )




Second API
 These code snippets use an open-source library. http://unirest.io/php */
 $response = Unirest::get("https://community-telecom-data.p.mashape.com/telecom_data/listByCircle/?circle=".$circle."&operator=".$operator."&page=1&per_page=10",
  array(
    "X-Mashape-Key" => "ksnlLT3a05mshLQIglYFp5qeHhqip1FCKV9jsnJq8WYyaGQQPC"
  )
);

//print_r($response->body);
 $data= array();
$pair=array();
$response->code; // HTTP Status code
$response->headers; // Headers
$response->body; // Parsed body
$row= (array)$response->body;

 array_push($data, $row['data']);
$data=$data[0];
foreach ($data as $key => $value){
    //echo "$data[$key]=>$value"."</br>";
    array_push($pair,(array) $value);
    }
 
 for($i=0; $i<10;$i++ )
 {   

                   echo'     <li>
                          <div class="product-item-block">
                            
                            
                            
                            <div class="product-item-desc">
                              <a href="#"><h1>'.$pair[$i]['recharge_short_description'].'</h1></a>
                              <div class="item-price item-price-sale">
                               Rs '.$pair[$i]['recharge_value'].'.00
                              </div>  
                            </div>
                            <div class="price-item-desc-detail">                            
                              <a class="#" >
                               '.
     $pair[$i]['recharge_validity'].'
                              </a>
                              
                            </div>
                          </div>
                        </li>';
                          





/*
echo '<li class="e"><center><h1><b><strong>Rs.'.$pair[$i]['recharge_value'].'</b></h1><h4>'.$pair[$i]['recharge_short_description'].'</h4><br>Validity:'.
     $pair[$i]['recharge_validity'].'<br><font color="white">'.
     $pair[$i]['recharge_description'].'</font><br></strong></center></li>'; */
 }




                
            

?>
                        <!-- product item -->
                        
                       
                        
                      </ul>
                      <div class="clearfix"></div>
                      <a id="prev6" class="prev" href="#">
                        <span class="fa  fa-angle-left"></span>
                      </a>
                      <a id="next6" class="next" href="#">
                        <span class="fa  fa-angle-right"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div> 
        <!-- home page featured product section ends -->
      </div>
    </div>
    <div class="home-feature block-25">
      <div class="container">
        <!-- features section starts -->
        
        <!-- features section ends -->
      </div>
    </div>
    <div class="container">
      <!-- client section starts -->
      
      <!-- client section ends -->
    </div>
    <!-- main body block ends -->
    
    <!-- main body section ends -->

    <!-- footer section starts -->
    <footer>
      <!-- footer main area -->
     
      <!-- footer privacy area starts -->
      <div class="footer-privacy-area">
        <div class="footer-privacy-area-top">
          <div class="container">
            <!-- footer widget row two -->
            <div class="row footer-row-two">
              <!-- footer widget five -->
              <div class="col-md-6 widget-area widget-contact">
                
                <div class="footer-contact">
                  <p class="copyright-meta">Prisma</p>
                  <p>Mobile:<span> (+91) 9633 009 399 </span></p>
                  <p>
                    Email: <a href="mailto:sz@colorowebs.com" target="_top">sz@colorowebs.com</a>
                  </p>
                </div>
              </div>
              <!-- footer widget six -->
              <div class="col-md-6 widget-area widget-right">
                <div class="widget-content">
                  
                  <p class="dev-info">Developed by <a href="#">Vishnu Gp</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- go to top -->
        <a href="#" class="go-top" title="Go to top"><i class="fa fa-chevron-up"></i></a>
        
      </div>
      <!-- footer privacy area ends -->

    </footer>
    <!-- footer section ends -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/vendor/jquery-1.8.2.min.js"></script>
    <script src="js/vendor/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- tiny nav jQuery plugin -->
    <script src="js/tinynav.min.js"></script>
    <!-- flexslider jQuery plugin -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- include carouFredSel plugin + helper plugins-->
    <script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
      <!-- optionally include helper plugins -->
      <script src="js/helper-plugins/jquery.mousewheel.min.js"></script>
      <script src="js/helper-plugins/jquery.touchSwipe.min.js"></script>
      <script src="js/helper-plugins/jquery.transit.min.js"></script>
      <script src="js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
    <!-- Google maps -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <!-- gMap -->  
    <script src="js/jquery.gmap.min.js"></script> 
    <!-- auto scroll to top -->
    <script src="js/go-top.js"></script> 
    <!-- jQurey plugin hook and custom js -->
    <script src="js/init.js"></script>
    
  </body>


</html>
