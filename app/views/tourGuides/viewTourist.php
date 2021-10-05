<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/tourGuideNavigation.php';
    ?>
</div>

<div class="tourGuideIndex">
    <div class="container center" id="contain">

     <div>
        <table>
            <thead>
                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><?php echo $data['user']->username; ?></td>
                <td><?php echo $data['user']->email; ?></td>
                <td><?php echo $data['tourismSite']->price * $data['ticket']->numberOfTicket; ?></td>
                </tr>
                <tr>
                
            </tbody>
        </table>
     </div>
       

    </div>

</div>

<style>
    table {
  border-collapse: separate;
  border-spacing: 250px 0;
  margin-left: auto;
  margin-right: auto;
}

td {
  padding: 40px 0;
}

</style>
