<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/receptionNavigation.php';
    ?>
</div>
<div class="receptionIndex">
    <div class="container center" id="contain">

        <form action="<?php echo URLROOT;?>/receptions/viewTicket" method="POST" id="entry">
            <label for="ticketNumber">Insert Ticket Number</label>
            <input type="text" name="ticketNumber" style='text-transform:uppercase'> 
            <span class="invalidFeedback">
                <?php echo $data['inputError']; ?>
            </span>
            <br><br>
            <button class="btn " name="submit" type="submit">Submit</button>
            <br><br>
            </form>

            <?php if(!empty($data['ticketInfo']) && empty($data['inputError'])): ?>

            <div id="register">
                <div id="ticket">
                    <h1>Thank You!</h1>
                    <table>
                    
                    <tbody id="entries">
                        
                        
                        
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>Name</th>
                        <th id="total"><?php echo $data['user']->username;?></th>
                        </tr>

                        <tr>
                        <th>Email</th>
                        <th id="total"><?php echo $data['user']->email; ?></th>
                        </tr>

                        <tr>
                        <th>Total</th>
                        <th id="total"><?php echo $data['tourismSite']->price * $data['ticketInfo']->numberOfTicket; ?>Birr</th>
                        </tr>
                    </tfoot>
                    </table>
                </div>
            </div>

            <form action="<?php echo URLROOT . "/receptions/assignTourGuide/". $data['ticketInfo']->id ?>" method="POST">
                    <input type="submit" name="assign" value="Assign Tour Guide" class="btn orange" >
                </form>



            <?php else: ?>

                <div id="register">
                    <div id="ticket">
                        <h1>Invalid Ticket Number!</h1>
                    </div>
                </div>

            <?php endif; ?>    
        
            

            <!-- <input readonly type="text" name="displayUser" id="" value="<?php //echo $data['ticketInfo']->ticketNo; ?>"><br><br>
            <input readonly type="text" name="displayUser" id="" value="<?php //echo $data['ticketInfo']->userEmail; ?>"><br><br>
            <input readonly type="text" name="displayUser" id="" value="<?php //echo $data['ticketInfo']->visitingDate; ?>"><br><br>
            <input readonly type="text" name="displayUser" id="" value="<?php //echo $data['user']->role; ?>"> -->

        
        <?php  ?>

    </div>

</div>