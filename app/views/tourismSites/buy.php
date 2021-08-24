<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>



    <div class="container center">
         <form action="<?php echo URLROOT. "/tourismSites/book/". $data['tourismSite']->id;?>" method="POST">
            <div class="form-item buyTicket">
                <label for="username">User Name</label>
                <input
                type="text"
                name="username"
                value="<?php echo $data['user']->username; ?>">
            </div>

            <div class="form-item buyTicket">
                <label for="email">Email  </label>
                <input
                type="text"
                name="email"
                value="<?php echo $data['user']->email; ?>">
            </div>
            <div class="form-item buyTicket">
                <label for="date">Visiting Date</label>
                <input type="date" id="start" name="trip-start"
                    value="<?php echo date('Y-m-d'); ?>"
                    min="2018-01-01">                
            </div>

            <div class="form-item buyTicket">
                <label for="numberOfTicket">Number of tickets</label>
                <input
                type="number"
                name="numberOfTicket"
                min="0" max = "10">
            </div>

            <div class="form-item buyTicket">
                <p>Price for a Ticket: <?php echo $data['tourismSite']->price;  ?></p>
                
            </div>



            <button class="btn green details" id ="book" name="book" type="submit">Book</button>
            
        </form>
    </div>

   


    

