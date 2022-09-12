<!DOCTYPE html>
<html lang="en">
<head>
  <title>זימון תור</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="testdate.css">
</head>
<body>

    <div class="main" >
              <nav>
                  <div class="logo">
                      <img src="Picture3.png" > 
                  </div>
                  <div class="nav-links" >
                      <ul>
    
                          <li><a href="contact2.html" >צור קשר </a></li>
                          <li><a href="patientadver2.php" >רשימת חולים</a></li>
                          <li><a href="hospital2.html" >בית חולים </a></li>
                          <li><a href="home2.html" >דף בית </a></li>
                      </ul>
                  </div> 
                  <div class="back" >
              <a href="userlayout.php" >איזור אישי </a></a>
              </div>
    
      </nav> 
    
      <div class="logout" >
          <a href="index.html" >התנתק </a></li></a>
          </div>
    
    
              <hr width="70%" > 
              <br>
    
    <br>
    <h2 class="middle-title">
       זימון תור לבדיקת התאמה
                 </h2>
    <br></br>

    <h4 class="note">
      !ניתן לבצע בדיקות התאמה בכל ימי השבוע   </h4>

              <table class="table table-dark table-striped" >
                <thead>
                  <tr class="tr1" >
                    <th></th>
                    <th>שעה</th>
                    <th>מעבדה </th>
                    <th>ישוב </th>    
                   </tr>
                </thead>
                <tbody>
                      
                        <tr>
                        <td><button class="a2" onclick="openForm()">שמירת תור  </button></td>
                          <td>14:00 - 18:00</td>
                          <td>בית חולים רמב"ם</td>
                          <td>חיפה</td>
                      </tr>
    
                      <tr>
                        <td><button class="a2" onclick="openForm()">שמירת תור  </button></td>
                          <td>15:00 - 18:00</td>
                          <td>המרכז הרפואי ע"ש ברוך פדה</td>
                          <td>פוריה</td>
                      </tr>
    
                      <tr>
                        <td><button class="a2" onclick="openForm()">שמירת תור  </button></td></td>
                          <td>13:00 - 18:00</td>
                          <td>המרכז הרפואי בני ציון</td>
                          <td>בני ציון</td>
                      </tr>
    
                      <tr>
                        <td><button class="a2" onclick="openForm()">שמירת תור  </button></td></td>
                          <td>14:00 - 18:00</td>
                          <td>בית חולים הלל יפה</td>
                          <td>חדירה</td>
                      </tr>
    
                      <tr>
                        <td><button class="a2" onclick="openForm()">שמירת תור  </button></td></td>
                          <td>14:30 - 19:00</td>
                          <td>בית חולים הדסה</td>
                          <td>יורשלים</td>
                      </tr>
       </div>
    </div>
    
    
                </tbody>
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
              </table>
              
              
              <div class=" form-popup" id="myForm">
               
              <form action="inserttestdate.php" class="form-container" method="POST">
                  <h1>קביעת תור</h1>
               
            
                  <br>
                  <label for="fname"><b> שם מלא</b></label>
                  <input type="text" placeholder="שם מלא באנגלית" name="fname" required onkeypress="return onlyLettersKey(event)" maxlength="25">

                  <label for="id"><b>ת"ז</b></label>
                  <input type="text" placeholder="ת''ז" name="id" required pattern="[0-9]{9}" onkeypress="return onlyNumberKey(event)" maxlength="9">
              
                  <label for="phone"><b>טלפון</b></label>
                  <input type="text" placeholder="טלפון" name="phone" required pattern="[0-9]{10}"  maxlength="10" onkeypress="return onlyNumberKey(event)"> 

                  <label for="date"><b>תאריך</b></label>
                  <br></br>
                  <input type="date" id="date" name="date">
                  <br></br>
                  
                  

                  <div class="col-md-3 row">
                    <label for="time"><b>שעה</b></label>
                    <br>
                    <select  id="R1C3" name="time"  >
                        <option value="0">-- שעה --</option>
                        <option  value="13:00 - 13:15">13:00 - 13:15 </option>
                        <option  value="13:15 - 13:30">13:15 - 13:30</option>
                        <option  value="13:30 - 13:45">13:30 - 13:45</option>
                        <option  value="13:45 - 14:00">13:45 - 14:00</option>
                        <option  value="14:00 - 14:15">14:00 - 14:15</option>
                        <option  value="14:15 - 14:30">14:15 - 14:30</option>
                        <option  value="14:30 - 14:45">14:30 - 14:45</option>
                        <option  value="14:45 - 14:00">14:45 - 14:00</option>
                        <option  value="15:00 - 15:15">15:00 - 15:15</option>
                        <option  value="15:15 - 15:30">15:15 - 15:30</option>
                        <option  value="15:30 - 15:45">15:30 - 15:45</option>
                        <option  value="15:45 - 16:00">15:45 - 16:00</option>
                        <option  value="16:00 - 16:15">16:00 - 16:15 </option>
                        <option  value="16:15 - 16:30">16:15 - 16:30</option>
                        <option  value="16:30 - 16:45">16:30 - 16:45</option>
                        <option  value="16:45 - 17:00">16:45 - 17:00</option>
                        <option  value="17:00 - 17:15">17:00 - 17:15</option>
                        <option  value="17:15 - 17:30">17:15 - 17:30</option>
                        <option  value="17:30 - 17:45">17:30 - 17:45</option>
                        <option  value="17:45 - 18:00">17:45 - 18:00</option>
                        <option  value="18:00 - 18:15">18:00 - 18:15</option>
                        <option  value="18:15 - 18:30">18:15 - 18:30</option>
                        <option  value="18:30 - 18:45">18:30 - 18:45</option>
                        <option  value="18:45 - 19:00">18:45 - 19:00</option>
                        
                  <br></br>
                  
                  </select>
                </div>
              
                  <button type="submit" class="btn">שמירה</button>
                  <button type="button" class="btn cancel" onclick="closeForm()">בטל</button>

                </form>
              </div>


            
              
              
              <script>
              function openForm() {
              
                document.getElementById("myForm").style.display = "block";

              }
              
              function closeForm() {
                document.getElementById("myForm").style.display = "none";
               
              }
              </script>




      
    </div>
  </div>
  
  


</body>
</html>