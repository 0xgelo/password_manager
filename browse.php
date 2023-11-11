<?php
include 'connect.php';
include 'header.php';
?>

<div class="container m-5">
    <button type="button" class="btn btn-primary"><a href="create.php" class="text-light" style="text-decoration: none;">+ Add</a></button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Website</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM accounts" ;
            $result = $conn -> query($query);
            
            
            while($row = $result->fetch_assoc()){
                $username = $row['Name'];
                $password = $row['Password'];
                $website = $row['Website'];
                $id = $row['id'];
                
                echo "<tr>
                <th scope='row'>{$id}</th>
                <td>{$username}</td>
                <td>{$password}</td>
                <td>{$website}</td>
                <td>
                <button class='btn btn-primary'><a href='update.php?updateid={$id}' class='text-light'>Update</a></button>
                <button class='btn btn-danger'><a href='delete.php?deleteid={$id}' class='text-light'>Delete</a></button>
                </td>
            </tr>";
            }
            
            ?>
            
        </tbody>
    </table>
</div>




<?php
include 'footer.php'
?>