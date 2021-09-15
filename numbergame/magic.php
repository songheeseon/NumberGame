<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap.css">

    <style>
        .alert-heading{
            text-align:center;
        }
        .mb-0{
            text-align:center;
            font-size:25px;
        }
        #pic{
            text-align : center;
            
        }

    </style>
    
</head>
<body>



<div class="alert alert-dismissible alert-warning" >
  <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="location.href='Magic.html'"></button>
  <h3 class="alert-heading" >당신이 생각하는 숫자는?</h4>
  <p class="mb-0">생각해주세요!</p>
</div>
<div id = "pic">
    <img src="3.jpeg" width=600; height=250; style="max-width:100%; height:auto;">

</div>


<?php
    echo "<br>";
    ini_set('display_errors', '0');

    $input_data = $_GET["val"];
    $input_len = strlen($input_data);
    $input_value = substr($input_data, 1, ($input_len - 1));
    $level = substr($input_data, 0, 1);
    switch($level)
    {
        case 0:
            masic_page($level,$input_value);
            break;
        case 1:
            masic_page($level,$input_value);
            break;
        case 2:
            masic_page($level,$input_value);
            break;
        case 3:
            masic_page($level,$input_value);
            break;
        case 4:
            masic_page($level,$input_value);
            break;
        case 5:
            masic_page($level,$input_value);
            break;
        case 6:
            result_page($input_value);
            break;
    }
    
    function masic_page($level, $current_value)
    {
        echo "<pre style=text-align:center>";
        echo "<pre style=font-size:18px>";
        $in_count = 0;
        $line_count = 0;

        echo ($level+1),"단계 아래의 숫자 중 생각하신 숫자가 있나요? <br>";
        $point = pow(2,$level);

        for($num = $point; $num < 50; $num++)
        {
            if($in_count == $point)
            {
                $num += $point;
                $in_count = 0;
            }

            echo $num, "&nbsp;&nbsp;&nbsp;&nbsp;";
            $in_count++;
            
            if($line_count != 0 && $line_count % 5 == 0)
            {
                echo "<br>";
                //$line_count = 0;
            }
            $line_count++;
        }
        echo "<br>";
        echo "<br>";
        echo "<button  class =\"btn btn-primary\" button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"magic.php?val=",($level+1),($current_value +$point), "\"'>내 숫자가 있다!</button>";
        echo "&nbsp";
        echo "<button class =\"btn btn-info\" button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"magic.php?val=",($level+1),($current_value), "\"'>내 숫자가 없다..</button>";
        echo "</pre>";
    }

    function result_page($input_value)
   
    {
        echo "<pre style=text-align:center>";
        echo "<pre style=font-size:20px>";
        echo "당신이 생각한 숫자는 ", $input_value, "입니다.";
         echo "</pre>";
    }
   
?>
<br><br><br>
<button type="button" class="btn btn-dark" onclick="location.href='Magic.html'">첫화면으로 돌아가기</button>

</body>
</html>

