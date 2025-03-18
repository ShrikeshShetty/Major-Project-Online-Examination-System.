<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Project Worlds || FEEDBACK</title>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/font.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>


<style>
    body {
        font-family: 'Roboto', sans-serif;
    }
    .header {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        background-color: #1c374f;
        
        border-bottom: 1px solid #ddd;
    }
    .main-element{
        display: flex;
        justify-content: space-around;
        padding: 10px;
        background-color: #1c374f;
        border-bottom: 1px solid #ddd;
        
    }
    .logo {
      width: 40%;
        font-size: 24px;
        font-weight: bold;
    }
    /* .header a {
        text-decoration: none;
        color: #333;
        padding: 8px 15px;
        border-radius: 3px;
        height:50px;
        width:60px;
    } */
    button{
      height:50px;
      width:90px;
      background-color:#1c374f;
      border:1px solid white;
      color:white;
    }
    .button:hover, .button1:hover {
        background-color: #0b151d;
    }
    .bg1 {
        background-image: url('image/bg1.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
}
    .panel {
        margin: 0 auto;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 5px;
    }
    .footer {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        background-color: #f8f8f8;
        border-top: 1px solid #ddd;
    }
    .footer a {
        text-decoration: none;
        color: #333;
    }
    .modal-content {
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border-radius: 3px;
        border: 1px solid #ddd;
    }
    .btn {
        padding: 10px 15px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .btn-default {
        background-color: #f8f8f8;
        color: #333;
        border: 1px solid #ddd;
    }
    .btn-default:hover {
        background-color: #e7e7e7;
    }
</style>

</head>

<body>

<!--header start-->
<div class="header">
    <div class="logo">Test Your Skill</div>
    <div class="main-element">
    <a href="account.php?q=1"> <button class="button">Back </button></a>
  </div>
</div>
<!--header end-->

<!--sign in modal start-->

<!--sign in modal end-->

<div class="bg1">
    <div class="panel">
        <h2 align="center">FEEDBACK/REPORT A PROBLEM</h2>
        <div style="font-size:14px">
            <?php if(@$_GET['q']) {
                echo '<span style="font-size:18px;">'.@$_GET['q'].'</span>';
            } else {
                echo' 
                You can send us your feedback through e-mail on the following e-mail id:<br />
                <a href="mailto:shrikeshshetty1234@gmail.com">shrikeshshetty1234@gmail.com</a><br /><br />
                <p>Or you can directly submit your feedback by filling the entries below:</p>
                <form method="post" action="feed.php?q=feedback.php">
                    <label><b>Name:</b></label>
                    <input id="name" name="name" placeholder="Enter your name" class="form-control" type="text">
                    
                    <label><b>Subject:</b></label>
                    <input id="subject" name="subject" placeholder="Enter subject" class="form-control" type="text">
                    
                    <label><b>E-Mail address:</b></label>
                    <input id="email" name="email" placeholder="Enter your email-id" class="form-control" type="email">
                    
                    <label><b>Feedback:</b></label>
                    <textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..."></textarea>
                    
                    <div align="center">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>';
            } ?>
        </div>
    </div>
</div>

<!--Footer start-->


</body>
</html>
