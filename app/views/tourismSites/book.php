<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

    <div class="container center" >
        <label for="ticket">Your ticket Number is:</label>
        <input type="text" name="ticket" readonly
        value="<?php echo $data['ticketNo']; ?>"><br><br>
        <label for="price">Total price is:</label>
        <input type="text" name="price" readonly
        value="<?php echo $data['numberOfTicket'] * $data['tourismSite']->price; ?>">
    </div>