<!DOCTYPE html>
<html>
   <head>
      <title>Tamaaas - Free Calling & Chat</title>
      <meta charset=utf-8 >
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="robots" content="index, follow" >
      <meta name="keywords" content="Tamaaas" >
      <meta name="description" content="Tamaaas - Free Chat & Call" >
      <meta name="author" content="Tamaaas">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="theme-color" content="#2a2b2f">
      <!-- FAVICONS -->
      <link rel="shortcut icon" href="images/favicon/favicon.png">
      <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
      <link rel="icon" sizes="192x192" href="images/favicon/icon-192x192.png">
      <!-- CSS -->
      <!--  GOOGLE FONT -->      
      <link href='https://fonts.googleapis.com/css?family=Raleway:400,200%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>
       <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.10/css/intlTelInput.css'>
      <!-- BOOTSTRAP -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->      
      <link rel="stylesheet" href="css/icons-fonts.css" >
      <!-- CSS THEME -->      
      <link rel="stylesheet" href="css/style.css" >
      <!-- ANIMATE -->  
      <link rel='stylesheet' href="css/animate.min.css">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116713729-1"></script>
      <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-116713729-1');
      </script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=AW-809661206"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-809661206');
      </script>
      <script>
      $( document ).ready(function() {
         function gtag_report_conversion(url) {
            var callback = function () {
               if (typeof(url) != 'undefined') {
                  window.location = url;
                  }
               };
                 gtag('event', 'conversion', {
                     'send_to': 'AW-809661206/OvY1CKKE3H8QluaJggM',
                     'value': 0.2,
                     'currency': 'USD',
                     'event_callback': callback
                 });
                 return false;
            }
         }
      $('.country_verify').click(function(){
         gtag_report_conversion();
      });
      </script>
      <!-- IE Warning CSS -->
      <!--[if lte IE 8]>
      <link rel="stylesheet" type="text/css" href="css/ie-warning.css" >
      <![endif]-->
      <!--[if lte IE 8]>
      <link rel="stylesheet" type="text/css" href="css/ie8-fix.css" >
      <![endif]-->
      <!-- Magnific popup, Owl Carousel Assets in style.css -->      
      <!-- CSS end -->
      <!-- JS begin some js files in bottom of file-->
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <?php 
   require('db.php');
   $phone = $_POST['phone-full'];
   $oname = $_POST['owner_name'];
   $buisness_name = $_POST['buisness_name'];
   $products =$_POST['products'];
   $email = $_POST['email'];
   $partner_phone = $_POST['phone'];
   $lang = $_POST['lang'];
   if(!$con){
      echo "error estabilishing connection";
   }
  else { 
   if(isset($phone))
   {
   $phonen = $_POST['pre_phone'];
   $phone = '+'.$phone.$phonen ;
   $sql = "SELECT id FROM pre_register WHERE phone='$phone'";
   $result = mysqli_query($con, $sql);
   if (mysqli_num_rows($result) > 0) {
      if($lang == 'en') {
      $msg1 = 'Thank You! You are already registered.';
      $msg = 'We will text you about our launch! Also if you have any suggestion or query, please write us at:';
       echo "<script>var flag = 1 ;</script>";
      }
      else if($lang == 'pa') {
      $msg1 = 'له تاسو مننه! تاسو لا دمخه ثبت شوی یاست.';
      $msg = 'موږ به ستاسو د لانجې په اړه لیکو. همدارنګه که تاسو کوم وړاندیز یا پوښتنې لرئ، نو مهرباني وکړئ موږ ته ولیکئ:';
      echo "<script>var flag = 1 ;</script>";
   }
     else if($lang =='da') {
      $msg1 = 'متشکرم! شما قبلا ثبت نام کرده اید' ;
      $msg = 'ما شما را در مورد راه اندازی ما متن می نویسیم! همچنین اگر پیشنهاد یا پرسشی دارید، لطفا به ما بگویید:' ;
       echo "<script>var flag = 1 ;</script>";
     }
   }
    else {
   $sql1 = "INSERT INTO pre_register (phone )
   VALUES ('$phone' )";
   if (mysqli_query($con, $sql1)) {
      if($lang == 'en') {
      $msg1 = 'Thank you for Pre-registering with Tamaaas.';
      $msg = 'We will text you about our launch! Also if you have any suggestion or query, please write us at:';
       echo "<script>var flag = 1 ;</script>";
   }
      else if($lang == 'pa') {
      $msg1 = 'د تامایا سره د پری ثبتولو لپاره مننه.';
      $msg = 'موږ به ستاسو د لانجې په اړه لیکو. همدارنګه که تاسو کوم وړاندیز یا پوښتنې لرئ، نو مهرباني وکړئ موږ ته ولیکئ:';
      echo "<script>var flag = 1 ;</script>";
   }
      else if($lang =='da') {
      $msg1 = 'با تشکر از شما برای پیش ثبت نام با Tamaaas.';
      $msg = 'ما شما را در مورد راه اندازی ما متن می نویسیم! همچنین اگر پیشنهاد یا پرسشی دارید، لطفا به ما بگویید:' ;
       echo "<script>var flag = 1 ;</script>";
     }
   } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($con);
   }
   mysqli_close($con);
 }
}
if(isset($oname) && isset($buisness_name) && isset($products) && isset($email) && isset($partner_phone))
{
   $sql2 = "INSERT INTO partner (owner_name, buisness_name, products, email, phone )
   VALUES ('$oname', '$buisness_name' , '$products' ,'$email', '$partner_phone' )";
   if (mysqli_query($con, $sql2)) {
      if($lang == 'en') {
      $msg1 = 'Thank you for Pre-registering with Tamaaas.';
      $msg = 'We will text you about our launch! Also if you have any suggestion or query, please write us at:';
       echo "<script>var flag = 1 ;</script>";
   }
      else if($lang == 'pa') {
      $msg1 = 'د تامایا سره د پری ثبتولو لپاره مننه.';
      $msg = 'موږ به ستاسو د لانجې په اړه لیکو. همدارنګه که تاسو کوم وړاندیز یا پوښتنې لرئ، نو مهرباني وکړئ موږ ته ولیکئ:';
      echo "<script>var flag = 1 ;</script>";
   }
      else if($lang =='da') {
      $msg1 = 'با تشکر از شما برای پیش ثبت نام با Tamaaas.';
      $msg = 'ما شما را در مورد راه اندازی ما متن می نویسیم! همچنین اگر پیشنهاد یا پرسشی دارید، لطفا به ما بگویید:' ;
       echo "<script>var flag = 1 ;</script>";
     }
   } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($con);
   }
   mysqli_close($con);
}
?>
<body class="font-raleway">
     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <button title="Close (Esc)" class="close mfp" data-dismiss="modal">×</button>
               <div class="white-popup">
                  <div class="kt-popup-newsletter">
                    <div id="preregister-box" >
                     <div class="popup-title">
                        <img src="images/gift.gif" alt="Gift">
                        <h3 style="color: #4878ef; font-family: 'Raleway'; font-size: 30px;"> لومری نوم لیکنه له تماس سره</h3>
                        <h4> له تماس سره لومړۍ نوم لیکنه
