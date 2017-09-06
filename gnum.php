<?php
    //產生謎底
    function creatAnswer($n){
        $poker = range(0,9);
        shuffle($poker);
        $ret = '';
        for ($i=0; $i<$n; $i++){
            $ret .= $poker[$i];
        }
        return $ret;
    }

    function checkAB($a,$g){
        $A = $B = 0;
        for ($i=0;$i<strlen($g);$i++){
            $check = $g[$i];
            if($check == $a[$i]){
               $A++;
            }else if(substr_count($a,$check,0,strlen($a))>0){
                $B++;
            }

        }
        return"{$A}A{$B}B";
    }
    $result = '';
    if (!isset($_POST['answer'])){
        //首次進入
        $answer = creatAnswer(3);
    }else{
        //已經開始猜了
        $answer = $_POST['answer'];
        $guess = $_POST['guess'];
        $result = checkAB($answer, $guess);
    }
    echo $result;

?>
<form method="post">
    <input type="hidden" name="answer" value="<?php echo $answer; ?>">
    <input type="hidden" name="hist" value="<?php echo $hist; ?>">
    <input name="guess" />
    <input type="submit" value="猜" />
</form>
<form method="post">
    <input type="submit" name="newgame" value="新局" />
</form>
<hr>
<?php echo $hist; ?>