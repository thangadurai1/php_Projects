<!DOCTYPE HTML>
<html>
<head>
      <title>form_validation</title>
      <style>
            .class
            {
                 color:orangered;
            }
      </style>

</head>

<body>
      <h1>Form validation</h1>
      <br><br>
      <p><span class="error">* field required</span></p>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            Name:<input type="text" name="name" required>
            <span class="error">*<?php echo $name_err ;?>
            <br><br>
            E-mail:<input type="text" name="email" reuired>
            <span class="error">*<?php echo $email_err ;?>
            <br><br>
            Website:<input type="text" name="website">
            <br><br>
            Comments<textarea name="comments" rows="5" cols="50"></textarea>
            <br><br>
            Gender:
            <input type="radio" name="gender" value="male">male
            <input type="radio" name="gender" value="female">female
            <input type="radio" name="gender" value="others">others
            <span class="error">*<?php echo $gender_err;?>
            <br><br>
            <input type="submit" value="submit">
      </form>

      <?php
      $name = $email = $website = $comments = $gender ="";
      $name_err = $email_err = $website_err = $comments_err = $gender_err ="";
       if($_SERVER['REQUEST_METHOD']=='POST')
       {
           if(empty($_POST['name']))
           {
                $name_err = "Name is required";
           }
           else
           {
               $name=myFunction($_POST['name']);
           }
           if(empty($_POST['email']))
           {
                 $email_err = "Email is required";
           }
           else
           {
                 $email = myFunction($_POST['email']);
           }
           if(empty($_POST['website']))
           {
                 $website_err = "";
           }
           else
           {
                 $website=myFunction($_POST['website']);
           }
           if(empty($_POST['comments']))
           {
                 $comments_err = "";
           }
           else
           {
                 $comments=myFunction($_POST['comments']);
           }
           if(empty($_POST['gender']))
           {
                 $gender_err = "Gender is required";
           }
           else
           {
                 $gender=myFunction($_POST['gender']);
           }
           
       }
       function myFunction($data)
       {
             $data = htmlspecialchars($data);
             $data = stripslashes($data);
             $data = trim($data);
             return $data;
       }
        
       echo "<h2>your input is: </h2>";
       echo $name;
       echo "<br>";
       echo $email;
       echo "<br>";
       echo $website;
       echo "<br>";
       echo $comments;
       echo "<br>";
       echo $gender;
       echo "<br>";
      ?>
</body>

</html>