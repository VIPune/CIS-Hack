<?php
include('ConnectDB.php');

session_start();

if (isset($_POST["login"])) {

    $user = $_POST['email'];
    $pass = $_POST['pass'];

    $sql2 = "SELECT * from enrolled where email = '$user'";

    $result = mysqli_query($connect, $sql2);
    $userdata = mysqli_fetch_assoc($result);

    $_SESSION['name'] = $userdata['name'];
    $_SESSION['pass'] = $userdata['pass'];

    if ($pass == $userdata['pass'] ) {
        if($userdata['course']=='github'){
        header('location: table.php');}
        if($userdata['course']=='c'){
        header('location: cTable.php');}
    } else {
?>
        <script>
            alert('Invalid Username or Password');
        </script>
<?php
    }
}
?>