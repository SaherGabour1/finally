<?php
 session_start(); 

 include 'connection.php';




 ?>

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
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="adv.css">
     
      <title>טופס בקשה</title>
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
                      <li><a href="patientadver2.php">רשימת חולים</a></li>
                      <li><a href="hospital2.html" >בית חולים </a></li>
                      <li><a href="home2.html" >דף בית </a></li>
                  </ul>   
              </div> 
              <div class="back" >    
          <a href="userlayout.php" >איזור אישי </a></a>
          </div>


  </nav> 

  <div class="logout" >    
      <a href="home.html" >התנתק </a></li></a>
      </div>

  
          <hr width="70%" > 
          <br>
  
          <br></br>
        
          <form action="insertdata.php" method="POST" >
          <div class="main-block">
              <h3>טופס בקשה</h3>
              <br></br>
              <h4>כאן ממלאים את הפרטים שלכם וכל מה שאתם צרכים שיתפרסם אצל התורמים</h4>
              <br><br>
              <div class="text-center">רוצים לראות דוגמא ?<a href="Exampel.html"> לחץ כאן </a></div>
              
              
           
                <hr class="hr">
                <br>
                
                <label class="label1" for="fname"> : שם החולה</label>
                <input type="text" name="fname" onkeypress="return onlyLettersKey(event)" maxlength="15"  placeholder="שם פרטי באנגלית" required/>
                <br></br>
                <label class="label8" for="age" name="age">  :  גיל</label>
                <br></br>
        
                    <div class="col-md-3 row">
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
                <label class="label3" for="body" name="body">: מה המטרה מתרימה</label>
                <textarea id="subject" name="body" style="width: 648px; height: 200px ; margin-left: 18%;" type="textarea" ></textarea>
                <br></br>
                <label class="label4" for="bloodtype" name="bloodtype" >: סוג דם </label>
                <div class="col-md-3 row">
                        <select id="R1C3" name="bloodtype"  >
                            <option value="0">-- סוגי דם--</option>
                            <option  value="A+">A+</option>
                            <option  value="B+">B+</option>
                            <option  value="AB+">AB+</option>
                            <option  value="AB-">AB-</option>
                            <option  value="O-">O-</option>
                            <option  value="O+">O+</option>

                        </select>
                        </div>
                    
                <br></br>
                <label class="label6" for="phone" >: טלפון</label>
                <input type="text" name="phone" pattern="[0-9]{10}"  placeholder="טלפון" maxlength="10" onkeypress="return onlyNumberKey(event)" >
                <br></br>
                <label class="label5" for="donatearea"   name="donatearea">: נקודות התרמה </label>
                <div class="col-md-3 row">
                        <select id="R1C3" name="donatearea"  >
                            <option value="haifa">haifa</option>
                            <option  value="Tal Aviv">Tal Aviv</option>
                            <option  value="Natanya">Natanya</option>
                            <option  value="Hedera">Hedera</option>
                            <option  value="karmiel">karmiel</option>
                            
                        </select>
                        </div>
            
                
        
                <button type="submit" href="patientadver2.php" name="insert">פרסם</button>
                <input value="נקה טופס " type="reset" >
              </div>
          </form>
         
      
          <footer class="footer-copyright">
            <h5>
             Nb.Sg.Platelet Donation - זכויות יוצרים שמורות ל-&copy;
            </h5>
       </footer>
      </div>
         
  




  
    
      
  </body>
  </html>