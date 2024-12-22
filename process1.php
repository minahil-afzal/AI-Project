<?php
$connection1 = mysqli_connect("localhost", "root", "","oams") ;
$connection2 = mysqli_connect("localhost", "root", "","quiz");

$query = mysqli_query($connection1,"SELECT ad.app_id,ad.full_name,ad.father_name,ad.cnic, ad.email, ad.password, ad.mobile,aps.program,aps.campus FROM applicant_details as ad join applied_session as aps ON ad.app_id=aps.app_id WHERE ad.is_submitted=1");

while($row=mysqli_fetch_array($query))
{
    $insertquery = mysqli_query($connection2,"INSERT INTO users(form_id, role_id, name, fname, cnic, email, password, contact, Program, campus) VALUES ('$row[app_id]','1','$row[full_name]', '$row[father_name]','$row[cnic]','$row[email]','$row[password]','$row[mobile]','$row[program]','$row[campus]')") or die(mysqli_error($connection2));
}
echo "done";

?>