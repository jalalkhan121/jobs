<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
<title>ONLINE JOB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
-->
    </style>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style2 {font-weight: bold}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">Experience information </a></span></h2>
               
<form method="post" action="insrExp.php">
	<table width="101%" border="0" cellspacing="0" cellpadding="0">
      <td width="731"></tr>
      <tr>
        <td>Do you have experience ? </td>
        <td width="293">&nbsp;</td>
      </tr>
      <tr>
        <td>Start date </td>
        <td>from:
          <select name="Month" >
              <option>Month</option>
               <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
          </select>
            <select name="Year" >
              <option>Year</option>
              <option>1998</option>
                              <option>1999</option>
                              <option>2000</option>
                              <option>2001</option>
                              <option>2002</option>
                              <option>2003</option>
                              <option>2004</option>
                              <option>2005</option>
                              <option>2006</option>
                              <option>2007</option>
                              <option>2008</option>
                              <option>2009</option>
                              <option>2010</option>
                              <option>2011</option>
                              <option>2012</option>
                              <option>2013</option>
            </select>        </td>
      </tr>
      <tr>
        <td>End date </td>
        <td>to:
          <select name="endDate" >
              <option>Month</option>
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
          </select>
            <select name="endYear" >
              <option>Year</option>
              <option>1998</option>
              <option>1999</option>
              <option>2000</option>
              <option>2001</option>
              <option>2002</option>
              <option>2003</option>
              <option>2004</option>
              <option>2005</option>
              <option>2006</option>
              <option>2007</option>
              <option>2008</option>
              <option>2009</option>
              <option>2010</option>
              <option>2011</option>
              <option>2012</option>
              <option>2013</option>
            </select>        </td>
      </tr>
      <tr>
        <td>Work Experience </td>
        <td><select name="WorkExperience" >
		<option selected="selected" value="">-- Select Work Experience --</option>
                            <option value="0">Less then 1 year</option>
                            <option value="1">1 year</option>
                            <option value="2">2 year</option>
                            <option value="3">3 year</option>
                            <option value="4">4 year</option>
                            <option value="5">5 year</option>
                            <option value="6">6 year</option>
                            <option value="7">7 year</option>
                            <option value="8">8 year</option>
                            <option value="9">9 year</option>
            <option value="10">10 year</option>
          </select>        </td>
      </tr>
      <tr>
        <td>Functional Area </td>
        <td><select name="AreaWork" >
		<option selected="selected" value="">-- Select Functional Area --</option>
            <option>Software</option>
            <option>Developer</option>
            
            
            
            
            
            
            
            
          </select>        </td>
      </tr>
      <tr>
        <td>Most recent/Current job title </td>
        <td><input type='text' name='Last_name22' /></td>
      </tr>
      <tr>
        <td>Company name </td>
        <td><input type='text' name="Companyname"/></td>
      </tr>
      <tr>
        <td>Location</td>
        <td><select name="Location" >
            <option selected="selected" value="">-- Select City --</option>
            <option>Abbottabad</option>
            <option>Abdul hakim</option>
            <option>Adda jahan khan</option>
            <option>Adda shaiwala</option>
            <option>Akhora khattak</option>
            <option>Ali chak</option>
            <option>Allahabad</option>
            <option>Amangarh</option>
            <option>Arif wala</option>
            <option>Arifwala</option>
            <option>Attock</option>
            <option>Babri banda</option>
            <option>Badin</option>
            <option>Bahawalnagar</option>
            <option>Bahawalpur</option>
            <option>Balakot</option>
            <option>Bannu</option>
            <option>Barbar loi</option>
            <option>Baroute</option>
            <option>Bat khela</option>
            <option>Besham</option>
            <option>Bhai pheru</option>
            <option>Bhakkar</option>
            <option>Bhalwal</option>
            <option>Bhan saeedabad</option>
            <option>Bhera</option>
            <option>Bhimbar</option>
            <option>Bhirya road</option>
            <option>Bhuawana</option>
            <option>Blitang</option>
            <option>Buchay key</option>
            <option>Burewala</option>
            <option>Chacklala</option>
            <option>Chaghi</option>
            <option>Chaininda</option>
            <option>Chak 4 b c</option>
            <option>Chak 46</option>
            <option>Chak jamal</option>
            <option>Chak jhumra</option>
            <option>Chak sawara</option>
            <option value='Chak sheza'>Chak sheza</option>
            <option value='Chakwal'>Chakwal</option>
            <option value='Charsada'>Charsada</option>
            <option value='Chashma'>Chashma</option>
            <option value='Chawinda'>Chawinda</option>
            <option value='Cherat'>Cherat</option>
            <option value='Chicha watni'>Chicha watni</option>
            <option value='Chiniot'>Chiniot</option>
            <option value='Chishtian'>Chishtian</option>
            <option value='Chohar jamali'>Chohar jamali</option>
            <option value='Choppar hatta'>Choppar hatta</option>
            <option value='Chowha saidan shah'>Chowha saidan shah</option>
            <option value='Chowk azam'>Chowk azam</option>
            <option value='Chowk mailta'>Chowk mailta</option>
            <option value='Chowk munda'>Chowk munda</option>
            <option value='Chunian'>Chunian</option>
            <option value='Dadakhel'>Dadakhel</option>
            <option value='Dadu'>Dadu</option>
            <option value='Daharki'>Daharki</option>
            <option value='Dandot'>Dandot</option>
            <option value='Dargai'>Dargai</option>
            <option value='Darya khan'>Darya khan</option>
            <option value='Daska'>Daska</option>
            <option value='Daud khel'>Daud khel</option>
            <option value='Daulat pur'>Daulat pur</option>
            <option value='Daur'>Daur</option>
            <option value='Deh pathaan'>Deh pathaan</option>
            <option value='Depal pur'>Depal pur</option>
            <option value='Dera ghazi khan'>Dera ghazi khan</option>
            <option value='Dera ismail khan'>Dera ismail khan</option>
            <option value='Dera murad jamali'>Dera murad jamali</option>
            <option value='Dera nawab sahib'>Dera nawab sahib</option>
            <option value='Dhatmal'>Dhatmal</option>
            <option value='Dhoun kal'>Dhoun kal</option>
            <option value='Digri'>Digri</option>
            <option value='Dijkot'>Dijkot</option>
            <option value='Dina'>Dina</option>
            <option value='Dinga'>Dinga</option>
            <option value='Dir'>Dir</option>
            <option value='Doaaba'>Doaaba</option>
            <option value='Doltala'>Doltala</option>
            <option value='Domeli'>Domeli</option>
            <option value='Dudial'>Dudial</option>
            <option value='Dunyapur'>Dunyapur</option>
            <option value='Eminabad'>Eminabad</option>
            <option value='Estate l.m factory'>Estate l.m factory</option>
            <option value='Faisalabad'>Faisalabad</option>
            <option value='Farooqabad'>Farooqabad</option>
            <option value='Fateh pur'>Fateh pur</option>
            <option value='Feroz walla'>Feroz walla</option>
            <option value='Feroz watan'>Feroz watan</option>
            <option value='Feteh jhang'>Feteh jhang</option>
            <option value='Fiza got'>Fiza got</option>
            <option value='FR Bannu / Lakki'>FR Bannu / Lakki</option>
            <option value='FR Peshawar / Kohat'>FR Peshawar / Kohat</option>
            <option value='FR Tank / DI Khan'>FR Tank / DI Khan</option>
            <option value='Gadoon amazai'>Gadoon amazai</option>
            <option value='Gaggo mandi'>Gaggo mandi</option>
            <option value='Gakhar mandi'>Gakhar mandi</option>
            <option value='Gambet'>Gambet</option>
            <option value='Garh maharaja'>Garh maharaja</option>
            <option value='Garh more'>Garh more</option>
            <option value='Gari habibullah'>Gari habibullah</option>
            <option value='Gari mori'>Gari mori</option>
            <option value='Gawadar'>Gawadar</option>
            <option value='Gharo'>Gharo</option>
            <option value='Ghazi'>Ghazi</option>
            <option value='Ghotki'>Ghotki</option>
            <option value='Gilgit'>Gilgit</option>
            <option value='Gohar ghoushti'>Gohar ghoushti</option>
            <option value='Gojar khan'>Gojar khan</option>
            <option value='Gojra'>Gojra</option>
            <option value='Goular khel'>Goular khel</option>
            <option value='Guddu'>Guddu</option>
            <option value='Gujjar khan'>Gujjar khan</option>
            <option value='Gujranwala'>Gujranwala</option>
            <option value='Gujrat'>Gujrat</option>
            <option value='Hafizabad'>Hafizabad</option>
            <option value='Hala'>Hala</option>
            <option value='Hangu'>Hangu</option>
            <option value='Hari pur'>Hari pur</option>
            <option value='Hariwala'>Hariwala</option>
            <option value='Haroonabad'>Haroonabad</option>
            <option value='Hasilpur'>Hasilpur</option>
            <option value='Hassan abdal'>Hassan abdal</option>
            <option value='Hattar'>Hattar</option>
            <option value='Hattian lawrencepur'>Hattian lawrencepur</option>
            <option value='Haveli lakha'>Haveli lakha</option>
            <option value='Havelian'>Havelian</option>
            <option value='Hayatabad'>Hayatabad</option>
            <option value='Hazro'>Hazro</option>
            <option value='Head marala'>Head marala</option>
            <option value='Hub inds estate'>Hub inds estate</option>
            <option value='Hyderabad'>Hyderabad</option>
            <option value='Islamabad'>Islamabad</option>
            <option value='Issa khel'>Issa khel</option>
            <option value='Jaccobabad'>Jaccobabad</option>
            <option value='Jaja abasian'>Jaja abasian</option>
            <option value='Jalal pur jatan'>Jalal pur jatan</option>
            <option value='Jalal pur priwala'>Jalal pur priwala</option>
            <option value='Jampur'>Jampur</option>
            <option value='Jamrud road'>Jamrud road</option>
            <option value='Jamshoro'>Jamshoro</option>
            <option value='Jan pur'>Jan pur</option>
            <option value='Jandanwala'>Jandanwala</option>
            <option value='Jaranwala'>Jaranwala</option>
            <option value='Jauharabad'>Jauharabad</option>
            <option value='Jehangira'>Jehangira</option>
            <option value='Jehanian'>Jehanian</option>
            <option value='Jehlum'>Jehlum</option>
            <option value='Jhand'>Jhand</option>
            <option value='Jhang'>Jhang</option>
            <option value='Jhatta bhutta'>Jhatta bhutta</option>
            <option value='Jhelum'>Jhelum</option>
            <option value='Jhudo'>Jhudo</option>
            <option value='Joharabad'>Joharabad</option>
            <option value='Kabir wala'>Kabir wala</option>
            <option value='Kacha khooh'>Kacha khooh</option>
            <option value='Kahuta'>Kahuta</option>
            <option value='Kakul'>Kakul</option>
            <option value='Kakur town'>Kakur town</option>
            <option value='Kala bagh'>Kala bagh</option>
            <option value='Kala shah kaku'>Kala shah kaku</option>
            <option value='Kalar syedian'>Kalar syedian</option>
            <option value='Kalaswala'>Kalaswala</option>
            <option value='Kallur kot'>Kallur kot</option>
            <option value='Kamalia'>Kamalia</option>
            <option value='Kamalia musa'>Kamalia musa</option>
            <option value='Kamber ali khan'>Kamber ali khan</option>
            <option value='Kamokey'>Kamokey</option>
            <option value='Kamra'>Kamra</option>
            <option value='Kandh kot'>Kandh kot</option>
            <option value='Kandiaro'>Kandiaro</option>
            <option value='Karachi'>Karachi</option>
            <option value='Karak'>Karak</option>
            <option value='Karoor pacca'>Karoor pacca</option>
            <option value='Karore lalisan'>Karore lalisan</option>
            <option value='Kashmore'>Kashmore</option>
            <option value='Kasur'>Kasur</option>
            <option value='Kazi ahmed'>Kazi ahmed</option>
            <option value='Khair pur'>Khair pur</option>
            <option value='Khair pur mir'>Khair pur mir</option>
            <option value='Khairpur nathan shah'>Khairpur nathan shah</option>
            <option value='Khan qah sharif'>Khan qah sharif</option>
            <option value='Khanbel'>Khanbel</option>
            <option value='Khandabad'>Khandabad</option>
            <option value='Khanewal'>Khanewal</option>
            <option value='Khangarh'>Khangarh</option>
            <option value='Khanqah dogran'>Khanqah dogran</option>
            <option value='Khanqah sharif'>Khanqah sharif</option>
            <option value='Kharan'>Kharan</option>
            <option value='Kharian'>Kharian</option>
            <option value='Khewra'>Khewra</option>
            <option value='Khoski'>Khoski</option>
            <option value='Khurian wala'>Khurian wala</option>
            <option value='Khushab'>Khushab</option>
            <option value='Khushal kot'>Khushal kot</option>
            <option value='Khuzdar'>Khuzdar</option>
            <option value='Kohat'>Kohat</option>
            <option value='Kot addu'>Kot addu</option>
            <option value='Kot bunglow'>Kot bunglow</option>
            <option value='Kot ghulam mohd'>Kot ghulam mohd</option>
            <option value='Kot mithan'>Kot mithan</option>
            <option value='Kot radha kishan'>Kot radha kishan</option>
            <option value='Kotla'>Kotla</option>
            <option value='Kotla arab ali khan'>Kotla arab ali khan</option>
            <option value='Kotla jam'>Kotla jam</option>
            <option value='Kotla patdan'>Kotla patdan</option>
            <option value='Kotli loharan'>Kotli loharan</option>
            <option value='Kotri'>Kotri</option>
            <option value='Kumbh'>Kumbh</option>
            <option value='Kundina'>Kundina</option>
            <option value='Kunjah'>Kunjah</option>
            <option value='Kunri'>Kunri</option>
            <option value='Lahore'>Lahore</option>
            <option value='Laki marwat'>Laki marwat</option>
            <option value='Lala musa'>Lala musa</option>
            <option value='Lala rukh'>Lala rukh</option>
            <option value='Laliah'>Laliah</option>
            <option value='Lalshanra'>Lalshanra</option>
            <option value='Landi Kotal'>Landi Kotal</option>
            <option value='Larkana'>Larkana</option>
            <option value='Lawrence pur'>Lawrence pur</option>
            <option value='Layyah'>Layyah</option>
            <option value='Liaquat pur'>Liaquat pur</option>
            <option value='Lodhran'>Lodhran</option>
            <option value='Ludhan'>Ludhan</option>
            <option value='Machi goth'>Machi goth</option>
            <option value='Madina'>Madina</option>
            <option value='Mailsi'>Mailsi</option>
            <option value='Makli'>Makli</option>
            <option value='Malakwal'>Malakwal</option>
            <option value='Mamu kunjan'>Mamu kunjan</option>
            <option value='Mandi bahauddin'>Mandi bahauddin</option>
            <option value='Mandra'>Mandra</option>
            <option value='Manga mandi'>Manga mandi</option>
            <option value='Mangal sada'>Mangal sada</option>
            <option value='Mangi'>Mangi</option>
            <option value='Mangla'>Mangla</option>
            <option value='Mangowal'>Mangowal</option>
            <option value='Manoabad'>Manoabad</option>
            <option value='Mansehra'>Mansehra</option>
            <option value='Mardan'>Mardan</option>
            <option value='Mari indus'>Mari indus</option>
            <option value='Mastoi'>Mastoi</option>
            <option value='Matiari'>Matiari</option>
            <option value='Matli'>Matli</option>
            <option value='Mehar'>Mehar</option>
            <option value='Mehmood kot'>Mehmood kot</option>
            <option value='Mehrab pur'>Mehrab pur</option>
            <option value='Mian chunnu'>Mian chunnu</option>
            <option value='Mian Walli'>Mian Walli</option>
            <option value='Mingora'>Mingora</option>
            <option value='Mir ali'>Mir ali</option>
            <option value='Miran shah'>Miran shah</option>
            <option value='Mirpur'>Mirpur</option>
            <option value='Mirpur khas'>Mirpur khas</option>
            <option value='Mirpur mathelo'>Mirpur mathelo</option>
            <option value='Mohen jo daro'>Mohen jo daro</option>
            <option value='Mohmand'>Mohmand</option>
            <option value='More kunda'>More kunda</option>
            <option value='Morgah'>Morgah</option>
            <option value='Moro'>Moro</option>
            <option value='Mubarik pur'>Mubarik pur</option>
            <option value='Multan'>Multan</option>
            <option value='Muridkay'>Muridkay</option>
            <option value='Murree'>Murree</option>
            <option value='Musafir khana'>Musafir khana</option>
            <option value='Musakhel'>Musakhel</option>
            <option value='Mustung'>Mustung</option>
            <option value='Muzaffarabad'>Muzaffarabad</option>
            <option value='Muzaffargarh'>Muzaffargarh</option>
            <option value='Nankana sahib'>Nankana sahib</option>
            <option value='Narang mandi'>Narang mandi</option>
            <option value='Narowal'>Narowal</option>
            <option value='Naseerabad'>Naseerabad</option>
            <option value='Naudero'>Naudero</option>
            <option value='Naukot'>Naukot</option>
            <option value='Nawab shah'>Nawab shah</option>
            <option value='New saeedabad'>New saeedabad</option>
            <option value='Nilore'>Nilore</option>
            <option value='Noor kot'>Noor kot</option>
            <option value='Noorpur nooranga'>Noorpur nooranga</option>
            <option value='North Wazirstan'>North Wazirstan</option>
            <option value='Nowshera'>Nowshera</option>
            <option value='Nowshera cantt'>Nowshera cantt</option>
            <option value='Nowshero peroz'>Nowshero peroz</option>
            <option value='Okara'>Okara</option>
            <option value='Orakzai'>Orakzai</option>
            <option value='Padidan'>Padidan</option>
            <option value='Pak china fertilizer'>Pak china fertilizer</option>
            <option value='Pak pattan sharif'>Pak pattan sharif</option>
            <option value='Panjan kisan'>Panjan kisan</option>
            <option value='Panjgoor'>Panjgoor</option>
            <option value='Pannu aqil'>Pannu aqil</option>
            <option value='Pasni'>Pasni</option>
            <option value='Pasroor'>Pasroor</option>
            <option value='Patoki'>Patoki</option>
            <option value='Peshawar'>Peshawar</option>
            <option value='Phagwar'>Phagwar</option>
            <option value='Phalia'>Phalia</option>
            <option value='Phool nagar'>Phool nagar</option>
            <option value='Piaro goth'>Piaro goth</option>
            <option value='Pindi bhohri'>Pindi bhohri</option>
            <option value='Pindi dadan khan'>Pindi dadan khan</option>
            <option value='Pindi gheb'>Pindi gheb</option>
            <option value='Pir mahal'>Pir mahal</option>
            <option value='Pishin'>Pishin</option>
            <option value='Qalandarabad'>Qalandarabad</option>
            <option value='Qambar Shahdatkot'>Qambar Shahdatkot</option>
            <option value='Qasba gujrat'>Qasba gujrat</option>
            <option value='Qazi ahmed'>Qazi ahmed</option>
            <option value='Quaidabad'>Quaidabad</option>
            <option value='Quetta'>Quetta</option>
            <option value='Rabwah'>Rabwah</option>
            <option value='Rahimyar khan'>Rahimyar khan</option>
            <option value='Rahwali'>Rahwali</option>
            <option value='Raiwand'>Raiwand</option>
            <option value='Rajana'>Rajana</option>
            <option value='Rajanpur'>Rajanpur</option>
            <option value='Rangoo'>Rangoo</option>
            <option value='Ranipur'>Ranipur</option>
            <option value='Ratto dero'>Ratto dero</option>
            <option value='Rawala kot'>Rawala kot</option>
            <option value='Rawalpindi'>Rawalpindi</option>
            <option value='Rawat'>Rawat</option>
            <option value='Renala khurd'>Renala khurd</option>
            <option value='Risalpur'>Risalpur</option>
            <option value='Rohri'>Rohri</option>
            <option value='Sadiqabad'>Sadiqabad</option>
            <option value='Sagri'>Sagri</option>
            <option value='Sahiwal'>Sahiwal</option>
            <option value='Saidu sharif'>Saidu sharif</option>
            <option value='Sajawal'>Sajawal</option>
            <option value='Sakrand'>Sakrand</option>
            <option value='Sambrial'>Sambrial</option>
            <option value='Samma satta'>Samma satta</option>
            <option value='Samundri'>Samundri</option>
            <option value='Sanghar'>Sanghar</option>
            <option value='Sanghi'>Sanghi</option>
            <option value='Sangla hill'>Sangla hill</option>
            <option value='Sangote'>Sangote</option>
            <option value='Sanjwal'>Sanjwal</option>
            <option value='Sara e alamgir'>Sara e alamgir</option>
            <option value='Sara e naurang'>Sara e naurang</option>
            <option value='Sargodha'>Sargodha</option>
            <option value='Satyana bangla'>Satyana bangla</option>
            <option value='Sehar baqlas'>Sehar baqlas</option>
            <option value='Serai alamgir'>Serai alamgir</option>
            <option value='Shadiwal'>Shadiwal</option>
            <option value='Shah kot'>Shah kot</option>
            <option value='Shahdad kot'>Shahdad kot</option>
            <option value='Shahdad pur'>Shahdad pur</option>
            <option value='Shahpur chakar'>Shahpur chakar</option>
            <option value='Shaikhupura'>Shaikhupura</option>
            <option value='Shakargarh'>Shakargarh</option>
            <option value='Shamsabad'>Shamsabad</option>
            <option value='Shangla'>Shangla</option>
            <option value='Shankiari'>Shankiari</option>
            <option value='Shedani sharif'>Shedani sharif</option>
            <option value='Sheikhupura'>Sheikhupura</option>
            <option value='Shemier'>Shemier</option>
            <option value='Shikar pur'>Shikar pur</option>
            <option value='Shorkot'>Shorkot</option>
            <option value='Shujabad'>Shujabad</option>
            <option value='Sialkot'>Sialkot</option>
            <option value='Sibi'>Sibi</option>
            <option value='Sihala'>Sihala</option>
            <option value='Sikandarabad'>Sikandarabad</option>
            <option value='Silanwala'>Silanwala</option>
            <option value='Sita road'>Sita road</option>
            <option value='Skardu'>Skardu</option>
            <option value='Sohawa district daska'>Sohawa district daska</option>
            <option value='Sohawa district jelum'>Sohawa district jelum</option>
            <option value='South Wazirstan'>South Wazirstan</option>
            <option value='Sukkur'>Sukkur</option>
            <option value='Swabi'>Swabi</option>
            <option value='Swatmingora'>Swatmingora</option>
            <option value='Takhtbai'>Takhtbai</option>
            <option value='Talagang'>Talagang</option>
            <option value='Talamba'>Talamba</option>
            <option value='Talhur'>Talhur</option>
            <option value='Tall'>Tall</option>
            <option value='Tando adam'>Tando adam</option>
            <option value='Tando allahyar'>Tando allahyar</option>
            <option value='Tando jam'>Tando jam</option>
            <option value='Tando mohd khan'>Tando mohd khan</option>
            <option value='Tank'>Tank</option>
            <option value='Tarbela'>Tarbela</option>
            <option value='Tarmatan'>Tarmatan</option>
            <option value='Taunsa sharif'>Taunsa sharif</option>
            <option value='Taxila'>Taxila</option>
            <option value='Tharo shah'>Tharo shah</option>
            <option value='Thatta'>Thatta</option>
            <option value='Theing jattan more'>Theing jattan more</option>
            <option value='Thull'>Thull</option>
            <option value='Tibba sultanpur'>Tibba sultanpur</option>
            <option value='Tobatek singh'>Tobatek singh</option>
            <option value='Topi'>Topi</option>
            <option value='Toru'>Toru</option>
            <option value='Trinda mohd pannah'>Trinda mohd pannah</option>
            <option value='Turbat'>Turbat</option>
            <option value='Ubaro'>Ubaro</option>
            <option value='Ugoki'>Ugoki</option>
            <option value='Ukba'>Ukba</option>
            <option value='Umar kot'>Umar kot</option>
            <option value='Upper deval'>Upper deval</option>
            <option value='Usta mohammad'>Usta mohammad</option>
            <option value='Vehari'>Vehari</option>
            <option value='Wah cantt'>Wah cantt</option>
            <option value='Wahi hassain'>Wahi hassain</option>
            <option value='Wan radha ram'>Wan radha ram</option>
            <option value='Warah'>Warah</option>
            <option value='Warburton'>Warburton</option>
            <option value='Washuk'>Washuk</option>
            <option value='Wazirabad'>Wazirabad</option>
            <option value='Yazman mandi'>Yazman mandi</option>
            <option value='Zahir pir'>Zahir pir</option>
          </select>        </td>
      </tr>
	  <tr>
                          <td>&nbsp;</td>
                          <td><label>
                            <input type="submit" name="button" id="button" value="Submit" />
                          </label></td>
                        </tr>
                        <tr>
                    <td bgcolor="#A0B9F3"><strong>Experience Profile</strong></td>
                  </tr>
</table></form>


<table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Work Experience</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Work Area</strong></div></th>
                         <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Current Job</strong></div></th>
                          <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Company Name</strong></div></th>
                          <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Location</strong></div></th>
                    </tr>
                    <?php
					  $ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root", "");
// Select Database
mysqli_select_db($con,"job");
// Specify the query to execute
$sql = "select * from experience where seekerid='".$ID."'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Work_exp=$row['Work_exp'];
$Work_area=$row['Work_area'];
$Current_job=$row['Current_job'];
$Cmp_name=$row['Cmp_name'];
$Location=$row['Location'];
?>
                      <tr>
                       
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Work_exp;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Work_area;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Current_job;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Cmp_name;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Location;?></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                      <tr>
                        <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                      </tr>
                      <?php
// Close the connection
mysqli_close($con);
?>
 
                      </table>
                <p align="center">&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "right.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</body>
</html>
