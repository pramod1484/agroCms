<div id="content"><!--Start Content-->
 <div id="subcontent">
 <div  class="top1">Property List</div><br/>
  <div style="width:690;">
   <?php

    foreach($records as $r)         
    { ?>  
  
  <div id="boxpic">

    <div style="float:left;width:200px;margin-top:50px;margin-left:13px;">
      <a href="<?php echo base_url().$r->url;?>" rel="prettyPhoto[pp_gal]">
        <img src="<?php echo base_url().$r->thumb_url;?>"width="180" 
        height="147" style="border-bottom-color:#666666" border="1" />
      </a>
    </div>
    <div style="float:left;width:180px;padding-top:50px;padding-left:5px;">
      <div class="text4">Building Name</div>
      <div class="text4">BHK</div>
      <div class="text4">Property Type</div>
      <div class="text4">Cost (INR)</div>
      <div class="text4">Building Status</div>
      <div class="text4">Area</div>
    </div>
    
    <div style="float:left;width:250px;padding-top:30px;">
    &nbsp;
      <div class="text5"><span class="text4">:</span>&nbsp;<?php echo $r->title; ?></div>
      <div class="text5"><span class="text4">:</span>&nbsp;<?php echo $r->bhk; ?></div>
      <div class="text5"><span class="text4">:</span>&nbsp;<?php echo $r->type; ?></div>
      <div class="text5"><span class="text4">:</span>&nbsp;<?php echo $r->cost; ?></div>
      <div class="text5"><span class="text4">:</span>&nbsp;<?php echo $r->status; ?></div>
      <div class="text5"><span class="text4">:</span>&nbsp;<?php echo $r->area; ?></div>
      <div class="view_details"><a href="<?php echo base_url().'site/get_property/'. $r->id;?>" id="view_btn" style="text-decoration:none;">View Details</a></div>
    </div>
    
  </div>
 <?php } ?> 
</div>

<div class="page">
<?php

echo $links;

?>
</div>
           <div style="clear:left"></div>
         </div><!--End Subcontent-->

<script src="<?php echo site_url(); ?>js/prettyPhoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>





