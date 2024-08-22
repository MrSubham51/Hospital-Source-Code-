<!DOCTYPE HTML>
<html>
    <head>
        <title>Registration Page</title>
</head>
<body>
    <style type="text/css">
        *{box-sizing:border-box}
        sup{
            color:red;
        }
        .container{
            padding:16px;
        }
        input[input=text],input[type=password],input[type=email],input[type=date], select{
            width:100%;
            padding:15px;
            margin:5px 0 22px 0;
            display:inline-block;
            border:none;
            background:#1f1f1;
        }
        input[input=text];focus, input[type=radio]:focus,
        input[input=password]:focus,input[type=email]:focus,input[type=date]:focus,seect:focus{
            background-color:#ddd;
            outline:none;
        }
        hr{
            border:1px solid #1f1f1;
            margin-bottom:25px;
        }
        .registerbtn{
            background-color:#4CAF50;
            color:white;
            padding:16px 20px;
            margin;8px;
            border: none;
            cursor: pointer;
            width:100%;
            opacity:0.9;
        }
        .registerbtn:hover{
            opacity:1;
        }
        .resetbtn{
            background-color:blue;
            color:white;
            padding:16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width:100%;
            opacity:0.9;
        }
        .resetbtn:hover{
            opacity:1;
        }
        a{
            color:dodgerblue;
        }
        .sigin{
            background-color: #1f1f1;
            text-align:center;
        }
        </style>
        <form action="registerserver.php" method="post" onsubmit="return validation()">
        <div class="container">
            <h1><i>Register</i></h1>
            <p>Please fill this form to<b> register</b></p>
            <hr>
            <label for="name">Name<sup>*</sup></label>
            <input type="text" placeholder="Enter your full name" id="name" reqiured>
            <label for="father_name">Father Name<sup>*</sup></label>
            <input type="text" placeholder="Enter your father name" id="name" reqiured>
            <label for="name">MOther_Name<sup>*</sup></label>
            <input type="text" placeholder="Enter your mother name" id="name" reqiured>

            <label for="gender">Gender<sup>*</sup></label><br><br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="male" reqiured/>Male<br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female" reqiured/>Female<br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="other" reqiured/>Other<br><br>

            <label for="caste">Caste<sup>*</sup></label><br><br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="caste" value="General" reqiured/>General<br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="caste" value="OBC" reqiured/>OBC<br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="caste" value="SC" reqiured/>SC<br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="caste" value="ST" reqiured/>ST<br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="caste" value="others" reqiured/>others<br>
            
            <label for="Age">Age<sup>*</sup></label><br><br>
            <input type="text" placeholder="Enter your Age" name="Age" id="Age" reqiured>
            <label for="Phone_no">Phone_no<sup>*</sup></label><br><br>
            <input type="text" placeholder="Enter your Phone_number" name="Phone_no" id="Phone_no" reqiured>
            <label for="State">State<sup>*</sup></label><br><br>
            <input type="text" placeholder="Enter your State" name="state" id="state" reqiured>
            <label for="Nationality">Nationality<sup>*</sup></label><br><br>
            <input type="text" placeholder="Enter your Nationality" name="Nationality" id="Nationality" reqiured>
            <label for="Pincode">Pincode<sup>*</sup></label><br><br>
            <input type="text" placeholder="Enter your Pincode" name="Pincode" id="Pincode" reqiured>