لومړني 1000 کاروونکي به تماس او  Epaysa ICO ته وړیا لاسرسی ومومي.
</h4>
                     </div>
                     <div class="demo">
                      <form method="POST" action="phasto" name="preregister" id="preregister" >
                        <input type="tel" id="phone" name="pre_phone" class="form-control" required pattern=".{4,13}" onkeypress='validatee(event)' oninvalid="this.setCustomValidity('Enter Correct Phone Number ')"/>
                        <input type="hidden" id="phone2" name="phone-full" value="">
                        <input type="hidden" name='lang' value='pa'>
                        <button id="submit" type="submit" class="country_verify">ګډون کول</button>
                        <p class="terms"> T & C *: لومړی د لومړي ځل لپاره خدمت کوي </p>
                     </div>
                   </form>
                 </div>
                     <div id="result" style="display: none">
                       <div class="newsletter">
                        <div class="newsletter_body">
                          <div class="newsletter_icon">
                            <img src="Submit_thanks.gif" alt="Thanks" />
                          </div>
                          <div class="newsletter_text">
                            <h2><?php echo $msg1 ?></h2>
                            <p><?php echo $msg ?></p>
                            <a href="mailto:info@Tamaaas.com">info@Tamaaas.com</a>
                          </div>
                        </div>
                      </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="live-chat">
         <div class="clearfix chat-header" data-toggle="modal" data-target="#onload">
            <h4>نن ورځ مخکې لاسلیک ترلاسه کولو لپاره راجستر کړئ</h4>
         </div>
         <!-- end chat -->
      </div>
      <!-- LOADER --> 
      <div id="loader-overflow">
         <div id="loader3" class="loader-cont">Please enable JS</div>
      </div>
      <div id="wrap" class="boxed ">
         <div class="grey-bg">
            <!-- Grey BG  --> 
            <!--[if lte IE 8]>
            <div id="ie-container">
               <div id="ie-cont-close">
                  <a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
               </div>
               <div id="ie-cont-content" >
                  <div id="ie-cont-warning">
                     <img src='images/ie-warn/ie-warning.jpg' alt='Warning!'>
                  </div>
                  <div id="ie-cont-text" >
                     <div id="ie-text-bold">
                        You are using an outdated browser
                     </div>
                     <div id="ie-text">
                        For a better experience using this site, please upgrade to a modern web browser.
                     </div>
                  </div>
                  <div id="ie-cont-brows" >
                     <a href='http://www.firefox.com' target='_blank'><img src='images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
                     <a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
                     <a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
                     <a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
                  </div>
               </div>
            </div>
            <![endif]-->
            <!-- HEADER 1 FONT WHITE TRANSPARENT -->
            <div class="header-black-bg"></div>
          <!--  <a class="get-app sticky--bottom invisible" target="_blank" href="#" >پروګرام ترلاسه کړئ</a> -->
        <a class="get-app sticky--bottom invisible" target="_blank" data-toggle="modal" data-target="#onload" >د وړیا لاس رسی ترلاسه کولو لپاره مخکې راجستر </a> 
            <!-- NEED FOR TRANSPARENT HEADER ON MOBILE -->
            <header id="nav" class="header header-1 header-black">
               <div class="header-wrapper">
                  <div class="container-m-30 clearfix">
                     <div class="logo-row">
                        <!-- LOGO --> 
                        <div class="logo-container-2">
                           <div class="logo-2">
                              <a href="phasto" class="clearfix">
                              <img src="images/logo.png" class="logo-img" alt="Logo">
                              </a>
                           </div>
                        </div>
                        <!-- BUTTON --> 
                        <div class="menu-btn-respons-container">
                           <button id="menu-btn" type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                           <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                           </button>
                        </div>
                     </div>
                  </div>
                  <!-- MAIN MENU CONTAINER -->
                  <div class="main-menu-container">
                     <div class="container-m-30 clearfix">
                        <!-- MAIN MENU -->
                        <div id="main-menu" class="font-raleway">
                           <div class="navbar navbar-default" role="navigation">
                              <!-- MAIN MENU LIST -->
                              <nav class="collapse collapsing navbar-collapse right-1024">
                                 <ul id="nav-onepage" class="nav navbar-nav">
                                   
                                    
                                    <!-- MENU ITEM -->
                                    <li>
                                       <a href="#download">
                                          <div class="main-menu-title" style="color:#611eff"> د پروګرام ښکته کول (ډاونلوډ)</div>
                                       </a>
                                    </li>
                                   
                                    <li>
                                       <a href="#">
                                          <div class="main-menu-title" data-toggle="modal" data-target="#myModal">غړي شئ</div>
                                       </a>
                                    </li>
                                     <li class="parent">
                            <a href="phasto" class="open-sub">پشتو </a>
                            <ul class="sub">               
                              <li><a href="eng">English</a></li>
                              <li><a href="dari">دری</a></li>
                            </ul>
                          </li>
                                    
                                    
                                    
                                 </ul>
                              </nav>
                           </div>
                        </div>
                        
                        <!-- END main-menu -->
                     </div>
                     <!-- END container-m-30 -->
                  </div>
                  
                  <!-- END main-menu-container -->
                  <!-- SEARCH READ DOCUMENTATION -->
                  <ul class="cd-header-buttons invisible">
                     <a href="#">
                                          <div class="main-menu-title" data-toggle="modal" data-target="#myModal">غړي شئ</div>
                                       </a>
                  </ul>
                  <!-- cd-header-buttons -->
                  
               </div>
               <!-- END header-wrapper -->
            </header>
            
            <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <form id="myform" action="phasto" name="myform" method="POST">
                            <input type="hidden" name='lang' value='pa'>
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center partner">د تماس غړي شئ</h4>
                        <p class="text-center">د دې فورمې په لېږلو سره، تاسو منئ چې تماس ستاسې سره د خدمتونو او بڼو په اړه اړيکه ټينګولی شي</p>
                        </div>
                        <div class="modal-body">
                        <div class="form-group col-md-12">
                        <label for="Phone">د کاروبار د خاوند نوم*</label>
                        <input type="text" class="form-control" name="owner_name" id="Name" placeholder="د کاروبار د خاوند نوم" required>
                        </div>
                        <div class="form-group col-md-12">
                        <label for="Phone">د کاروبار نوم*</label>
                        <input type="text" class="form-control" name="buisness_name" id="buisness_name" placeholder="د کاروبار نوم" required>
                        </div>
                        <div class="form-group col-md-12">
                        <label for="Phone">کوم توليد پلورئ*</label>
                        <input type="text" class="form-control" name="products" id="products" placeholder="هغه محصول، چې تاسې يې پلورئ" required>
                        </div>
                        <div class="form-group col-md-12">
                        <label for="Phone">ستاسې برېښناليک*</label>
                        <input type="text" class="form-control" name="email" id="Email" placeholder="ستاسې برېښناليک" required>
                        </div>
                        <div class="form-group col-md-12">
                        <label for="Phone">د اړيکې شمېره*</label>
                        <input type="tel" class="form-control" name="phone" id="Phone" placeholder="د اړيکې شمېره" required pattern=".{4,13}" onkeypress='validatee(event)' oninvalid="this.setCustomValidity('Enter Correct Phone Number ')" >
                        </div>
                        </div>
                        <div class="modal-footer" style="border-top: none;">
                        <div class="form-group col-md-12">
                        <input type="submit" class="btn btn-next btn-fill btn-success btn-wd pull-left" name="next" value="Submit" style=" width: 100%; padding: 15px;">
                     </div> 
                   </div>
                 </form>
            </div>
                        </div>
                        </div>
                        </div>
            <!-- STATIC MEDIA VIDEO -->
            <div id="index-link" class="sm-video-bg_phasto">
               <div class="container sm-content-cont text-center js-height-fullscr">
              
               </div>
            </div>
            <div class=" container download_apps">
              <div class="row">
              <div class="col-md-12 text-center">
                        <h3 class="font-light"> "وړيا بنډار، وړيا انځوريزې او غږيزې اړيکې
