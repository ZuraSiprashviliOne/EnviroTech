<?php 


function insert($FirstName, $Country, $Email, $Phone ){
      
$servername = "localhost";
$username = "shuxto_tbilisi";
$password = "rame2010";
$dbname = "shuxto_tbilisi"; 

function generateRandomString($length = 20  ) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzGIO';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $conn->beginTransaction();

    //$aff = generateRandomString();
    
    // our SQL statements
    $stmt = $conn->prepare("INSERT INTO leads (FirstName,Country,Email,Phone) VALUES (?,  ?, ?, ?)");
    $stmt->bindParam(1, $FirstName);
    $stmt->bindParam(3, $Country);
    $stmt->bindParam(4, $Email);
    $stmt->bindParam(5, $Phone);
 
    $stmt->execute();

    // commit the transaction
    $conn->commit();
    //echo '<script language="javascript">';
    // echo 'window.location = "http://georgiainvesting.com/lp/georgiainvesting/"';
    //echo '</script>'; 
    }
catch(PDOException $e)
    {
    // roll back the transaction if something failed
    
    echo "Error: " . $e->getMessage();
    }

$conn = null;


return true;




}

      
    $FirstName= $_POST['FirstName'];
    $Country= $_POST['Country'];
    $Email= $_POST['Email'];
    $Phone= $_POST['Phone'];


       if(insert($FirstName, $Country, $Email, $Phone)){ // check if sms is sent
          $data = 'ok';
          echo json_encode($data); //retunr json object
       }else{
          $data = 'exists';
          echo json_encode($data);//retunr json object
       }
?>