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
			{field:'KdBarang',title:'Mat. Code',width:80,rowspan:3},  
			{field:'NmBarang',title:'Desc.',width:100,rowspan:3},   
			//{field:'Sat',title:'Unit',width:50,rowspan:2}, 
		]],
		columns:[[  					
			{title:'Beginning Balance',width:90,align:'right',rowspan:2,colspan:2},
			{title:'Incoming',width:90,align:'right',colspan:6},
			{title:'Outgoing',width:90,align:'right',colspan:6},
			{title:'Ending Balance',width:90,align:'right',rowspan:2,colspan:2},
			{field:'ket',title:'Remarks',width:80,rowspan:3}
		],[						
			{title:'Purchase',width:80,align:"right",colspan:2},
			{title:'Replacement',width:80,align:'right',colspan:2},
			{title:'From Production',width:80,align:"right",colspan:2},
			{title:'Consumption',width:80,align:'right',colspan:2},
			{title:'Return',width:80,align:"right",colspan:2},
			{title:'From Production',width:80,align:'right',colspan:2}		
		],[  					
			{field:'qty_beg',title:'Roll/Bar/Sheet',width:75,align:'right'},
			{field:'qty_beg2',title:'Kg',width:75,align:'right'},
			
			{field:'qty_in01',title:'Roll/Bar/Sheet',width:75,align:'right'},
			{field:'qty_in02',title:'Kg',width:75,align:'right'},
			
			{field:'qty_in11',title:'Roll/Bar/Sheet',width:75,align:'right'},
			{field:'qty_in12',title:'Kg',width:75,align:'right'},
			
			{field:'qty_in21',title:'Roll/Bar/Sheet',width:75,align:'right'},
			{field:'qty_in22',title:'Kg',width:75,align:'right'},
			
			{field:'qty_out01',title:'Roll/Bar/Sheet',width:75,align:'right'},
			{field:'qty_out02',title:'Kg',width:75,align:'right'},
			
			{field:'qty_out11',title:'Roll/Bar/Sheet',width:75,align:'right'},
			{field:'qty_out12',title:'Kg',width:75,align:'right'},
			
			{field:'qty_out21',title:'Roll/Bar/Sheet',width:75,align:'right'},
			{field:'qty_out22',title:'Kg',width:75,align:'right'},
			
			{field:'qty_end',title:'Roll/Bar/Sheet',width:75,align:'right',formatter: function(value,row,index){				
				qty_beg=parseFloat(row.qty_beg);
				
				qty_in01=parseFloat(row.qty_in01);
				qty_in11=parseFloat(row.qty_in11);
				qty_in21=parseFloat(row.qty_in21);
				
				qty_out11=parseFloat(row.qty_out11);
				qty_out11=parseFloat(row.qty_out11);
				qty_out11=parseFloat(row.qty_out11);
				
				qty_akhir=qty_beg+qty_in01+qty_in11+qty_in21-qty_out01-qty_out11-qty_out21;
				
				return qty_akhir.toFixed(2);
			}},
			{field:'qty_end2',title:'Kg',width:75,align:'right',formatter: function(value,row,index){				
				qty_beg2=parseFloat(row.qty_beg2);
				
				qty_in02=parseFloat(row.qty_in02);
				qty_in12=parseFloat(row.qty_in12);
				qty_in22=parseFloat(row.qty_in22);
				
				qty_out12=parseFloat(row.qty_out12);
				qty_out12=parseFloat(row.qty_out12);
				qty_out12=parseFloat(row.qty_out12);
				
				qty_akhir2=qty_beg2+qty_in02+qty_in12+qty_in22-qty_out02-qty_out12-qty_out22;
				
				return qty_akhir2.toFixed(2);
			}}
			
		]],
		url: '<?php echo $basedir; ?>models/material/mutasi_mat_grid2.php?mat_type=1&date1='+$("#date1").datebox('getValue')+'&date2='+$("#date2").datebox('getValue'),
	});
}

function showPrint(){
	openurl('mutasi_mat_list2_pdf.php?NmMenu=Stock Raw Material&mat_type=1&date1='+$("#date1").datebox('getValue')+'&date2='+$("#date2").datebox('getValue'));
}
</script>	