د پيسو لېږل او غوښتل، د شرحې شريکول"</h3>
                          
                           
          </div>
                <div class="col-md-12 col-sm-12 text-center apps">
                
                                 <a class="" href="#"><img src="images/apple-app-store-icon_1x.png">
                                 </a><a class="" href="#"><img src="images/Google_play_1x.png">
                              </a></div>
                </div>
                
              </div>
              
            </div>
      <div class="page-section" id="features">
               <div class="container">
                  <div class="row hh">
                     <div class="col-md-6">
                        <div class="fes2-main-text-cont">
                           <div class="fes2-title-45 font-light">
                              په اسانۍ سره د پيسو لېږل  او  ترلاسه کول
                           </div>
                           <div class="fes2-text-cont">
                           <p>"بانک، کریدیت کارت او Cryptocurrency
" </p>خپل کور ته پیسې ولېږئ، ستاسو د ملګري سره د ډوډۍ ډوډۍ <br>وویشئ یا ګاونډي چاي واله ورکړئ. ټولې پیسې د لویې لویې او <br>وړې وړې پيسې د خپل بانکي حسابونو او کریډیټ کارډونو څخه<br>جوړ کړئ</div>
                           <br>
                        <!--   <div class="grid__item pull-left"><a class="" href="#">
                           </a><a class="link link--kukuri" href="Blockchain.html" target="" data-letters="Kukuri">Know more about Blockchain</a>
                        </div> -->
                        </div>
                        
                     </div>
                     <div class="col-md-6 text-center">
                        <img class="mt-40" src="images/Tam_4.jpg" style=" width: 100%;" alt="img">
                     </div>
                  </div>
                  <div class="row pp" style="display: none;">
                    <div class="col-md-6 text-center">
                        <img class="mt-40" src="images/Tam_4.jpg" style=" width: 100%;" alt="img">
                     </div>
                     <div class="col-md-6">
                        <div class="fes2-main-text-cont">
                           <div class="fes2-title-45 font-light">
                             په اسانۍ سره د پيسو لېږل  او  ترلاسه کول
                           </div>
                           <div class="fes2-text-cont"> <p>"بانک، کریدیت کارت او Cryptocurrency
