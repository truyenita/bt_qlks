if (location.host !=='vnexpress.net')
{
    document.write('<table border="0" cellpadding="0" cellspacing="0" width="100%">');
	try
	{
	    if (typeof vGoldSbjBuy != "undefined")
	    	document.write('<tr><td>&nbsp;&nbsp;Mua</td><td>&nbsp;' + vGoldSbjBuy + '</td></tr>');
	    if (typeof vGoldSbjSell != "undefined")
	    	document.write('<tr><td>&nbsp;&nbsp;Bán</td><td>&nbsp;' + vGoldSbjSell + '</td></tr>');
	}
	catch (error)
	{
	    document.write('<tr><td colspan="2" class="source"><a href="http://vnexpress.net">vnexpress.net</a></td></tr>');
	}
	document.write('<tr><td colspan="2" class="source"><i>(Nguồn: Cty Sacombank-SBJ)</i></td></tr>');

	document.write('</table>');
}
else
	document.write('<a href="http://vnexpress.net">vnexpress.net</a>');