<?php
    
    $array = array("firstname" => "", "name" => "", "phone" => "", "email" => "", "phone" => "", "subject" => "", "message" => "", "firstnameError" => "", "nameError" => "", "phoneError" => "", "emailError" => "", "phoneError" => "", "subjectError" => "", "messageError" => "", "isSuccess" => false);   

    $emailTo = "cyril@0001.fr";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $array["firstname"] = verifyInput($_POST["firstname"]);
        $array["name"] = verifyInput($_POST["name"]);
        $array["email"] = verifyInput($_POST["email"]);
        $array["phone"] = verifyInput($_POST["phone"]);
        $array["subject"] = verifyInput($_POST["subject"]);
        $array["message"] = verifyInput($_POST["message"]);
        $array["isSuccess"] = true;
        $emailText = "";
        
        if(empty($array["firstname"]))
        {
            $array["firstnameError"] = "Veuillez indiquer votre prénom.";
            $array["isSuccess"] = false;
        }
        else
        {
            $emailText .= "Fistname: {$array["firstname"]}\n";
        }
            
        if(empty($array["name"]))
        {
            $array["nameError"] = "Veuillez indiquer votre nom.";
            $array["isSuccess"] = false;
        }
        else
        {
            $emailText .= "Name: {$array["name"]}\n";
        }
            
        if(!isEmail($array["email"]))
        {
            $array["emailError"] = "Nous avons besoin de votre adresse mail.";
            $array["isSuccess"] = false;
        }
        else
        {
            $emailText .= "Email:{$array["email"]}\n";
        }
        
        if(!isPhone($array["phone"]))
        {
            $array["phoneError"] =" Veuillez entrer que des chiffres.";
            $array["isSuccess"] = false;
        }
        else
        {
            $emailText .= "Phone: {$array["phone"]}\n";
        }
        
        if(empty($array["subject"]))
        {
            $array["subjectError"] = "Veuillez choisir le sujet de votre message.";
            $array["isSuccess"] = false;
        }
        else
        {
            $emailText .= "Message: {$array["message"]}\n";
        }
        
        if(empty($array["message"]))
        {
            $array["messageError"] = "Veuillez entrer votre message.";
            $array["isSuccess"] = false;
        }
        else
        {
            $emailText .= "Message: {$array["message"]}\n";
        }
        
        if($array["isSuccess"])
        {
            $headers ="From: {$array["firstname"]} {$array["name"]} <{$array["email"]}>\r\nReply-To: {$array["email"]}";
            mail($emailTo, $array["subject"], $emailText, $headers);
        }
        
        echo json_encode($array);
        
    }
    
    function isPhone($var)
    {
        return preg_match("/^[0-9 ]*$/",$var);
    }

    function isEmail($var)
    {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }
    
    function verifyInput($var)
    {
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }

?>