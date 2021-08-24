<div class="wrapper">
    <div class="multi_color_border"></div>
    <div class="top_nav" id="reception-top-nav">
        <div class="left">
          <div class="logo"><p><span>Visit</span>Addis</p></div>
      </div> 
      <div class="right">
        <ul>
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
    <div class="bottom_nav" id="reception-bottom-nav">
      <ul>
        <li><a href="<?php echo URLROOT; ?>/receptions">Home</a></li>
        <li>
            <a href="<?php echo URLROOT; ?>/receptions/viewTicket">View Ticket Info</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages">Back To Main Site</a>
        </li>
       
      </ul>
  </div>
</div>