<?php
//$year = $_GET['y'];
//if ($year % 4 == 0) {
//    if ($year % 100 == 0) {
//        if ($year % 400 == 0) {
//            //29
//            $two = 29;
//        } else {
//            // 28
//            $two = 28;
//        }
//    } else {
//        //29
//        $two = 29;
//    }
//} else {
//    //28
//    $two = 28;
//}
//
////$month = rand(1, 12);
////echo "{$month}月<br>";
//$month = $_GET['m'];
//
//?>
<!--<form>-->
<!--    <input type="text" name="y" value="--><?php //echo $year; ?><!--">-->
<!--    年-->
<!--    <input type="text" name="m" value="--><?php //echo $month; ?><!--">-->
<!--    月-->
<!--    <input type="submit" value="=>">-->
<!--</form>-->
<!---->
<?php
//switch ($month) {
//    case 1:
//    case 3:
//    case 5:
//    case 7:
//    case 8:
//    case 10:
//    case 12:
//        echo '31天';
//        break;
//    case 2:
//        echo "{$two}天";
//        break;
//    case 4:
//    case 6:
//    case 9:
//    case 11:
//        echo '30天';
//        break;
//    default:
//        echo 'XX';
//        break;
//}
//?>

<?php
    $year=$month='';
    if (isset($_GET['y']) && isset($_GET['m'])){
        $year = $_GET['y'];
        if ($year % 4 == 0){
            if ($year % 100 == 0){
                if ($year % 400 == 0){
                    $two=29;
                }else{
                    //28
                    $two=28;
                }

            }else{
                //29
                $two=29;
            }

        }else{
            //28
            $two=28;
        }

    $month = $_GET['m'];
    }
?>
<form>
    <input type="text" name="y" value="<?php echo $year;?>">
    年
    <input type="text" name="m" value="<?php echo $month;?>">
    月
    <input type="submit" value="=>">

</form>
<?php
    if (isset($_GET['y']) && isset($_GET['m'])) {
        switch ($month) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                echo "31天";
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                echo "30天";
                break;
            case 2:
                echo "{$two}天";
                break;
            default:
                echo "XX天";
                break;
        }
    }
?>