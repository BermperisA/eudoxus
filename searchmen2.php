<?php include('header.php'); ?>


<script>
window.onload = function() {
document.getElementById('complex_search_no').onchange = disablefield;
document.getElementById('complex_search_yes').onchange = disablefield;
document.getElementById('complex_search_no').checked = true
document.getElementById('complex_search_yes').checked = false
disablefield();
}

function disablefield()
{
if ( document.getElementById('complex_search_no').checked == true ){
document.getElementById('complex_search_yes').checked = false
document.getElementById('isbntx').value = '';
document.getElementById('isbntx').disabled = true
document.getElementById('titletx').value = '';
document.getElementById('titletx').disabled = true
document.getElementById('departmentx').value = '';
document.getElementById('departmentx').disabled = true

}
else if (document.getElementById('complex_search_yes').checked == true ){
document.getElementById('complex_search_no').checked = false
document.getElementById('isbntx').disabled = false;
document.getElementById('titletx').disabled = false;
document.getElementById('departmentx').disabled = false;
}
}

</script>

		
     
<div>
<table width="1056" >
      <tr>
         <td width="170">
               
               

               

            
            <div id="sideButtons">
                 <div id="button"> 
                    <a href='user_profil.php'><img src="img/stud.png" width="141" height="70" type="submit" value=""  /></a>
                 </div>
                 
                 <div id="button"> 
                   <a href='fail.php'><img src="img/trade.png" width="141" height="70" type="submit" value=""  /></a>
                 </div>


                 <div id="button"> 
                   <a href='searchmen2.php'><img src="img/search.png" width="141" height="70" type="submit" value=""  /></a>
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
 
        
            <div style="margin-top:8%;"> 
			        
                    <form id="search_form" action="search2.php" method="GET" name="my_form">
				      
                      <div>
                         <p style="margin-top:0%;border-radius:5px;" >
                           <img src ="./img/search_lib.jpg"  width=114 height=114 align="left"; style= "min-height:16.5px;"/>
                      </p><br><br><br><br>
                      </div> 
                      
                     
                       <p id="book_search">
		                   
	                        <input id="book_search" action="search2.php" method="GET" name="searchtx"  type="text" size="40" placeholder="Αναζήτηση Βιβλίου..." />
                           
                       </p>
	                   
                       
                        
                        <div  style="margin-top:5%;">
                           <label style="margin-left:39%;" for="isbnlb"><u>Σύνθετη Αναζήτηση:</u></label><br>
                           <input style="margin-left:46%;" type="radio" name="Comlex_Search_radio" value="no" id="complex_search_no"/>
                           <input style="margin-left:2%;"  type="radio" name="Comlex_Search_radio" value="yes" id="complex_search_yes"/><br><br>
                        </div>
                      
                       <div style="height:80%;margin-top:0%;"> 
                         <label style="margin-left:30%;" for="isbnlb"><u>ISBN:</u></label>
                         <label style="margin-left:14.5%;" for="titlelb"><u>Εκδότης:</u></label><br>
                         <input style="margin-left:30%;" type="txt" name="isbntx" id="isbntx">
                         <input type="txt" name="publtx" id="titletx"><br><br>
                         <label style=" margin-left:41%;" for="departmentlb"><u>Τμήμα:</u></label><br>
                         <input style=" margin-left:-14.5%;"type="txt" name="departmentx" id="departmentx">
				         <input type="submit" value="Αναζήτηση" onClick="window.location.href='search2.php';" name="searchbt" id="searchbt"><br>
                       </div>
		          </form>
		    </div>
       </td>
         
    <tr>
</table>         
</div>


		
		
<?php include('footer.php'); ?>