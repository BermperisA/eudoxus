
<?php include('header.php'); ?>

<?php if( empty( $_SESSION[ 'logged_user' ] ) )
						{?> 
						 
                        <p style="margin-left:34%;" ><strong>Πρέπει να Συνδεθείται για να δείτε αυτή τη σελίδα</strong></p><br>
                       <p style="margin-left:46%; cursor: pointer;color:blue;" onClick="window.location.href='eggrafh-sundesh.php';"><strong><u>Επιστροφή</u></strong></p><br> 
                      
					<?php } 
						else{
						include "./dbconnect.php"; 
						$con = dbconnect();
						$result = mysqli_query($con,"SELECT usersType FROM users WHERE users.username = '".$_SESSION[ 'logged_user' ]."'");
						$row = mysqli_fetch_assoc($result);
						if ( $row['usersType']!== "foithths"){?>
						
							<p style="margin-left:34%;" ><strong>Η υπηρεσία αυτή είναι διαθέσιμη μόνο για φοιτητές</strong></p><br>
						   <p style="margin-left:46%; cursor: pointer;color:blue;" onClick="window.location.href='index.php';"><strong><u>Επιστροφή</u></strong></p><br>
						<?php } 
					else {
							?> 
               

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
                 
                
           
                
                <div id="services_form">
                
                  
                  <table style="margin-left:2%;margin-top:7%;" id="inform_table" width="95%"  >
                   
                    <tr>
                      <td width="247" height="32"> <img src ="./img/profile.jpg"  width=114 height=114 align="left"; style= "min-height:16.5px;"/></td>
                      <td width="500" style="text-align:right;"><div style="margin-top:100px;"><strong><u >Έχετε 0,00 μονάδες από ανταλλαγές βιβλίων</u></strong></div></td>
                    </tr>
                   </table><br>
                   <table style="margin-left:2%;border:2px solid #c3c3c3; border-radius:5px;" width="95%" height="270">
                   
				   <?php
						
						$user = $_SESSION['logged_user'];
						
						if ($result = mysqli_query($con,"SELECT * FROM users, usersextra WHERE users.username = '".$user."'  AND users.userId = usersextra.usersId "))
						{ $row = mysqli_fetch_assoc($result);
						 ?>
                   
                    <tr >
                         <td height="20" style="outline: 2px solid #c3c3c3;">     
                              <strong> Ίδρυμα  </strong>
                         </td>
                         <td  style="outline: 2px solid #c3c3c3;">  
                        
                              <?php echo $row['idruma']; ?>
                         
                         </td>
                    </tr>
            
                    <tr>
                    
                          <td  height="20" style="outline: 2px solid #c3c3c3;">     
                            <strong> Σχολή</strong>
                          </td>
                          <td   style="outline: 2px solid #c3c3c3;">  
                        
                              <?php echo $row['sxoli']; ?>
                         
                          </td>
                   
                    </tr>
                   
                    <tr> 
                    
                          <td height="20" style="outline: 2px solid #c3c3c3;">     
                            <strong> Τμήμα</strong>
                          </td>
                          <td  style="outline: 2px solid #c3c3c3;">  
                        
                               <?php echo $row['tmhma']; ?>
                         
                          </td>
                    
                    </tr>
                    
                     <tr>
                         <td height="20" style="outline: 2px solid #c3c3c3;">     
                             <strong> Αριθμός Μητρώου</strong>
                         </td>
                         <td  style="outline: 2px solid #c3c3c3;">  
                        
                              <?php echo $row['am']; ?>
                         
                         </td>
                    </tr>
                    
                     <tr>
                         <td height="20" style="outline: 2px solid #c3c3c3;">     
                             <strong> Όνομα</strong>
                         </td>
                         <td  style="outline:  2px solid #c3c3c3;">  
                        
                              <?php echo $row['name']; ?>
                         
                         </td>
                    </tr>
                    
                     <tr>
                         <td height="20" style="outline: 2px solid #c3c3c3;">     
                             <strong> Επώνυμο</strong>
                         </td>
                         <td  style="outline: 2px solid #c3c3c3;">  
                        
                             <?php echo $row['surname']; ?>
                         
                         </td>
                    </tr>
                    
                     <tr>
                         <td height="20" style="outline: 2px solid #c3c3c3;">     
                             <strong> Προσωπικό e-mail</strong>
                         </td>
                         <td  style="outline: 2px solid #c3c3c3;">  
                        
                             <?php echo $row['email']; ?>
                         
                         </td>
                    </tr>
                    
                     <tr>
                         <td height="20" style="outline: 2px solid #c3c3c3;">     
                             <strong> Τρέχον Εξάμηνο</strong>
                         </td>
                         <td  style="outline: 2px solid #c3c3c3;">  
                        
                             <?php echo $row['eksamhno']; ?>
                         
                         </td>
                    </tr>
                    </table>
                    
                  <table style="margin-left:2%;">
                    
                    <tr>
                      <td width="710" height="89">
                        
                         <div id="profile_edit">
                            <li onClick="window.location.href='edit_profile.php';" style="color:white; font-size:15px; cursor: pointer;"><u>Επεξεργασία  Προφίλ</u></li>
                         </div>
                        
                      </td>
                    </tr> 
                  </table>
                <?php }  } mysqli_close($con); ?>
           </div>
                
                
         </td>
      
    </tr> 
</table> 
</div>  

<?php } ?>


<?php include('footer.php'); ?>
