<script>
var ms = 0;
var sec = 0;
var min = 0;
var ing = false;
function stopwatch(){
	if(ing){
		ms+=1;
		if(ms==10){
			sec+=1;
			ms=0;
		}
		if(sec==60){
		min+=1;
		sec=0;
		}
		Strsec=""+sec;
		Strmin=""+min;
		Strms=""+ms;
		if(Strsec.length<2){
		Strsec="0"+sec;
		}
		if(Strmin.length<2){
                Strmin="0"+min;
		}
		document.display.sec.value=Strsec;
		document.display.min.value=Strmin;
		document.display.ms.value=Strms;
		setTimeout("stopwatch()",100);
	}
}
function stop(){
	ing = false;
	sec=0;
	min=0;
	ms=0;
	Strsec="00";
	Strmin="00";
	strms="00";
}

</script>

<center>
<form name="display" onreset="startover()">
<table border='10' bordercolor="black">
<tbody>
<div style="background:#000000;color:#00ff00">
<tr style="background:#000000;color:#00ff00">
<td colspan="3">
<input type="text" name="min" value="00" size="3" style="height:30px;border:0;font-size:30px;width:33px;color:#00ff00;background:#000000">
:
<input type="text" name="sec" value="00" size="3" style="height:30px;border:0;font-size:30px;width:33px;color:#00ff00;background:#000000">
:
<input type="text" name="ms" value="0" size="3" style="height:30px;border:0;font-size:30px;width:33px;color:#00ff00;background:#000000">
</td>
</tr>
<tr>
<td>
<input type="button" name="start" value="start!" onclick='ing=true;stopwatch()'>
<input type="button" name="stop" value="중지" onclick='ing=false;'>
<input type="reset" name="reset" value="다시">
</td>
</div>
</tr>
</tbody>
</table>
</form>
</center>
