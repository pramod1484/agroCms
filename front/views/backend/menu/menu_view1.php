<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/context-menu.js"></script><!-- IMPORTANT! INCLUDE THE context-menu.js FILE BEFORE drag-drop-folder-tree.js -->
	<script type="text/javascript" src="js/drag-drop-folder-tree.js">
	
	/************************************************************************************************************
	(C) www.dhtmlgoodies.com, July 2006
	
	Update log:
	
	
	This is a script from www.dhtmlgoodies.com. You will find this and a lot of other scripts at our website.	
	
	Terms of use:
	You are free to use this script as long as the copyright message is kept intact.
	
	For more detailed license information, see http://www.dhtmlgoodies.com/index.html?page=termsOfUse 
	
	Thank you!
	
	www.dhtmlgoodies.com
	Alf Magne Kalleland
	
	************************************************************************************************************/	
	</script>
	<link rel="stylesheet" href="css/drag-drop-folder-tree.css" type="text/css"></link>
	<link rel="stylesheet" href="css/context-menu.css" type="text/css"></link>
	<style type="text/css">
	/* CSS for the demo */
	img{
		border:0px;
	}
	</style>
	<script type="text/javascript">
	//--------------------------------
	// Save functions
	//--------------------------------
	var ajaxObjects = new Array();
	
	// Use something like this if you want to save data by Ajax.
	function saveMyTree()
	{
			saveString = treeObj.getNodeOrders();
			var ajaxIndex = ajaxObjects.length;
			ajaxObjects[ajaxIndex] = new sack();
			var url = 'saveNodes.php?saveString=' + saveString;
			ajaxObjects[ajaxIndex].requestFile = url;	// Specifying which file to get
			ajaxObjects[ajaxIndex].onCompletion = function() { saveComplete(ajaxIndex); } ;	// Specify function that will be executed after file has been found
			ajaxObjects[ajaxIndex].runAJAX();		// Execute AJAX function			
		
	}
	function saveComplete(index)
	{
		alert(ajaxObjects[index].response);			
	}

	
	// Call this function if you want to save it by a form.
	function saveMyTree_byForm()
	{
		document.myForm.elements['saveString'].value = treeObj.getNodeOrders();
		document.myForm.submit();		
	}
	

	</script>


	<ul id="dhtmlgoodies_tree2" class="dhtmlgoodies_tree">
		<li id="node0" noDrag="true" noSiblings="true" noDelete="true" noRename="true"><a href="#">Root node</a>
			<ul>
				<li id="node1"><a href="#">Europe</a>
					<ul>
						<li id="node2" noDelete="true"><a href="#">Norway</a>
							<ul>
								<li id="node3" noRename="true"><a href="#">Stavanger</a></li>
								<li id="node6"><a href="#">Bergen</a></li>
								<li id="node7"><a href="#">Oslo</a></li>
							</ul>
						</li>
						<li id="node8"><a href="#">United Kingdom</a>
							<ul>
								<li id="node9"><a href="#">London</a></li>
								<li id="node10"><a href="#">Manchester</a></li>
							</ul>				
						</li>
						<li id="node12"><a href="#">Sweden</a></li>
						<li id="node13"><a href="#">Denmark</a></li>
						<li id="node14"><a href="#">Germany</a>
							<ul>
								<li id="node141"><a href="#">Berlin</a>	
								<li id="node142"><a href="#">Munich</a>	
								<li id="node143"><a href="#">Stuttgart</a>	
							</ul>
						</li>
					</ul>
				</li>
				<li id="node15"><a href="#">Asia</a>
					<ul>
						<li id="node151"><a href="#">Japan</a>	
						<li id="node152"><a href="#">China</a>	
						<li id="node153"><a href="#">Indonesia</a>			
					</ul>
				</li>
				<li id="node16"><a href="#">Africa</a>
					<ul>
						<li id="node17"><a href="#">Tanzania</a></li>
						<li id="node18"><a href="#">Kenya</a></li>
					</ul>
				</li>
				<li id="node19"><a href="#">America</a>
					<ul>
						<li id="node20"><a href="#">Canada</a></li>
						<li id="node21"><a href="#">United States</a></li>
						<li id="node22"><a href="#">Mexico</a></li>
						<li id="node23"><a href="#">Argentina</a></li>
					</ul>		
				</li>	
				<li id="node24" noChildren="true"><a href="#">Cannot have children</a></li>
				<li id="node25" noDrag="true"><a href="#">Cannot be dragged</a></li>
			</ul>
		</li>
	</ul>
	<form>
	<input type="button" onclick="saveMyTree()" value="Save">
	</Form>
	<script type="text/javascript">	
	treeObj = new JSDragDropTree();
	treeObj.setTreeId('dhtmlgoodies_tree2');
	treeObj.setMaximumDepth(7);
	treeObj.setMessageMaximumDepthReached('Maximum depth reached'); // If you want to show a message when maximum depth is reached, i.e. on drop.
	treeObj.initTree();
	treeObj.expandAll();
	
	
	


	
	</script>
	<a href="#" onclick="treeObj.collapseAll()">Collapse all</a> | 
	<a href="#" onclick="treeObj.expandAll()">Expand all</a>
	<p style="margin:10px">Use your mouse to drag and drop the nodes. Use the "Save" button to save your changes. The new structure will be sent to the server by use of Ajax(Asynchron XML and Javascript). </p>
	<p style="margin:10px"><b><i>Note!</i></b> I'm not saving the structure in this demo in order to make the script look the same for all visitors</p>
	
	<!-- Form - if you want to save it by form submission and not Ajax -->
	<form name="myForm" method="post" action="<?php echo base_url('backend/menu/saveNodes'); ?>">
		<input type="hidden" name="saveString">
	</form>