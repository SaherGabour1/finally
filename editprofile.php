
<script language"javascript" type ="text/javascript">  window.history.forward(); </script>
<script>


  function onlyNumberKey(evt) {

      // Only ASCII character in that range allowed
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode

      // Check if the inserted charcter is a number in ASCII code
      if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
          return false;
      return true;
  }

  function onlyLettersKey(evt) {

      // Only ASCII character in that range allowed
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode

      // Check if the inserted charcter is a letter in ASCII code
      if ((ASCIICode > 64 && ASCIICode < 91) || (ASCIICode > 96 && ASCIICode < 123))
          return true;
      return false;
  }

</script>

<?php 

  session_start();

  require 'connection.php';
  require 'functions.php';

  if(isset($_POST['update'])) {

    $newfname =clean($_POST['fname']);
    $newlname =clean($_POST['lname']);
    $newphone =clean($_POST['phone']);
    $newaddress =clean($_POST['address']);;
    $newage =clean($_POST['age']);
    $newemail =clean($_POST['email']);

    $query = "UPDATE users SET fname = '$newfname', lname = '$newlname', email = '$newemail', phone = '$newphone', city = '$newaddress', age = '$newage'
    WHERE idnum='".$_SESSION['idnum']."'";

    if($result = sqlsrv_query($conn, $query)) {

      $_SESSION['prompt'] = "Profile Updated";
      header("location:userlayout.php");
      exit;

    } else {

      die("Error with the query");

    }

  }

  if(isset($_SESSION['idnum'], $_SESSION['passwords'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editprofile.css">
</head>
<body>
<?php include 'header.php'; ?>
  
    

<section>

    <div class="container">
      <strong class="title">עריכת פרטיים אישיים</strong>
    </div>
    <br>
    
    <br>
    
    <div class="edit-form box-left clearfix">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="form-group1">
    <?php 
    
    echo $newidnum;  echo " : ת''ז"."<br>\n";
    ?>
         

</div>
<br><br>


        <div class="form-group">
            <input type="text" class="form-control" name="fname" onkeypress="return onlyLettersKey(event)" maxlength="15" placeholder="שם פרטי באנגלית" required>
          <label for="fname">שם פרטי</label>
          
        </div>


        <div class="form-group">
        <input type="text" class="form-control" name="lname" onkeypress="return onlyLettersKey(event)" maxlength="15" placeholder="שם משפחה באנגלית"   required>
          <label for="lname">שם משפחה</label>
        </div>

        <div class="form-group">
        <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="דואר אלקטרוני" required/>
        <label for="email">דואר אלקטרוני</label>
        </div>

        <div class="form-group">
        <input type="text" name="phone"  pattern="[0-9]{10}" maxlength="10" onkeypress="return onlyNumberKey(event)" placeholder="טלפון" required/>
        <label  for="phone" > : טלפון</label>
        </div>


            <br>
              
            <label class="label8" for="address"  > :ישוב</label>
            <br></br>

                <div class="col-md-3 row">
                    <select id="R1C3" name ="address" required class="form-control _must Width200" data-Address="City">
                        <option >-- בחר ישוב --</option>
                        <option  value="Haifa">Haifa/חיפה</option>
                        <option  value="Tel Aviv">Tel Aviv/תל אביב</option>
                        <option  value="Nesher">Nesher/נשר</option>
                        <option  value="Natanya">Natanya/נתניה</option>
                        <option  value=" Hedera">Hedera/חדרה</option>
                        <option  value=" ٍShafar-am">ٍShafar-am/שפרעם</option>
                        <option  value=" Renie">Renie/רינה</option>
                        <option  value=" Karmiel">Karmiel/כרמיאל</option>
                        <option  value=" Holon">Holon/חולון</option>

                    </select>
                </div>
                <br>

              <label class="label8" for="age" >  :  גיל</label>
        <br></br>

            <div class="col-md-31 row">
                <select name="age" id="R1C3" name="age"  >
                    <option value="0">-- גיל --</option>
                    <option  value="1">1</option>
                    <option  value="2">2</option>
                    <option  value="3">3</option>
                    <option  value="4">4</option>
                    <option  value="5">5</option>
                    <option  value="6">6</option>
                    <option  value="7">7</option>
                    <option  value="8">8</option>
                    <option  value="9">9</option>
                    <option  value="10">10</option>
                    <option  value="11">11</option>
                    <option  value="12">12</option>
                    <option  value="13">13</option>
                    <option  value="14">14</option>
                    <option  value="15">15</option>
                    <option  value="16">16</option>
                    <option  value="17">17</option>
                    <option  value="18">18</option>
                    <option  value="19">19</option>
                    <option  value="20">20</option>
                    <option  value="21">21</option>
                    <option  value="22">22</option>
                    <option  value="23">23</option>
                    <option  value="24">24</option>
                    <option  value="25">25</option>
                    <option  value="26">26</option>
                    <option  value="27">27</option>
                    <option  value="28">28</option>
                    <option  value="29">29</option>
                    <option  value="30">30</option>
                    <option  value="31">31</option>
                    <option  value="32">32</option>
                    <option  value="33">33</option>
                    <option  value="34">34</option>
                    <option  value="35">35</option>
                    <option  value="36">36</option>
                    <option  value="37">37</option>
                    <option  value="38">38</option>
                    <option  value="39">39</option>
                    <option  value="40">40</option>
                    <option  value="41">41</option>
                    <option  value="42">42</option>
                    <option  value="43">43</option>
                    <option  value="44">44</option>
                    <option  value="45">45</option>
                    <option  value="46">46</option>
                    <option  value="47">47</option>
                    <option  value="48">48</option>
                    <option  value="49">49</option>
                    <option  value="50">50</option>
                    <option  value="51">51</option>
                    <option  value="52">52</option>
                    <option  value="53">53</option>
                    <option  value="54">54</option>
                    <option  value="55">55</option>
                    <option  value="56">56</option>
                    <option  value="57">57</option>
                    <option  value="58">58</option>
                    <option  value="59">59</option>
                    <option  value="60">60</option>
                    <option  value="61">61</option>
                    <option  value="62">62</option>
                    <option  value="63">63</option>
                    <option  value="64">64</option>
                    <option  value="65">65</option>
              <br></br>
              
              </select>
            </div>
              
            <br></br>
    
           
      

            <div class="options">
            <button  type="submit" name="update">עדכן</button>
            <a  href="userlayout.php">חזרה</a>
            </div>
            </form>

                    
                        
                        
  </div>       
            
            </section>

            
</body>
</html>


<?php
  }
  ?>

