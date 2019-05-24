<?php 
if (!isset($_COOKIE["numOfVisits"])) {
               $_COOKIE["numOfVisits"]  =  0;
}

$count         = $_COOKIE["numOfVisits"]+1;
setcookie("numOfVisits", $count, time()+3600*24*365);
setcookie("timeVisited", time(), time() + 3600*24*365);

if (isset($_COOKIE["numOfVisits"])) {
	  $last    = date("D F d G:i:s e Y ", $_COOKIE['timeVisited']);
      echo "This is the $count times that you are visiting my webpage <br /> Welcome back to my website! Your last visited was recorded on ".$last;
}
else {
      echo "<strong> Welcome to my webpage! It is your first time that you are here </strong>";

}

?>
