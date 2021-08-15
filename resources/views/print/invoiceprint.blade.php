
<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>

 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:8.5in 11.0in;
	margin:1.0in 1.0in 1.0in 1.0in;}
div.WordSection1
	{page:WordSection1;}

</style>

</head>

<body lang=EN-US style='word-wrap:break-word'>

<div class=WordSection1>

<center>
<p class=MsoNormal>
<img width=168 height=137
id="Picture 2137151812" src="assets/images/logo2.png"></p>
</center>

<center>
<p class=MsoNormal>TREIGHT PORTAL</p>
</center>

<p class=MsoNormal>Email id: services@treightportal.com|Website:
www.treightportal.com | Phone no: {{$settings->mobile}}</p>

<table class=MsoTableGrid cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;width:100%;'>
 <tr>
 <td style="width:70% !important;">
 <p class=MsoNormal><b><u>Client Particulars</u></b></p>
 <p>{{$user->name}}</p>
 <p>{{$user->email}}</p>
 </td>
 <td style="width:30% !important;;">
 <p>Invoice No : #{{$booking->id}}</p>
 <p>Invoice Date : {{$booking->date}}</p>
 <p>Sale Order No : </p>
 <p>Sale Order Date : </p>
 </td>
 </tr>
</table>

<p class=MsoNormal><b>Country &amp; Emirates Code</b>: UAE 'DUBAI'   </p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;width:100%'>
 <tr>

  <td valign=top style='width:10%;border:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Serial No.</p>
  </td>

  <td valign=top style='width:25%;border:solid black 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Location</p>
  </td>

  <td valign=top style='width:25%;border:solid black 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Destination</p>
  </td>

  <!-- <td valign=top style='width:78.0pt;border:solid black 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Product
  Description</p>
  </td> -->

  <td valign=top style='width:20%;border:solid black 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Distance
  (kms)</p>
  </td>

  <td valign=top style='width:20%;border:solid black 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Amount (In
  Dhs)</p>
  </td>

 </tr>
 <tr>

  <td  valign=top style='border:solid black 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>1</p>
  </td>

  <td  valign=top style='border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>{{$booking->from_address}}</p>
  </td>

  <td  valign=top style='border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>{{$booking->to_address}}</p>
  </td>

  <!-- <td  valign=top style='border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>xx</p>
  </td> -->

  <td  valign=top style='border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>{{$booking->total_km}}</p>
  </td>

  <td  valign=top style='border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>{{$booking->sub_total}}</p>
  </td>

 </tr>
</table>

<p class=MsoNormal><span style='color:white'> </span></p>

<p class=MsoNormal> </p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;width:100%'>
 <tr>
  <td width=353 valign=top style='width:264.75pt;border:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Amount in
  Words:</p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>{{$amount_words}}</p>
  <!-- <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Xxxxxxxxxx
  xxxxxxxxxxxx</p> -->
  </td>
  <td width=144 valign=top style='width:1.5in;border:solid black 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <!-- <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Sub Total</p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Vat 5%</p> -->
  </td>
  <td width=127 valign=top style='width:95.25pt;border:solid black 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <!-- <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>{{$booking->sub_total}}</p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>{{$booking->vat_amount}} </p> -->
  </td>
 </tr>
 <tr>
  <td width=353 valign=top style='width:264.75pt;border:solid black 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>&nbsp;</p>
  </td>
  <td width=144 valign=top style='width:1.5in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Total</p>
  </td>
  <td width=127 valign=top style='width:95.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>{{$booking->sub_total}}</p>
  </td>
 </tr>
</table>

<p class=MsoNormal> </p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;width:100%'>
 <tr>
  <td valign=top style='width:60%;border:solid black 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;border-right:none !important;'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Terms &amp;
  Conditions:</p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>&nbsp;</p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:;text-align: justify;text-justify: inter-word;'>{{$settings->print_terms_and_conditions}} </p>
  <!-- <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx  </p> -->
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>This is a
  System Generated Invoice.</p>
  </td>
  <td valign=top style='width:40%;border-left:none !important;'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'></p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>&nbsp;</p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>TREIGHT PORTAL ©</p>
  </td>
 </tr>
 <tr>
  <td colspan="2" width=624 valign=top style='width:6.5in;border:solid black 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>Email id:
  services@treightportal.com|Website: www.treightportal.com | Phone no: {{$settings->mobile}}</p>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'>&nbsp;</p>
  </td>
 </tr>
</table>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

</div>

</body>

</html>
