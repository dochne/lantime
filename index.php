<?php
$isLan = false;
$lanDates = [
    [new DateTime("26-08-2016 16:00"),  new DateTime("29-08-2016 12:00")] // i58
];

$now = new DateTime();

foreach ($lanDates as $dates) {
    if ($dates[0] < $now && $now < $dates[1]) {
        $isLan = true;
        break;
    }
}

$string = ($isLan ? "Yes!" : "No.");

?>
<html>
<head>
<style type="text/css">
body {
#background-color: #000;
#color: #fff;
font-family:arial,helvetica;
font-size:5em;
text-align: center;
}
#main {
margin: 0px auto;
margin-top: 150px;
width: 350px;
text-align:center;
}
</style>
<title>Is it LAN Time?</title>
</head>
<body>
<div id="main">
<?= $string ?>
</div>
</body>
</html>
