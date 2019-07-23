<html>
<head>
<link rel="stylesheet" type="text/css" href="select_style.css">
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select").innerHTML=response; 
  document.getElementById("new_select2").innerHTML="";
 }
 });
}

</script>

<script type="text/javascript">
function fetch_select2(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select2").innerHTML=response; 
 }
 });
}

</script>

</head>
<body>
<p id="heading">Dynamic Select Option Menu Using Ajax and PHP</p>
<center>
<div id="select_box">
 <select onchange="fetch_select(this.value);">
  <option value="">Select</option>
  <?php

    include 'conectadb.php';

  $select=mysqli_query($conn,"SELECT name, fipe_id FROM fipe.carros_marcas");
  while($row=mysqli_fetch_array($select, MYSQLI_ASSOC))
  {
    $name = $row["name"];
    $fipe_id = $row["fipe_id"];
   echo "<option value=\"$fipe_id\">$name</option>";
  }
 ?>
 </select>

 <select id="new_select" onchange="fetch_select2(this.value);">
 
 </select>

 <select id="new_select2">
 </select>
</div>     
</center>
</body>
</html>
