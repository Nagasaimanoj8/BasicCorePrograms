 <?php
 echo "Enter Today`s Day \n" ;
$day=readline("");
switch ($day){
    case "Monday":
        echo "You Have 5 days more to work";
        break;
    case "Tuesday":
        echo "You Have 4 days more to work";
        break;
    case "Wednesday":
        echo"You Have 3 more days to do work";
        break;
    case "Thrusday":
        echo"You Have 2 days to do work";
        break;
    case "Friday":
        echo"Today is Your Last Day Of this week 
            MAke a Trip";
            break;
    case "Saturday":
        echo"Enjoy Your Weekend";
        break;
    case "Sunday":
        echo"Last Day Of Your WeekEnd 
            Have To Go Work From Tommorow";
        break;
     default:
        echo"Enter The Correct WeekName";
}
?>
