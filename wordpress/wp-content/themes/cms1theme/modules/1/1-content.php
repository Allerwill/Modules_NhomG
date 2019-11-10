<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1">
    <div class="container">
        <header class="header">
            <div class="top-bar" style="background-color:#504B47;">
                <div class="container">
                    <div class="nav-custom">
                        <div class="row">
                            <div class="col-md-6 title-bar">
                                <strong class="uppercase">
                                <i class="fas fa-home"></i>
                                ,New Lenox Chicago, IL 60606
                                </strong>
                            </div>
                            <div class="col-md-6 bar-menu">
                                <ul>
                                    <li>
                                        <a href="#"><i class="far fa-envelope"></i>Infor@yoursite.com</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-phone-volume"></i>123.456.7890</a>
                                    </li>
                                    <li>
                                        <a href="#">Make an appointment</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
    </div>
 
    
    
            <div class="container">
        <div class="menu-2">
            <nav class="navbar navbar-default">
                <div class="nav-menu-2">
                <!-- BRAND -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="opennav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <img width="200" height="90" src="<?php echo $url_path ?>/images/logo_light.png" class="img-responsive" alt="Flatsome">
                        <a class="cart-custom cart-sm" href="#">
                            <span>
                                <strong>0</strong>
                            </span>
                        </a>
          
                    </div>

                    <!-- COLLAPSIBLE NAVBAR -->
                    <div class="collapse navbar-collapse" id="alignment-example" style="margin-right:20px;">

                        <!-- Links -->
                        <ul class="nav navbar-nav" style="float:right;">
                            <!-- <li><a href="#"><i class="fas fa-search"></i></a></li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOME<i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">HOME 1</a></li>
                                    <li><a href="#">HOME 2</a></li>
                                   
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FEATUES<i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">ABOUT ME</a></li>
                                    <li><a href="#">PRICING</a></li>
                                    <li><a href="#">TOOLS</a></li>
                                    <li><a href="#">DOCUMENTATION</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GALLERY<i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">GRID GALLERY</a></li>
                                    <li><a href="#">MASONRY GALLERY</a></li>
                                    <li><a href="#">COBBLES GALLERY</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BLOG<i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">STANDERS BLOG</a></li>
                                    <li><a href="#">WITHOUT SIDEBAR</a></li>
                                    <li><a href="#">BLOG MASONRY</a></li>
                                </ul>
                            </li>
                           
                            <li><a href="#">Elements</a></li>
                            
                        </ul>
                    </div>

            </div>
            </div>
        </div>
                </div>
            

            
          
       
 