<?php

require("db.php");

$course = $_POST['course'];
$name = $_POST['name'];
$date = $_POST['date'];
$age=$_POST['age'];
$gender = $_POST['gender'];
$blood = $_POST['blood'];
$comm = $_POST['comm'];
$reli = $_POST['reli'];
$caste = $_POST['caste'];
$nation = $_POST['nation'];
$state = $_POST['state'];
$mari = $_POST['mari'];
$aadhar = $_POST['aadhar'];
$language = $_POST['language'];
$lang = $_POST['lang'];
$add = $_POST['add'];
$city = $_POST['city'];
$pin = $_POST['pin'];
$email = $_POST['email'];
$school = $_POST['school'];
$year = $_POST['year'];
$late = $_POST['late'];
$fname = $_POST['fname'];
$occupation =$_POST['Occupation'];
$income = $_POST['income'];
$mobile = $_POST['mobile'];
$fmail = $_POST['fmail'];
$mname = $_POST['mname'];
$mocc = $_POST['mocc'];
$mincome = $_POST['mincome'];
$gname = $_POST['gname'];
$gocc = $_POST['gocc'];
$gnumber = $_POST['gnumber'];
$gincome = $_POST['gincome'];
$sql = "INSERT INTO form (course, name, date, gender, blood,age, comm, reli, caste, nation, state, mari, aadhar, language, lang, address, city, pin, email, school, year, late, fname, occupation, income, mobile, fmail, mname, mocc, mincome, gname, gocc, gnumber, gincome)
        VALUES ('$course', '$name', '$date', '$gender', '$blood', '$age','$comm', '$reli', '$caste', '$nation', '$state', '$mari', '$aadhar', '$language', '$lang', '$add', '$city', '$pin', '$email', '$school', '$year', '$late', '$fname', '$occupation', '$income', '$mobile', '$fmail', '$mname', '$mocc', '$mincome', '$gname', '$gocc', '$gnumber', '$gincome')";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully<br><br>";
} else {
    echo "Failed to insert data<br><br>";
}
echo "<br>";
echo "<br>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fileColumns = array(
      'file',
      'marks',
      'mark',
      'dc',
      'incomecertificate',
      'god',
      'service',
      'sports',
      'sig'
    );
    foreach ($fileColumns as $column) {
      if (isset($_FILES[$column]) && $_FILES[$column]['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES[$column];        
        $filename = $file['name'];
        $filetmp = $file['tmp_name'];
        $filesize = $file['size'];
        $destination = 'uploads/' . $filename;
        move_uploaded_file($filetmp, $destination);  
        $filesql = "UPDATE form SET $column = '$filename'";
        if ($conn->query($filesql) === TRUE) {
          echo "File '$column' uploaded successfully<br>";
        } else {
          echo "Failed to upload file '$column'<br>";
        }
      }
    }
  }
  header("Location: index.html");
exit;   
mysqli_close($conn);
?>
