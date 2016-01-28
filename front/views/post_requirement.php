<script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>

<script type='text/javascript' src="http://code.jquery.com/jquery-latest.min.js"></script>
    
  
    
      <script type='text/javascript' src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>



<div id="content"><!--Start Content-->
<div style="font-size:16px;font-weight:bold;color:#C99EE6;padding-top:15px;">
  	<?php 
if($this->session->flashdata('requeststatus')!='')
echo $this->session->flashdata('requeststatus');
?>
</div>
<div id="subcontent">
<div id="con1">
<div class="top1">Post Requirement for Buying Property </div><br /><hr /><br />
<form name ="form" id="sales" method ="post" action ="<?php echo site_url(); ?>site/submit_details">
<table>
<div class="text3">
<label for="I">I want to </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="top" style="font-size:16px;margin-left:110px;">
<input type="radio" name="listType" id="listType" value="Buy">Buy</input>
<input type = "radio" name ="listType" id="listType" value= "Sell">Sell</input>
</span></div><br/>

<div class="text3">
<label for="I1" id="arrow">Looking For<font color="red">*</font>  
<span class="top" style="font-size:14px;margin-left:80px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="house" id="house" style="width:200px;"required>
<option> Multistorey Apartment</option>
<option> Builder Floor Apartment</option>
<option> Residential House</option>
<option> Villa</option>
<option> Residential Plot</option>
<option> Penthouse</option>
<option> Studio Apartment</option>
<option> Service Apartment</option>
<option> Holiday Home</option>
<option> Commercial Office Space</option></select>
 </span>
 </label>
 </div><br/>

 <div class="text3">
 <label for="I2" id="arrow">Bedrooms<font color="red">*</font>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="top" style="font-size:16px; margin-left:93px;">
<select name="rooms" id="rooms" style="width:70px;"required>
<option> 1</option>
<option> 2</option>
<option> 3</option>
<option> 4</option>
<option> 5</option>
<option> 6</option>
<option> 7</option>
<option> 8</option>
<option> 9</option>
<option> 10</option>
</select>
</span>
</label>
</div><br/>

<div class="text3">
<label for="I4" id="arrow">Covered/Built-up Area<font color="red">*</font>  
&nbsp;
<input type="text" id="coveredAreaFromId" name="coveredAreaFromId" value="" />&nbsp;&nbsp;

<select name="area" id="area" style="width:90px;">
	<option value="Sq-ft">sq-ft</option>
	<option value="Sq-m">sq-m</option>
	<option value="Sq-yrd">sq-yrd</option>
</select>
</span></label>
</div><br/>

<div class="text3">
<label for="I5" id="arrow">Budget<font color="red">*</font>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="top" style="font-size:16px; margin-left:90px;">&nbsp;&nbsp;&nbsp;

<select name=minbudget id="minbudget" required>
<option value="0">Min</option>
<option value="100000">1 lac</option>
<option value="500000">5 lacs</option>
<option value="1000000">10 lacs</option>
<option value="2000000">20 lacs</option>
<option value="3000000">30 lacs</option>
<option value="4000000">40 lacs</option>
<option value="5000000">50 lacs</option>
<option value="6000000">60 lacs</option>
<option value="7000000">70 lacs</option>
<option value="8000000">80 lacs</option>
<option value="9000000">90 lacs</option>
<option value="10000000">1crore</option>
<option value="12000000">1.2 crores</option>
<option value="14000000">1.4 crores</option>
<option value="16000000">1.6 crores</option>
<option value="18000000">1.8 crores</option>
<option value="20000000">2 crores</option>
<option value="23000000">2.3 crores</option>
<option value="26000000">2.6 crores</option>
<option value="30000000">3 crores</option>
<option value="35000000">3.5 crores</option>
<option value="40000000">4 crores</option>
<option value="45000000">4.5 crores</option>
<option value="50000000">5 crores</option>
<option value="60000000">&gt;5 crores</option>
</select>&nbsp;&nbsp;
</span>
</label>
</div><br/>

<div class="text3">
<label for="I5" id="arrow">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="top" style="font-size:16px; margin-left:93px;">&nbsp;&nbsp;&nbsp;

<select name=maxbudget id="maxbudget" required>
<option value="0">Max</option>
<option value="100000">1 lac</option>
<option value="500000">5 lacs</option>
<option value="1000000">10 lacs</option>
<option value="2000000">20 lacs</option>
<option value="3000000">30 lacs</option>
<option value="4000000">40 lacs</option>
<option value="5000000">50 lacs</option>
<option value="6000000">60 lacs</option>
<option value="7000000">70 lacs</option>
<option value="8000000">80 lacs</option>
<option value="9000000">90 lacs</option>
<option value="10000000">1crore</option>
<option value="12000000">1.2 crores</option>
<option value="14000000">1.4 crores</option>
<option value="16000000">1.6 crores</option>
<option value="18000000">1.8 crores</option>
<option value="20000000">2 crores</option>
<option value="23000000">2.3 crores</option>
<option value="26000000">2.6 crores</option>
<option value="30000000">3 crores</option>
<option value="35000000">3.5 crores</option>
<option value="40000000">4 crores</option>
<option value="45000000">4.5 crores</option>
<option value="50000000">5 crores</option>
<option value="60000000">&gt;5 crores</option>
</select>&nbsp;&nbsp;

</span>
</label>
</div>
<br/>
<hr><br/>
<br/>

<div class="text3">
<label for="I4">Name<font color="red">*</font></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
<input type="text" name="name" value="" id="name" required/>&nbsp;&nbsp;
</div><br/>

<div class="text3">
<label for="I4">Email Id<font color="red">*</font>  </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="email" id="loginId" name="loginId" value="" required/>&nbsp;&nbsp;
</div><br/>

<div class="text3">
<label for="I4">Mobile <font color="red">*</font> </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" id="mobile" name="mobile" value="" required/>&nbsp;&nbsp;
</div><br/>
<hr>
<br/>
<div class="submit1" >
<span class="top" style="font-size:16px; margin-left:10px;">
<input type="submit" name="commit" value="Submit"></span>
</div>


</table>

  </form>
  <div style="font-size:16px;font-weight:bold;color:#FF0000;margin-top:80px;">
   <?php echo validation_errors('<p class="error">');?>   
  </div>
  </div>
  </div>


  <script type="text/javascript">
  $.validator.addMethod("greaterThan",

function (value, element, param) {
  var $min = $(param);
  if (this.settings.onfocusout) {
    $min.off(".validate-greaterThan").on("blur.validate-greaterThan", function () {
      $(element).valid();
    });
  }
  return parseInt(value) > parseInt($min.val());
}, "Max must be greater than min");

$('#sales').validate({
  rules: {
    maxbudget: {
      greaterThan: '#minbudget'
    }
  }
});
  </script>


