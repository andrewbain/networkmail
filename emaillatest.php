<?php 
session_start();
include 'input.php'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>


    <style>
        @import url(http://fonts.googleapis.com/css?family=Lato);
        #outlook a { 
  padding:0; 
} 
body{
    border: 0;
    padding: 0;
    margin: 0;
}
body, table.body, h1, h2, h3, h4, h5, h6, p, td { 
  color: #222222;
  font-family: 'Lato', Helvetica Neue, Helvetica, sans-serif;
  font-weight: normal; 
  padding:0; 
  margin: 0;
  line-height: 1.3;
}


      @media only screen and (max-width: 660px){
            .logo img{
                max-width: 120px;
                
            }
            table.contacts td{
                width: 240px !important; 
            }
           table.mailcontent {
                width: 480px !important; 
                padding: 0 !important;    
           
            
            .title h1{
                font-size: 24px;
            }
           
            .footer h1{
                font-size: 24px;
            }
            .footer p{
                font-size: 10px;
            }
            table.footer  {
                width: 480px !important;
                margin: 0 auto;
            }
            table.footer td {
                width: 480px !important;
                margin: 0 auto;
            }
            
            table.logo {
                width: 480px !important;
                margin: 0 auto;
            }
            
        }
        @media only screen and (max-width: 468px) {
            .logo img{
                max-width: 80px;
            }
            table.mailcontent {
                width: 100% !important;
            }
           
            table .mailcontent td {
                padding-left: 10px !important;
                padding-bottom: 10px !important;
            }
            
            table.data {
                width: 100% !important;
                margin: 0 auto;
            }
            table.data td{
                width: 100% !important;
                margin: 0 auto;
            }
            table.colleague{
                width: 100% !important;
                margin: 0 auto;
            }
            table.relationship{
                width: 100% !important;
                margin: 0 auto;
            }
            table.circles {
                width: 320px !important;
                margin: 0 auto;
            }
            table.circles td{
                width: 320px !important;
                margin: 0 auto;
            }
            table.footer td {
                width: 100% !important;
                margin: 0 auto;
            }
            table.logo{
                width: 100% !important;
                margin: 0 auto;
            }
            .title p{
                font-size: 10px;
                width: 80%;
            }
        
        }
    </style>
  </head>
  <body bgcolor="#EEEEEE">
      <table class="body" bgcolor="#d5d5d5" width="100%" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td class="center" align="center" valign="top">
           
              <!-- Email Content -->
       
                <table class="data" align="center" width="320px" bgcolor="#FAFAFA" cellpadding="0" cellspacing="0">
                              <tr>
                                  <td>
                                      <table class="contact" width="320px" align="left">
                                          <tr>
                                              <?php echo '<td  valign="bottom" style="padding-left: 5px; padding-top: 5px;"> <p style="color:#878787; font-size:20px">'.$contactName.'</p>'; ?>                
                                              </td>
                                          </tr>
                                       </table>
                                      
                                      
                                  </td>
                              </tr>
                            <tr>
                                <td>
                                
                                    <table align="center" class="circles"  width="320px" bgcolor="#FAFAFA" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td align="center" width="320px">
                                                <img src="imageGen.php" /> 
                                            </td>
                                        </tr> 
                                    </table>
                                    
                                    <table class="colleague" width="320px" align="right" >
                                        <tr>
                                            <td valign="bottom" style="text-align: right; padding-bottom:5px; padding-right: 5px">
                                          <?php echo ' <p style="color:#878787; font-size:20px"><br>'.$colleagueName.'</p>'; ?>
                                            </td>
                                        </tr>
                                    </table> 
                                    <table class="relationship" width="320px" align="center" >
                                          <tr>
                                              <td valign="bottom" style="padding-left: 5px; padding-bottom: 5px;"> <p style="color:#878787; font-size:20px"><?php echo 'Relationship Score: '. $_POST[relationship] ?></p>
                                                <p style="color:#878787; font-size:16px">Last Contact: 20th March 2015</p>
                                            </td>
                                          </tr>
                                    </table>
                                      
                                      
                                  </td>
                                </tr>           
                          </table>
              
                            <table class="footer">
                              <tr>
                                  <td style="text-align: center; margin-top: 50px; padding: 10px;">
                                      <h2>Have a good day!</h2>
                                      <br>
                                          <h5>Further potentially useful relationships can be found at <a href="http://www.networker.london">networker.london</a><br>
                                      To stop receiving emails about overlaps with this contact again <a href="#">click here</a></h5>
                                  </td>
                              </tr>   
                            </table>
                        
              <table class="logo" width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                  <tr class="footer" width="640px" bgcolor="#1C1C1C">
                      <td  border="0" align="right" style="padding: 5px;">
                          <img  src="images/networkerlogo.png"> 
                      </td>
                      <td class="title" align="left">
                                <h1  style="color:#ffffff;">Networker</h1>
                                <p  style="color:#ffffff;">Professional Networking Technology</p>
                      </td>
                  </tr>
              </table>
                         
                          
      
        </td>
      </tr>
    </table>
  </body>
</html>




