
<br />
<b>Notice</b>:  Undefined index: readingsCount in <b>/storage/ssd1/658/19825658/public_html/dashboard.php</b> on line <b>3</b><br />

<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <link rel="stylesheet" type="text/css" href="esp-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <header class="header">
        <h1> Collection Progress:</h1>
        <form method="get">
            <input type="number" name="readingsCount" min="1" placeholder="Number of readings (20)">
            <input type="submit" value="UPDATE">
        </form>
    </header>
<body>
    <!--
    <p>Last reading: 2023-11-06 13:14:18</p>
    <section class="content">
	    <div class="box gauge--1">
	    <h3>TEMPERATURE</h3>
              <div class="mask">
			  <div class="semi-circle"></div>
			  <div class="semi-circle--mask"></div>
			</div>
		    <p style="font-size: 30px;" id="temp">--</p>
		    <table cellspacing="5" cellpadding="5">
		        <tr>
		            <th colspan="3">Temperature 20 readings</th>
	            </tr>
		        <tr>
		            <td>Min</td>
                    <td>Max</td>
                    <td>Average</td>
                </tr>
                <tr>
                    <td>-167 &deg;C</td>
                    <td>100 &deg;C</td>
                    <td>-2470.6 &deg;C</td>
                </tr>
            </table>
        </div>
        <div class="box gauge--2">
            <h3>HUMIDITY</h3>
            <div class="mask">
                <div class="semi-circle"></div>
                <div class="semi-circle--mask"></div>
            </div>
            <p style="font-size: 30px;" id="humi">--</p>
            <table cellspacing="5" cellpadding="5">
                <tr>
                    <th colspan="3">Humidity 20 readings</th>
                </tr>
                <tr>
                    <td>Min</td>
                    <td>Max</td>
                    <td>Average</td>
                </tr>
                <tr>
                    <td>5000 %</td>
                    <td>5000 %</td>
                    <td>5000 %</td>
                </tr>
            </table>
        </div>
    </section> -->
<h2> View Latest 20 Readings</h2>
            <table cellspacing="5" cellpadding="5" id="tableReadings">
                <tr>
                    <th>ID</th>
                    <th>Sensor</th>
                    <th>Location</th>
                    <th>Volume <br> %</th>
                    <th>Weight</th>
                    <th>Density <br>(g/cm3)</th>
                    <th>Timestamp</th>
                </tr><tr>
                    <td>740</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>100</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:14:18</td>
                  </tr><tr>
                    <td>739</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>-167</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:13:43</td>
                  </tr><tr>
                    <td>738</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>-5985</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:13:04</td>
                  </tr><tr>
                    <td>737</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>-5985</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:12:31</td>
                  </tr><tr>
                    <td>736</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>-5986</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:11:51</td>
                  </tr><tr>
                    <td>735</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>-190</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:11:04</td>
                  </tr><tr>
                    <td>734</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>100</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:10:16</td>
                  </tr><tr>
                    <td>733</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>100</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:09:42</td>
                  </tr><tr>
                    <td>732</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>100</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:08:59</td>
                  </tr><tr>
                    <td>731</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>-5985</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:08:25</td>
                  </tr><tr>
                    <td>730</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>-5984</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:07:43</td>
                  </tr><tr>
                    <td>729</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>-5985</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:07:10</td>
                  </tr><tr>
                    <td>728</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>-5984</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:06:30</td>
                  </tr><tr>
                    <td>727</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>-222</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:04:13</td>
                  </tr><tr>
                    <td>726</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>100</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:02:56</td>
                  </tr><tr>
                    <td>725</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>100</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:01:35</td>
                  </tr><tr>
                    <td>724</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>100</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 13:00:05</td>
                  </tr><tr>
                    <td>723</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>100</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 12:59:24</td>
                  </tr><tr>
                    <td>722</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>-1765</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 12:58:05</td>
                  </tr><tr>
                    <td>721</td>
                    <td>Ultrasonic</td>
                    <td>Ruiru</td>
                    <td>-5974</td>
                    <td>5000</td>
                    <td>0</td>
                    <td>2023-11-06 12:57:15</td>
                  </tr></table>
