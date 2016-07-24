<!DOCTYPE html>
<html>
<body>

Individual progress:
<progress id="myProgress" value="0" max="100">
</progress>

<button onclick="myFunction()">Try it</button>
<p id="demo"></p>
<script>
function myFunction() {
document.getElementById("myProgress").value=25;
var x=document.getElementById("myProgress").value;
if (document.getElementById("myProgress").value < 26) {
    document.getElementById("demo").innerHTML = "Needs help on education/skills";
}
}
</script>

</body>
</html>
