<?php
include 'connect.php';
include 'header.php';

    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $website = $_POST['website'];
        $password= $_POST['password'];

        $query = "INSERT INTO accounts (name, website, password) VALUES ('$name', '$website', '$password'); ";

        $result = $conn -> query($query);
        if ($result){
            echo "<script> alert('Query added successfully')</script>";
        }
    }
?>
<div class="containter m-5">
    <button type="button" class="btn btn-primary mb-3"><a href="browse.php" class="text-light" style="text-decoration:none;">Browse</a></button>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="name" autocomplete="off">
        </div>

        <div class="mb-3">
            <label class="form-label">Website</label>
            <input type="text" class="form-control" name="website" autocomplete="off">
        </div>


        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" autocomplete="off">
        </div>


        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        
    </form>



</div>



<?php
include 'footer.php'
?>