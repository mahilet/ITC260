<?php
echo '
    <link rel="stylesheet" href="http://www.tcbcommercialproperties.com/sandbox/css/formstyles.css" type="text/css" media="all" />
    <h1>Gigs Form</h1>
    
<form action="#" method="post" id="contact">
    <fieldset>
        <legend><h2><strong>Gig Opportunity</strong></h2></legend>     
        <label><em>Company Name</em></label>
            <input type="text" name="CompanyName" id="CompanyName" placeholder="Company Name">    <br>    
        
        <label><em>Company Address</em></label>
            <input type="text" name="CompanyAddress" id="CompanyAddress" placeholder="Company Address">    <br> 
            
        <label><em>City</em></label>
            <input type="text" name="City" id="City" placeholder="City">    <br> 
            
        <label><em>State</em></label>
            <input type="text" name="State" id="State" placeholder="State">    <br>             
            
        <label><em>Zip Code</em></label>
            <input type="text" name="ZipCode" id="ZipCode" placeholder="Zip Code">    <br> 
         
        <label><em>Company Phone</em></label>
            <input type="text" name="CompanyPhone" id="CompanyPhone" placeholder="Phone Number">    <br>            
            
        <label><em>Company Website</em></label>
            <input type="text" name="CompanyWebsite" id="CompanyWebsite" placeholder="Company Website">    <br>   
            
        <label><em>Gig Posting Date</em>&nbsp(mm/dd/yyyy)</label>
            <input type="date" name="Date" id="Date" placeholder="Date Gig Posted">  <br>    
			
				<label><em>Gig Closing Date</em>&nbsp(mm/dd/yyyy)</label>  
            <input type="date" name="Date" id="Date" placeholder="Date Gig closing">   
<br>             
        <fieldset>
        <legend><h3><strong>Company Contact</strong></h3></legend>     
        <label><em>First Name</em></label>
            <input type="text" name="FirstName" id="FirstName" placeholder="First Name">    <br> 
        
        <label><em>Last Name</em></label>
            <input type="text" name="LastName" id="LastName" placeholder="Last Name">    <br> 
        
        <label><em>Email</em></label>
            <input type="email" name="Email" id="Email" placeholder="Gig Contact Email">    <br> 
            
        <label><em>Phone</em></label>
            <input type="text" name="Phone" id="Phone" placeholder="Gig Contact Phone">    <br>             
        </fieldset>
        
        <fieldset>
        <legend><h3><strong>Qualifications (Hard Skills)</strong></h3></legend>        
        <label><em>Coding Languages</em>&nbsp(Please select all that apply)</label>    <br> 
            <p><input type="checkbox" name="Languages []" id="Language1" value="csharp">C#</p>
            <p><input type="checkbox" name="Languages []" id="Language2" value="c">C</p>
            <p><input type="checkbox" name="Languages []" id="Language3" value="cplus">C++</p>
            <p><input type="checkbox" name="Languages []" id="Language4" value="objectivec">Objective-C</p>
            <p><input type="checkbox" name="Languages []" id="Language5" value="coffeescript">CoffeeScript</p>            
            <p><input type="checkbox" name="Languages []" id="Language6" value="html/css">Html/CSS</p>
            <p><input type="checkbox" name="Languages []" id="Language7" value="java">Java</p>            
            <p><input type="checkbox" name="Languages []" id="Language8" value="javascript">JavaScript</p>            
            <p><input type="checkbox" name="Languages []" id="Language9" value="less">Less</p>
            <p><input type="checkbox" name="Languages []" id="Language10" value="perl">Perl</p>            
            <p><input type="checkbox" name="Languages []" id="Language11" value="php">PHP</p>
            <p><input type="checkbox" name="Languages []" id="Language12" value="python">Python</p>
            <p><input type="checkbox" name="Languages []" id="Language13" value="ruby">Ruby</p>            
            <p><input type="checkbox" name="Languages []" id="Language14" value="sass">SASS</p>
            <p><input type="checkbox" name="Languages []" id="Language15" value="visualbasic">Visual Basic .NET Programming</p>            
            <p><input type="checkbox" name="Languages []" id="Language16" value="other">Other</p>
