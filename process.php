<?php
$connection1 = mysqli_connect("localhost", "root", "","oams") ;
$connection2 = mysqli_connect("localhost", "root", "","quiz");

$query = mysqli_query($connection1,"SELECT ad.app_id FROM `applicant_details` as ad join applied_session as ass on ad.app_id=ass.app_id join applicant_choices as ap ON ap.app_id=ad.app_id WHERE ad.is_submitted=1 and ad.app_id not in (select app_id from lab_candidate) and (ass.program='Bachelor' or ass.program='Undergraduate')");

while($row=mysqli_fetch_array($query))
{
    $query2 = mysqli_query($connection2,"SELECT * FROM users where form_id=".$row["app_id"]) or die(mysqli_error($connection1));
    $row2=mysqli_fetch_array($query2);
    $insertquery = mysqli_query($connection2,"insert into std_test(std_id,test_id) values(".$row2["user_id"].",4)") or die(mysqli_error($connection2));
}
echo "done";

?>