<table id="list1"></table> <div id="pager1"></div>
<script type="text/javascript">
jQuery().ready(function (){
	jQuery("#list1").jqGrid({
		url:"<?php echo $url;?>",
		datatype: "json",
		colNames:['Action','S.No','Page Name','Page Description', 'Page Title', 'Keyword','Meta Descritpion',  'Status'],
		colModel:[ 
			{name:'act',index:'act', width:75,sortable:false},			
			{name:'id',index:'id', width:75,editable:false, sortable:false},
			{name:'page_name',index:'page_name', width:75,editable:true, sortable:true},
			{name:'page_text',index:'page_text', width:90, editable:true, edittype:'textarea',  hidden: true,  editrules: { edithidden: true }, hidedlg: true},
			{name:'page_title',index:'page_title', width:100, editable:true},
			{name:'meta_keyword',index:'meta_keyword', width:150, editable:true, edittype:'textarea', height:350, width: 500,  hidden: true,  editrules: { edithidden: true }, hidedlg: true},
			{name:'meta_description',index:'meta_description', editable: true, edittype:'textarea',  hidden: true,  editrules: { edithidden: true }, hidedlg: true},
			{name:'status',index:'status', editable: true, edittype:'select', editoptions: {value:{1:'Active',0:'Inactive'}}}
],
		top:300,
		left:700,		
		rowNum:10,
		autowidth: true,
		rowList:[10,20,30],
		pager: jQuery('#pager1'),
		sortname: 'id',
		viewrecords: true,
		sortorder: "asc",
		gridComplete: function(){
			var ids = jQuery("#list1").jqGrid('getDataIDs');
			
			for(var i=0;i < ids.length;i++){
				cl=ids[i];
				be = "<input style='height:22px;width:20px;' type='button' value='E' onclick=\"jQuery('#list1').editRow('"+cl+"');\" >";
				se = "<input style='height:22px;width:20px;' type='button' value='S' onclick=\"jQuery('#list1').saveRow('"+cl+"');\" >";
				ce = "<input style='height:22px;width:20px;' type='button' value='C' onclick=\"jQuery('#list1').restoreRow('"+cl+"');\" >";
				jQuery("#list1").jqGrid('setRowData', ids[i],{act:be+se+ce});
			 } 
		},
			
				editurl: "page/update",
				multiselect: true,				
				caption:"Manage Pages"

});
		
			jQuery("#list1").jqGrid('navGrid','#pager1', { edit: true, add: true, del: true, search:'simple' }, {"closeAfterEdit":true}, {"closeAfterAdd":true});

});
</script> 