<br>
        <label><em>Software</em>&nbsp(Please select all that apply)</label>
            <p><input type="checkbox" name="Software []" id="Software1" value="adobeai">Adobe Illustrator</p>
            <p><input type="checkbox" name="Software []" id="Software2" value="adobeind">Adobe InDesign</p>
            <p><input type="checkbox" name="Software []" id="Software3" value="adobephsp">Adobe Photoshop</p>
            <p><input type="checkbox" name="Software []" id="Software4" value="adobedream">Adobe Dreamweaver</p>
            <p><input type="checkbox" name="Software []" id="Software5" value="autocad">AutoCAD</p>
            <p><input type="checkbox" name="Software []" id="Software6" value="msexcel">Microsoft Excel</p>            
            <p><input type="checkbox" name="Software []" id="Software7" value="msoffice">Microsoft Office</p>
            <p><input type="checkbox" name="Software []" id="Software8" value="msoutlook">Microsoft Outlook</p>            
            <p><input type="checkbox" name="Software []" id="Software9" value="mspub">Microsoft Publisher</p>            
            <p><input type="checkbox" name="Software []" id="Software10" value="msword">Microsoft Word</p>
            <p><input type="checkbox" name="Software []" id="Software11" value="msvisual">Microsoft Visual</p>            
            <p><input type="checkbox" name="Software []" id="Software12" value="mysql">MySQL/SQL</p>
            <p><input type="checkbox" name="Software []" id="Software13" value="opensrc">Open Source Software</p>
            <p><input type="checkbox" name="Software []" id="Software14" value="qbs">QuickBooks</p>            
            <p><input type="checkbox" name="Software []" id="Software15" value="sharepoint">Sharepoint</p>
            <p><input type="checkbox" name="Software []" id="Software16" value="cmdline">Command Line Basics</p>            
            <p><input type="checkbox" name="Software []" id="Software17" value="other">Other</p>
<br>
        <label><em>Hardware</em>&nbsp(Please select all that apply)</label>
            <p><input type="checkbox" name="Hardware []" id="Hardware1" value="applemac">MAC</p>
            <p><input type="checkbox" name="Hardware []" id="Hardware2" value="windowsms">Windows</p>
            <p><input type="checkbox" name="Hardware []" id="Hardware3" value="iphone">iPhone</p>
            <p><input type="checkbox" name="Hardware []" id="Hardware4" value="android">Android</p>
            <p><input type="checkbox" name="Hardware []" id="Hardware5" value="tablet">Tablet</p>            
            <p><input type="checkbox" name="Hardware []" id="Hardware6" value="msserver">Microsoft Office Server</p>
            <p><input type="checkbox" name="Hardware []" id="Hardware7" value="other">Other</p>            
<br>
        <label><em>Networks</em>&nbsp(Please select all that apply)</label>
            <p><input type="checkbox" name="Networks []" id="Network1" value="san">Storage area network, or SAN</p>
            <p><input type="checkbox" name="Networks []" id="Network2" value="epn">Enterprise private network, or EPN</p>
            <p><input type="checkbox" name="Networks []" id="Network3" value="vpn">Virtual private network, or VPN</p>
            <p><input type="checkbox" name="Networks []" id="Network4" value="pan">Personal area network, or PAN</p>
            <p><input type="checkbox" name="Networks []" id="Network5" value="lan">Local area network, or LAN</p>            
            <p><input type="checkbox" name="Networks []" id="Network6" value="man">Metropolitan area network, or MAN</p>
            <p><input type="checkbox" name="Networks []" id="Network7" value="wan">Wide area network, or WAN</p>            
        </fieldset>
<br>        
        <fieldset>
        <legend><h3><strong>Qualifications (Soft Skills)</strong></h3></legend>        
        <label><em>Skill Sets</em>&nbsp(Please select all that apply)</label>    <br> 
            <p><input type="checkbox" name="Skills []" id="Skill1" value="analytics">Analytics</p>
            <p><input type="checkbox" name="Skills []" id="Skill2" value="communication">Communication</p>
            <p><input type="checkbox" name="Skills []" id="Skill3" value="contentmgmt">Content Management</p>
            <p><input type="checkbox" name="Skills []" id="Skill4" value="copywriting">Copywriting</p>
            <p><input type="checkbox" name="Skills []" id="Skill5" value="creativity">Creativity</p>            
            <p><input type="checkbox" name="Skills []" id="Skill6" value="determination">Determination</p>
            <p><input type="checkbox" name="Skills []" id="Skill7" value="flexibility">Flexibility</p>            
            <p><input type="checkbox" name="Skills []" id="Skill8" value="interpersonal">Interpersonal Skills</p>            
            <p><input type="checkbox" name="Skills []" id="Skill9" value="leadership">Leadership</p>
            <p><input type="checkbox" name="Skills []" id="Skill10" value="listen">Listening</p>            
            <p><input type="checkbox" name="Skills []" id="Skill11" value="logicthink">Logical Thinking</p>
            <p><input type="checkbox" name="Skills []" id="Skill12" value="mgmtskill">Management Skills</p>
            <p><input type="checkbox" name="Skills []" id="Skill13" value="mentoring">Mentoring</p>            
            <p><input type="checkbox" name="Skills []" id="Skill14" value="negotiation">Negotiation</p>
            <p><input type="checkbox" name="Skills []" id="Skill15" value="personval">Personal Values</p>
            <p><input type="checkbox" name="Skills []" id="Skill16" value="presention">Presentation</p>            
            <p><input type="checkbox" name="Skills []" id="Skill17" value="prbslvr">Problem Solving and Adaptability</p>            
            <p><input type="checkbox" name="Skills []" id="Skill18" value="teamwork">Teamwork</p>            
            <p><input type="checkbox" name="Skills []" id="Skill19" value="testbug">Testing/Debugging</p>            
            <p><input type="checkbox" name="Skills []" id="Skill20" value="timemgmt">Time Management</p>
            <p><input type="checkbox" name="Skills []" id="Skill21" value="uxui">UX/UI</p>            
            <p><input type="checkbox" name="Skills []" id="Skill22" value="other">Other</p>
        </fieldset>            
