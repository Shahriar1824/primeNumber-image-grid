<?php


$number = 2 ;
$num = $_POST['number'];
while ($number < $num )
{
    $div_count=0;
    for ( $i=1;$i<=$number;$i++)
    {
        if (($number%$i)==0)
        {
            $div_count++;
        }
    }
    if ($div_count<3)
    {
        $number;
        /*$random_keys=array_rand($color,1);*/
        $prime[] = $number;
    }
    $number=$number+1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">SRM</a>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-md-12 portfolio">
                <?php foreach ($prime as $text){
                    $color = array('c69','9c6','69c','c96','6c9','96c','a358e8','008080','270d5a','ff9a00','ffa859');
                    $random_keys=array_rand($color,1);
                    $col = $color[$random_keys];
                ?>
                    <a href="#"><img src="http://placehold.it/400x400/<?php echo $col; ?>/fff/?text=<?php echo $text; ?>" alt=""></a>
                <?php } ?>
            </div>
        </div>
    </div>
    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>