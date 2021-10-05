<div class="wrapper">
    <div class="multi_color_border"></div>
    <div class="top_nav">
        <div class="left">
          <div class="logo"><p><span>Visit</span>Addis</p></div>
          <div class="search_bar">
              <!-- <input type="text" placeholder="Search"> -->
          </div>
      </div> 
      <div class="right">
        <ul>
          <li><a href="<?php echo URLROOT; ?>/admins/login">Admin LogIn</a></li>
          <li >
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Log out</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Login</a>
            <?php endif; ?>
        </li>
          
          
        </ul>
      </div>
    </div>
    <div class="bottom_nav">
      <ul>
        <li><a href="<?php echo URLROOT; ?>/pages">Home</a></li>
        <li>
            <a href="<?php echo URLROOT; ?>/tourismSites">Tourism Sites</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/about">About</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/gallery">Gallery</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/contact">Contact</a>
        </li>
        <!-- <li><a href="<?php echo URLROOT; ?>/posts">Blog</a></li> -->
        <!-- <li><a href="#">Map</a></li> -->
        <li><a href="<?php echo URLROOT; ?>/users/employeeLogin">Employee Login</a></li>
      </ul>
  </div>
</div>

<!--<nav class="top-nav">
     
    <ul>
        <li>
            <h1>
                <a href="<?php// echo URLROOT; ?>/pages">Visit Addis</a>
            </h1>
            
        </li>
        <li>
            <a  href="<?php //echo URLROOT; ?>/admin">Admin login</a>
        </li>
        <li>
            <a href="<?php //echo URLROOT; ?>/pages">Home</a>
        </li>
        <li>
            <a href="<?php //echo URLROOT; ?>/pages/tourismSites">Tourism Sites</a>
        </li>
        <li>
            <a href="<?php// echo URLROOT; ?>/pages/about">About</a>
        </li>
        <li>
            <a href="<?php //echo URLROOT; ?>/pages/gallery">Gallery</a>
        </li>
        <li>
            <a href="<?php //echo URLROOT; ?>/pages/contact">Contact</a>
        </li>
        <li>
            <a href="<?php //echo URLROOT; ?>/posts">Blog</a>
        </li>
        
        <li class="btn-login">
            <?php //if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php //echo URLROOT; ?>/users/logout">Log out</a>
            <?php //else : ?>
                <a href="<?php //echo URLROOT; ?>/users/login">Login</a>
            <?php //endif; ?>
        </li>
    </ul>
</nav>-->
