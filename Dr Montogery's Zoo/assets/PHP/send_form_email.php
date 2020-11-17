<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "blakedominator@gmail.com";
 
    $email_subject = "A SUBJECT";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->

<link href="tutorials_styles.css" rel="stylesheet" type="text/css" />  
 
 
<body>
<div id="container">
  <header id="header"><h1><span id="header_icon"><img src="pics/header_icon.png" alt="Steve" width="52" height="70"/></span>Steve's PC Tutorials</h1>
  </header>
  <nav id="nav">

  <div class="nav_main" id="nav_home" onClick="MM_goToURL('parent','index.html');return document.MM_returnValue" onMouseOver="MM_changeProp('nav_home','','backgroundColor','#07889B','DIV')" onMouseOut="MM_changeProp('nav_home','','backgroundColor','#E37222','DIV')">Home</div>
  <div class="nav_main" id="nav_ms" onClick="MM_goToURL('parent','ms.html');return document.MM_returnValue" onMouseOver="MM_changeProp('nav_ms','','backgroundColor','#07889B','DIV');MM_showHideLayers('nav_word','','show','nav_excel','','show','nav_access','','show','nav_powerpoint','','show')" onMouseOut="MM_changeProp('nav_ms','','backgroundColor','#E37222','DIV');MM_showHideLayers('nav_word','','hide','nav_excel','','hide','nav_access','','hide','nav_powerpoint','','hide')">Microsoft</div>
  <div class="nav_main" id="nav_adobe" onClick="MM_goToURL('parent','adobe.html');return document.MM_returnValue" onMouseOver="MM_changeProp('nav_adobe','','backgroundColor','#07889B','DIV');MM_showHideLayers('nav_photoshop','','show','nav_dreamweaver','','show','nav_animation','','show')" onMouseOut="MM_changeProp('nav_adobe','','backgroundColor','#E37222','DIV');MM_showHideLayers('nav_photoshop','','hide','nav_dreamweaver','','hide','nav_animation','','hide')">Adobe</div>
  <div id="nav_general" class="nav_main" onClick="MM_goToURL('parent','general.html');return document.MM_returnValue" onMouseOver="MM_changeProp('nav_general','','backgroundColor','#07889B','DIV')" onMouseOut="MM_changeProp('nav_general','','backgroundColor','#E37222','DIV')">General</div>
  
  <div class="nav_main" id="nav_word" onClick="MM_goToURL('parent','word.html');return document.MM_returnValue" onMouseOver="MM_changeProp('nav_word','','backgroundColor','#07889B','DIV');MM_showHideLayers('nav_word','','show','nav_excel','','show','nav_access','','show','nav_powerpoint','','show')" onMouseOut="MM_changeProp('nav_word','','backgroundColor','#E37222','DIV');MM_showHideLayers('nav_word','','hide','nav_excel','','hide','nav_access','','hide','nav_powerpoint','','hide')">Word</div>
  <div id="nav_excel" class="nav_main" onClick="MM_goToURL('parent','excel.html');return document.MM_returnValue" onMouseOver="MM_changeProp('nav_excel','','backgroundColor','#07889B','DIV');MM_showHideLayers('nav_word','','show','nav_excel','','show','nav_access','','show','nav_powerpoint','','show')" onMouseOut="MM_changeProp('nav_excel','','backgroundColor','#E37222','DIV');MM_showHideLayers('nav_word','','hide','nav_excel','','hide','nav_access','','hide','nav_powerpoint','','hide')">Excel</div>
  <div id="nav_access" class="nav_main" onClick="MM_goToURL('parent','access.html');return document.MM_returnValue" onMouseOver="MM_changeProp('nav_access','','backgroundColor','#07889B','DIV');MM_showHideLayers('nav_word','','show','nav_excel','','show','nav_access','','show','nav_powerpoint','','show')" onMouseOut="MM_changeProp('nav_access','','backgroundColor','#E37222','DIV');MM_showHideLayers('nav_word','','hide','nav_excel','','hide','nav_access','','hide','nav_powerpoint','','hide')">Access</div>
  <div id="nav_powerpoint" class="nav_main" onClick="MM_goToURL('parent','powerpoint.html');return document.MM_returnValue" onMouseOver="MM_changeProp('nav_powerpoint','','backgroundColor','#07889B','DIV');MM_showHideLayers('nav_word','','show','nav_excel','','show','nav_access','','show','nav_powerpoint','','show')" onMouseOut="MM_changeProp('nav_powerpoint','','backgroundColor','#E37222','DIV');MM_showHideLayers('nav_word','','hide','nav_excel','','hide','nav_access','','hide','nav_powerpoint','','hide')">PowerPoint</div>

  <div class="nav_main" id="nav_photoshop" onClick="MM_goToURL('parent','photoshop.html');return document.MM_returnValue" onMouseOver="MM_changeProp('nav_photoshop','','backgroundColor','#07889B','DIV');MM_showHideLayers('nav_photoshop','','show','nav_dreamweaver','','show','nav_animation','','show')" onMouseOut="MM_changeProp('nav_photoshop','','backgroundColor','#E37222','DIV');MM_showHideLayers('nav_photoshop','','hide','nav_dreamweaver','','hide','nav_animation','','hide')">PhotoShop</div>
  <div class="nav_main" id="nav_dreamweaver" onClick="MM_goToURL('parent','dreamweaver.html');return document.MM_returnValue" onMouseOver="MM_changeProp('nav_dreamweaver','','backgroundColor','#07889B','DIV');MM_showHideLayers('nav_photoshop','','show','nav_dreamweaver','','show','nav_animation','','show')" onMouseOut="MM_changeProp('nav_dreamweaver','','backgroundColor','#E37222','DIV');MM_showHideLayers('nav_photoshop','','hide','nav_dreamweaver','','hide','nav_animation','','hide')">DreamWeaver</div>
  <div id="nav_animation" class="nav_main" onClick="MM_goToURL('parent','animate.html');return document.MM_returnValue" onMouseOver="MM_changeProp('nav_animation','','backgroundColor','#07889B','DIV');MM_showHideLayers('nav_photoshop','','show','nav_dreamweaver','','show','nav_animation','','show')" onMouseOut="MM_changeProp('nav_animation','','backgroundColor','#E37222','DIV');MM_showHideLayers('nav_photoshop','','hide','nav_dreamweaver','','hide','nav_animation','','hide')">Animation</div>
  
  </nav>
  <main id="main_content">
    <p><img src="pics/Sarah-Drawing-Steve.png" alt="" width="144" height="250" align="right" hspace="10"/>Thank you for getting in touch.</p>
    <p>I'll get back to you soon!</p>
  </main>
  <footer id="footer"><a href="index.html">Home</a> | <a href="ms.html">Microsoft</a> | <a href="adobe.html">Adobe</a> | <a href="general.html">General</a><br>
    All content &copy; Stephen O'Neil 2017<br>
    Tutorials may not be modified without permission
  </footer>
</body>
</html> 
 
 
<?php
 
}
 
?>