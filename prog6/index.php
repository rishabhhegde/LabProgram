<html>
<head>
    <title>Prog 6</title>
    <style>
        h1,h2{
            text-align: center;
        }
    </style>
</head>
<body>
 <h1>Number of visited who visited your webpage</h1>
  <?php
    $handle=fopen("count.txt","r");
    $count=fread($handle,10);
    fclose($handle);
    $count=intval($count);
    date_default_timezone_set("Asia/Kolkata");
    $curTime=date("H");
    if($curTime>=9 && $curTime<17)
        $count+=1;
    echo "<h2>Number of times the website was visited $count</h2>";
    $handle=fopen("count.txt","w");
    fwrite($handle,$count);
    fclose($handle);
  ?>
</body>
</html>



