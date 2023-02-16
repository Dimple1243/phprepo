<?php
 if (isset($_POST["submit"])){
    $username=$_POST["username"];
    $email = $_POST ["email"];  
    $to = "dimplekumari20@navgurukul.org";
    $subject = "mail confirmation";
    $txt = "!!!congrats your travel form is submited succesfully!!!";
    $headers = "From: $email" . "\r\n" .
    "CC: somebodyelse@example.com";
    $phone=$_POST["phone"];
    $country=$_POST["country"];
    $dateofbirth=$_POST["dob"];
    $dateofleavingindia=$_POST["dol"];
    $dateofReachingindia=$_POST["dor"];
    $passport=$_POST["passport"];
    $ifyes=$_POST["radio"];
    $Diease=$_POST["Details"];
    $NomineeName=$_POST["NomineeName"];
    $reNomineeName=$_POST["RelationNominee"];
    $EmergencyCon=$_POST["contact"];
    $Emergencydet=$_POST["Edetails"];
    

    mail($to,$subject,$txt,$headers);




    if(!empty($username) && !empty($email)&&!empty($phone) && !empty($country) && !empty($dateofbirth) && !empty($dateofleavingindia) && !empty($dateofReachingindia) && !empty($passport) && !empty($ifyes)  ||empty($Diease) && !empty($NomineeName) && !empty($reNomineeName) && !empty($EmergencyCon) && !empty($Emergencydet)){
        $link=mysqli_connect('localhost','root','@Dimple123','login');
        if($link==false){
            die(mysqli_connect_error());
        }
        $sql="INSERT INTO  travel_data(Name_as_per_Passport,Email,too,subjectt,txt,headers,Contact_No,Destination_Country,Date_of_Birth,Date_of_leaving_india,Date_of_Reaching_india,Passport_No,Any_preexisting_Diease,Diease_if_you_have,Nominee_Name,Relationship_with_Nominee_Name,Emergency_Contact_No,Emergency_Contact_Details) VALUES ('$username','$email','$to','$subject','$txt','$headers','$phone','$country','$dateofbirth','$dateofleavingindia','$dateofReachingindia','$passport','$ifyes','$Diease','$NomineeName','$reNomineeName','$EmergencyCon','$Emergencydet')";
        if(mysqli_query($link,$sql)){
            echo "Recorded inserted successfully";
        }
        else{
            echo "Something went wrong";
        }
        }
        else{
            
            echo "Please prove the user details!!!";
        }
}
 
 ?>
     
