<html>
  <head>
  </head>
  <body link="#00a5b5" vlink="#00a5b5" alink="#00a5b5">
    <table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">
      <tbody>
        <tr>
          <td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
            <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
              <tbody>
                <tr>
                  <td colspan="4" valign="top" class="image-section" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff;border-bottom: 4px solid #0769bc;">
                    <a href="#">
                      <img class="top-image" src="assets/images/logo.png" style="line-height: 1;width: 174px;margin-bottom: 11px;" alt="Tenable Network Security">
                    </a>
                  </td>
                </tr>
                <tr>
                  <td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;background: #e7e7e7;">
                    <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                      <tbody>
                        
                        <tr>
                          <td class="text" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                            <div class="mktEditable" id="main_text">
                              Hello Sir,
                              <br>
                              <br>
                              Lorem ipsum dolor sit amet, conse tempor incididunt ut labore e
                              t dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe
                              rcitation ullamco laboris nisi . 
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
					
                  </td>
                </tr>
                <tr>
                </tr>
                <tr>
                  <td style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px; padding: 20px;">
                  	<?php 
                  		//echo '<pre>'; print_r($prodata); die;
                  		foreach ($prodata as $k=>$v){
                  	?>
	                    <div class="mktEditable" id="cta_try">
	                      <table border="0" cellpadding="0" cellspacing="0" class="mobile" style="width: 100%;font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
	                        <tbody>
	                          <tr>
	                            <td class="force-col" valign="top" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
	                              <table class="mb mt" style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;margin-bottom: 15px;margin-top: 0;width: 100%;/* text-align: left; */">
	                                <tbody>
	                                  <tr>
	                                    <td class="grey-block" style="/* margin-bottom: 52px; */border-collapse: collapse;border: 0;margin: 0;padding: 18px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;background-color: #f6f6f6;border-top: 3px solid #00a5b5;border-left: 1px solid #E6E6E6;border-right: 1px solid #E6E6E6;border-bottom: 1px solid #E6E6E6;width: 250px;text-align: left;padding: 15px !important;">
	                                      <span style="
	                                                   font-family: Arial, sans-serif;
	                                                   font-size: 20px;
	                                                   line-height: 31px;
	                                                   border-collapse: collapse;
	                                                   border: 0;
	                                                   margin: 0;
	                                                   padding: 0;
	                                                   -webkit-text-size-adjust: none;
	                                                   color: #555559;
	                                                   text-align: center;
	                                                   font-weight: bold;
	                                                   "><?php echo $v['proposal_unique_id']; ?>
	                                      </span>
	                                      <br>
	                                      <p class="row address flex-nowrap" style="
	                                                                                margin: 7px 0 0 0;
	                                                                                ">
	                                        <i class="material-icons text-muted">location : 
	                                        </i>
	                                        <span> <?php echo $v['cityname'].','.$v['name'];?>
	                                        </span>
	                                      </p>
	                                      <p class="row address flex-nowrap" style="
	                                                                                margin: 0;
	                                                                                ">
	                                        <i class="material-icons text-muted">Estimated Returns : 
	                                        </i>
	                                        <span> <?php echo $v['proposal_estimate_return']; ?> %
	                                        </span>
	                                      </p>
	                                      <p class="row address flex-nowrap" style="
	                                                                                margin: 0 0 17px 0px;
	                                                                                ">
	                                        <i class="material-icons text-muted">Total Investment Requested  : 
	                                        </i>
	                                        <span>
	                                          <b>$ <?php echo $v['proposal_amount_for_investment']; ?>
	                                          </b>
	                                        </span> 
	                                      </p>
	                                      <a style="color:#ffffff; background-color: #00a5b5;  border-top: 10px solid #00a5b5; 
	                                                border-bottom: 10px solid #00a5b5; border-left: 20px solid #00a5b5; border-right:
	                                                20px solid #00a5b5; border-radius: 3px; text-decoration:none;" href="https://work.beatlebuddy.com/investex/">Try Now
	                                      </a>
	                                    </td>
	                                  </tr>
	                                </tbody>
	                              </table>
								  
								    
								  
	                            </td>
	                          </tr>
	                        </tbody>
	                      </table>
	                    </div>
                    <?php 
                		}
                	?>
                  </td>
                </tr>											
                <tr>
                  <td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                    <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                      <tbody>
                        <tr>
                          <td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;text-align: center;">
                            <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                              <tbody>
                                <tr>
                                  <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                                    <a href="">
                                      <img src="https://info.tenable.com/rs/tenable/images/twitter-teal.png">
                                    </a>
                                  </td>
                                  <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                                    <a href="">
                                      <img src="https://info.tenable.com/rs/tenable/images/facebook-teal.png">
                                    </a>
                                  </td>
                                  <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                                    <a href="">
                                      <img src="https://info.tenable.com/rs/tenable/images/youtube-teal.png">
                                    </a>
                                  </td>
                                  <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                                    <a href="">
                                      <img src="https://info.tenable.com/rs/tenable/images/linkedin-teal.png">
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr bgcolor="#fff" style="border-top: 4px solid #00a5b5;">
                  <td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
                    <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                      <tbody>
                        <tr>
                          <td class="inside-footer" align="center" valign="middle" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 12px;line-height: 16px;vertical-align: middle;text-align: center;width: 580px;">
                            <div id="address" class="mktEditable">
                              <b>investex
                              </b>
                              <br>
                              2903 Avenue Z, ברוקלין, ניו יורק, ארה"ב
                              <br>
                              <a style="color: #00a5b5;" href="<?php echo SITE_URL; ?>">Contact Us
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <style>
      @media only screen and (max-width: 600px) {
        .main {
          width: 320px !important;
        }
        .top-image {
          width: 100% !important;
        }
        .inside-footer {
          width: 320px !important;
        }
        table[class="contenttable"] {
          width: 320px !important;
          text-align: left !important;
        }
        td[class="force-col"] {
          display: block !important;
        }
        td[class="rm-col"] {
          display: none !important;
        }
        .mt {
          margin-top: 15px !important;
        }
        *[class].width300 {
          width: 255px !important;
        }
        *[class].block {
          display:block !important;
        }
        *[class].blockcol {
          display:none !important;
        }
        .emailButton{
          width: 100% !important;
        }
        .emailButton a {
          display:block !important;
          font-size:18px !important;
        }
      }
      <style></style>
  </body>
</html>
