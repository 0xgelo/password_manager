<?php 
include 'connect.php';
include 'header.php';

$updateid = $_GET['updateid'];

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $website = $_POST['website'];
    $password= $_POST['password'];

    $query = "UPDATE `accounts` SET `Name` = '$name', `Website` = '$website', `Password` = '$password' WHERE `accounts`.`id` = $updateid;";

    $result = $conn -> query($query);
    if ($result){
        echo "<script>Updated Succesfuly</script>";
        header("location: browse.php");
        
    }
}

?>

<form method="POST" class="m-5">
    <h1>Update data with id = <?php echo"{$updateid}"?></h1>
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




<?php 
include 'footer.php';
?>
