<?php echo "Exercise 1 starts here:";

function new_exercise()
{
    $x = "1";
     $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}
new_exercise()
?>


<?php 
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;
?>
<br>
<hr>
<?php 
$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);
?>
<br>
<br>
<hr>
<?php
foreach($week as &$day)
{
    $day = substr($day, 0, -3);
}
print_r($week);
?>
<br>
<br>
<hr>

<?php

function copyright(int $year)
{
    return "Copyright &copy; $year BeCode";
}
//print the copyright
echo copyright(date('Y'));