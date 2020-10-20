<html>
<head>
    <title>Prog 6</title>
</head>
<body>
 <h1>Number of visited who visited your webpage</h1>
  <?php
    $handle=fopen("count.txt","r");
    $count=fread($handle,10);
    fclose($handle);
    $count=intval($count);
    $count+=1;
    echo "<h2>Number of times the website was visited $count</h2>";
    $handle=fopen("count.txt","w");
    fwrite($handle,$count);
    fclose($handle);
  ?>
</body>
</html>