<script>
    var value1 = 100;
    var value2 = 5000;
    setTemperature(value1);
    setHumidity(value2);

    function setTemperature(curVal){
    	//set range for Temperature in Celsius -5 Celsius to 38 Celsius
    	var minTemp = -5.0;
    	var maxTemp = 38.0;
        //set range for Temperature in Fahrenheit 23 Fahrenheit to 100 Fahrenheit
    	//var minTemp = 23;
    	//var maxTemp = 100;

    	var newVal = scaleValue(curVal, [minTemp, maxTemp], [0, 180]);
    	$('.gauge--1 .semi-circle--mask').attr({
    		style: '-webkit-transform: rotate(' + newVal + 'deg);' +
    		'-moz-transform: rotate(' + newVal + 'deg);' +
    		'transform: rotate(' + newVal + 'deg);'
    	});
    	$("#temp").text(curVal + ' ºC');
    }

    function setHumidity(curVal){
    	//set range for Humidity percentage 0 % to 100 %
    	var minHumi = 0;
    	var maxHumi = 100;

    	var newVal = scaleValue(curVal, [minHumi, maxHumi], [0, 180]);
    	$('.gauge--2 .semi-circle--mask').attr({
    		style: '-webkit-transform: rotate(' + newVal + 'deg);' +
    		'-moz-transform: rotate(' + newVal + 'deg);' +
    		'transform: rotate(' + newVal + 'deg);'
    	});
    	$("#humi").text(curVal + ' %');
    }

    function scaleValue(value, from, to) {
        var scale = (to[1] - to[0]) / (from[1] - from[0]);
        var capped = Math.min(from[1], Math.max(from[0], value)) - from[0];
        return ~~(capped * scale + to[0]);
    }
</script>
<div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://www.000webhost.com/static/default.000webhost.com/images/powered-by-000webhost.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&¬ification.length>0&&null!=mainContent && new Date().toISOString().slice(0, 10) > '2023-10-29' && new Date().toISOString().slice(0, 10) < '2023-11-27'){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 100%; }} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); max-width: 350px; border: 0; border-radius: 3px; background-color: #ff4546 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Claim deal</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="The Biggest Ever <span style='color: #FF5C62;'>Black Friday</span> Sale<div style='font-size: 16px;line-height: 24px;font-weight: 400;margin-top: 12px;'><div style='display: flex;justify-content: flex-start;align-items: center;'><img src='https://www.000webhost.com/static/default.000webhost.com/images/generic/green-check-mark.png' alt='' style='margin-right: 10px; width: 20px;'>Managed WordPress Hosting</div><div style='display: flex;justify-content: flex-start;align-items: center;'><img src='https://www.000webhost.com/static/default.000webhost.com/images/generic/green-check-mark.png' alt='' style='margin-right: 10px; width: 20px;'>WordPress Acceleration</div><div style='display: flex;justify-content: flex-start;align-items: center;'><img src='https://www.000webhost.com/static/default.000webhost.com/images/generic/green-check-mark.png' alt='' style='margin-right: 10px; width: 20px;'>Support from WordPres Experts 24/7</div></div>",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 46px; font-weight: 700;');h2Tag=document.createElement("H2");h2Tag.innerHTML="<span style='font-size: 20px'>$</span>2.49<span style='font-size: 20px'>/mo</span>",h2Tag.setAttribute("style",'color: white; margin: 10px 0 0 0; font-family: "Roboto", sans-serif; font-size: 60px; font-weight: 700; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="<span style='text-decoration:line-through; font-size: 14px; color:#727586'>$11.99.mo</span><br>+ 2 Months Free",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 20px; font-weight: 700; margin: 0 0 15px; 0');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper" style="height: 90%"><img class="web-hosting-90-off-image" src="https://www.000webhost.com/static/default.000webhost.com/images/sales/bf2023/hero.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}else if(null!=wordpressAdminBody&¬ification.length>0&&null!=mainContent){var bulletPoints = mainContent.getElementsByTagName('li');var replacement=['Increased performance (up to 5x faster) - Thanks to Hostinger’s WordPress Acceleration and Caching solutions','WordPress AI tools - Creating a new website has never been easier','Weekly or daily backups - Your data will always be safe','Fast and dedicated 24/7 support - Ready to help you','Migration of your current WordPress sites to Hostinger is automatic and free!','Try Premium Web Hosting now - starting from $1.99/mo'];for (var i=0;i<bulletPoints.length;i++){bulletPoints[i].innerHTML = replacement[i];}}</script></body>
</html>