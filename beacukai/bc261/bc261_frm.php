<?php
require_once "../../models/abspath.php";
require_once "sessions.php";
require_once "pdocon.php";

$NmMenu=$_REQUEST["NmMenu"];

$q="SELECT right(CAR,6)+1 as auto_no  FROM header WHERE DokKdBc='4' ORDER BY right(CAR,6) DESC LIMIT 1";
$run = $pdo->query($q);
$rs = $run->fetchAll(PDO::FETCH_ASSOC);
$autono=($rs)?$rs[0]['auto_no']:1;
$carno = str_pad($autono, 6, "0", STR_PAD_LEFT);

/*$q="SELECT right(NoDaf,3)+1 as auto_nodaf FROM header WHERE DokKdBc='4' ORDER BY right(NoDaf,3) DESC LIMIT 1";
$run = $pdo->query($q);
$rs = $run->fetchAll(PDO::FETCH_ASSOC);
$autonodaf=($rs)?$rs[0]['auto_nodaf']:1;
$NoDaf = "000.".str_pad($autonodaf, 3, "0", STR_PAD_LEFT);
*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<meta name="Author" content="Kikin Kusumah" />
<link type="text/css" href="<?php echo $basedir ?>themes/main.css" rel="Stylesheet" />

<link rel="stylesheet" type="text/css" href="<?php echo $basedir; ?>themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="<?php echo $basedir; ?>themes/icon.css">
<link type="text/css" href="<?php echo $basedir; ?>themes/redmond/jquery-ui-1.8.4.custom.css" rel="Stylesheet" />
 
<script type="text/javascript" src="<?php echo $basedir ?>models/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $basedir ?>models/js/jquery-ui-1.8.4.custom.min.js"></script>

<script type="text/javascript" src="<?php echo $basedir; ?>models/js/jquery.grid.min.js"></script>
<script type="text/javascript" src="<?php echo $basedir; ?>models/js/jquery.edatagrid.js"></script>
<script type="text/javascript" src="<?php echo $basedir; ?>models/js/commonFormat.js"></script>
<script type="text/javascript" src="<?php echo $basedir; ?>models/js/date.format.js"></script>
<script type="text/javascript" src="<?php echo $basedir; ?>models/js/jquery.maskedinput-1.3.js"></script>    
<script type="text/javascript" src="<?php echo $basedir; ?>models/js/global.format.js">disableSelection(document.body); 
</script>
<?php 
require_once "bc261.mjs.php";
require_once "bc261.cjs.php";
?>
<body oncontextmenu="return false;" leftmargin="20" rightmargin="20" topmargin="15" bottommargin="20"> 
<div id="w" style="padding:5px;">
<form id="frm" name="frm" action="" method="post">
    <div class="easyui-tabs" tools="#tab-tools" style="width:710px;height:470px;">               
        <div title="Data Umum" style="padding:10px;">
        <div class="demo-info" style="margin-bottom:10px">
            <div class="demo-tip icon-tip">&nbsp;</div>
            <div>
            Klik/pilih Penerima Barang Terlebih dahulu..
            Setelah itu pilih Ref. No..
            Lengkapi data-data lainnya.
            </div>
        </div>        
        
        <table>        
        <tr>        
          <td>  	        	        
            <fieldset class="borderblue">
            <legend><b>HEADER</b></legend>
              <table cellspacing="0">
              <tr>
                <td width="153">Nomor Pengajuan</td>
                <td><input type="hidden" id="fhidden" name="fhidden"> <input type="text" id="CAR" name="CAR" size="18" tabindex="1" value="<?php echo $carno ?>"></td>
                <td colspan="2"><b style="color:gray;">G. KOLOM KHUSUS BEA DAN CUKAI</b></td>
              </tr>
              <tr>
                <td>A. Kantor Pabean</td>
                <td width="196"><select id="KdKpbcAsal" name="KdKpbcAsal" style="width:150px;" tabindex="2">
                  <option value=""></option>
                  <?php 
					$q="SELECT * FROM kantor ORDER BY KdKpbc";
					$run = $pdo->query($q);
		  		    $rs = $run->fetchAll(PDO::FETCH_ASSOC);
					foreach ($rs as $r){
						$str = "<option value='".$r['KdKpbc']."'";
						if ($r['KdKpbc']==$_SESSION['KpbcPengawas']){
							$str .= "selected";
						}
						$str .= ">".$r['KdKpbc']." - ".$r['UrKdKpbc']."</option>";
						echo $str;
					}
					?>
                  </select>
                  <select id="KdKpbcTuj" name="KdKpbcTuj" style="width:150px; display:none" tabindex="3">
                    <option value=""></option>
                    <?php 
					$q="SELECT * FROM kantor ORDER BY KdKpbc";
					$run = $pdo->query($q);
		  		    $rs = $run->fetchAll(PDO::FETCH_ASSOC);
					foreach ($rs as $r){
						echo "<option value='".$r['KdKpbc']."'>".$r['KdKpbc']." - ".$r['UrKdKpbc']."</option>";
					}
					?>
                  </select></td>
                <td width="172">Nomor Pendaftaran</td>
                <td width="176"><input type="text" id="NoDaf" name="NoDaf" maxlength="7" size="19" value="<?php echo $NoDaf ?>" tabindex="9"></td>
              </tr>
              <tr>
                <td>B. Jenis TPB</td>
                <td><select id="KdJnsTpbAsal" name="KdJnsTpbAsal" style="width:150px;" tabindex="4">
                  <option value=""></option>
                  <?php 
					$q="SELECT * FROM jenis_tpb ORDER BY KdJnsTpb";
					$run = $pdo->query($q);
		  		    $rs = $run->fetchAll(PDO::FETCH_ASSOC);
					foreach ($rs as $r){
						$str = "<option value='".$r['KdJnsTpb']."' ";
						if ($r['KdJnsTpb']==$_SESSION['JnsTpb']){
							$str .= "selected";
						}
						$str .= ">".$r['KdJnsTpb']." - ".$r['UrJnsTpb']."</option>";
						echo $str;
					}
					?>
                  </select>
                  <select id="KdJnsTpbTuj" name="KdJnsTpbTuj" style="width:150px; display:none" tabindex="5">
                    <option value=""></option>
                    <?php 
					$q="SELECT * FROM jenis_tpb ORDER BY UrJnsTpb";
					$run = $pdo->query($q);
		  		    $rs = $run->fetchAll(PDO::FETCH_ASSOC);
					foreach ($rs as $r){
						echo "<option value='".$r['KdJnsTpb']."'>".$r['KdJnsTpb']." - ".$r['UrJnsTpb']."</option>";
					}
					?>
                  </select></td> 
                <td width="172">Tanggal</td>
                <td width="176"><input type="text" id="TgDaf" name="TgDaf" class="easyui-datebox" maxlength="10" tabindex="10" value="<?php echo date('d/m/Y') ?>"></td>               
              </tr>
              <tr>
                <td>C. Tujuan Pengiriman</td>
                <td><select id="KdTp" name="KdTp" tabindex="6">
                  <option value=""></option>
                  <?php 
					$q="SELECT * FROM tujuan_pengiriman WHERE KdTp IN ('3','4','5') ORDER BY KdTp";
					$run = $pdo->query($q);
		  		    $rs = $run->fetchAll(PDO::FETCH_ASSOC);
					foreach ($rs as $r){
						$str = "<option value='".$r['KdTp']."'";
						if ($r['KdTp']=="2"){
							$str .= "selected";
						}
						$str .= ">".$r['UrTp']."</option>";
						echo $str;
					}
					?>
                </select></td>
                <td align="right">&nbsp;</td>
                <td width="176">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>    
                <td align="right">&nbsp;</td>
                <td width="176">&nbsp;</td>            
              </tr>               
              </table>
            </fieldset class="borderblue">          
          </td>
        </tr>        
        <tr>
          <td>
            <fieldset class="borderblue">
            <table cellspacing="0" class="sub_table" width="100%">
            <tr>
              <td colspan="2"><b>PENANGGUNG JAWAB PERUSAHAAN</b></td>  
              <td colspan="2"><b>PEJABAT BC</b></td>
            </tr>
            <tr>
              <td width="19%">Nama</td>
              <td width="31%"><input type="text" id="NmPengusaha" name="NmPengusaha" size="22" tabindex="15" value="<?php echo $_SESSION['NmPengusaha'] ?>"></td>
              <td width="22%">Nama</td>
              <td width="28%"><input type="text" id="NmPejabat" name="NmPejabat" size="22" value="<?php echo $_SESSION['NmPejabat'] ?>" tabindex="7"></td>
              </tr>
            <tr>
              <td valign="top">NIP</td>
              <td valign="top"><input type="text" id="NipPengusaha" name="NipPengusaha" size="22" tabindex="16" value="<?php echo $_SESSION['NipPengusaha'] ?>"></td>
              <td valign="top">NIP</td>
              <td valign="top"><input type="text" id="NipPejabat" name="NipPejabat" size="22" value="<?php echo $_SESSION['NipPejabat'] ?>" tabindex="8"></td>
            </tr>
            </table>
            </fieldset>
          </td>
        </tr>  
        <tr>
          <td>
            <fieldset class="borderblue">            
            <table cellspacing="0" class="sub_table" width="100%">
            <tr>
              <td colspan="2"><b>PENERIMA BARANG</b></td>  
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%">Nama</td>
              <td width="40%">
              <select id="NmTuj" name="NmTuj" style="width:200px;">
              <option value=""></option>
              <?php 
					$q="SELECT * FROM mst_perusahaan WHERE TpPrshn IN ('s') ORDER BY NmPrshn";
					$run = $pdo->query($q);
		  		    $rs = $run->fetchAll(PDO::FETCH_ASSOC);
					foreach ($rs as $r){
						$str = "<option value='".$r['NmPrshn']."'";
						$str .= ">".$r['NmPrshn']."</option>";
						echo $str;
					}
					?>
              </select>
              </td>
              <td>Ref No.</td>
              <td> <select id="ref_id" name="ref_id"></select>
              </td>
              </tr>
            </table>
            </fieldset>
          </td>
        </tr>           
        <tr>
          <td>
            <fieldset class="borderblue">          
            <legend><b>DATA PENGANGKUTAN</b></legend>
            <table cellspacing="0" class="sub_table" width="100%">
            <tr>
              <td width="50%">Jenis Sarana Pengangkut Darat 
                <input type="text" id="JnsAngkut" name="JnsAngkut" maxlength="18" size="18" tabindex="21"></td>
              <td width="18%">Nomor Polisi</td> 
              <td width="31%">
              <input type="text" id="NoPolisi" name="NoPolisi" maxlength="10" size="10" tabindex="22"></td>
            </tr>
            </table>
            </fieldset class="borderblue">
          </td>
        </tr>        
        </table> 
       </div><!-- Akhir Div umum -->
       <div title="Dokumen Pelengkap Pabean" style="padding:10px;">        
       	<table id="dg" singleSelect="true"></table>
        <div id="toolbar">  
            <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" title="Tambah" onclick="javascript:$('#dg').edatagrid('addRow')"></a>  
            <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" title="Hapus" onclick="javascript:$('#dg').edatagrid('destroyRow')"></a>  
            <a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" title="Simpan" onclick="javascript:$('#dg').edatagrid('saveRow')"></a>  
            <a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" title="Batal" onclick="javascript:$('#dg').edatagrid('cancelRow')"></a>  
        </div>
       </div><!-- Akhir Div dokPelengkap -->
       <div title="Data Barang" style="padding:10px;">
            <fieldset class="borderblue" style="display:none">          
            <legend><b>RIWAYAT BARANG</b></legend>
            <table cellspacing="0" class="sub_table" width="100%">
            <tr>
              <td width="50%">Nomor dan Tanggal BC 4.1 asal :
                <select id="NoBcAsal" name="NoBcAsal" class="easyui-combobox" style="width:130px; " tabindex="26">
                </select>
                </td>
              <td colspan="3" width="50%">tgl 
              <input type="text" id="TgBcAsal" name="TgBcAsal" class="easyui-datebox" maxlength="10" size="10" tabindex="27"></td>
            </tr>
            </table>
            </fieldset class="borderblue">
          <br>
            <fieldset class="borderblue">
            <legend><b>DATA PERDAGANGAN</b></legend>
            <table cellspacing="0" class="sub_table" width="100%">
            <tr>
              <td width="20%"> Jenis Valuta Asing</td>     
              <td width="29%">
              	<select id="KdVal" name="KdVal" style="width:80px;" tabindex="28">
                    	<option value=""></option>
                <?php 
					$q="SELECT * FROM valuta WHERE KdVal IN ('USD','Rp') ORDER BY KdVal";
					$run = $pdo->query($q);
		  		    $rs = $run->fetchAll(PDO::FETCH_ASSOC);
					foreach ($rs as $r){						
						$str = "<option value='".$r['KdVal']."'";
						if ($r['KdVal']=="USD"){
							$str .= "selected";
						}
						$str .= ">".$r['KdVal']." - ".$r['UrVal']."</option>";
						echo $str;
					}
					?>
                    </select>
              </td>
              <td width="18%">CIF (USD)</td>
              <td width="32%">                
                <input type="text" id="CIF" name="CIF" class="easyui-numberbox" precision="2" groupSeparator="," maxlength="10" size="12" tabindex="29"></td>
            </tr>
            <tr>
              <td width="20%">NDPBM</td>              
              <td><input type="text" id="NDPBM" name="NDPBM" class="easyui-numberbox" precision="2" groupSeparator="," maxlength="10" size="12" tabindex="29"></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            </table>
        </fieldset>          
        <br>
        <fieldset class="borderblue">
            <legend><b>DATA PETI KEMAS DAN PENGEMAS</b></legend>
 			<table cellspacing="0" class="sub_table">
            <tr>
              <td width="151"> Merek Kemasan</td>
              <td width="197"><input type="text" id="MerekKemas" name="MerekKemas" maxlength="10" size="12" tabindex="31"></td>
              <td>Volume (m3)</td>
              <td><input type="text" id="VOL" name="VOL" class="easyui-numberbox" precision="2" groupSeparator="," size="12" tabindex="34"></td>
              <td width="25">&nbsp;</td>
            </tr>  
            <tr>
              <td>Jenis Kemasan</td>
              <td><select id="KdKemas" name="KdKemas" style="width:80px;" tabindex="32">
                <option value=""></option>
                <?php 
					$q="SELECT * FROM kemasan ORDER BY KdKemas";
					$run = $pdo->query($q);
		  		    $rs = $run->fetchAll(PDO::FETCH_ASSOC);
					foreach ($rs as $r){
						echo "<option value='".$r['KdKemas']."'>".$r['KdKemas']." - ".$r['UrKemas']."</option>";
					}
					?>
              </select></td>
              <td width="134">Berat Kotor (kg)</td>
              <td width="200"><input type="text" id="BRUTO" name="BRUTO" class="easyui-numberbox" precision="2" groupSeparator="," size="12" tabindex="35"></td>
              <td>&nbsp;</td>
            </tr>
        <tr>
          <td width="151"> Jumlah Kemasan</td>
          <td><input type="text" id="JmlKemas" name="JmlKemas" class="easyui-numberbox" groupSeparator="," maxlength="5" size="5" tabindex="33"></td>
          <td width="134">Berat Bersih (kg) </td>
          <td><input type="text" id="NETTO" name="NETTO" class="easyui-numberbox" precision="2" groupSeparator="," size="12" tabindex="36">KG</td>
        </tr>
        </table>    
        </fieldset>
        <br>  
        <table id="dg2" singleSelect="true"></table>  
        <div id="toolbar2">  
            <a href="#" class="easyui-linkbutton" id="tl2Tbh" iconCls="icon-add" plain="true" title="Tambah">Tambah</a>  
            <a href="#" class="easyui-linkbutton" id="tl2Ubh" iconCls="icon-edit" plain="true" title="Ubah">Ubah</a>  
            <a href="#" class="easyui-linkbutton" id="tl2Hps" iconCls="icon-remove" plain="true" title="Hapus">Hapus</a>        
        </div>         
        
        </div><!--Akhir DIV dataBarang-->
        <div title="Data Jaminan" style="padding:10px;">
        <table>
        <tr>
          <td>
            <fieldset class="borderblue">
 			<table width="670" cellspacing="0" class="sub_table">
            <tr>
              <td colspan="2"><b style="color:gray;">DATA PERHITUNGAN JAMINAN</b></td>  
              <td colspan="2"><b style="color:gray;">DATA JAMINAN</b></td>
            </tr>
            <tr>
              <td width="63">BM</td>
              <td width="201"><input type="text" id="BM" name="BM" class="easyui-numberbox" precision="2" groupSeparator="," size="25" tabindex="35"></td>
              <td width="164"> Jenis Jaminan</td>
              <td width="277"><input type="text" id="JnsJaminan" name="JnsJaminan" size="30" tabindex="41"></td>
            </tr> 
            <tr>
              <td>Cukai</td>
              <td><input type="text" id="Cukai" name="Cukai" class="easyui-numberbox" precision="2" groupSeparator="," size="25" tabindex="36"></td>
              <td>No Jaminan</td>
              <td><input type="text" id="NoJaminan" name="NoJaminan" size="20" tabindex="42"> Tgl. <input type="text" id="TgJaminan" name="TgJaminan" class="easyui-datebox" style="width:90px" tabindex="43"></td>
            </tr> 
            <tr>
              <td valign="top"> PPN</td>
              <td valign="top"><input type="text" id="PPN" name="PPN" class="easyui-numberbox" precision="2" groupSeparator="," size="25" tabindex="37"><br></td>
              <td valign="top"> Nilai Jaminan</td>
              <td valign="top"><input type="text" id="NilaiJaminan" name="NilaiJaminan" class="easyui-numberbox" precision="2" groupSeparator="," size="25" tabindex="44"><br></td>
            </tr>
            <tr>
              <td> PPnBM</td>
              <td><input type="text" id="PPnBM" name="PPnBM" class="easyui-numberbox" precision="2" groupSeparator="," size="25" tabindex="38"></td>
              <td> Jatuh Tempo Jaminan</td>
              <td><input type="text" id="JatuhTempo" name="JatuhTempo" class="easyui-datebox" style="width:100px" tabindex="45"></td>
            </tr>
            <tr>
              <td class="brdr_btm"> PPh</td>
              <td class="brdr_btm"><input type="text" id="PPh" name="PPh" class="easyui-numberbox" precision="2" groupSeparator="," size="25" tabindex="39"></td>
              <td> Penjamin</td>
              <td><input type="text" id="Penjamin" name="Penjamin" size="30" tabindex="46"></td>
            </tr>
            <tr>
              <td> Total</td>
              <td><input type="text" id="Total" name="Total" class="easyui-numberbox" precision="2" groupSeparator="," size="25" tabindex="49"></td>
              <td> Bukti Penerimaan Jaminan</td>
              <td><input type="text" id="NoBukti" name="NoBukti"size="20" tabindex="47"> Tgl. <input type="text" id="TgBukti" name="TgBukti" class="easyui-datebox" style="width:90px" tabindex="48"></td>
            </tr>
            </table>         
            </fieldset>            
          </td>
        </tr>                        
        </table> 
        </div>
        <div title="Barang Kembali" style="padding:10px;">
        <table id="dg3" singleSelect="true" style="width:725px;height:200px"></table>  
        <div id="toolbar3">  
            <a href="#" class="easyui-linkbutton" id="tl3Tbh" iconCls="icon-add" plain="true" title="Tambah">Tambah</a>  
            <a href="#" class="easyui-linkbutton" id="tl3Ubh" iconCls="icon-edit" plain="true" title="Ubah">Ubah</a>  
            <a href="#" class="easyui-linkbutton" id="tl3Hps" iconCls="icon-remove" plain="true" title="Hapus">Hapus</a>
        </div><!--Akhir DIV toolbar3--> 
        </div>
        </div>         
</form>
</div>  <!--Akhir DIV Window--> 
<div id="tab-tools">
        <a id="btnTbh" name="btnTbh" href="#" class="easyui-linkbutton" plain="true" title="Tambah" iconCls="icon-add"></a>
        <a id="btnUbh" name="btnUbh" href="#" class="easyui-linkbutton" plain="true" title="Ubah" iconCls="icon-edit" style="display:none"></a>
        <a id="btnSim" name="btnSim" href="#" class="easyui-linkbutton" plain="true" title="Simpan" iconCls="icon-save" style="display:none"></a>
        <a id="btnHps" name="btnHps" href="#" class="easyui-linkbutton" plain="true" title="Hapus" iconCls="icon-remove" style="display:none"></a> 
        <a id="btnBtl" name="btnBtl" href="#" class="easyui-linkbutton" plain="true" title="Batal" iconCls="icon-undo" style="display:none"></a>
        <a id="btnCri" name="btnCri" href="#" class="easyui-linkbutton" plain="true" title="Cari" iconCls="icon-search"></a>              
</div>

<div id="wCari"><table id="dgCari" singleSelect="true"></table></div>
<div id="toolCari" style="padding:5px;height:auto">
    <div>
        Tanggal Pendaftaran Dari: <input id="dtdari" class="easyui-datebox" style="width:100px">
        Sampai <input id="dtsampai" class="easyui-datebox" style="width:100px">
        <a href="#" class="easyui-linkbutton" iconCls="icon-search" onClick="cari();">Cari</a>
    </div>
</div>

<div id="dlgBarang" class="easyui-dialog" style="width:400px;height:350px;padding:10px" closed="true" buttons="#dlgBarang-buttons">
<form id="fm" method="post" onSubmit="return false">
<table>
<tr>
  <td width="209">Kode Barang</td>
  <td id="barang" width="268"><select name="KdBarang" id="KdBarang" class="easyui-validatebox" required="true" style="width:150px">
    <option value="" selected></option>
    <?php
        $run = $pdo->query("SELECT * FROM mst_barang ORDER BY KdBarang");
        $rs = $run->fetchAll(PDO::FETCH_ASSOC);
        foreach($rs as $r)
            echo "<option value=\"".$r['KdBarang']."\">".$r['KdBarang']." - ".$r['NmBarang']."</option>";
    ?>
  </select></td>
</tr>
<tr>
  <td valign="top">Uraian Barang</td>
  <td><textarea name="UrBarang" cols="20" class="easyui-validatebox" id="UrBarang" required="true"></textarea></td>
</tr>
<tr>
  <td>Negara Asal Barang</td>
  <td><select name="Negara" id="Negara" class="easyui-validatebox"  style="width:150px">
      <option value=""></option>
      <?php
        $run = $pdo->query('SELECT * FROM mst_negara ORDER BY KdNegara');
        $rs = $run->fetchAll(PDO::FETCH_ASSOC);
        foreach($rs as $r)
            echo "<option value=\"".$r['KdNegara']."\">".$r['KdNegara']." - ".$r['NmNegara']."</option>";
    ?>
      </select></td>
</tr>

<tr>
  <td valign="top">Tarif</td>
  <td><textarea name="Tarif" cols="20" class="easyui-validatebox" id="Tarif"></textarea></td>
</tr>
<tr>
  <td>Jumlah</td>
  <td><input name="qty" type="text" id="qty" class="easyui-numberbox" precision="2" groupSeparator="," decimalSeparator="." value="" size="12" maxlength="12"></td>
</tr>
<tr>
  <td>Berat (kg)</td>
  <td><input name="NETTO2" type="text" id="NETTO2" class="easyui-numberbox" precision="2" groupSeparator="," decimalSeparator="." value="" size="12" maxlength="12"></td>
</tr>
<tr>
  <td>Volume (m3)</td>
  <td><input name="VOL2" type="text" id="VOL2" class="easyui-numberbox" precision="2" groupSeparator="," decimalSeparator="." value="" size="12" maxlength="12"></td>
</tr>
<tr>
  <td>Jumlah Nilai CIF</td>
  <td><input name="CIF2" type="text" id="CIF2" class="easyui-numberbox" precision="2" groupSeparator="," decimalSeparator="." value="" size="12" maxlength="12"></td>
</tr>
</table>
<input type="submit" id="btnSubmit" name="btnSubmit" style="display:none">
</form>            
</div>
<div id="dlgBarang-buttons">
<a href="#" id="tl2Sim" class="easyui-linkbutton" iconCls="icon-save">Simpan</a>
<a href="#" id="tl2Ubh2" class="easyui-linkbutton" iconCls="icon-edit">Ubah</a>
</div>

<div id="dlgBarang2" class="easyui-dialog" style="width:400px;height:350px;padding:10px" closed="true" buttons="#dlgBarang2-buttons">
<form id="fm2" method="post" onSubmit="return false">
<table>
<tr>
  <td width="209">Kode Barang</td>
  <td id="barang" width="268"><select name="KdBarang2" id="KdBarang2" class="easyui-validatebox" required="true" style="width:150px">
    <option value="" selected></option>
    <?php
		$run = $pdo->query("SELECT * FROM mst_barang ORDER BY KdBarang");
        $rs = $run->fetchAll(PDO::FETCH_ASSOC);
        foreach($rs as $r)
            echo "<option value=\"".$r['KdBarang']."\">".$r['KdBarang']." - ".$r['NmBarang']."</option>";
    ?>
  </select></td>
</tr>
<tr>
  <td valign="top">Uraian Barang</td>
  <td><textarea name="UrBarang2" cols="20" class="easyui-validatebox" id="UrBarang2" required="true"></textarea></td>
</tr>
<tr>
  <td>Jumlah</td>
  <td><input name="qty2" type="text" id="qty2" class="easyui-numberbox" precision="2" groupSeparator="," decimalSeparator="." value="" size="12" maxlength="12"></td>
</tr>
<tr>
  <td>Berat (kg)</td>
  <td><input name="NETTO3" type="text" id="NETTO3" class="easyui-numberbox" precision="2" groupSeparator="," decimalSeparator="." value="" size="12" maxlength="12"></td>
</tr>
<tr>
  <td>Volume (m3)</td>
  <td><input name="VOL3" type="text" id="VOL3" class="easyui-numberbox" precision="2" groupSeparator="," decimalSeparator="." value="" size="12" maxlength="12"></td>
</tr>
<tr>
  <td>Jumlah Nilai CIF</td>
  <td><input name="CIF3" type="text" id="CIF3" class="easyui-numberbox" precision="2" groupSeparator="," decimalSeparator="." value="" size="12" maxlength="12"></td>
</tr>
</table>
<input type="submit" id="btnSubmit" name="btnSubmit" style="display:none">
</form>            
</div>
<div id="dlgBarang2-buttons">
<a href="#" id="tl3Sim" class="easyui-linkbutton" iconCls="icon-save">Simpan</a>
<a href="#" id="tl3Ubh2" class="easyui-linkbutton" iconCls="icon-edit">Ubah</a>
</div>     
</body>
</html>