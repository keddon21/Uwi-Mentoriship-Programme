<!DOCTYPE html>
<html>
    
<!--    head    -->
<head>
     <!--Styles-->
    <link rel = "stylesheet" type = "text/css" href = "../Styles.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    <!--Meta Data-->
    <meta charset = "utf-8">
    
</head>
    
<!--    body    -->
<body>
    <?php
        $id = $_POST["Id"];
        $title =  $_POST["title"];
        $username = $_POST["username"];
        $age = $_POST["age"];
        $dob = $_POST["Birthday"];
        $number =$_POST["Number"];
        $email =$_POST["Email"];
        $major = $_POST["Major"];
        $faculty = $_POST["Faculty"];
        $saddress =$_POST["SAddress"];
        $cInterest = $_POST["CInterest"];
        $plans = $_POST["Plans"];
        $programme = $_POST["Programme"];
    
    
       
    
        //Fetch sql and create database or tables if they don't already exist
        //Database Info
       // $host = getenv('IP');
        $username = getenv('C9_USER');
        $password = '';
        $dbname = 'schema';

       
        
        
        try {
                $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->exec($sql);
                
                }
        catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
                }
                          
                
        //Insert Data
        try {
                    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                    
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "INSERT INTO Mentee (id, title, username,age, dob, number, major, faculty, saddress, cInterest, plans, programme )
                    VALUES ($id, $title, $username,$age, $dob, $number, $major, $faculty, $saddress, $cInterest, plans, programme)";
                    
                    $conn->exec($sql);
                    echo "Saved successfully";
                    
                }
        catch(PDOException $e)
                {
                echo $sql . "<br>" . $e->getMessage();
                }
    
        
    ?>

    
</body>
    
    
</html>