" </p>خپل کور ته پیسې ولېږئ، ستاسو د ملګري سره د ډوډۍ ډوډۍ <br>وویشئ یا ګاونډي چاي واله ورکړئ. ټولې پیسې د لویې لویې او <br>وړې وړې پيسې د خپل بانکي حسابونو او کریډیټ کارډونو څخه<br>جوړ کړئ</div>
                        </div>
                   <!--    <div class="grid__item pull-left"><a class="" href="#">
                           </a><a class="link link--kukuri" href="Blockchain.html" target="" data-letters="Kukuri">Know more about Blockchain</a>
                        </div>-->
                     </div>
                     
                  </div>
               </div>
            </div>
            <div class="page-section">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 text-center">
                        <img class="mt-40" src="images/Tam_1.jpg" style=" width: 80%;" alt="img">
                     </div>
                     <div class="col-md-6">
                        <div class="fes2-main-text-cont">
                           <div class="fes2-title-45 font-light">
                              په آسانه توګه پيغام لېږل
                           </div>
                           <div class="fes2-text-cont">خپل مخاطبين ومومئ. مستقيم او ډله ييز پېغامونه، د سپارښتنې غوښتنې، پيوستونونه او نور ډېر څخه واستوئ</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="page-section">
               <div class="container">
                  <div class="row hh">
                     <div class="col-md-6">
                        <div class="fes2-main-text-cont">
                           <div class="fes2-title-45 font-light">
                              وړيا غږيزې او انځوريزې اړيکې
                           </div>
                           <div class="fes2-text-cont">له تماس سره وړيا شخصي، کنفرانسي  او انځوريزې اړيکې ټينګۍ کړئ</div>
                        </div>
                     </div>
                     <div class="col-md-6 text-center">
                        <img class="mt-40" src="images/Tam_3.jpg" style=" width: 100%;" alt="img">
                     </div>
                  </div>
                  <div class="row pp" style="display: none;">
                    <div class="col-md-6 text-center">
                        <img class="mt-40" src="images/Tam_3.jpg" style=" width: 100%;" alt="img">
                     </div>
                     <div class="col-md-6">
                        <div class="fes2-main-text-cont">
                           <div class="fes2-title-45 font-light">
                              وړيا غږيزې او انځوريزې اړيکې
                           </div>
                           <div class="fes2-text-cont">له تماس سره وړيا شخصي، کنفرانسي  او انځوريزې اړيکې ټينګۍ کړئ</div>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
            <div class="page-section">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 text-center">
                        <img class="mt-40" src="images/Tam_2.jpg" alt="img">
                     </div>
                     <div class="col-md-6">
                        <div class="fes2-main-text-cont">
                           <div class="fes2-title-45 font-light">
                              له خپلو عزيزانو سره شريک کړئ
                           </div>
                           <div class="fes2-text-cont">په ټولنيزو کيسو سره له تماس سره په اړيکه کې شئ. خپلې ځانګړې خاطرې له عزيزانو سره شريکې کړئ </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            <div id="download" class="page-section bg-b-p-grad">
               <div class="container">
                  <!-- TABS CONTENT & IMAGES -->
                  <div class="row">
                     <!-- TABS CONTENT -->
                     <div class="col-md-6">
                        <div class="fes14-tab-content tab-content">
                           <!-- TAB 1 -->
                           <div class="tab-pane fade in active" id="web-design">
                              <h2 class="fes14-tab-sub-title font-raleway font-white"><strong>30 میلیونه وګړي له بنډار، ټلېفوني لیکو او نورو لارو نښلوي</strong></h2>
                              <p class="fes14-tab-text mb-60 font-white">
                                 We are coming soon.....
                              </p>
                              <div class="fes12-btn-cont mt-30">
                                 <a class="" href="#"><img src="images/app_store.png"</a>
                                 <a class="" href="#"><img src="images/play_store.png"</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- IMAGES -->
                     <div class="col-md-6 fes9-img-cont clearfix">
                        <div class="fes9-img-center clearfix">
                           <img src="images/fes9-black.png" alt="img" class="wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 150ms; animation-name: fadeInUp;">
                           <img src="images/fes9-white.png" alt="img" class="wow fadeInUp" data-wow-delay="450ms" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 450ms; animation-name: fadeInUp;">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="join" class="page-section chat">
               <div class="container fes1-cont">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 "></div>
                     <div class="col-lg-6 col-md-6 text-center">
                        <h2 class=" font-raleway text-center margin">موږ هڅه کوو چې د خلکو د بنډار څرنګوالی تغییر کړو، نو د تماس غړي شئ </h2>
                        <p style="margin-bottom: 30px;"> 30 میلیونه وګړي له بنډار، ټلېفوني لیکو او نورو لارو نښلوي</p>
                        <div class="grid__item">
                           <a class="link link--kukuri" href="" target="_blank" data-letters="Kukuri">نن له موږ سره يو ځای شئ</a>
                        </div>
                        <div class="col-lg-3 col-md-3 "></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- FEATURES 7 HALF IMG -->
            <div id="work-process-link" class="container-fluid p-110-cont bg-gray">
              <div class="row">
          <div class="col-md-2 text-center"></div>
                <div class="col-md-8 text-center">
           <h3 style="color: #4878ef; font-family: 'Raleway'; font-size: 34px;"> د کاروبار خاوندانو او سوداګرو لپاره</h3>
