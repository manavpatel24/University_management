<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "university_management_system";

   $con = mysqli_connect($host, $username, $password, $dbname);

   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    // getting all values from the HTML form
    $academicinfo = array(
        $name = $_POST['name'],
        $fathers_name = $_POST['fathers_name'],
        $age = $_POST['age'],
        $dob = $_POST['dob'],
        $address = $_POST['address'],
        $email = $_POST['email'],
        $class_x = $_POST['class_x'],
        $class_xii = $_POST['class_xii'],
        $adhar_no = $_POST['aadhar_no'],
        $rollno = $_POST['rollno'],
        $course = $_POST['course'],
        $branch = $_POST['branch']
    );

    // using sql to create a data entry query
    $sql_academic = "INSERT INTO student (name,fathers_name,age,dob,address,email,class_x,class_xii,aadhar_no,rollno,course,branch  VALUES ('" .$academicinfo['name'] . "', '" .$academicinfo['fathers_name'] . "', '" .$academicinfo['age'] . "', '" .$academicinfo['dob'] . "', '" .$academicinfo['address'] . "', '" .$academicinfo['email'] . "', '" .$academicinfo['class_X'] . "', '" .$academicinfo['class_Xii'] . "', '" .$academicinfo['adhar_no'] . "', '" .$academicinfo['rollno'] . "', '" .$academicinfo['course'] . "', '" .$academicinfo['branch'] . "')";

  
    if ($conn->query($sql_academic) === TRUE) {
        echo "Academic information stored successfully<br>";
    } else {
        echo "Error: " . $sql_academic . "<br>" . $conn->error;
    }
  
    // close connection
$conn->close();
?>