
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
         <td width="137" height="504">
           
                
           
               <div id="services_menu">
 
                      <ul>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/user_profil.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='user_profil.php';">Στοιχεία Φοιτητή
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/list_of_books.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='list_of_books.php';"><a>Παρεληφθέντα Συγγραμμάτα</a>
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/statement.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='statement.php';">Δήλωση Συγγραμμάτων
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='fail2.php';">Ανταλλαγή Συγγραμμάτων
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/searchmen.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='searchmen.php';">Αναζήτηση Συγγραμμάτων
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='instructions.php';">Οδηγίες
                            </li>
		    
                     </ul>
 
              </div>
         </td>
         
         <td width="859">
                 
                
           
                
                <div id="services_form">
                
                  
                  <table style="margin-left:2%; margin-top:7%;" id="inform_table" width="95%" height="335" >
                   
                    <tr>
                      <td width="247" height="32"><strong><u>Δήλωση Συγγραμμάτων</u></strong></td>
                    </tr>
                   
                   
                    <tr >
                         <td height="20" style=" outline: thin solid black;" >     
                             <h3 style=" padding: 0px; text-align: center; text-shadow: #909090  0.2em 0.3em 0.2em;">Περίοδος</h3>
                         </td>
                         
			 <td  style="outline: thin solid black;">  
                        
                             <h3 style="text-align: center; text-shadow: #909090  0.2em 0.3em 0.2em;">Ακαδημαικός έτος</h3>
                         
                         </td>

			  <td  style="outline: thin solid black;">  
                        
                            <h3 style="text-align: center; text-shadow: #909090  0.2em 0.3em 0.2em;">Ημερομηνία</h3>
                         
                          </td>
		
			  <td  style="outline: thin solid black;">  
                        
                             <h3 style="text-align: center; text-shadow: #909090  0.2em 0.3em 0.2em;">Κατάσταση</h3>
                         
                         </td>
			 
			 
                    </tr>
            
                    <tr>
                    
                          <td  height="20" style="outline: thin solid black;">     
                            
				<p style="text-align: center;">Εαρινό εξάμηνο</p>
                          </td>
                          <td   style="outline: thin solid black;">  
                        
                              <p style="text-align: center;">2013-2014</p>
                          
                          </td>
                   	  <td  style="outline: thin solid black;">  
                        
                             <p style="text-align: center;">...</p>
                         
                         </td>
			 <td  style="outline: thin solid black;">  
                        
				<p style="text-align: center;">Τρέχουσα</p>
                             
                         
                         </td>
			 <td  style="outline: thin solid black;">  
                        
                             <form><input type="checkbox" name="" value=""><br></form>
                         
                         </td>
                    </tr>
                   
                    <tr> 
                    
                          <td  height="20" style="outline: thin solid black;">     
                            
				<p style="text-align: center;">Χειμερινό εξάμηνο</p>
                          </td>
                          <td   style="outline: thin solid black;">  
                        
                              <p style="text-align: center;">2013-2014</p>
                          
                          </td>
                   	  <td  style="outline: thin solid black;">  
                        
                             <p style="text-align: center;">12-10-2013</p>
                         
                         </td>
			 <td  style="outline: thin solid black;">  
                        
				<p style="text-align: center;">Ολοκληρωμένη</p>
                             
                         
                         </td>
			 <td  style="outline: thin solid black;">  
                        
                             <form><input type="checkbox" name="" value=""><br></form>
                         
                         </td>
                    </tr>
                    
                     <tr>
                         <td  height="20" style="outline: thin solid black;">     
                            
				<p style="text-align: center;">Εαρινό εξάμηνο</p>
                          </td>
                          <td   style="outline: thin solid black;">  
                        
                              <p style="text-align: center;">2012-2013</p>
                          
                          </td>
                   	  <td  style="outline: thin solid black;">  
                        
                             <p style="text-align: center;">25-05-2013</p>
                         
                         </td>
			 <td  style="outline: thin solid black;">  
                        
				<p style="text-align: center;">Ολοκληρωμένη</p>
                             
                         
                         </td>
			 <td  style="outline: thin solid black;">  
                        
                             <form><input type="checkbox" name="" value=""><br></form>
                         
                         </td>      
	            </tr>
                    
                     <tr>
                         <td  height="20" style="outline: thin solid black;">     
                            
				<p style="text-align: center;">Χειμερινό εξάμηνο</p>
                          </td>
                          <td   style="outline: thin solid black;">  
                        
                              <p style="text-align: center;">2012-2013</p>
                          
                          </td>
                   	  <td  style="outline: thin solid black;">  
                        
                             <p style="text-align: center;">13-11-2012</p>
                         
                         </td>
			 <td  style="outline: thin solid black;">  
                        
				<p style="text-align: center;">Ολοκληρωμένη</p>
                             
                         
                         </td>
			 <td  style="outline: thin solid black;">  
                        
                              <form><input type="checkbox" name="" value=""><br></form>
                         
                         </td>
                    </tr>
                    
                     
                    </table>
                    
                  <table style="margin-left:2%;">
                    
                    <tr>
                         <td width="710" height="89">
                        
		                 <div id="profile_edit">
		                   <input  style="position: relative; left: 250px; padding: 0px; margin-top: -10px;"  onClick="window.location.href='statement2.php';"  value="Επόμενo Βήμα &#9658" id="editbt"><br>
			
		                 </div>
                        
                        </td>
                    </tr> 
		
		   <tr>
                      <td width="500" height="89">
                        
                        <progress style="width:700px; margin-top: -100px; " value="25" max="100" ></progress>
                        
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
