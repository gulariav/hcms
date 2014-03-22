<table id="list1"></table> <div id="pager1"></div>
<script type="text/javascript">
jQuery().ready(function (){
	jQuery("#list1").jqGrid({
		url:"<?php echo $url;?>",
		datatype: "json",
		colNames:['Site Title','Meta Keyword', 'Meta Description', 'Facebook Page','Twitter Page',  'Modified On'],
		colModel:[ 
			{name:'site_title',index:'site_title', width:75,editable:true, sortable:true},
			{name:'default_keywords',index:'default_keywords', width:90, editable:true, edittype:'textarea',  hidden: true,  editrules: { edithidden: true }, hidedlg: true},
			{name:'default_description',index:'default_description', width:100, editable:true, edittype:'textarea',  hidden: true,  editrules: { edithidden: true }, hidedlg: true},
			{name:'facebook_page',index:'facebook_page', editable:true},
			{name:'twitter_page',index:'twitter_page', editable: true},
			{name:'modified_on',index:'modified_on', editable: false}
],
		rowNum:10,
		autowidth: true,
		pager: jQuery('#pager1'),
		sortname: 'id',
		viewrecords: true,
		sortorder: "asc",
		editurl: "setting/update",
		caption:"Manage Setting"

});
			jQuery("#list1").jqGrid('navGrid','#pager1', { edit: true, add: false, del: false, search:false}, { beforeShowForm: function(form) {
                  // "editmodlist"
                  var dlgDiv = $("#editmodlist1");
                  var parentDiv = dlgDiv.parent(); // div#gbox_list
                  var dlgWidth = dlgDiv.width();
                  var parentWidth = parentDiv.width();
                  var dlgHeight = dlgDiv.height();
                  var parentHeight = parentDiv.height();
                  // TODO: change parentWidth and parentHeight in case of the grid
                  //       is larger as the browser window
                  dlgDiv[0].style.top = Math.round((parentHeight-dlgHeight)/2+100) + "px";
                  dlgDiv[0].style.left = Math.round((parentWidth-dlgWidth)/2) + "px";
              }}, {"closeAfterEdit":true});

});
</script> 
