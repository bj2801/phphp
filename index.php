<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0,user-scalable=1">
<title> Genebert Shipping LTD. Company</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
    if(!empty($_POST["send"])){
        $Firstname = $_POST["FirstName"];   
        $LastName = $_POST["LastName"];   
        $userEmail = $_POST["userEmail"];     
        $userPhone = $_POST["userPhone"];   
        $job_role = $_POST["job_role"]; 
        $address = $_POST["address"];     
        $date = $_POST["date"];
        $toEmail = "manalaska08@gmail.com";   


        $mailHeaders = "Name: " . $userName .
        "\r\n Email: " . $userEmail . 
        "\r\n Phone: " . $userPhone . 
        "\r\n address: " . $address .  "\r\n";

        if(mail($toEmail, $userName, $mailHeaders)){

            $message = "Your Information is Received Successfully.";

        }





    }





?>


    <div class="form-container">
        <form method="post" name="emailContact">
            <div class="input-row">
            <label>First Name <em>*</em></label>    
            <input type="text" name="FirstName" required>
            </div>
            <div class="input-row">
                <label>Last Name <em>*</em></label>    
                <input type="text" name="LastName" required>
                </div>
                <div class="input-row">
                    <label>Email <em>*</em></label>    
                    <input type="text" name="userEmail" required>
                    </div>
                    <div class="input-row">
                        <label for="job_role"> Job Role </label>
                    <select id="job_role" name="Job Role">
                     <option value="">Select Job Role</option>
                     <option value="Seaman">Seaman</option>
                    </select>
                    </div>
                    <div class="input-row">
                        <label>Phone <em>*</em></label>    
                        <input type="tel" name="userPhone" required>
                        </div>
                        <div class="input-row">
                            <label for="address"> Address </label>
              <textarea
                id="address"
                name="address"
                row="2"
                cols="45"
                placeholder="Enter Address"
              ></textarea>    
                </div>
                <div class="input-row">
                <label for="pincode"> Postal Code </label>
              <input
                type="number"
                id="pincode"
                name="Zip code"
                placeholder="Enter Postal Code Name...">
                <div class="input-row">
                <label for="date"> Date </label>
              <input value="2022-01-10" type="date" id="date" name="date" />
            </div>
            <div class="input-row">
            <input type="submit" name="send" value="Submit">
            <?php if(!empty($message)){ ?>
                    <div class="success">
                <strong><?php echo $message; ?></strong>
            
        </div>
                        </form>
                <?php } ?>





    </div>












</html>