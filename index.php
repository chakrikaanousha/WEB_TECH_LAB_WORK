<?php
$a = 50;
$b = 25;
$operation = "div";
$result = null;

if($operation == 'add')
    $result = $a+$b;
elseif($operation == 'sub')
    $result = $a-$b;
elseif($operation == 'multi')
    $result = $a*$b;
else
    $result = $a/$b;
?>


<html>
    <head>
        <body>
            <?php echo $result; ?>
        </body>
    </head>
</html>