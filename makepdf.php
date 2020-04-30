<?php
require_once __DIR__.'/vendor/autoload.php';


$fname=$_POST['fname'];
$flnamename=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];


$mpdf = new \Mpdf\Mpdf();

//Create PDF
$data = '';

$data.='<h1>Your Details</h1>';

//Add Data

$data.='<strong>First Name</strong>'.$fname.'<br>';
$data.='<strong>Last Name</strong>'.$fname.'<br>';
$data.='<strong>Email</strong>'.$fname.'<br>';
$data.='<strong>Phone</strong>'.$fname.'<br>';

if($message)
{
    $data.='<br><strong>Message</strong><br>'.$message;
}

//Write PDF
$mpdf->WriteHTML($data);


//Output
$mpdf->Output('myfile.pdf','D'); 
?>