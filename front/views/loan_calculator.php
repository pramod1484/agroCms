<link rel="stylesheet" href="<?php echo site_url(); ?>css/calculator.css" type="text/css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo site_url(); ?>js/loan.js"></script>
  <script type="text/javascript" src="<?php echo site_url(); ?>js/iy_widgets.js"></script>
  <script type="text/javascript" src="<?php echo site_url(); ?>js/HtmlCanvas.js"></script>
  
  


<form name="form1" method="post" action="/widgets/IYHomeLoanEMI.aspx" id="form1">
<div id="NewCalc" style="width:200px;" cl="" ass="WidgetContainercss">


<div class="calc_t_l">
  <div class="calc_t">
    
    <div class="calc_t_r">
      <h1>Home Loan EMI</h1>
    </div>
  </div>
<div class="calc_m">
<table id="head" width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="55%" height="45" style="font-size:16px">Loan Amount</td>
<td width="38%" height="45"><input id="LoanAmountHME" type="text" class="txtfill" tabindex="1" style="width:68px" value="0" onfocus="widget_WatermarkFocus(this, '0');" onblur="widget_WatermarkBlur(this, '0');" onkeypress="return widget_checkKey(event);"/></td>
<td width="7%">

<a id="hints" href="#">
<img src="<?php echo site_url();?>images/help.jpg" width="18" height="18" >
  <span id="BackButton1_Hints1_help">Enter Loan Amount</span></a></td>
</tr>
<tr>
<td height="45" style="font-size:16px">Period (Months)</td>
<td height="45"><input id="DurationYrs" type="text" class="txtfill" tabindex="2" style="width:68px" value="0" onfocus="widget_WatermarkFocus(this, '0');" onblur="widget_WatermarkBlur(this, '0');" onkeypress="return widget_checkKey(event);"/></td>
<td width="7%">

<a id="hints" href="#">
<img src="<?php echo site_url();?>images/help.jpg" width="18" height="18" >
  <span id="BackButton1_Hints2_help">Enter period in months</span></a></td>
</tr>

<tr>
<td height="45" style="font-size:16px">Interest rate p.a.</td>
<td height="45"><input id="RateHME" type="text"  class="txtfill" tabindex="3" style="width:68px" value="0" onfocus="widget_WatermarkFocus(this, '0');" onblur="widget_WatermarkBlur(this, '0');" onkeypress="return widget_checkdecimalKey(event);"/></td>
<td width="7%">

<a id="hints" href="#">
  <img src="<?php echo site_url();?>images/help.jpg" width="18" height="18" >
  <span id="BackButton1_Hints3_help">Enter Interest Rate</span></a></td>
</tr>
<tr id="BackButton1_ButtonRow">
    <td><Button type="reset" onclick="resetHLE()" tabindex ="5">Reset</Button></td>
    <td colspan="2" align="center"><Button id="cagrBtn" type="button" onclick="ComputeFunction()" tabindex ="4" >Submit</Button></td>
    <td>&nbsp;</td>
</tr>

<tr>
<td height="25">EMI Amount</td>
<td style="height:20px"><input id="EMIAMount" type="text" readonly="readonly" style="width:68px;"/></td>
 <td>&nbsp;</td>
</tr>
<tr>
<td colspan ="3">


</td>
</tr>
 
</table>
</div>


            
            
        </div>
    </div>
    </form>
    
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

