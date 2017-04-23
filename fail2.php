
<?php include('header.php'); ?>

<div>
<table width="1038">
       <tr>
         <td width="170" >
           
               <div id="services_menu">
 
                      <ul style="margin-top:70%;">
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
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/1234" )==0 )
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
         
         <td width="660">
           
              <div class="construction">
                  <p><img src="img/underconstruction.gif" width="339" height="258" /></p>
               </div>

               <div class="message">
                  <p> <strong>Η σελίδα αυτή είναι υπο κατασκευή!<br>Σύντομα κοντά σας...</strong></p>
               </div>
                 
               
         </td>
         
         <td width="210">
           
                 
                  <div class="callendar" >

                    <?php include('calendar.php'); ?>

                  </div>
                 
             
         </td>
      
      
      </tr> 
</table> 
</div>  

 <?php include('footer.php'); ?>