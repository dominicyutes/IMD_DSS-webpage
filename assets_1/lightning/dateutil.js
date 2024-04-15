var month = new Array();
month[0] = "January";
month[1] = "February";
month[2] = "March";
month[3] = "April";
month[4] = "May";
month[5] = "June";
month[6] = "July";
month[7] = "August";
month[8] = "September";
month[9] = "October";
month[10] = "November";
month[11] = "December";
var hourVal=-1;
function getCurrentDate()
{
	var d=new Date();
	var date=d.getDate();
	var mon=month[d.getMonth()];
	var year=d.getFullYear();
	
	date=checkForDoubleDigits(date);
	mon=checkForDoubleDigits(mon);
	
	return (date+"-"+mon+"-"+year);
}
function getHours()
{
	var d=new Date();
	var hours=d.getHours();
	hours-=1;
	hours=checkForDoubleDigits(hours);	
	return hours;
}

function checkForDoubleDigits(val)
{
	if(parseInt(val) < 10 )
		val="0"+val;
	
	return val;
}
function getIncrHours()
{
	hourVal=hourVal+1;
	if(hourVal==parseInt(getHours()))
		hourVal=0;
	//console.log('fromJs:'+hourVal);
	return hourVal;
}
console.log(getHours());