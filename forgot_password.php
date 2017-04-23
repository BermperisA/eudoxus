<?php include('header.php'); ?>

<div>
<table width="1038">
       <tr>
         <td width="249" height="394">
           
               <div id="sideButtons">
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
         
         <td width="795">
           
                <div id="anakthsh"> Για να ανακτήσετε τον κωδικό σας, πληκτρολογείστε μία έγκυρη διεύθυνση ηλεκτρονικού ταχυδρομείου</div>
                <br>
                <br>
 
                <form id="sub_form"action="mail.php" method="POST" style= "" name="sub_form">

                    <label for="username">Όνομα Χρήστη:</label><br>
				    <input type="text" name="username" id="username"><br>
                    <label for="email" id="emaill">Διεύθυνση Ηλ. Ταχυδρομείου:</label><br>
				    <input  type="text" name="email" id="email1" ><br>
				    <input type="submit" value="Υποβολή" onClick="window.location.href='mail.php';" id="submit_fp"><br>

                </form>
                 
               
         </td>
      
    </tr> 
</table> 
</div>  




<?php include('footer.php'); ?>