<p class="text-center">د کاروبار او د مغازو خاوندان کولی شي، چې د تماس له پروګرام څخه په خپلو شخصي حسابونو سره د ډيجيټل تاديې له لارې تاديه پيل کړي.  تاديې له لګښت پرته په مستقيمه توګه ستاسې بانکي حسابونو ته رسېږي.</p>
    
          </div>
              <div class="col-md-2 text-center"></div>
              </div>
               <div class="row">
                 
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="work-proc2-cont wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="work-proc2-icon-cont pos-l-12">
                           01
                        </div>
                        <h3><strong>ميليونونه مشتريان پيدا کړئ</strong></h3>
                        <p class="">له افغانستان څخه په امريکا کې له پولې پرته مشتري پيدا کړئ </p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="work-proc2-cont wow fadeIn" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeIn;">
                        <div class="work-proc2-icon-cont">
                           02
                        </div>
                        <h3><strong>راځئ ستونزمن کارونه تر سره کړو</strong></h3>
                        <p>تاسې موږ ته ووايئ، چې څه پلورئ، څو موږ تاسو ته وړ مشتري پيدا کړو </p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="work-proc2-cont wow fadeIn" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeIn;">
                        <div class="work-proc2-icon-cont">
                           03
                        </div>
                        <h3><strong>خپل توليد مو د پاملرنې وړ وګرځوئ</strong></h3>
                        <p>له کابل څخه نيويارک ته پلورل </p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="work-proc2-a-cont wow fadeIn" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeIn;">
                        <a class="work-proc2-a" href="Signup.html">
                           <div class="work-proc2-a-text">
                              کار وکړو<br><span class="border-bot">راځئ په ګډه سره</span>
                           </div>
                           <div class="work-proc2-bg-block"></div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- VIDEO ADS 2 -->
            <div class="page-section bg-yellow" >
               <div class="container">
                  <div class="video-ads-text-cont video-ads-text-black clearfix">
                     <span class="video-ads-text font-raleway">غړي شئ</span>
                     <span class="video-ads-a">
                     <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top">
                     <span class="icon icon-basic-mail-open-text"></span>
                     </a>
                     </span>
                     <span class="video-ads-text font-raleway"> Tamaaas</span>
                  </div>
               </div>
            </div>
            <!-- BLOG SECTION 1 -->
            <!-- FOOTER 4 BLACK FONT RALEWAY -->
            <footer id="footer4" class="page-section pt-95 pb-50 footer2-black">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3 col-sm-3 widget">
                        <div class="logo-footer-cont">
                           <a href="phasto">
                           <img class="logo-footer" src="images/logo-footer-white.png" alt="logo">
                           </a>
                        </div>
                        <div class="footer2-text-cont">
                           <address>
                             New York, NY 10036
                           </address>
                        </div>
                        <div class="footer2-text-cont">
                           +1 (929) 274-2121<br>
                           <a class="a-text" href="mailto:info@Tamaaas.com">info@Tamaaas.com</a>
                        </div>
                        
                     </div>
                     <div class="col-md-3 col-sm-3 widget float_left">
                        <h4 class="font-raleway">لار ښودل</h4>
                        <ul class="links-list a-text-cont a-text-main-cont font-raleway">
                           <li><a href="phasto">کور پاڼه </a></li>
                           <li><a href="#features">بڼې</li>
                           <li><a data-toggle="modal" data-target="#myModal">پلورل</li>
                        </ul>
                     </div>
                     <div class="col-md-3 col-sm-3 widget float_right">
                        <h4 class="font-raleway">کتنه</h4>
                        <ul class="links-list a-text-cont font-raleway" >
                           <li><a href="https://www.wieldata.com/" target="new">کمپنۍ</a></li>
                           <li>هغه څه چې موږ يې ترسره کوو</li>
                           <li>د خدمتونو د کارونې شرطونه</li>
                           <li>اړيکه</li>
                        </ul>
                     </div>
                     
                     
                     <div class="col-md-3 col-sm-3 widget float_left">
                        <h4 class="font-raleway">خبرپاڼه</h4>
                        <!-- NEWS LETTER 2 -->
                        <div class="relative">
                           <div id="mc_embed_signup" class="nl-form-container clearfix">
                              <form action="http://abcgomel.us9.list-manage.com/subscribe/post-json?u=ba37086d08bdc9f56f3592af0&amp;id=e38247f7cc&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform2 validate" target="_blank" novalidate>
                                 <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->
                                 <input type="email" value="" name="EMAIL" class="email nl2-email-input font-raleway" id="mce-EMAIL" placeholder="Email address" required>
                                 <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                 <div style="position: absolute; left: -5000px;"><input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value=""></div>
                                 <button id="mc-embedded-subscribe" class="nl2-btn" type="submit" name="subscribe">
                                 <span class="icon icon-arrows-slim-right"></span>
                                 </button>
                              </form>
                              <div id="notification_container"  ></div>
                           </div>
                        </div>
                     </div>
                  </div>
              
                  <!-- SUB FOOTER -->
                  <div class="footer2-copy-cont clearfix">
                     <!-- Social Links -->
                     <div class="footer2-soc-a right">
                        <a href="https://m.facebook.com/Tamaaas-App-290563514759664/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/tamaaas_app" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <i class="fa fa-linkedin"></i>
                         <a href="https://www.instagram.com/tamaaas_app" target="_blank"><i class="fa fa-instagram"></i></a>
                     
                     </div>
                     <!-- Copyright -->
                     <div class="left">
                        <a class="footer2-copy" href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" target="_blank">&copy; Tamaaas</a>
                     </div>
                  </div>
               </div>
            </footer>
            <!-- BACK TO TOP -->
            <p id="back-top">
               <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
            </p>
         </div>
         <!-- End BG -->   
      
      <!-- End wrap --> 
      <!-- JS begin -->
      <!-- jQuery  -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.10/js/intlTelInput.js"></script>
      <script type="text/javascript" src="js/country-code.js"></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>     
      <!-- MAGNIFIC POPUP -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- PORTFOLIO SCRIPTS -->
      <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
      <!-- APPEAR -->    
      <script type="text/javascript" src="js/jquery.appear.js"></script>
      <!-- PARALLAX -->   
      <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
      <!-- ONE PAGE NAV -->
      <script src="js/jquery.nav.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
         //ONE PAGE NAV ---------------------------------------------------------------------------
         var top_offset = $('header').height() - 1;  // get height of fixed navbar
         
         $('#nav-onepage').onePageNav({
         currentClass: 'current',
         changeHash: false,
         scrollSpeed: 700,
         scrollOffset: top_offset,
         scrollThreshold: 0.5,
         filter: '',
         easing: 'swing',
         begin: function() {
            //I get fired when the animation is starting
         },
         end: function() {
            //I get fired when the animation is ending
         },
         scrollChange: function($currentListItem) {
            //I get fired when you enter a section and I pass the list item of the section
         }
         });
             
         });
         $(window).load(function(){
            var first = getUrlVars()["f"];
            function getUrlVars() {
            var vars = {};
            var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
            });
            return vars;
            }          
            if(!first)      
             {
               $('#onload').modal('show');
            }
             });
         //END document.ready 
      </script>
      <!-- MAIN SCRIPT -->
      <script src="js/main.js"></script>
      <script type="text/javascript">
         function validatee(evt) {
           var theEvent = evt || window.event;
           var key = theEvent.keyCode || theEvent.which;
           key = String.fromCharCode( key );
           var regex = /[0-9]|\./;
           if( !regex.test(key) ) {
             theEvent.returnValue = false;
             if(theEvent.preventDefault) theEvent.preventDefault();
           }
         }
      </script>
 <script type="text/javascript">
   $( "#preregister" ).submit(function( event ) {
   var code = $(".country.active").attr('data-dial-code');
   $('#phone2').attr('value',code);
});
</script>
<script type="text/javascript">
   var flag;
   if(flag == 1){
      $('#preregister-box').css('display','none');
      $('#result').css('display','block');
   }
</script>
<script>
(function(h,e,a,t,m,p) {
m=e.createElement(a);m.async=!0;m.src=t;
p=e.getElementsByTagName(a)[0];p.parentNode.insertBefore(m,p);
})(window,document,'script','https://u.heatmap.it/log.js');
</script>
   </body>
</html>
<?php 
}
?>

