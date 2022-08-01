<?php
error_reporting(0)
?>
<html>

<head>

  <style>
    .warning {
      color: red;
    }
  </style>
  <title>Login</title>
</head>

<body>
  <form action="LoginCheck.php" method="POST" onsubmit="return validateForm()" enctype="">
    <fieldset>
      <legend>LOGIN</legend>
      Email : <br />
      <input id="email" type=" email" name="email" value="" /> <br />

      <p class="warning" id="emailV"></p>

      Password : <br />
      <input id="password" type="password" name="password" value="" /> <br />
      <p class="warning" id="passV"></p>
      <input type="submit" name="submit" value="LogIn" />
      <a href="Registration.php">Register </a>
    </fieldset>
  </form>


  <script>
    const warning = "This filled is required";

    function validateForm() {
      //console.log("found");





      const email = document.getElementById("emailV");

      const pass = document.getElementById("passV");

      const emailBox = document.getElementById("email");

      const passBox = document.getElementById("password");

      if (emailBox.value == "" && passBox.value == "") {

        email.innerText = warning;

        setTimeout(function() {
          email.innerText = '';
        }, 2000);

        pass.innerText = warning;

        setTimeout(function() {
          pass.innerText = '';
        }, 2000);

        //alert("here");

        return false;

      }

      if (emailBox.value == "") {
        email.innerText = "please enter a Valid Email Address";

        setTimeout(function() {
          email.innerText = '';
        }, 2400);

        return false;
      }

      if (passBox.value == "") {
        pass.innerText = "please enter a valid password";

        setTimeout(function() {
          pass.innerText = '';
        }, 2400);

        return false;
      }
      console.log(here);
      return true;

    }
  </script>
</body>

</html>