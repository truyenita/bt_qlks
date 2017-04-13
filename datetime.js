							function tS(){ x=new Date(); x.setTime(x.getTime()); return x; } 
							function lZ(x){ return (x>9)?x:'0'+x; } 
							function tH(x){ if(x==0){ x=12; } return (x>12)?x-=12:x; } 
							function y2(x){ x=(x<500)?x+1900:x; return String(x).substring(0,4) } 
							function dT(){ if(fr==0){ fr=1; document.write('<span id="tP">'+eval(oT)+'</span>'); } tP.innerText=eval(oT); setTimeout('dT()',1000); } 
							function aP(x){ return (x>11)?'PM':'AM'; } 
							var dN=new Array('Chủ nhật','Thứ hai','Thứ ba','Thứ tư','Thứ năm','Thứ sáu','Thứ bảy'),mN=new Array('-01','-02','-03','-04','-05','-06','-07','-08','-09','-10','-11','-12'),fr=0,oT="dN[tS().getDay()]+' ngày '+tS().getDate()+''+mN[tS().getMonth()]+'-'+y2(tS().getYear())+''";