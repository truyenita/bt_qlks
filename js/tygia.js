if (location.host !=='vnexpress.net')
{
	document.write('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
	try
	{
		for(i in vForexs){
			if (typeof vForexs[i] != "undefined")
		    	document.write('<tr><td>&nbsp;&nbsp;' + vForexs[i] + '</td><td>&nbsp;' + vCosts[i] + '</td></tr>');
	    }
	}
	catch (error)
	{
	    document.write('<tr><td colspan="2" class="source"><a href="http://vnexpress.net">vnexpress.net</a></td></tr>');
	}
	document.write('<tr><td colspan="2" class="source"><i>(Nguồn: Exibank.com.vn)</i></td></tr>');
	
	document.write('</table>');
}
else
	document.write('<a href="http://vnexpress.net">vnexpress.net</a>');