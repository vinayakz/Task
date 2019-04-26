<?php
    include 'mysqlconnect.php'; 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register";
 
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 


    if(isset($_POST['update'])) {    
        $set_id = $_POST['id'];
        $pname=$_POST['pname'];
        $price=$_POST['price'];

            //$result5 = "UPDATE product SET product_name='".$pname."' product_price='$price' WHERE id=$id";
            $result5 = "UPDATE demo SET email='".$pname."', mob_num='".$price."' WHERE id='".$set_id."'";
            //$vl1 = mysqli_query($conn, $result5);
            $conn->query($result5);

            header("Location: page.php");
    }else {
    ?>
    <?php
    $edit_id = $_GET['id'];
     
    $sql = "SELECT * FROM demo WHERE id=$edit_id";

    $result = $conn->query($sql);
    $res = $result->fetch_assoc();
    if(!empty($res)) {
        $pname_old = $res['email'];
        $price_old = $res['mob_num'];
    } 
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Email Id</td>
                <td><input type="email" name="pname" value="<?php echo $pname_old; ?>"></td>
            </tr>
            <tr> 
                <td>Phone No</td>
                <td><input type="text" name="price" value="<?php echo $price_old; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php } ?>