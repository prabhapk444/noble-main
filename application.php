<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admisssion form</title>  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    
      @keyframes shadowAnimation {
      0% { text-shadow: 0px 0px 0px rgba(255, 0, 0, 1); }
      50% { text-shadow: 0px 0px 10px rgba(255, 0, 0, 1); }
      100% { text-shadow: 2px 2px 2px rgba(255, 0, 0, 1); }
    }
    .shadow-text{
        text-align:center;
        color:black ;
        font-family: Arial, sans-serif;
        font-weight: bold;
        font-size: 36px; 
        animation: shadowAnimation 5s infinite;

    }
    @keyframes slideIn {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(0); }
    }
    .slide-text{
        text-align:center;
        color: #00008B;
        font-family: Arial, sans-serif;
        font-weight: bold;
        font-size: 26px; 
        animation: slideIn 3s;
    }
    .slide-text{
        text-align:center;
        color: #00008B;
        font-family: Arial, sans-serif;
        font-weight: bold;
        font-size: 26px; 
        animation: slideIn 3s;
    }
    .slide-text{
        text-align:center;
        color: #00008B;
        font-family: Arial, sans-serif;
        font-weight: bold;
        font-size: 26px; 
    }

      p {
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  color: #333333;
  margin-bottom: 20px;
  font-weight:bold;
}

@keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }
.fade-in-text{
          animation: fadeIn 4s;
          text-align:center;
          color: #00008B;
          font-family: Arial, sans-serif;
          font-weight: bold;
          font-size: 26px; 
}
    
  </style>
</head>
<body>
  
