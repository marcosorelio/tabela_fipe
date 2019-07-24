
function fetch_modelo(val)
{
 $.ajax({
 type: 'post',
 url: './php/dao.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("selectModelo").innerHTML=response; 
  document.getElementById("selectAno").innerHTML="";
 }
 });
}

function fetch_ano(val)
{
 $.ajax({
 type: 'post',
 url: './php/dao.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("selectAno").innerHTML=response; 
 }
 });
 
}
