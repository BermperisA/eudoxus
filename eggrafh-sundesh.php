<?php include('header.php'); ?>
		
        
   <table width="1038" height="700">
     <tr>
        
        <td width="184">
           
              <div id="log_in_sideButtons">
                 <div id="button"> 
                    <a href='user_profil.php'><img src="img/stud.png" width="141" height="70" type="submit" value=""  /></a>
                 </div>
                 
                 <div id="button"> 
                   <a href='fail.php'><img src="img/trade.png" width="141" height="70" type="submit" value=""  /></a>
                 </div>


                 <div id="button"> 
                   <a href='searchmen.php'><img src="img/search.png" width="141" height="70" type="submit" value=""  /></a>
                 </div>
                 
                 <div id="button"> 
                   <a href='fail.php'><img src="img/faq.png" width="141" height="70" type="submit" value=""  /></a>
                 </div>
                 
                 <div id="button"> 
                   <a href='fail.php'><img src="img/help.png" width="141" height="70" type="submit" value=""  /></a>
                 </div>
 
              </div>
         </td>
        
        
        <td width="427">  
        <?php include('validate.php'); ?>
        <div id="login">
		<h3>Σύνδεση Χρήστη</h3>
			 <br class="clear" />
		<form id="reg_form" action="authenticate.php" method="POST" name="register_form" onSubmit="return ValidationLog();">
				<label id="eggrafh-syndeshlb" for="username">Όνομα Χρήστη:</label>
				<input type="text" name="username" id="username"><br>
				 <br class="clear" />
				<label id="eggrafh-syndeshlb" for="password">Κωδικός Χρήστη:</label>
				<input type="password" name="password" id="password"><br>
				 <br class="clear" />
				<input type="checkbox" name="remember_me" value="Remember_me" id="remember_me"><label id="eggrafh-syndeshlb"  for="remember_me">Απομνημόνευση </label>
				 <br class="clear" />
				
		<input type="submit" value="Σύνδεση" id="loginbt"><br>
		</form>
		
		
		<br class="clear" />
		<a href ="forgot_password.php" id="forgot_password">Ξεχάσατε τον κωδικό σας;</a>
		 </div>
        </td>
       <td width="429"> 
		
        
        
        <div id="register">					
		
		<h3>Εγγραφή Χρήστη</h3>
		<br class="clear" />
		
        <div class="validate" >
            
        </div>
        
        <form id="reg_form" action='register.php' method="POST" name="my_form2" onSubmit="return Validation();">
				<label id="eggrafh-syndeshlb" for="lastname">Επίθετο:</label>
				<input type="text" name="lastname" id="lastname"><br>
				 <br class="clear" />
				 	<label id="eggrafh-syndeshlb" for="firstname">Όνομα:</label>
				<input type="text" name="firstname" id="firstname"><br>
				 <br class="clear" />
				 	<label id="eggrafh-syndeshlb" for="username">Όνομα Χρήστη:</label>
				<input type="text" name="username" id="username"><br>
				 <br class="clear" />
				<label id="eggrafh-syndeshlb" for="password">Κωδικός Χρήστη:</label>
				<input type="password" name="password" id="password"><br>
				 <br class="clear" />
				<label id="eggrafh-syndeshlb" for="verify_password">Επαλήθευση Κωδικού Χρήστη:</label>
				<input type="password" name="verify_password" id="verify_password"><br>
				 <br class="clear" />
				<label id="eggrafh-syndeshlb" for="email">Διεύθυνση Ηλ. Ταχυδρομείου:</label>
				<input type="text" name="email" id="email"><br>
				 <br class="clear" />
				<label id="eggrafh-syndeshlb" for="verify_email">Επαλήθευση Διεύθυνσης Ηλ. Ταχυδρομείου:</label>
				<input type="text" name="verify_email" id="verify_email"><br>
				 <br class="clear" />
				 <label id="eggrafh-syndeshlb" for="telephone">Τηλέφωνο επικοινωνίας:</label>
				<input type="text" name="telephone" id="telephone"><br>
				 <br class="clear" />
				 <div id="choose">
				<p style="text-align:left;"><strong>Επιλέξτε ανάλογα με την ιδιότητά σας.</strong></p>
				
				<div id="left2">
				
					 <select name="type" >
					  <option value="ekdotis">Εκδότης</option>}
					   <option value="gram">Γραμματεία</option>
					   <option value="idruma">Ίδρυμα</option>
					   <option value="foithths">Φοιτητής</option>
					 </select> 

				
				</div>
				

		        <br class="clear" />
		
		        <br class="clear" />
		        <br class="clear" />
		        <input type="submit"  value="Εγγραφή" id="regbt"><br>
          </div>				
		</form>
		 </div>
         
       </td>
    </tr>
    </table>
		
		
	<?php include('footer.php'); ?>