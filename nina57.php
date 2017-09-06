<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function ckAccount() {
        var account = $("#account").val();
        $.get("nina62.php?account="+account,function (data,status) {
            if(data>0){

            }else

            }
        );
    }
</script>

<form action="nina56.php">
    Account: <input id="account" name="account" onblur="function ckAccount()"/><span id="mesg"></span><br>
    Password: <input type="password" name="passwd" /><br>
    Real name: <input name="realname" /><br>
    <input type="submit" value="Add" />
</form>