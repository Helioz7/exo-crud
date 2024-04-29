<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>
        
        <h2>tous les étudiants</h2>
        <table class="table table-hover table-bordered table-stiped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>prenom</th>
                    <th>nom</th>
                    <th>âge</th>
                </tr>
            </thead>
            <tbody>

                <?php 

                $query = "SELECT * FROM `students`";
                $result = mysqli_query($connection, $query);

                if (!$result){
                    die("query failed".mysqli_error());
                }
                else{ 

                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                 <tr>
                    <td><?php echo $row ['id'];?></td>
                    <td><?php echo $row ['prénom'];?></td>
                    <td><?php echo $row ['nom'];?></td>
                    <td><?php echo $row ['age'];?></td>
                </tr> 
                 <?php
                    }
                }


                    ?>
            </tbody>
        </table>
        <?php include('footer.php'); ?>
    
        
  