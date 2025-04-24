<?php
	
	
	$aPCat = array();
	
	$aCat  = array();
	
	
	/// Products Categories Code Starts ///
	
	if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){
		
		foreach($_REQUEST['p_cat'] as $sKey=>$sVal){
			
			if((int)$sVal!=0){
				
				$aPCat[(int)$sVal] = (int)$sVal;
				
			}
			
		}
		
	}
	
	/// Products Categories Code Ends ///
	
	
?>



<div class="panel panel-default sidebar-menu"><!--- panel panel-default sidebar-menu Starts -->
	
	<div class="panel-heading"><!-- panel-heading Starts -->
		
		<h3 class="panel-title"><!-- panel-title Starts -->
			
			Search for Products
			
		</h3><!-- panel-title Ends -->
		
	</div><!-- panel-heading Ends -->
	
	<div class="panel-collapse collapse-data"><!-- panel-collapse collapse-data Starts -->
		
		<div class="panel-body"><!-- panel-body Starts -->
			
			<div class="input-group"><!-- input-group Starts -->
				
				<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-p-cats" placeholder="search">
				
				<a class="input-group-addon"> <i class="fa fa-search"></i> </a>
				
			</div><!-- input-group Ends -->
			
		</div><!-- panel-body Ends -->
		
		
	</div><!-- panel-collapse collapse-data Ends -->
	
</div><!--- panel panel-default sidebar-menu Ends -->
