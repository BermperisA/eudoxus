
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
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/statement2.php" )==0 )
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
                         <td  >     
                            
                         </td>
                         
			 <td  >  
                        
                            
                         
                         </td>

			  <td  >  
                        
                            
                         
                          </td>
		
			  
                    </tr>
            
                    <tr>
                    
                          <td >     
                            
                          </td>
                          <td  >  
                        
                              
                         
                          </td>
			  <td  >  
                        
				     
                         
                         </td>
                   
                    </tr>
                   
                    <tr> 
                    
                          <td >     
                            
                          </td>
                          <td  >  
                        
                               
                         
                          </td>
			  <td >  
                        
                             
                         
                         </td>                    
                    </tr>
                    
                     <tr>
                         <td style=" width: 150px;">     
                             
                         </td>
                          
                        <td  style=" width: 300px;  position: relative; left: -50px; text-align: center; text-shadow: #909090  0.2em 0.3em 0.2em;"><strong><u><h2> Η διαδικασία δήλωσης συγγραμμάτων ολοκληρώθηκε με ΕΠΙΤΥΧΊΑ </h2></u></strong>
			</td > 
                         
                         
			 <td >  
                        
                             
                         
                         </td>
                    </tr>
                    
                     <tr>
                         <td >     
                             
                         </td>
                         <td  >  
                        
                             <h1 style=" position: relative; left: 80px;">&#10004</h1>
                         
                         </td>
			 <td>  
                        
                             
                         
                         </td>
                    </tr>
                    
                     <tr>
                         <td >     
                             
                         </td>
                         <td >  
                        
                             <div id="profile_edit">
                            	<li onClick="window.location.href='user_profil.php';" style=" padding: 10px ;position: relative; left: -100px; color:white; font-size:15px; cursor: pointer;"><u>Επιστροφή</u></li>
                             </div>
                         
                         </td>
			 <td >  
                        
                             
                         
                         </td>
                    </tr>
                    
                     <tr>
                         <td>     
                             
                         </td>
                         <td  >  
                        
                             
                         
                         </td>
			 <td  >  
                        
                             
                         
                         </td>
                    </tr>
                    
                     <tr>
                         <td >     
                             
                         </td>
                         <td  >  
                        
                             
                         
                         </td>
			 <td  >  
                        
                             
                         
                         </td>
                    </tr>
                    </table>
                    
                  <table style="margin-left:2%;">
                    
                    <tr>
                      <td width="710" height="89">
                        
                         
			    
                        
                      </td>
                    </tr> 
		
		   <tr>
                      <td width="100" height="89">
                        
                        <progress style="width:700px; margin-top: -100px;" value="100" max="100" ></progress>
                        
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