<div class="card">
  <legend class="shadow-text"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Admission Form</legend>
  <div class="card-header  text-center  text-xl">
  </div><br><br>
  <legend class="fade-in-text" style="font-weight: bold;;font-family: 'Poppins', sans-serif;"">Information Of The Student</legend>
  <div class="card-body">
  <form class="row g-3"   action="next.php" method="post" enctype="multipart/form-data">
  <div class="card-body">
  <div class="col-md-4">
    <label for="inputCourse" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;"">Select The Course </label>
    <select id="inputCourse" class="form-select" name="course" required>
      <option selected></option>
      <option>BA(Tamil)</option>
      <option>BA(English)</option>
      <option>BA(History)</option>
      <option>BSC(Computer Science)</option>
      <option>BSC(Maths)</option>
      <option>BSC(Chemistry)</option>
      <option>BSC(Physics)</option>
      <option>BCA</option>
      <option>BBA</option>
      <option>B.COM(CA)</option>
      <option>B.com</option>
    </select>
  </div>
  </div>
  <div class="col-md-4">
    <label for="inputname" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Name Of The Candidate</label>
    <input type="text" class="form-control" id="name" name="name" pattern="[^\d]+" title="Please enter a valid name without numbers" required>
  </div>
  <div class="col-md-4">
    <label for="inputbirth" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Data Of Birth</label>
    <input type="date" class="form-control" id="date" name="date" required>
  </div>
  <div class="col-md-4">
    <label for="inputAadhar" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Age</label>
    <input type="number" class="form-control" id="name" name="age" required>
  </div>
  <div class="col-md-4">
    <label for="inputGender" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Gender </label>
    <select id="inputGender" class="form-select" name="gender" required>
    <option selected></option>
      <option>Male</option>
      <option>Female</option>
      <option>Others</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputBlood" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Blood-Group </label>
    <select id="inputBlood" class="form-select"  name="blood"   required>
    <option selected></option>
      <option>A+ve</option>
      <option>A-ve</option>
      <option>B+ve</option>
      <option>B-ve</option>
      <option>O+ve</option>
      <option>O-ve</option>
      <option>AB+ve</option>
      <option>AB-ve</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputCommunity" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Community </label>
    <select id="inputCommunity" class="form-select" name="comm" required>
    <option selected></option>
      <option>FC</option>
      <option>BC/BCC/BCM</option>
      <option>MBC/DNC</option>
      <option>SC/SCA</option>
      <option>ST</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputReligion" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Religion </label>
    <select id="inputReligion" class="form-select"  name="reli"required>
    <option selected></option>
      <option>Hindu</option>
      <option>Christian</option>
      <option>Muslim</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputCaste" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Caste name</label>
    <input type="text" class="form-control" id="name" name="caste" required>
  </div>
  <div class="col-md-4">
    <label for="inputNation" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Nationality</label>
    <input type="text" class="form-control" id="name" name="nation" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">State</label>
    <input type="text" class="form-control" id="name" name="state" required>
  </div>
  <div class="col-md-4">
    <label for="inputmarraige" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Maritial Status </label>
    <select id="inputmarraige" class="form-select" name="mari" required>
    <option selected></option>
      <option>Married</option>
      <option>Single</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputAadhar" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Aadhar Number</label>
    <input type="number" class="form-control" id="name" name="aadhar" required>
  </div>
  <div class="col-md-4">
    <label for="inputMother" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Mother Tongue</label>
    <input type="text" class="form-control" id="name" name="language" placeholder="Ex. Tamil">
  </div>
  <div class="col-md-4">
    <label for="inputLanguage" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Languages Known</label>
    <input type="text" class="form-control" id="name" name="lang" placeholder="Ex. Tamil, English"required>
  </div>
  <div class="col-8">
    <label for="inputAddress" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Residential Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="add" required>
  </div>
  <div class="col-8">
    <label for="inputAddress2" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Correspondance Address</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
  </div>
  <div class="col-md-4">
    <label for="inputCity" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">City</label>
    <input type="text" class="form-control" id="inputCity" name="city" required>
  </div>
  <div class="col-md-4">
    <label for="inputpin" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Pincode</label>
    <input type="text" class="form-control" id="inputZip" name="pin" required>
  </div>
  <div class="col-md-4">
    <label for="inputpin" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Preferred E-Mail ID for College Notification</label>
    <input type="email" class="form-control" id="inputZip"  name="email" required>
  </div><br><br>
  <legend class="slide-text"  style="font-weight: bold;;font-family: serif;;font-family: 'Poppins', sans-serif;"> Academics</legend><br><br>
  <div class="col-md-4">
    <label for="inputschool" class="form-label"  style="font-weight: bold;">Last Studied School/College</label>
    <input type="text" class="form-control" id="name" name="school" placeholder=" Ex.KMHSS School" required>
  </div>
  <div class="col-md-4">
    <label for="inputschool" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Passed Out Year</label>
    <input type="text" class="form-control" id="name" name="year" required>
  </div>
  <div class="col-md-4">
    <label for="inputschool" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">If Late Join , Reason for late Join</label>
    <input type="text" class="form-control" id="name" name="late">
  </div><br><br>
  <legend class="slide-text" style="font-weight: bold;;font-family: serif;;font-family: 'Poppins', sans-serif;"> Family Information</legend>
  <div class="col-md-4">
    <label for="inputFather" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Father Name</label>
    <input type="text" class="form-control" id="name" name="fname" required>
  </div>
  <div class="col-md-4">
    <label for="inputOccup" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Father Occupation</label>
    <input type="text" class="form-control" id="name" name=" Occupation"  placeholder="Accountant" required>
  </div>
  <div class="col-md-4">
    <label for="inputIncome" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Father Annual Income</label>
    <input type="text" class="form-control" id="name" name="income" required>
  </div>
  <div class="col-md-4">
    <label for="inputmobile" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Father Mobile Number</label>
    <input type="number" class="form-control" id="name" name="mobile" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Father Mail ID</label>
    <input type="email" class="form-control" id="name" name="fmail" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Mother Name</label>
    <input type="text" class="form-control" id="name" name="mname" required>
  </div>
  <div class="col-md-4">
    <label for="inputmom" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Mother Occupation</label>
    <input type="text" class="form-control" id="name" name="mocc" placeholder="Accountant">
  </div>
  <div class="col-md-4">
    <label for="inputmomi" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Mother Annual Income</label>
    <input type="text" class="form-control" id="name" name="mincome">
  </div>
  <div class="col-md-4">
    <label for="inputg" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Guardian Name</label>
    <input type="text" class="form-control" id="name" name="gname">
  </div>
  <div class="col-md-4">
    <label for="inputgoc" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Guardian Occupation</label>
    <input type="text" class="form-control" id="name" name="gocc" placeholder="Accountant">
  </div>
  <div class="col-md-4">
    <label for="inputgnum" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Guardian Mobile Number</label>
    <input type="number" class="form-control" id="name" name="gnumber">
  </div>
  <div class="col-md-4">
    <label for="inputginome" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Guardian Annual Income</label>
    <input type="text" class="form-control" id="name" name="gincome">
  </div><br><br>
  <legend class="slide-text" style="font-weight: bold;;font-family: serif;">Attachments</legend>
  <div class="col-md-4">
    <label for="inputPicture" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Student Image</label>
    <input type="file" class="form-control" id="file" name="file" required>
  </div>
  <div class="col-md-4">
    <label for="inputPicture" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">10TH MarkSheet</label>
    <input type="file" class="form-control" id="file" name="marks" required>
  </div>
  <div class="col-md-4">
    <label for="inputPicture" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">12TH MarkSheet</label>
    <input type="file" class="form-control" id="file" name="mark" required>
  </div>
  <div class="col-md-4">
    <label for="inputPicture" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Original Transfer Certificate</label>
    <input type="file" class="form-control" id="file" name="dc" required>
  </div>
  <div class="col-md-4">
    <label for="inputPicture" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Income Certificate</label>
    <input type="file" class="form-control" id="file" name="incomecertificate" required>
  </div>
  <div class="col-md-4">
    <label for="inputPicture" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">If you Physically Challenged ? Certificate</label>
    <input type="file" class="form-control" id="file" name="god" >
  </div>
  <div class="col-md-4">
    <label for="inputPicture" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">If You Ex-Servicemen Daughter? Dependency Certificate</label>
    <input type="file" class="form-control" id="file" name="service" >
  </div>
  <div class="col-md-4">
    <label for="inputPicture" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Distinction in Sports/ NCC/ NSS, Certicate</label>
    <input type="file" class="form-control" id="file" name="sports">
  </div>
  <div class="col-md-4">
    <label for="inputPicture" class="form-label"  style="font-weight: bold;;font-family: 'Poppins', sans-serif;">Student Signature </label>
    <input type="file" class="form-control" id="file" name="sig" required>
  </div>
  <legend class="final"> Declaration</legend>
     <p style="font-weight:bold;;;font-family: 'Poppins', sans-serif;"">I declare that all the particulars furnished above are true and correct and I hereby confirm that I will abide by the rules and registration of the College.</p>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck" >
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit"  class="btn btn-success">Submit</button>
  </div>
</form>
  </div>
</div>
</body>
</html>