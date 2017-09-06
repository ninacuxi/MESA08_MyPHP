<?php
    if(!isset($_GET['editid'])) header("Location:nina55.php");

    $editid = $_GET['editid'];
    $sql = "SELECT * FROM member WHERE id={$editid}";

    $mysqli = new mysqli('localhost','root','root','iii');
    $result = $mysqli->query($sql);
    $data = $result->fetch_object();

?>
<h1>Edit Member</h1>
<form action="nina59.php">
    Account: <input name="account" value="<?php echo $data->account; ?>"/><br>
    Password: <input type="password" name="passwd" /><br>
    Real name: <input name="realname" value="<?php echo $data->realname; ?>" /><br>
    <input type="submit" value="Update" />
</form>