<br>
        <fieldset>
        <legend><h3><strong>Education</strong></h3></legend>    
        <label><em>Certificate</em>&nbsp(Please select all that apply)</label>
            <p><input type="checkbox" name="Certificate []" id="Certificate1" value="webdesign">Web Design</p>
            <p><input type="checkbox" name="Certificate []" id="Certificate2" value="webdev">Web Development</p>
            <p><input type="checkbox" name="Certificate []" id="Certificate3" value="dbadmin">Database Administration & Development</p>
            <p><input type="checkbox" name="Certificate []" id="Certificate4" value="businfo">Business Information Technology</p>
            <p><input type="checkbox" name="Certificate []" id="Certificate5" value="networkadmin">Network Design and Administration</p>            
            <p><input type="checkbox" name="Certificate []" id="Certificate6" value="programming">Programming</p>
            <p><input type="checkbox" name="Certificate []" id="Certificate7" value="mobiledev">Mobile Product Development Specialist</p>            
            <p><input type="checkbox" name="Certificate []" id="Certificate8" value="other">Other</p>           
<br>
        <label><em>Associate of Applied Science</em>&nbsp(Please select all that apply)</label>
            <p><input type="checkbox" name="Associates []" id="aas1" value="aaappsupport">Applications Support</p>
            <p><input type="checkbox" name="Associates []" id="aas2" value="aanetdesign">Network Design and Administration</p>
            <p><input type="checkbox" name="Associates []" id="aas3" value="aaprogramming">Programming</p>
            <p><input type="checkbox" name="Associates []" id="aas4" value="aawebdesign">Web Design</p>
            <p><input type="checkbox" name="Associates []" id="aas5" value="aawebdev">Web Development</p>            
            <p><input type="checkbox" name="Associates []" id="aas6" value="aabusinfotech">Business Information Technology</p>
            <p><input type="checkbox" name="Associates []" id="aas7" value="aagraphicdesign">Graphic Design</p>            
            <p><input type="checkbox" name="Associates []" id="aas8" value="other">Other</p>
        </fieldset>
<br>
        <fieldset>
        <legend><h3><strong>Work Experience</strong></h3></legend>    
        <label><em>Experience</em></label><br>
            <textarea rows="25" name="experience" id="experience"></textarea>
        </fieldset>
<br>
        <fieldset>
        <legend><h3><strong>Gig Interview Details</strong></h3></legend>             
        <label><em>Interview Location</em></label>
            <select name="InterviewLocation">
                <option value="select">Select One</option>
                <option value="scc">Seattle Central Campus</option>
                <option value="ncc">North Central Campus</option>
                <option value="southcc">South Central Campus</option>
                <option value="comaddress">Company Address</option>
                <option value="other">Other</option>
            </select>
<br>
<br>
        <label><em>Preferred Appointment Time</em></label>
            <select name="AppointmentTime">
                <option value="select">Select One</option>
                    <option value="EightAm">8am</option>
                    
                    <option value="NineAm">9am</option>
                    
                    <option value="TenAm">10am</option>
                    
                    <option value="ElevenAm">11am</option>
                    
                    <option value="Noon">12am</option>
                    
                    <option value="OnePm">1pm</option>
                    
                    <option value="TwoPm">2pm</option>
                    
                    <option value="ThreePm">3pm</option>
                    
                    <option value="FourPm">4pm</option>
                    
                    <option value="FivePm">5pm</option>
                    
                    <option value="SixPm">6pm</option>
                    
                    <option value="SevenPm">7pm</option>
                    
                    <option value="EightPm">8pm</option>
                    
                    <option value="NinePm">9pm</option>
                    
                    <option value="TenPm">10pm</option>
            </select>
        </fieldset>    
<br>
<br>
        <fieldset>
        <legend><h3><strong>Project/Gig Description</strong></h3></legend>    
        <label><em>Gig Outline</em></label><br>
            <textarea rows="25" name="gigoutline" id="gigoutline"></textarea>
			</fieldset>
<br>    
<br>
        <fieldset>
        <legend><h3><strong>Project/special Instruction</strong></h3></legend>    
        <label><em>Instruction</em></label><br>
            <textarea rows="25" name="gigoutline" id="gigoutline"></textarea>
			</fieldset>
<br>

<label><em>Pay rate</em></label>
            <input type="text" name="Pay rate" id="payRate" placeholder="Pay rate">    <br>  
        <label><em></em></label><br>       
        <input type="submit" value="Submit">
    </fieldset>
</form> ';
?>

