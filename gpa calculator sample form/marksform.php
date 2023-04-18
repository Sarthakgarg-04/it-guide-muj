<?php
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="database123";
    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    if(!$conn)
    {die("Connection Failed:" . mysqli_connect_error());}

    if(isset($_POST['save'])){	
        $name = $_POST['name1'];
        $regno = $_POST['regno'];
        $email = $_POST['email'];
        $branch = $_POST['branch'];
        $semester = $_POST['semester'];
        $webtechmarks = $_POST['webtechmarks'];
        $webtechlab = $_POST['webtechlab'];
        $os = $_POST['os'];
        $oslab = $_POST['oslab'];
        $rdbms = $_POST['rdbms1'];
        $rdbmslab = $_POST['rdbmslab'];
        $em4 = $_POST['em4'];
        $veg = $_POST['veg'];

        // move_uploaded_file($fileuptemp,"./uploads/$fileup");

        $sql_query = "INSERT INTO `entry_details` (name1,regno,email,branch,semester,webtechmarks,webtechlab,os,oslab,rdbms1,rdbmslab,em4,veg)
        VALUES ('$name','$regno','$email','$branch','$semester','$webtechmarks','$webtechlab','$os','$oslab','$rdbms','$rdbmslab','$em4','$veg')";

        if (mysqli_query($conn, $sql_query)) {

            echo"
            <script>alert('New Details Entry inserted successfully !, The calculated results will be notified via email'); </script>";
        } 
        else{
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

?>

<!DOCTYPE html>
<html lang="en">
<div class="page">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="marksform.css">
    
    <title>Sample Form RDBMS Project (GPA Calculator)</title>
</head>
<body>
<!-- <script type="text/javascript" src="formvalidation.js"></script> -->
    <h2 class="header"> Sample Form for GPA Calculator (RDBMS Project - Semester 4)</h2>
    <form method="post" class="submission" action="" >
    <!-- method="post" method="get" -->
        <!-- browsers cannot render post request, they can render get requests obly, for post requests we need a server where we eill be storing the information -->
        <div class="name"> 
           <label for="name"> Name: <input name="name1" placeholder="John Doe"  id="name" required></label>
        </div>     
        <br>
        <div class="Regno">
            <label for="Regno:">Regno: <input type="number" name="regno" value="21930" id="Regno:" required></label>
        </div>    
        <br>
        <div>
            <label for="email"> Email id: <input name="email" type="email" id="email" placeholder="someone@example.com" required></label>
        </div>
        <br>
        <div>
            <label for="branch">Branch:
            <!-- <input name="branch" required>     -->
            <select name="branch" required>
                <option>IT</option>
                <option>CSE</option>
                <option>CSE IOT </option>
                <option>CSE AIML</option>
            </select>    
        </div>
        <br>
        <div>
            <label for="semester">Semester 4<input name="semester" type="checkbox" required ></label>
        </div>
        <br>
        <div>
            <label for="webtechmarks">Webtech Marks: <input name="webtechmarks" type="number" id="Webtechmarks" id="Webtechmarks" max="100" min="0"> </label>
        </div>
        <br>
        <div>
            <label for="webtechlab">Webtech Lab Marks: <input name="webtechlab" type="number" id="Webtechlab" id="Webtechlab" max="100" min="0"> </label>
        </div>
        <br>
        <div>
            <label for="os">OS Marks: <input name="os" type="number" id="os" id="os" max="100" min="0"> </label>
        </div>
        <br>
        <div>
            <label for="oslab">OS Lab Marks: <input name="oslab" type="number" id="oslab" id="oslab" max="100" min="0"> </label>
        </div>
        <br>
        <div>
            <label for="RDBMS">RDBMS Marks: <input name="rdbms1" type="number" id="RDBMS" id="RDBMS" max="100" min="0"> </label>
        </div>
        <br>
        <div>
            <label for="RDBMSlab">RDBMS Lab Marks: <input name="rdbmslab" type="number" id="RDBMSlab" id="RDBMSlab" max="100" min="0"> </label>
        </div>
        <br>
        <div>
            <label for="EM4">ENGG. MATHS4 Marks: <input name="em4" type="number" id="EM4" id="EM4" max="100" min="0"> </label>
        </div>

        <!-- <br>
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf5Mjm9XJ3MLhYyk00hUQPKNljSYKQ7KeSW_61DzXXfxuYdkg/viewform?embedded=true" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        <br>     -->

        <br>
        <div>
            <label for="valethics">Val Ethics and Gov. Marks: <input name="veg" type="number" id="valethics" id="valethics" max="100" min="0"> </label>
        </div>
        <button type="reset" id="resetbtn">Reset</button>
        <button type="submit" id="submitbtn" name="save">Submit Now </button>
    </form>
    <div class="disclaimer-border">
        <div class="disclaimer" >
            <!-- <h3>
                The form does not store any actual information and this webpage is a dummy webpage to check the usage of action attribute of the &ltform&gt &lt/form&gt tag in html <br> Developed by Sarthak Garg - 219302116
            </h3> -->
            <h3>Your data has been stored and the calculated results will be released via email</h3>
        </div>
    </div>
</body>
</div>
</html>
