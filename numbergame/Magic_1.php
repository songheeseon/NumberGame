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
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <h3 class="alert-heading" >당신이 생각하는 숫자는?</h4>
  <p class="mb-0">생각해주세요!</p>
</div>
<div id = "pic">
    <img src="3.jpeg" width=800; height=350; ; alt="">
</div>


<?php
    ini_set('display_erros', '0');

    $input_data = $_GET["val"];
    $input_len = strlen($input_data);
    $input_value = substr($input_data, 1, ($input_len-1));
    

    if($input_data == 0)
    {
        magic_1_page();
    }
    else if (substr($input_data,0,1) == 1)
    {
        magic_2_page($input_value);
    }
    else if (substr($input_data,0,1) == 1)
    {
        magic_2_page($input_value);
    }
    else if (substr($input_data,0,1) == 2)
    {
        magic_3_page($input_value);
    }
    else if (substr($input_data,0,1) == 3)
    {
        magic_4_page($input_value);
    }
    else if (substr($input_data,0,1) == 4)
    {
        magic_5_page($input_value);
    }
    else if (substr($input_data,0,1) == 5)
    {
        magic_6_page($input_value);
    }
    else if (substr($input_data,0,1) == 6)
    {
        result_page($input_value);
    }

    echo "<p style=text-align:center><pre>";
    function magic_1_page()
    {
        echo "<br>";
        echo "<h2 style=text-align:center >1단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br /></h2>";
        for ($num = 1; $num <50; $num++)
        {
            
            if($num%10 == 0)
            {
                echo "<br />";
            }
            if($num%2 == 1)
            {
               
                echo $num,"&nbsp &nbsp &nbsp &nbsp;";
            }
        }
        echo "<br /><br />";
        echo "<button  class =\"btn btn-secondary\" button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"magic_1.php?val=11\"'>존재함</button>";
        echo "<button class =\"btn btn-info\" button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"magic_1.php?val=10\"'>존재하지않음</button>";

    }
    echo "</pre>";
    function magic_2_page($current_value)
    {
        $in_count = 0;
        $line_count =0;
        echo "<h2 style=text-align:center >2단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br /></h2>";
        for ($num = 2; $num <50; $num++)
        {
            if($in_count == 2)
            {
                $num += 2;
                $in_count =0;
            }
            
            echo $num,"&nbsp &nbsp &nbsp &nbsp;";
            $in_count++;

            if($line_count != 0 && $line_count%5 == 0)
            {
                echo "<p style=text-align:center><br />";
            }
            $line_count++;
        }
        echo "<br /><br />";
        echo "<button  class =\"btn btn-secondary\" button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"magic_1.php?val=2".($current_value+2)."\"'>존재함</button>";
        echo "<button class =\"btn btn-info\" button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"magic_1.php?val=2".($current_value+0)."\"'>존재하지않음</button>";
    }

    function magic_3_page($current_value)
    {
        $in_count = 0;
        $line_count = 0;
        echo "<h2 style=text-align:center >3단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br /></h2>";
        for ($num = 4; $num <50; $num++)
        {
            if($in_count == 4)
            {
                $num += 4;
                $in_count =0;
            }
            
            echo $num,"&nbsp &nbsp &nbsp &nbsp;";
            $in_count++;

            if($line_count != 0 && $line_count%5 == 0)
            {
                echo "<p style=text-align:center><br />";
            }
            $line_count++;
        }
        echo "<br /><br />";
        echo "<button  class =\"btn btn-secondary\" button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"magic_1.php?val=3".($current_value+4)."\"'>존재함</button>";
        echo "<button class =\"btn btn-info\" button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"magic_1.php?val=3".($current_value+0)."\"'>존재하지않음</button>";
    }

    function magic_4_page($current_value)
    {
        $in_count = 0;
        $line_count = 0;
        echo "<h2 style=text-align:center >4단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br /></h2>";
        for ($num = 8; $num <50; $num++)
        {
            if($in_count == 8)
            {
                $num += 8;
                $in_count =0;
            }
            
            echo $num,"&nbsp &nbsp &nbsp &nbsp;";
            $in_count++;

            if($line_count != 0 && $line_count%5 == 0)
            {
                echo "<p style=text-align:center><br />";
            }
            $line_count++;
        }
        echo "<br /><br />";
        echo "<button  class =\"btn btn-secondary\" button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"magic_1.php?val=4".($current_value+8)."\"'>존재함</button>";
        echo "<button class =\"btn btn-info\" button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"magic_1.php?val=4".($current_value+0)."\"'>존재하지않음</button>";
    }
    function magic_5_page($current_value)
    {
        $in_count = 0;
        $line_count = 0;
        echo "<h2 style=text-align:center >5단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br /></h2>";
        for ($num = 16; $num <50; $num++)
        {
            if($in_count == 16)
            {
                $num += 16;
                $in_count =0;
            }
            
            echo $num,"&nbsp &nbsp &nbsp &nbsp;";
            $in_count++;

            if($line_count != 0 && $line_count%5 == 0)
            {
                echo "<p style=text-align:center><br />";
            }
            $line_count++;
        }
        echo "<br /><br />";
        echo "<button  class =\"btn btn-secondary\" button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"magic_1.php?val=5".($current_value+16)."\"'>존재함</button>";
        echo "<button class =\"btn btn-info\" button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"magic_1.php?val=5".($current_value+0)."\"'>존재하지않음</button>";
    }

    function magic_6_page($current_value)
    {   
        $in_count = 0;
        $line_count = 0;
        
        echo "<h2 style=text-align:center >6단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br /></h2>";
        for ($num = 32; $num <50; $num++)
        {
            if($in_count == 32)
            {
                $num += 32;
                $in_count =0;
            }
            
            echo $num,"&nbsp &nbsp &nbsp &nbsp;";
            $in_count++;

            if($line_count != 0 && $line_count%5 == 0)
            {
                echo "<p style=text-align:center><br />";
            }
            $line_count++;
        }
        echo "<br /><br />";
        echo "<button  class =\"btn btn-secondary\" id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"magic_1.php?val=6".($current_value+32)."\"'>존재함</button>";
        echo "<button class =\"btn btn-info\" id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"magic_1.php?val=6".($current_value+0)."\"'>존재하지않음</button>";
    }
    function result_page($input_value)
    {
        echo "<h2 style=text-align:center >당신이 생각한 숫자는", $input_value,"입니다</h2>";
        echo "<br />";
        
    }
?>

</body>
</html>

