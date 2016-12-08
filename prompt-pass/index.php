<div id="error" style="display:block; color: red">
  YOU DONT KNOW THE PASSWPRD_??
</div>
<br>

<div id="content" style="display:none">
  XSS is power
</div>
<script>
  var pass = prompt("enter password");
  if(pass == "trump"){
    document.getElementById("error").style.display = "none";
    document.getElementById("content").style.display = "block";
  }
</script>
