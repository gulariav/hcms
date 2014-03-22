// JavaScript Document
function checkall(objForm)
{
	//alert(objForm);
	var ele,len,i;
	ele= document.getElementsByTagName("input");
	len=ele.length;
	for(i=0;i<len;i++){
	if(ele[i].type=='checkbox'){
		ele[i].checked=objForm;
		}
	}
	
}


function addElement(id, displayText) {
	var tbody = document.getElementById(id).getElementsByTagName("TBODY")[0];
	var row = document.createElement("TR")
	var row1 = document.createElement("TR")
	var tdr=document.createElement("TD")
    var td1 = document.createElement("TD")
	var td2 = document.createElement("TD")
	var td3 = document.createElement("TD")
	var td4 = document.createElement("TD")
	var numi = document.getElementById('theValue');
 	var num = (document.getElementById('theValue').value -1)+ 2;
  	numi.value = num;
	td1.setAttribute('align','right');
	td2.setAttribute('width','1%');
	td4.setAttribute('width','54%');
	tdr.setAttribute('colspan','4');
	tdr.innerHTML='&nbsp;';
	var td1Name = 'my'+num+'td1';
	td1.innerHTML= displayText;
	td2.innerHTML= ' ' ;
	td3.innerHTML=document.getElementById("rep_tab1").innerHTML;
 	td4.innerHTML=' ';
	row.appendChild(td1);
	row.appendChild(td2);  
	row.appendChild(td3);
	row.appendChild(td4);  
	tbody.appendChild(row);
	row1.appendChild(tdr);  
	tbody.appendChild(row1);
}

function showinputText(id, text){
	if(document.getElementById(id).value==''){
		document.getElementById(id).value=text;	
	}
}


function hideinputText(id, text){
	if(document.getElementById(id).value==text){
		document.getElementById(id).value='';	
	}	
}

function chkPrice(fieldid) {
			var p = parseFloat(document.getElementById(fieldid).value);
			p = p.toFixed(2);
			if(isNaN(p)){
				document.getElementById(fieldid).value='';	
			}else{
				document.getElementById(fieldid).value = p;
			}
} 