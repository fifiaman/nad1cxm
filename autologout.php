<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
<script language="JavaScript" type="text/javascript">
var timeoutID;
//var warningTime; //warning in 5 seconds

 
function setup() {
    this.addEventListener("mousemove", resetTimer, false);
    this.addEventListener("mousedown", resetTimer, false);
    this.addEventListener("keypress", resetTimer, false);
    this.addEventListener("DOMMouseScroll", resetTimer, false);
    this.addEventListener("mousewheel", resetTimer, false);
    this.addEventListener("touchmove", resetTimer, false);
    this.addEventListener("MSPointerMove", resetTimer, false);
 
    startTimer();
}
setup();
 
function startTimer() {
   	// wait 10 seconds before calling goInactive
	timeoutID = window.setTimeout(goInactive, 180000);
}
 
function resetTimer(e) {
    window.clearTimeout(timeoutID);
 
    goActive();
}
 
function goInactive() {
    // do something
	window.location.href="logout.php";
}
 
function goActive() {
    // do something
         
    startTimer();
}
</script>

</head>
<body>
</body>
</html>