<table id="list1"></table> <div id="pager1"></div>
<script type="text/javascript">
jQuery().ready(function (){
	jQuery("#list1").jqGrid({
		url:"<?php echo $url;?>",
		datatype: "json",
		colNames:['S.No', 'Sender Name','Sender Email', 'Sender Mobile', 'Message','Contacted On'],
		colModel:[ 
			{name:'s.no',index:'s_no',  width:75,editable:false, sortable:false, search:false},			
			{name:'sender_name',index:'sender_name', width:75,editable:false, sortable:true},
			{name:'sender_email',index:'sender_email', width:90, editable:false, sortable:true},
			{name:'sender_mobile',index:'sender_mobile', width:100, editable:false},
			{name:'message',index:'message', editable:false},
			{name:'added_on',index:'added_on', editable: false, search:false}
],
		rowNum:10,
		autowidth: true,
		pager: jQuery('#pager1'),
		sortname: 'id',
		viewrecords: true,
		sortorder: "asc",
		caption:"Manage Setting"

});
			jQuery("#list1").jqGrid('navGrid','#pager1', { edit: false, add: false, del: true, search:true}, {"closeAfterEdit":true}, {"closeAfterAdd":true});
});
</script> 
