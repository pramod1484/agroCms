 <div id="content">
 <div id="subcontent">
 <div  class="top1">Property Details</div><br/><br/>
  <div style="width:670;">
  
  
  <div id="descript">

    <div style="float:left;width:310px;margin-top:50px;margin-left:15px;">
      <a href="<?php echo base_url().$rows->url;?>" rel="prettyPhoto[pp_gal]">
        <img src="<?php echo base_url().$rows->thumb_url;?>"width="300" 
        height="200" style="border-bottom-color:#666666" border="1" />
      </a>
    </div>
    <div style="float:left;width:140px;padding-top:80px;padding-left:15px;">
      <div class="text7">Building Name</div>
      <div class="text7">BHK</div>
      <div class="text7">Property Type</div>
      <div class="text7">Cost (INR)</div>
      <div class="text7">Building Status</div>
      <div class="text7">Area</div>
    </div>
    
    <div style="float:left;width:200px;padding-top:60px;">
    &nbsp;
      <div class="text5"><span class="text7">:</span>&nbsp;<?php echo $rows->title; ?></div>
      <div class="text5"><span class="text7">:</span>&nbsp;<?php echo $rows->bhk; ?></div>
      <div class="text5"><span class="text7">:</span>&nbsp;<?php echo $rows->type; ?></div>
      <div class="text5"><span class="text7">:</span>&nbsp;<?php echo $rows->cost; ?></div>
      <div class="text5"><span class="text7">:</span>&nbsp;<?php echo $rows->status; ?></div>
      <div class="text5"><span class="text7">:</span>&nbsp;<?php echo $rows->area; ?></div>
      
    </div>
    
  </div><br/><br/><br/>

    <div id="descript">

    <div style="float:left;width:160px;margin-top:150px;padding-left:15px;">
      <div class="text7">Description<span class="text7" style="padding-left:40px;">:</span></div>
    </div>
    
    <div style="float:left;width:500px;padding-top:50px;">
    &nbsp;
    <div class="text5"><?php echo $rows->description; ?></div>
          
    </div>
    
  </div>
 
</div>


           <div style="clear:left"></div>
         </div><!--End Subcontent-->

<script src="<?php echo site_url(); ?>js/prettyPhoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>





