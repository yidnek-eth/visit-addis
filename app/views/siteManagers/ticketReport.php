<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/siteManagerNavigation.php';
    ?>
</div>



    <h2 style="text-align: center; margin-top: 100px;">Income Reports</h2>

    <table class="styled-table">
    <thead>
        <tr>
            <th>Time Interval</th>
            <th>Income</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Weekly</td>
            <td><?php echo $data['weeklyTickets']->total;?></td>
        </tr>

        <tr>
            <td>Monthly</td>
            <td><?php echo $data['monthlyTickets']->total;?></td>
        </tr>

        <tr class="active-row">
            <td>Quarterly(3 Months)</td>
            <td><?php echo $data['quarterlyTickets']->total;?></td>
        </tr>
        <!-- and so on... -->
    </tbody>
</table>

</div>


<style>
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    width: 1000px;
    margin-left: auto;
    margin-right: auto;
    
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}


</style>