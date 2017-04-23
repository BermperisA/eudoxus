

<?php include('header.php'); ?>

<?php if( empty( $_SESSION[ 'logged_user' ] ) )
						{?> 
						 
                        <p style="margin-left:34%;" ><strong>Πρέπει να Συνδεθείται για να δείτε αυτή τη σελίδα</strong></p><br>
                       <p style="margin-left:46%; cursor: pointer; color:blue;" onClick="window.location.href='eggrafh-sundesh.php';"><strong><u>Επιστροφή</u></strong></p><br> 
                      
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
         <td width="137" height="504">
           
                
           
               <div id="services_menu">
 
                      <ul>
                            <li id="highlited" onClick="window.location.href='user_profil.php';">Στοιχεία Φοιτητή
                            </li><br>
                            <li  onClick="window.location.href='list_of_books.php';"><a>Παρεληφθέντα Συγγραμμάτα</a>
                            </li><br>
                            <li  onClick="window.location.href='statement.php';">Δήλωση Συγγραμμάτων
                            </li><br>
                            <li  onClick="window.location.href='fail2.php';">Ανταλλαγή Συγγραμμάτων
                            </li><br>
                            <li  onClick="window.location.href='searchmen.php';">Αναζήτηση Συγγραμμάτων
                            </li><br>
                            <li  onClick="window.location.href='instructions.php';">Οδηγίες
                            </li>
		    
                     </ul>
 
              </div>
         </td>
         
         <td width="859">
                 
                
           
                
                <div id="services_form">
                
                  
                 
                   
                   <?php include('validate.php'); ?>
                   <form id="edit_form" action="edit.php" method="POST" name="edit_form" onSubmit="return ValidationEdit();">
                    
                    
                     <table width="719" style="margin-top:7%; margin-left:2%;">
                       <tr>
                         <td width="709">
                           <div style="margin-left: 43%;">
                             <img  src ="./img/user_edit.jpg"  width=114 height=114 align="left"; style= "min-height:16.5px;"/>
                           </div>
                         </td>
                        </tr>
                     </table><br><br>
                    
                   
                    
                    <table style="margin-left:28.5%; border:2px solid #c3c3c3; border-radius:5px;" id="inform_table" width="45%" height="228" >
                    <tr >
                         <td height="22" style="outline: 2px solid #c3c3c3;">     
                              <strong>Ίδρυμα<strong>
                         </td>
                         <td  style="outline: 2px solid #c3c3c3;">  
                        
                             <input type="text" name="idruma" id="idruma">	
		                   
		                 
                      </td>
                    </tr>
            
                    <tr>
                    
                          <td  height="22" style="outline: 2px solid #c3c3c3;">     
                           <strong> Σχολή<strong>
                  </td>
                          <td   style="outline: 2px solid #c3c3c3;">  
                        
                             <input type="text" name="sxoli" id="sxoli">	
                         
                          </td>
                   
                    </tr>
                   
                    <tr> 
                    
                          <td height="20" style="outline: 2px solid #c3c3c3;">     
                             <strong>Τμήμα<strong>
                  </td>
                          <td  style="outline: 2px solid #c3c3c3;">  
                        
                               
				
			                 <input type="text" name="tmhma" id="tmhma">	
				
				           
                         
                          </td>
                    
                    </tr>
                    <tr> 
                    
                          <td height="20" style="outline: 2px solid #c3c3c3;">     
                             <strong>Αριθμός Μητρώου<strong>
                  </td>
                          <td  style="outline: 2px solid #c3c3c3;">  
                        
                               
				
			                 <input type="text" name="am" id="am">	
				
				           
                         
                          </td>
                    
                    </tr>
                     <tr>
                         <td height="20" style="outline: 2px solid #c3c3c3;">     
                              <strong>Όνομα<strong>
                     </td>
                         <td  style="outline: 2px solid #c3c3c3;">  
                        
                            <input type="text" name="name" id="name">	
                         </td>
                    </tr>
                    
                     <tr>
                         <td height="20" style="outline: 2px solid #c3c3c3;">     
                             <strong>Επώνυμο<strong>
                     </td>
                         <td  style="outline: 2px solid #c3c3c3;">  
                        
                            <input type="text" name="surname" id="surname">	 
                         
                         </td>
                    </tr>
                    
                     <tr>
                         <td height="20" style="outline: 2px solid #c3c3c3;">     
                              <strong>Προσωπικό e-mail<strong>
                     </td>
                         <td  style="outline: 2px solid #c3c3c3;">  
                        
                             <input type="text" name="mail" id="mail">	
                         
                         </td>
                    </tr>
                   
					
                    </table>
                    <table style="margin-left:2%;">
                    
                    <tr>
                      <td width="724" height="89">
                        

                         <div >
			    <input  style="position: relative; left: -250px; padding: 0px;"  onClick="window.location.href='user_profil.php';"  value="&#9668  Πίσω" id="editbt"><br>
                            <input style="position: relative; left: 250px; padding: 0px; margin-top: -27px;"   type="submit" value=" Υποβολή &#10004" id="editbt"><br>
                         </div>
		
			
                         
                      </td>
                    </tr>
                     
                  </table>
               
                </form>
               
           </div>
                
                
         </td>
      
    </tr> 
</table> 
</div>  

<?php } ?>


<?php include('footer.php'); ?>
