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
			{field:'KdBarang',title:'Kode Barang',rowspan:2,width:80},
			{field:'NmBarang',title:'Nama Barang',rowspan:2,width:100},   
			//{field:'Sat',title:'Sat.',width:50}, 
		]],
		columns:[[  					
			{title:'Persediaan Awal',width:150,align:'center',colspan:2},
			{title:'Pemasukan',width:150,align:'center',colspan:2},
			{title:'Pengeluaran',width:150,align:'center',colspan:2},
			{title:'Penyesuaian',width:150,align:'center',colspan:2},
			{title:'Saldo Akhir',width:150,align:'center',colspan:2},
			{title:'Stock Opname',width:150,align:'center',colspan:2},
			{title:'Selisih',width:150,align:'center',colspan:2},
			{field:'Ket',title:'Keterangan',width:150,align:'center',rowspan:2},
		],[  					
			{field:'qty_beg',title:'Roll/Bar/Sheet',width:75,align:'right'},
			{field:'qty_beg2',title:'Kg',width:75,align:'right'},
			{field:'qty_in',title:'Roll/Bar/Sheet',width:75,align:'right'},
			{field:'qty_in2',title:'Kg',width:75,align:'right'},
			{field:'qty_out',title:'Roll/Bar/Sheet',width:75,align:'right'},
			{field:'qty_out2',title:'Kg',width:75,align:'right'},
			{field:'qty_bal',title:'Roll/Bar/Sheet',width:75,align:'right'},
			{field:'qty_bal2',title:'Kg',width:75,align:'right'},			
			{field:'qty_end',title:'Saldo Akhir',width:75,align:'right',formatter: function(value,row,index){				
				qty_beg=parseFloat(row.qty_beg);
				qty_in=parseFloat(row.qty_in);
				qty_out=parseFloat(row.qty_out);
				qty_akhir=qty_beg+qty_in-qty_out;
				qty_bal=parseFloat(row.qty_bal);
				qty=parseFloat(row.qty);
				if (qty_akhir>qty){
					qty_end=qty_akhir-qty_bal;
				} else {
					qty_end=qty_akhir+qty_bal;
				}
				return qty_end.toFixed(2);
			}},
			{field:'qty_end2',title:'Saldo Akhir',width:75,align:'right',formatter: function(value,row,index){				
				qty_beg=parseFloat(row.qty_beg);
				qty_in=parseFloat(row.qty_in);
				qty_out=parseFloat(row.qty_out);
				qty_akhir=qty_beg+qty_in-qty_out;
				qty_bal=parseFloat(row.qty_bal);
				qty=parseFloat(row.qty);
				if (qty_akhir>qty){
					qty_end=qty_akhir-qty_bal;
				} else {
					qty_end=qty_akhir+qty_bal;
				}
				return qty_end.toFixed(2);
			}},
			{field:'qty',title:'Roll/Bar/Sheet',width:75,align:'right'},
			{field:'qty2',title:'Kg',width:75,align:'right'},
			{field:'qty_diff',title:'Roll/Bar/Sheet',width:75,align:'right'},
			{field:'qty_diff2',title:'Kg',width:75,align:'right'}
		]],
		url: '<?php echo $basedir; ?>models/material/mutasi_mat_grid.php?mat_type=1&date1='+$("#date1").datebox('getValue')+'&date2='+$("#date2").datebox('getValue'),
	});
}

function showPrint(){
	var opts = $('#dg').datagrid('options');
	openurl('mutasi_mat_list_pdf.php?NmMenu=Laporan Pertanggunjawaban<br>Mutasi Bahan Baku dan Bahan Penolong&mat_type=1&date1='+$("#date1").datebox('getValue')+'&date2='+$("#date2").datebox('getValue')+'&page='+opts.pageNumber+'&rows='+opts.pageSize);
}

</script>	