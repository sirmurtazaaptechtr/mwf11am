<?php
echo "<p>" . date_default_timezone_get() . "</p>";
echo "Date : " . date("d/m/Y h:i:sa");

date_default_timezone_set("Asia/Karachi");
echo "<p>" . date_default_timezone_get() . "</p>";
echo "Date : " . date("d/m/Y h:i:sa");

$rizwan_dob = date("d/m/Y h:i:sa",strtotime("10-Mar-1981"));
echo "<p>$rizwan_dob</p>";

$rizwan_dob = date("d/m/Y h:i:sa",mktime(18,20,15,3,10,1981));
echo "<p>$rizwan_dob</p>";