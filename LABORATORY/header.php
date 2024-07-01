
<?php    
    include 'connect.php';
    include 'readrecords.php';   
    require_once 'includes/header.php'; 
?>
    
<div style='background-color:#ffff00'>
    <center>
        <p style="color:white"><h2>List of Students</h2></p>
    </center>
</div>     
<!--
<div>
	<button><a href="addrecord.php">Add New Student</a></button>
</div> -->

    <div>        
        <table id="tblCustomerRecords " class="table
            table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
            <thead>
                <tr> 
                    <th>ID Number</th> 
                    <th>Firstname</th> 
                    <th>Lastname</th>
                    <th>Program</th>                     
                </tr> 
            </thead>  
            <tbody>
                <?php
                    while($row = $resultset->fetch_assoc()):
                    	$id = $row['studentid'];
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                    <td><?php echo $row['program'] ?></td>                    
                </tr>
                <?php endwhile;?>
            </tbody>         
        </table>
        
    </div>

<?php require_once 'includes/footer.php'; ?>

