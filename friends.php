<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Social Network</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                <!-- Magnific pop up style, http://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

</head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="tm-left-right-container">
                    <!-- Left column: logo and menu -->
                    <div class="tm-blue-bg tm-left-column">                        
                        <div class="tm-logo-div text-xs-center">
                            <img src="img/tm-neaty-logo.png" style="width: 50%; height: 50%;"alt="Logo">
                            <h1 class="tm-site-name">Social Network - FB</h1>
                        </div>
                        <nav class="tm-main-nav">
                            <ul class="tm-main-nav-ul">
                                <li class="tm-nav-item">
                                    <a href="#welcome" class="tm-nav-item-link">You</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#about" class="tm-nav-item-link">Your friends</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#galleryone" class="tm-nav-item-link">Your requestes</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#secondgallery" class="tm-nav-item-link">Search for a user</a>
                                </li>
                            </ul>
                        </nav>                                         
                    </div> <!-- Left column: logo and menu -->
                    
                    <!-- Right column: content -->
                    <div class="tm-right-column">
                        <figure>
                            <img src="img/neaty-01.jpg" alt="Header image" class="img-fluid">    
                        </figure>

                        <div class="tm-content-div">
                            <!-- Welcome section -->
                            <section id="welcome" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Welcome to your Social Network!</h2>
                                </header>
                                <div>
                                    <?php include 'PHP/Personal_Info/Personal_info.php';?>
                                </div>
                            </section>
                            <!-- About section -->
                            <section id="about" class="tm-section">
                                <div class="row">                                                                
                                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 push-lg-4 push-md-5">
                                        <header>
                                            <h2 class="tm-blue-text tm-section-title tm-margin-b-45">Check out your friends!</h2>
                                        </header>
                                        <?php include 'PHP/Personal_Info/Friends_info.php';?>                                   
                                    </div>

                                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 pull-lg-8 pull-md-7 tm-about-img-container">
                                        <img src="img/neaty-02.jpg" alt="Image" class="img-fluid">    
                                    </div>  
                                </div>                            
                            </section>  

                            <!-- Gallery One section -->     
                            <section id="galleryone" class="tm-section">
                                <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">Accept or Reject!</h2></header>
                                <div class="tm-gallery-container tm-gallery-1">
                                <?php include 'PHP/Personal_Info/Requests_info.php';?>
                                </div>
                            </section>

                            <!-- Second Gallery section -->     
                            <section id="secondgallery" class="tm-section">
                                <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">Search for a user</h2></header>
                                <div class="tm-gallery-container tm-gallery-2">
                                    <form method="post">
                                        <input type="text" name="search" placeholder="Enter name">
                                        <br><br>
                                        <input type="submit" class="tm-button" name="search_">
                                        <?php if (isset($_POST['search_'])){include "PHP/Personal_Info/Search_info.php" ;}?>

                                    </form> 
                                     <form style="padding-top: 20px; color: gray;border-radius: 5px;" action="" method="post">
    
                                     <input type="submit" value="Add friend" name="add">
                                       <?php if (isset($_POST['add'])){include "PHP/Personal_Info/go.php" ;}?>
                                      </form>                                 
                                </div>
                            </section>
                            <footer>
                                <p class="tm-copyright-p">Copyright &copy; <span class="tm-current-year">2017</span> Your Company 
                                
                                | Designed by <a href="http://www.templatemo.com" target="_parent">templatemo</a></p>
                            </footer>
                        </div>  
                        
                    </div> <!-- Right column: content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
                
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/jquery.magnific-popup.min.js"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script>     
       
            $(document).ready(function(){

                // Single page nav
                $('.tm-main-nav').singlePageNav({
                    'currentClass' : "active",
                    offset : 20
                });

                // Magnific pop up
                $('.tm-gallery-1').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                }); 

                $('.tm-gallery-2').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                }); 

                $('.tm-gallery-3').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                }); 

                $('.tm-current-year').text(new Date().getFullYear());                
            });
        </script>             
</body>
</html>