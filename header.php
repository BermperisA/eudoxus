
<?php
session_start();


function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="site.css">
    <link rel="shortcut icon" href="img/fav.png">
	<title>Ευδοξος</title>
    <script type="text/javascript" src="slideh.js"></script>
    <link rel="stylesheet" href="slide.css" type="text/css" />
</head>

<div class="container">   

<body id="background">
        
    <div class="header">
      <table width="1036" border="0">
        <tr>
          <td width="754" height="31">
            <div class="path">
			 <ul>
                  <l onClick="window.location.href='index.php';">Home</l>
                   <l onClick="window.location.href='eggrafh-sundesh.php';">
                  <?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/eggrafh-sundesh.php" )==0 || strcmp ( url() , "http://plai2.dyndns.org/eam/forgot_password.php" )==0 )
						{ echo ">Σύνδεση";  }
	              ?>
                  </l>
                  <l onClick="window.location.href='eggrafh-sundesh.php';">
                  <?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/failLog.php" )==0 )
						{ echo ">Σύνδεση";  }
	              ?>
                  </l>
                  <l onClick="window.location.href='failLog.php';">
                  <?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/failLog.php" )==0 )
						{ echo ">Αποτυχής Σύνδεση";  }
	              ?>
                  
                  </l>
                  <l onClick="window.location.href='list_of_books.php';">
                  <?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/list_of_books.php" )==0 )
						{ echo ">Λίστα Παραληφθέντων";  }
	              ?>
                  
                  </l>
                  <l onClick="window.location.href='user_profil.php';">
                  <?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/user_profil.php" )==0 || strcmp ( url() , "http://plai2.dyndns.org/eam/edit_profile.php" )==0 )
						{ echo ">Προφίλ Χρήστη";  }
	              ?>
                  
                  </l>
                  <l onClick="window.location.href='edit_profile.php';">
                  <?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/edit_profile.php" )==0 )
						{ echo ">Επεξεργασία Προφίλ";  }
	              ?>
                  
                  </l>
                  <l onClick="window.location.href='statement.php';">
                  <?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/statement.php" )==0 || strcmp ( url() , "http://plai2.dyndns.org/eam/statement2.php" )==0 )
						{ echo ">Δήλωση";  }
	              ?>
                  
                  </l>
                  
                  <l onClick="window.location.href='searchmen.php';">
                  <?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/searchmen.php" )==0  )
						{ echo ">Αναζήτηση";  }
	              ?>
                  
                  </l>
                   <l onClick="window.location.href='searchmen2.php';">
                  <?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/searchmen2.php" )==0  )
						{ echo ">Αναζήτηση";  }
	              ?>
                  
                  </l>
                  <l onClick="window.location.href='instructions.php';">
                  <?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/instructions.php" )==0  )
						{ echo ">Οδηγίες";  }
	              ?>
                  
                  </l>
			 </ul>
            </div>
         
          </td>
          <td width="89" height="31">
          
			 <div class="pb">
                  <p
                     id="logo"><a href="index.php"><img src ="./img/us.png" width=20 height=16.5 align="right"; style= "min-height:16.5px;"/>
                     
                     <a href="index.php"><img src ="./img/greek.png" width=20 height=15 align="right"; style= "min-height:7px; min-width:20px;"/>
                  </p>
	        </div>
         
          </td>
          
          <td width="179" height="31"><div class="faqs">

             <div class="faqs">
                
                <ul>
                  
				  <?php if( empty( $_SESSION[ 'logged_user' ] ) )
						{?> 
						<li onClick="window.location.href='eggrafh-sundesh.php';"><strong>Σύνδεση ή Εγγραφή</strong></li>
					<?php } 
						else{?>
						<li onClick="window.location.href='user_profil.php';"><strong>
							Welcome <?php echo $_SESSION['logged_user'];?> ! </strong></li>
							<?php echo "<li onClick=\"window.location.href='logout.php';\"><strong>Log out!</strong></li>";}?>
						 
                </ul>

             </div>
			 
			 
         
          </td>
        </tr>
      </table>     
      
      <table width="1038" height="190" border="0">
        <tr>
          <td width="184" height="186">&nbsp;
                  
                <div>
                  <p id="site_logo"><a href="index.php"><img src ="./img/logo.jpg" width=207 height=123 align="right"; style= "min-height:134px; min-width:134px;"/></p>
		        </div>
         
          </td>
              
          <td width="476">&nbsp;
                  
                 <div id="title">
                   <p id="text"><strong>ΗΛΕΚΤΡΟΝΙΚΗ ΥΠΗΡΕΣΙΑ<br>ΟΛΟΚΛΗΡΩΜΕΝΗΣ ΔΙΑΧΕΙΡΙΣΗΣ ΣΥΓΓΡΑΜΜΑΤΩΝ</strong></p>	
                 </div> 
	      
          </td>
              
          <td width="364">&nbsp;
                  
                  <div id="search">
		             <form method="get" action="https://www.google.gr/?q=nm#" target="_blank" >
	                    <input id="search" name="q" type="text" size="40" placeholder="Αναζήτηση..." />
                     </form>
	              </div>

          </td>
        </tr>
      </table>
      
      <table width="1037" border="0">
       <tr>
             <td width="1031">&nbsp;
                 <div id="menu">
		             <ul>
		      
                            <li  id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/index.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='index.php';">Αρχική Σελίδα</li>
                            </l>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/user_profil.php" )==0 || strcmp ( url() , "http://plai2.dyndns.org/eam/list_of_books.php" )==0 || strcmp ( url() , "http://plai2.dyndns.org/eam/statement.php" )==0 || strcmp ( url() , "http://plai2.dyndns.org/eam/statement2.php" )==0  || strcmp ( url() , "http://plai2.dyndns.org/eam/searchmen.php" )==0 ||  strcmp ( url() , "http://plai2.dyndns.org/eam/edit_profile.php")==0 ||  strcmp ( url() , "http://plai2.dyndns.org/eam/edit.php")==0 ||  strcmp ( url() , "http://plai2.dyndns.org/eam/instructions.php")==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='user_profil.php';">Υπηρεσίες προς φοιτητές
                            </li>
		                    <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/123" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='fail.php';">Υπηρεσίες προς εκδότες
                            </li>
		                    <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/123" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='fail.php';">Υπηρεσίες προς γραμματείες
                            </li>
		    
                     </ul>
                         
                  </div>
             </td>
        </tr>
      </table>
      
    </div>
       
	
    


	
