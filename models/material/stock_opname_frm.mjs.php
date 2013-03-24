<script type="text/javascript">   
function setdg(){
	var opname_id = $('#opname_id').val();
	
	$('#dg').datagrid({  	
		title:"Finished Goods List",
		width:700,
		height:200,	
		toolbar:"#toolbar2",
		fitColumns:"true",
		rownumbers:"true",
		columns:[[  
			{field:'KdBarang2',title:'Part Code',width:80},
			{field:'PartNo',title:'Part No.',width:100},
			{field:'NmBarang2',title:'Part Name',width:150},
			{field:'Sat2',title:'Unit',width:80},
			{field:'qty',title:'Qty.',width:100,align:'right'},
			{field:'weight0',title:'Weight0',width:100,align:'right',hidden:true},
			{field:'weight',title:'Weight',width:100,align:'right'},
			{field:'remark',title:'Remark',width:80},
		]],
		url: '<?php echo $basedir; ?>models/material/stock_opname_grid.php?req=list2&opname_id='+opname_id
	});
}

function setdgCari(){	
	$('#dgCari').datagrid({  
		width:586,
		height:315,	
		fitColumns:"true",
		rownumbers:"true", 
		toolbar:"#toolCari",
		columns:[[  
			{field:'opname_date',title:'Opname Date',width:50},
			{field:'wh_name',title:'Warehouse',width:80}
		]],
		url: '<?php echo $basedir ?>models/material/stock_opname_grid.php?req=menu&pilcari='+$("#pilcari").val()+'&txtcari='+$("#txtcari").val(),
		onClickRow:function(index,row){insert_menu(row)}
	});
}

function insert_menu(row){
	$('#opname_id').val(row.opname_id);
	$('#opname_date').datebox('setValue',row.opname_date);
	$('#wh_id').val(row.wh_id);
	$('#notes').val(row.notes);	
	setdg();
	$('#toolbar2').hide();
	$('#wCari').dialog('close');
	$('#tl1Ubh').show();
	$('#tl1Tbh').hide();	
	$('#tl1Hps').show();
	$('#btnPrint').show();	
}

function insert_det(row){
	$('#PartNo').val(row.PartNo);
	$('#NmBarang2').val(row.NmBarang2);
	$('#Sat2').val(row.Sat2);
	$('#weight0').numberbox('setValue',row.weight0);
}

function topdf(){
	var opname_id = $('#opname_id').val();	
	
	openurl('<?=$basedir?>material/stock_opname_pdf.php?NmMenu=<?=$NmMenu?>&opname_id='+opname_id);
}

</script>	