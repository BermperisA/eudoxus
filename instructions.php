
<?php include('header.php'); ?>

<?php if( empty( $_SESSION[ 'logged_user' ] ) )
						{?> 
						 
                        <p style="margin-left:34%;" ><strong>Πρέπει να Συνδεθείται για να δείτε αυτή τη σελίδα</strong></p><br>
                       <p style="margin-left:46%; cursor: pointer;color:blue;" onClick="window.location.href='eggrafh-sundesh.php';"><strong><u>Επιστροφή</u></strong></p><br> 
                      
					<?php } 
						else{?>
						

<div>
<table  width="1038" padding: 0; border-spacing: none;" cellspacing="0" cellpadding="0">
<style>
table td {
    cellpadding : 0;
}

</style>
       <tr>
         <td width="137" height="740">
           
                
           
               <div id="services_menu">
 
                      <ul style="margin-top:-200%;">
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/user_profil.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='user_profil.php';">Στοιχεία Φοιτητή
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/list_of_books.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='list_of_books.php';"><a>Παρεληφθέντα Συγγραμάτα</a>
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/statement.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='statement.php';">Δήλωση Συγγραμμάτων
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/123" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='fail2.php';">Ανταλλαγή Συγγραμμάτων
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/searchmen.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='searchmen.php';">Αναζήτηση Συγγραμμάτων
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/instructions.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='instructions.php';">Οδηγίες
		    
                     </ul>
 
              </div>
         </td>
         
         <td width="859">
                 
                
           
                
                <div id="instructions_form">
                
                <div>
                         <p style="margin-left:43%;" >
                           <img src ="./img/istructions.jpg"  width=114 height=114 align="left"; style= "min-height:16.5px;"/>
                      </p><br><br><br><br><br><br><br>
</div>
                
                  
         <div style="padding:5px;"><strong><u>Πληροφορίες σχετικά με τις βασικές υπηρεσίες της διαδικτυακής διεπαφής δήλωσης συγγραμμάτων</u></strong></div><br>
          <table style="margin-left:2%;" id="inform_table" width="95%" height="578" >
            <tr>
              <td height="174">       
			
            
                   
			
		
			<div style="padding: 0px 0px 0px 10px; background-color: #696; width: 250px; height:250px; border-radius: 5px; margin-left: 15%;">
            <div style="font-size:90px; color:#FFF;"><strong>1</strong></div>            			Ο φοιτητής/τρια για να μπορεί να πραγματοποιήσει την απαραίτητη δήλωση για να προμηθευτεί συγγράμματα πρέπει να είναι προπτυχιακός φοιτητής σε κάποιο τμήμα(ΑΕΙ ή ΤΕΙ) της ελληνικής επικράτειας.</div>
</td>
              <td>
						
	
			<div style="padding: 0px 0px 0px 10px; background-color: #0C3; width: 250px; height:250px; border-radius: 5px; margin-top: 0%; margin-left: 15%;">
            <div style="font-size:90px; color:#FFF;"><strong>2</strong></div>            			Οι προθεσμίες για την δήλωση, την ανταλλαγή και την παραλλαβή των συγγραμμάτων θα ανακοινώνονται έγκαιρα και σε εμφανή σημείο στην κατηγορία των ανακοινώσεων στην αρχική σελίδα.</div>

			
</td>
</tr>
<tr>
  <td height="396">			
			<div style="padding: 0px 0px 0px 10px; background-color: #F90; width: 250px; height:400px; border-radius: 5px;  margin-left: 15%;">
            <div style="font-size:90px; color:#FFF;"><strong>3</strong></div>            			Διάφορες πληροφορίες για το ποια, αλλά και το που βρίσκονται, τα σημεία διανομής συγγραμμάτων, βρίσκονται στην επιλογή "Αναζήτηση Συγγραμμάτων" στην οποία βλέπουμε διάφορες πληροφορίες για το σύγγραμμα που θέλουμε να επιλέξουμε. Επίσης  κατά τη διάρκεια της δήλωσης και επιλέγοντας το βιβλίο που θέλουμε, μας εμφανίζεται το σημείο διανομής.</div>

			</td>
            <td>
			
			<div style="padding: 0px 0px 0px 10px; background-color: #F30; width: 250px; height:400px; border-radius: 5px; margin-left: 15%;">
            <div style="font-size:90px; color:#FFF;"><strong>4</strong></div>            			Οι φοιτητές που σπουδάζουν σε κάποιο τμήμα(ΑΕΙ ή ΤΕΙ) της ελληνικής επικράτειας επιλέγοντας την επιλογή "Σύνδεση ή Εγγραφή" στο πάνω δεξιά μέρος της ιστοσελίδας πλοηγούνται σε μια υποσελίδα που μπορούν να εγγραφούν(γράφοντας τα απαραίτητα στοιχεία), ή αν το έχουν ήδη κάνει απλά να συνδεθούν. Στη συνέχεια ως μέλη της διαδικτυακής διεπαφής δήλωσης συγγραμμάτων μπορούν να δηλώσουν νέα ή να ανταλλάξουν παλιότερα συγγράμματα.</div>
			
			</td>
            </tr>

		 
                   
      </table>
                
               
</div>
                
                
         </td>
      
    </tr> 
</table> 
</div>  

<?php } ?>


<?php include('footer.php'); ?>
