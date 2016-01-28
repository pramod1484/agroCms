// ------ DELETE MENU ITEM

function deleteMe(id){
      //alert('done');
     
     $.post("lib/delete.php?id="+id,function(theResponse){
     //$('#messageadd').html(theResponse);
	 location.reload();
     });
     event.preventDefault();
}



//--------- ADD A MENU ITEM

function addMenu(){
	//alert('done');
     var menu = $("#input").val();
     
     $.post("menu/add?menu="+menu,function(theResponse){
     //alert(theResponse);
	 location.reload();
     });
     event.preventDefault();
}




//------------------------------ SORT LIST NORMAL (2)
$(function() {


$("#sortme ul").sortable({
                connectWith: "#sortme ul ",
                placeholder: "ui-state-highlight",
				start: function(event, ui) {
                $('#sortme').find('li:hidden').show();
                }
});

});

//----------------------------- REFRESH DISPLAY

$(document).ready(function(){
	$('#refresh').click(function(){
		$("#noGen").hide();
		$("#nav ul").html($("#sortme ul").html());
		$("#nav .delete").remove();
		$("#nav ul li").removeAttr('id');
		$("#nav ul li").removeAttr('class');
		$("#nav ul li").removeAttr('onchange');
		
	});
});

//----------------------------- GENERATE CODE

$(document).ready(function(){
	$('#generate').click(function(){
		var str    = $("#nav ul").html();
		var change = String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g,'&gt;').replace(/"/g, '&quot;');
		//var decoded = $("#nav ul").html(encodedStr).text();
		$("#noCode").hide();
		$("#codeit code").html(change);
		$("#codeit").show();
		$("#css").show();
		
	});
});

