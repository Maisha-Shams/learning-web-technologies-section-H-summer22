<html>
  <head>
    <title>Registration</title>
  </head>
  <body>
    <form action="RegCheck.php" method="post">
      <fieldset>
        <legend>REGISTRATION</legend>

        <table border="1">
          <tr>
            <td>Name:</td>
            <td><input type="text" name="" id="name" value="" /></td>
          </tr>
           <tr>
            <td>Password:</td>
            <td><input type="password" id="pass" name="" value="" /></td>
          </tr>
          <tr>
            <td>Confirm Password:</td>
            <td><input type="password" name="cPassword" value="" /></td>
          </tr>
          <!--
          <tr>
              <td>E-mail:</td>
              <td><input type="email" name="email" value="" /></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="number" name="phnNum" value="" /></td>
            </tr>
            <tr>
                <td>NID:</td>
                <td><input type="nid" name="nid" value="" /></td>
            </tr>
            <tr>
              <td>Date of Birth:</td>
              <td><input type="date" name="DOB" value="" /></td>
            </tr>
            <tr>
            <td>Gender:</td>
            <td>
              <input type="radio" name="gender" value="Male" /> Male
              <input type="radio" name="gender" value="Female" /> Female
              <input type="radio" name="gender" value="Other" /> Other
            </td>
          </tr>
          <tr>
            <td>Marital Status:</td>
            <td>
              <input type="radio" name="status" value="Married" /> Married
              <input type="radio" name="status" value="Single" /> Single
              <input type="radio" name="status" value="Other" /> Other
            </td>
          </tr>
          <tr>
            <td>Blood Group:</td>
            <td>
              <select name="bGroup">
                <option value="A+">A+ (A positive)</option>
                <option value="A−">A− (A negative)</option>
                <option value="B+">B+ (B positive)</option>
                <option value="B−">B− (B negative)</option>
                <option value="AB+">AB+ (AB positive)</option>
                <option value="AB−">AB− (AB negative</option>
                <option value="O+">O+ (O positive)</option>
                <option value="O−">O− (O negative)</option>
              </select>
            </td>
          </tr>
            <td>Religion:</td>
            <td>
              <select name="religion">
                <option value="Islam">Islam</option>
                <option value="Hinduism">Hinduism</option>
                <option value="Buddhism">Buddhism</option>
                <option value="Chirstianity">Chirstianity</option>
                <option value="Others">Others</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Address:</td>
            <td><textarea name="address"></textarea></td>
          </tr> -->

        </table>
      </fieldset>

      <!-- <a href="Login.php"><input type="button" name="" value="Go Back" /></a> -->
      <input type="button" name="" value="Click" onclick="getname()"/>
    

    </form>
        <script>
    function getname(){
                let username = document.getElementById('name').value;
                if(username == ""){
                  alert("Name must be filled out");

                }else{
                    document.getElementsByTagName('td')[0].innerHTML = name;
                }

            }
            function getpass(){
                let password = document.getElementById('pass').value;
                if(password == ""){
                  alert("Name must be filled out");

                }else{
                    document.getElementsByTagName('td')[0].innerHTML = name;
                }

            }
                function getname(){
                let username = document.getElementById('name').value;
                if(username == ""){
                  alert("Name must be filled out");

                }else{
                    document.getElementsByTagName('td')[0].innerHTML = name;
                }

            }
        </script>
  </body>
</html>