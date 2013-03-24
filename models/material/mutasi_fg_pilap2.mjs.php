<script type="text/javascript">   
function setdg(){
	$('#dg').datagrid({  	
		title:"",
		width:736,
		height:515,	
		toolbar:"#toolCari",
		fitColumns:false,
		rownumbers:"true",
		pagination:true,
		pageList:[200,300,400,500],
		frozenColumns:[[  
			{field:'KdBarang',title:'Part Code',width:80,rowspan:2}, 
			{field:'NmBarang',title:'Part No',width:100,rowspan:2},   
		]],
		columns:[[  					
			{title:'Previous Balance',width:90,align:'right',colspan:2},
			{title:'In to FG',width:90,align:'right',colspan:2},
			{title:'Send to Customer',width:90,align:'right',colspan:2},
			{title:'Ending Balance',width:90,align:'right',colspan:2},
			{field:'ket',title:'Remarks',width:80,rowspan:2}
		],[  					
			{field:'qty_beg',title:'Pcs',width:75,align:'right'},
			{field:'qty_beg2',title:'Kg',width:75,align:'right'},
			
			{field:'qty_in',title:'Pcs',width:75,align:'right'},
			{field:'qty_in2',title:'Kg',width:75,align:'right'},
			
			{field:'qty_out',title:'Pcs',width:75,align:'right'},
			{field:'qty_out2',title:'Kg',width:75,align:'right'},
			
			{field:'qty_end',title:'Pcs',width:75,align:'right',formatter: function(value,row,index){				
				qty_beg=parseFloat(row.qty_beg);
				qty_in=parseFloat(row.qty_in);
				qty_out=parseFloat(row.qty_out);
				qty_akhir=qty_beg+qty_in-qty_out;
				return qty_akhir.toFixed(2);
			}},
			{field:'qty_end2',title:'Kg',width:75,align:'right',formatter: function(value,row,index){				
				qty_beg2=parseFloat(row.qty_beg2);
				qty_in2=parseFloat(row.qty_in2);
				qty_out2=parseFloat(row.qty_out2);
				qty_akhir2=qty_beg2+qty_in2-qty_out2;
				return qty_akhir2.toFixed(2);
			}}
			
		]],
		url: '<?php echo $basedir; ?>models/material/mutasi_fg_grid2.php?mat_type=0&date1='+$("#date1").datebox('getValue')+'&date2='+$("#date2").datebox('getValue'),
	});
}

function showPrint(){
	openurl('mutasi_fg_list2_pdf.php?NmMenu=Stock Finished Goods&mat_type=0&date1='+$("#date1").datebox('getValue')+'&date2='+$("#date2").datebox('getValue'));
}
</script>	