  <script type="text/javascript" src="<?php echo site_url(); ?>js/loan.js"></script>
  <script type="text/javascript" src="<?php echo site_url(); ?>js/iy_widgets.js"></script>
  <script type="text/javascript" src="<?php echo site_url(); ?>js/HtmlCanvas.js"></script>
<script type ="text/javascript">

      function validateEMI() {

        if (validateText(HLE_LoanAmount) && validateText(HLE_Rate) && validateText(HLE_Period))
            return true;
        else
            return false;
    }
    var ComputeFunction = function CalculateEMI() {
        if (validateEMI()) {
            var LoanAmountHME = Number(HLE_LoanAmount.val());
            var Rate = Number(HLE_Rate.val());
            var TotalMonths = Number(HLE_Period.val());
            var monthlyRate = (Rate / 1200); //as it is compounded Quarterly
            var EMI = roundNumber(((LoanAmountHME * monthlyRate) * ((Math.pow((1 + monthlyRate), TotalMonths)) / (Math.pow((1 + monthlyRate), TotalMonths) - 1))), 2);
            HLE_Result.val(EMI);

           
            $('[id*=usercontroldiv]').show();
            $('[id*=emailcalculationdiv]').show();

        }
    }
</script>



<link rel="stylesheet" href="<?php echo site_url(); ?>css/calculator.css" type="text/css" />


<?php 
if($this->session->flashdata('mailstatus')!='')
echo '<p style="font-size:16px;font-weight:bold;color:#C99EE6;padding-top:15px;">';
echo $this->session->flashdata('mailstatus');
echo '</p>';
?>

<?php echo form_error('user_name', '<div class="error" style="font-size:16px;font-weight:bold;color:#FF0000;">', '</div>'); ?>
<?php echo form_error('number', '<div class="error" style="font-size:16px;font-weight:bold;color:#FF0000;">', '</div>'); ?>
<?php echo form_error('email', '<div class="error" style="font-size:16px;font-weight:bold;color:#FF0000;">', '</div>'); ?>
<?php echo form_error('yes', '<div class="error" style="font-size:16px;font-weight:bold;color:#FF0000;">', '</div>'); ?>
       <div id="sidebar">
         <div id="form">
         <img src="<?php echo base_url();?>images/callback2.jpg" style="width:300px;height:100px;-webkit-border-radius: 10px;border-radius: 10px;">
         </div><br/><hr/>
         <form method="post" action="<?php echo base_url('site/send_details') ?>" id="enquire">
        </br><p><label style="font-family:Arial; font-size:12px; padding-left:20px;">Name&nbsp;&nbsp;</label><input type="text" name="user_name" value="<?php echo set_value('name'); ?>" placeholder="Name" required/></p><br />
        <p><label style="font-family:Arial; font-size:12px; padding-left:20px;">Mobile&nbsp;</label><input type="text" name="number" value="<?php echo set_value('number'); ?>" placeholder="Mobile" required/></p><br />
        <p><label style="font-family:Arial; font-size:12px; padding-left:20px;">Email&nbsp;&nbsp;&nbsp;</label><input id="email1" type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email:" required/></p>
        
        <div class="login-help"><br />
        <p><span class="p2">Do you require Home loan?</span></p><br />
        
        <div >
        <div style="float:left; margin-left:70px;">
        <label style="font-family:Arial; font-size:12px; padding-left:20px;">Yes&nbsp;&nbsp;</label><input name="yes" type="radio" value="Yes" />
        </div>
        
        <div style="float:right; margin-right:90px">
         <label style="font-family:Arial; font-size:12px; padding-left:20px;">No&nbsp;&nbsp;</label><input name="yes" type="radio"  value="No" />
        </div>
        </div>
  
         </div><br /><br />
        <div class="submit" style="float:left; margin-left:-26px;" ><input type="submit" name="submit" value="Submit"></div>
        </form>
          <br/><br/><br/>  <center><div id="sidebar">
               
        <a href = "javascript:void(0)"  onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';resetHLE()" style="text-decoration:none;font-weight:bold;font-style:italic;font-size:16px;"><span style="color:blue;"> &ldquo;</span>  Want to Calculate EMI ?<span style="color:blue;"> &rdquo;</span></a></center>
       
        <div id="light" class="white_content">
        
        <div id="close">
        <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">
        <img src="<?php echo base_url();?>images/calci_close.png" name="image" width="20" height="20"><br>
        </a></div>
             
        <table id="head" width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="55%" height="45">Loan Amount</td>
<td>&nbsp;</td>
<td width="38%" height="45"><input id="LoanAmountHME" type="text" class="txtfill" tabindex="1" style="width:75px" value="0" onfocus="widget_WatermarkFocus(this, '0');" onblur="widget_WatermarkBlur(this, '0');" onkeypress="return widget_checkKey(event);"/></td>
<td width="7%">

<a id="hints" href="#" title="Enter Loan Amount">
<img src="<?php echo site_url();?>images/help.jpg" width="18" height="18" >
 </a></td>
</tr>
<tr>
<td height="45" >Period (Months)</td>
<td>&nbsp;</td>
<td height="45"><input id="DurationYrs" type="text" class="txtfill" tabindex="2" style="width:75px" value="0" onfocus="widget_WatermarkFocus(this, '0');" onblur="widget_WatermarkBlur(this, '0');" onkeypress="return widget_checkKey(event);"/></td>
<td width="7%">

<a id="hints" href="#" title="Enter period in months">
<img src="<?php echo site_url();?>images/help.jpg" width="18" height="18" >
  </a></td>
</tr>

<tr>
<td height="45">Interest rate p.a.</td><td>&nbsp;</td>
<td height="45"><input id="RateHME" type="text"  class="txtfill" tabindex="3" style="width:75px" value="0" onfocus="widget_WatermarkFocus(this, '0');" onblur="widget_WatermarkBlur(this, '0');" onkeypress="return widget_checkdecimalKey(event);"/></td>
<td width="7%">

<a  id="hints" href="#" title="Enter Interest Rate">
  <img src="<?php echo site_url();?>images/help.jpg" width="18" height="18" >
  </a></td>
</tr>
</table>


    

<table>
  <tr id="BackButton1_ButtonRow">
    <td><Button type="reset" id="lsubmit" onclick="resetHLE()" tabindex ="5">Reset</Button></td>
    <td colspan="2" align="center"><Button id="lsubmit" type="button" onclick="ComputeFunction()" tabindex ="4" >Submit</Button></td>
    <td>&nbsp;</td>
</tr>
<tr>
<td height="25"><font color="#000066"><b>EMI Amount</b></font></td>
<td colspan="2"style="height:20px"><input id="EMIAMount" type="text" readonly="readonly" style="width:68px;"/></td>
 <td>&nbsp;</td>
</tr>
<tr>
<td colspan ="3">


</td>
</tr>
 
</table>
</div></div>

           <div style="clear:both"></div>  
         <div id="fade" class="black_overlay"></div>      
         