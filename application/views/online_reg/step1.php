<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>scripts/jquery.combobox.js"></script>
<link href="<?php echo base_url(); ?>css/combobox.css?v=2" rel="stylesheet">

<style>
#page{
background: #d55269;
border: 4px solid #C46978;
border-radius: 5px;
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
width: 600px;
}

#page, #page-header{
margin: auto;
padding: 15px;
}
body{
background-color: #C73F57;
}
.bottom{
border-top: 1px solid #cd8ca6;
margin-left: -15px;
margin-right:-15px;
margin-bottom:-15px;
padding: 10px;
background:#C46978;
}
form{
margin:0;
}
label{
width:20%;
display: inline-block;
font-weight: bold;
font-size: 14px;
color: rgba(248, 248, 248, 0.78);
text-shadow: 0px 1px 1px #854550;
}

#error-box{
color: red;
font-size:14px;
color:#913333;
}

#error-box p{
margin: 15px;
}

#error-box li{
font-style:italic;
}

.error-head{
color:#640505;
font-size: 17px;
padding: 5px;
text-align: center;
font-family: Georgia, serif;
font-weight: bold;
}

.arrow_box {
	position: absolute;
	background: #d5a0a9;
	border: 4px solid #E65757;
	min-height: 100px;
	width: 280px;
	top: 35%;
	left: 72%;
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
border-radius: 5px;
}
.arrow_box:after, .arrow_box:before {
	right: 100%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}

.arrow_box:after {
	border-color:rgba(245, 191, 191, 0);
	border-right-color: #d5a0a9;
	border-width: 30px;
	top: 50%;
	margin-top: -30px;
}
.arrow_box:before {
	border-color: rgba(245, 191, 191, 0);
	border-right-color: #e33d3d;
	border-width: 36px;
	top: 50%;
	margin-top: -36px;
}

#done-msg{
color: green;
}

.labels label:nth-child(1){
width:20%;
}

.labels label{
width: 30px;
}

input[type="text"], select{
padding: 5px;
}

select{
margin-left: -5px;
}

input[type="text"]{
width: 300px;
padding: 10px;
box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
-webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

form div{
margin-top: 10px;
}

.button {
	-moz-box-shadow:inset 0px 1px 0px 0px #f5978e;
	-webkit-box-shadow:inset 0px 1px 0px 0px #f5978e;
	box-shadow:inset 0px 1px 0px 0px #f5978e;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #D7584E), color-stop(1, #BD4338) );
	background:-moz-linear-gradient( center top, #D7584E 5%, #BD4338 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#D7584E', endColorstr='#BD4338');
	background-color:#D7584E;
	-webkit-border-top-left-radius:6px;
	-moz-border-radius-topleft:6px;
	border-top-left-radius:6px;
	-webkit-border-top-right-radius:6px;
	-moz-border-radius-topright:6px;
	border-top-right-radius:6px;
	-webkit-border-bottom-right-radius:6px;
	-moz-border-radius-bottomright:6px;
	border-bottom-right-radius:6px;
	-webkit-border-bottom-left-radius:6px;
	-moz-border-radius-bottomleft:6px;
	border-bottom-left-radius:6px;
	text-indent:0;
	border:1px solid #d02718;
	display:inline-block;
	color: #F2E4E3;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	padding: 10px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #810e05;
	width:50%;
}
.button:hover, .button-active{
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #D7584E), color-stop(1, #d2554a) );
	background:-moz-linear-gradient( center top, #D7584E 5%, #d2554a 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#D7584E', endColorstr='#d2554a');
	background-color:#D7584E;
}.button:active {
	position:relative;
	top:1px;
}
.combobox{
margin-left: -5px;
}
input[type="text"]:focus{
background:#e7c0bc;
outline:none;
}

#page-header{
background: #e2aab4;
width: 500px;
border: 2px solid #db8291;
border-top: 1px solid #bd243f;
font-family: sans-serif;
font-weight:bold;
font-size:15px;
color: #696263;
}
ol li{
font-style: italic;
font-weight:normal;
font-size: 14px;
}
</style>
<link href="<?php echo base_url(); ?>css/form.css" rel="stylesheet">
<div id="page-header">
Notes before registration :
<ol>
<li style="color: #D30B0B;font-weight: bold;">College id is mandatory for participation in all events.</li>
<li>Please provide a valid Email ID and Mobile number.</li>
<li>Take note of the <b>Bodhi ID</b> that you receive through Email after Registration.</li>
<li>For queries or Bug Reports please contact us at <a href="mailto:webmaster@bodhiofficial.in?subject=Bugs or queries related to Online Registration">webmaster@bodhiofficial.in</a></li>
</ol>
</div>
<div id="page">

<?php echo form_open(base_url().uri_string(),array('id'=>'add-event','name'=>'add-event')); ?>
<div>
	<label for="name">Name</label><input type="text" name="name" value="<?php echo $this->input->post('name'); ?>">
</div>

<div>
	<label for="college">College</label>
	<?php
	$carr = array("Alphonsa College, Pala" => "Alphonsa College, Pala",
"Acquinas College, Edacochin" => "Acquinas College, Edacochin",
"Adhiyamaan College Of Engineering,Hosur" => "Adhiyamaan College Of Engineering,Hosur",
"Adi Sankara Institute of Engg." => "Adi Sankara Institute of Engg.",
"Ahalia School Of Engineering Technology, Palakkad" => "Ahalia School Of Engineering Technology, Palakkad",
"Al-Ameen College of Engineering, Pattambi" => "Al-Ameen College of Engineering, Pattambi",
"Al-ameen College, Edathala" => "Al-ameen College, Edathala",
"Albertian Institute of science and technology Kalamassery" => "Albertian Institute of science and technology Kalamassery",
"Alberts Institute of Management" => "Alberts Institute of Management",
"All Saints College,Trivandrum" => "All Saints College,Trivandrum",
"Amal Jyothi Engineering College, Kanjirapally" => "Amal Jyothi Engineering College, Kanjirapally",
"Amala Institute of Medical Sciences, Thrissur" => "Amala Institute of Medical Sciences, Thrissur",
"Amrita Vishwa Vidyapeetham, Coimbatore." => "Amrita Vishwa Vidyapeetham, Coimbatore.",
"Amrita Vishwa Vidyapeetham,Kollam" => "Amrita Vishwa Vidyapeetham,Kollam",
"Andra University College of Engineering Vishakapatanam" => "Andra University College of Engineering Vishakapatanam",
"anglo eastern maritime academy" => "anglo eastern maritime academy",
"Annoor Dental College, Puthupaddy P.O, Ernakulam" => "Annoor Dental College, Puthupaddy P.O, Ernakulam",
"Ansar Arabic College,Valavannur" => "Ansar Arabic College,Valavannur",
"Anvarul Islam Arabic College, Kuniel Areacode, Malappuram" => "Anvarul Islam Arabic College, Kuniel Areacode, Malappuram",
"Anvarul Islam Women Arabic College, Mongam, Malappuram" => "Anvarul Islam Women Arabic College, Mongam, Malappuram",
"asan memorial college of arts and science" => "asan memorial college of arts and science",
"Assumption College, Changancherry" => "Assumption College, Changancherry",
"Avinashilingam University for Women, Coimbatore" => "Avinashilingam University for Women, Coimbatore",
"AWH Engineering College, Kuttikatoor, Kozhikkode" => "AWH Engineering College, Kuttikatoor, Kozhikkode",
"B.A.M.College, Thuruthicaud" => "B.A.M.College, Thuruthicaud",
"B.K.College for Women, Kottayam" => "B.K.College for Women, Kottayam",
"bannari amman institute of technology" => "bannari amman institute of technology",
"Baselios Mathew II College of Engg., Sasthamcotta" => "Baselios Mathew II College of Engg., Sasthamcotta",
"Baselius College, Kottayam" => "Baselius College, Kottayam",
"Baselius Poulose II Catholicate College, Piravam" => "Baselius Poulose II Catholicate College, Piravam",
"Bharatha matha College, Thrikkakara" => "Bharatha matha College, Thrikkakara",
"BHAWANIPORE EDUCATION SOCEITY KOLKATA" => "BHAWANIPORE EDUCATION SOCEITY KOLKATA",
"Bishop Choolaparambil Memorial College, Kottayam" => "Bishop Choolaparambil Memorial College, Kottayam",
"Bishop Jerome Institute of Engineering and Technology , Kollam" => "Bishop Jerome Institute of Engineering and Technology , Kollam",
"Bishop Moore College, Mavelikkara" => "Bishop Moore College, Mavelikkara",
"C M S DENTAL COLLEGE" => "C M S DENTAL COLLEGE",
"C. K .Govindan Nair Memorial Government College, Perambra" => "C. K .Govindan Nair Memorial Government College, Perambra",
"C.M.S.College, Kottayam" => "C.M.S.College, Kottayam",
"Calicut University Institute of Engg. and Tech , Kohinoor" => "Calicut University Institute of Engg. and Tech , Kohinoor",
"Canara Engineering College,Mangalore" => "Canara Engineering College,Mangalore",
"cape institute of technology levengipuram" => "cape institute of technology levengipuram",
"cape institute of technology levengipuram" => "cape institute of technology levengipuram",
"Carmel College, Mala" => "Carmel College, Mala",
"Carmel Engineering College, Koonamkara, Ranni" => "Carmel Engineering College, Koonamkara, Ranni",
"Catholicate College, Pathanamthitta" => "Catholicate College, Pathanamthitta",
"CENTRALPOLYTECHNICCOLLEGE TVM" => "CENTRALPOLYTECHNICCOLLEGE TVM",
"CENTUARY DENTAL COLLEGE" => "CENTUARY DENTAL COLLEGE",
"CENTURY DENTAL COLLEGE KASARGOD" => "CENTURY DENTAL COLLEGE KASARGOD",
"Chembai Memorial Music College, Palakkad" => "Chembai Memorial Music College, Palakkad",
"chengannur engineering college" => "chengannur engineering college",
"Christ College, Irinjalakuda" => "Christ College, Irinjalakuda",
"Christian College ,Kattakada" => "Christian College ,Kattakada",
"Christian College, Chengannur" => "Christian College, Chengannur",
"Co-Operative Arts and Science College, Madayi" => "Co-Operative Arts and Science College, Madayi",
"Co-operative Institute of Technology, Mandarathur" => "Co-operative Institute of Technology, Mandarathur",
"Co-operative Medical College, Cochin" => "Co-operative Medical College, Cochin",
"Cochin College, Cochin" => "Cochin College, Cochin",
"cochin university college of engineering kuttanad" => "cochin university college of engineering kuttanad",
"Cochin University Of Science And Technology" => "Cochin University Of Science And Technology",
"Coimbatore Institute of Engineering and Technology" => "Coimbatore Institute of Engineering and Technology",
"College of Applied Science Pattuvam" => "College of Applied Science Pattuvam",
"COLLEGE OF ARCHITECTURE TRIVANDRUM" => "COLLEGE OF ARCHITECTURE TRIVANDRUM",
"College of Dairy Science and Technology, Mannuthy" => "College of Dairy Science and Technology, Mannuthy",
"COLLEGE OF ENGINEERING & MANAGEMENT PUNNAPRA" => "COLLEGE OF ENGINEERING & MANAGEMENT PUNNAPRA",
"college of engineering and management ,alappuzha" => "college of engineering and management ,alappuzha",
"College of Engineering Eranjoli P.O, Thalassery, Kannur" => "College of Engineering Eranjoli P.O, Thalassery, Kannur",
"College of Engineering Kidangoor, Kidangoor South" => "College of Engineering Kidangoor, Kidangoor South",
"College of Engineering Perumon, Perinad" => "College of Engineering Perumon, Perinad",
"College of Engineering Thiruvananthapuram" => "College of Engineering Thiruvananthapuram",
"College of Engineering Trikaripur, Cheemeni" => "College of Engineering Trikaripur, Cheemeni",
"college of engineering vadakara" => "college of engineering vadakara",
"College of Engineering, Adoor" => "College of Engineering, Adoor",
"College of Engineering, Attingal, Thiruvananthapuram" => "College of Engineering, Attingal, Thiruvananthapuram",
"College of Engineering, Chengannur P.O, Alappuzha" => "College of Engineering, Chengannur P.O, Alappuzha",
"College of Engineering, County Hills Munnar" => "College of Engineering, County Hills Munnar",
"College of Engineering, Kallooppara, Kadamankulam" => "College of Engineering, Kallooppara, Kadamankulam",
"College of Engineering, Karunagapally, Pada.North" => "College of Engineering, Karunagapally, Pada.North",
"College of Engineering, Pallippuram" => "College of Engineering, Pallippuram",
"College of Engineering, Thekkekara P.O, Poonjar" => "College of Engineering, Thekkekara P.O, Poonjar",
"College of Engineering, Thrikkannamangal,Kottarakara" => "College of Engineering, Thrikkannamangal,Kottarakara",
"college of fine arts, palayam" => "college of fine arts, palayam",
"College of Teacher Education Kozhikode" => "College of Teacher Education Kozhikode",
"College of Teacher Education, Thalasserry" => "College of Teacher Education, Thalasserry",
"College of Teacher Education,Thiruvananthapuram" => "College of Teacher Education,Thiruvananthapuram",
"college ofengineering,kottarakara" => "college ofengineering,kottarakara",
"D. B. College, Thalayolaparambu" => "D. B. College, Thalayolaparambu",
"Darul Aloom Arabic College, Paral, Thalassery" => "Darul Aloom Arabic College, Paral, Thalassery",
"Darul Irshad Arabic College, Paral, Kannur" => "Darul Irshad Arabic College, Paral, Kannur",
"Darunnajith Arabic College, Karuvarakundu" => "Darunnajith Arabic College, Karuvarakundu",
"decaying humanity" => "decaying humanity",
"Devamatha College. Kuravilangad" => "Devamatha College. Kuravilangad",
"Devaswom Board College, Parumala, Pamba" => "Devaswom Board College, Parumala, Pamba",
"Devaswom Board College, Sasthamcotta Kollam" => "Devaswom Board College, Sasthamcotta Kollam",
"dmi engg colg kumarapuram" => "dmi engg colg kumarapuram",
"Don Bosco College,Kannur" => "Don Bosco College,Kannur",
"Don Bosco College,Trichur" => "Don Bosco College,Trichur",
"Dr. Somervell Memorial CSI Medical College, Karakonam" => "Dr. Somervell Memorial CSI Medical College, Karakonam",
"EMEA College, Kondotty" => "EMEA College, Kondotty",
"ERODE SENGUNTHAR ENGINEERING COLLEGE ,TAMILNADU" => "ERODE SENGUNTHAR ENGINEERING COLLEGE ,TAMILNADU",
"Farook College, Farook" => "Farook College, Farook",
"Farook Training College, Farook" => "Farook Training College, Farook",
"Fathima Matha National College, Kollam" => "Fathima Matha National College, Kollam",
"Federal Institute of Science" => "Federal Institute of Science",
"Fisat" => "Fisat",
"Fr. Muller Medical College, Mangalore" => "Fr. Muller Medical College, Mangalore",
"Goverment Dental College, Thiruvananthapuram" => "Goverment Dental College, Thiruvananthapuram",
"government arts college ,trivandrum" => "government arts college ,trivandrum",
"Government Ayurveda College, Trivandrum" => "Government Ayurveda College, Trivandrum",
"GOVERNMENT COLLEGE KASARAGOD" => "GOVERNMENT COLLEGE KASARAGOD",
"Government College of Engineering Mangattuparamba" => "Government College of Engineering Mangattuparamba",
"Government Dental College, Kottayam" => "Government Dental College, Kottayam",
"Government Dental College, Kozhikode" => "Government Dental College, Kozhikode",
"Government Engineering College Kozhikode, West Hill" => "Government Engineering College Kozhikode, West Hill",
"Government Engineering College Painavu, Idukki" => "Government Engineering College Painavu, Idukki",
"Government Engineering College Palakkad, Sreekrishnapuram" => "Government Engineering College Palakkad, Sreekrishnapuram",
"Government Engineering College Thrissur, R V Puram" => "Government Engineering College Thrissur, R V Puram",
"Government Engineering College Wayanad, Nalloornad" => "Government Engineering College Wayanad, Nalloornad",
"Government Engineering College, Barton Hill" => "Government Engineering College, Barton Hill",
"Government Rajiv Gandhi Institute of Technology, Vellore" => "Government Rajiv Gandhi Institute of Technology, Vellore",
"Government Sanskrit College, Pattambi" => "Government Sanskrit College, Pattambi",
"Government Victoria College, Palakkad" => "Government Victoria College, Palakkad",
"GOVT LAW COLLEGE ERNAKULAM" => "GOVT LAW COLLEGE ERNAKULAM",
"Govt. Arts" => "Govt. Arts",
"Govt. Brennen College,Thalassery" => "Govt. Brennen College,Thalassery",
"Govt. College for Women, Trivandrum" => "Govt. College for Women, Trivandrum",
"Govt. College, Kariavattom,Trivandrum" => "Govt. College, Kariavattom,Trivandrum",
"Govt. Homoeopathic Medical College, Calicut" => "Govt. Homoeopathic Medical College, Calicut",
"Govt. Law College, Kozhikode" => "Govt. Law College, Kozhikode",
"Govt. Law College, TVM" => "Govt. Law College, TVM",
"Govt. Medical College, Alappuzha" => "Govt. Medical College, Alappuzha",
"Govt. Medical College, Kottayam" => "Govt. Medical College, Kottayam",
"Govt. Medical College, Kozhikode" => "Govt. Medical College, Kozhikode",
"Govt. Medical College, Thiruvananthapuram" => "Govt. Medical College, Thiruvananthapuram",
"Govt. Medical College, Thrissur" => "Govt. Medical College, Thrissur",
"Govt. Sanskrit College,Trivandrum" => "Govt. Sanskrit College,Trivandrum",
"Govt.Arts College, Trivandrum" => "Govt.Arts College, Trivandrum",
"HEERA COLLEGE OF ENGINEERING" => "HEERA COLLEGE OF ENGINEERING",
"Henry Baker College, Melukavu" => "Henry Baker College, Melukavu",
"I E S College of Engineering, Thrissur" => "I E S College of Engineering, Thrissur",
"IHMCT ,kovlam" => "IHMCT ,kovlam",
"IIITMK TECNOPARK" => "IIITMK TECNOPARK",
"IIM Calcutta" => "IIM Calcutta",
"iim kozhikode" => "iim kozhikode",
"IISER Trivandrum" => "IISER Trivandrum",
"IIST" => "IIST",
"IIT,Madras" => "IIT,Madras",
"Ilahia College of Engineering" => "Ilahia College of Engineering",
"Institute of Advanced Study in Education, Thrissur" => "Institute of Advanced Study in Education, Thrissur",
"INSTITUTE OF MANAGEMENT,KERALA" => "INSTITUTE OF MANAGEMENT,KERALA",
"Iqbal College,Peringamala" => "Iqbal College,Peringamala",
"Jeppiaar Engineering College,Chennai" => "Jeppiaar Engineering College,Chennai",
"JNTU,Kakinada" => "JNTU,Kakinada",
"John Cox Memorial ,Trivandrum" => "John Cox Memorial ,Trivandrum",
"Jubilee Mission Medical College" => "Jubilee Mission Medical College",
"Jyothi Engineering College, Cheruthuruthy" => "Jyothi Engineering College, Cheruthuruthy",
"K .E. College, Mannanam" => "K .E. College, Mannanam",
"K M C T College of Engineering Kozhikode" => "K M C T College of Engineering Kozhikode",
"K M E A Engineering College, Alwaye" => "K M E A Engineering College, Alwaye",
"K.L.N College of Engineering" => "K.L.N College of Engineering",
"K.V.V.S.COLLEGE OF SCIENCE 7 TECHNOLOGY" => "K.V.V.S.COLLEGE OF SCIENCE 7 TECHNOLOGY",
"Karmala Rani Training College, Kollam" => "Karmala Rani Training College, Kollam",
"Karuna Medical College,Palakkad" => "Karuna Medical College,Palakkad",
"Karunya University,Coibathur" => "Karunya University,Coibathur",
"kasturba medical college , mangalore" => "kasturba medical college , mangalore",
"Kelappaji College of Agricultural Engineering and Technology" => "Kelappaji College of Agricultural Engineering and Technology",
"KERALA LAW ACADEMY LAW COLLEGE, Perurkada" => "KERALA LAW ACADEMY LAW COLLEGE, Perurkada",
"Keyi Sahib Training College Taliparamba" => "Keyi Sahib Training College Taliparamba",
"KKTM Govt College,Pullut" => "KKTM Govt College,Pullut",
"KMCT college of engineering" => "KMCT college of engineering",
"KMCT Medical College,Kozhikode" => "KMCT Medical College,Kozhikode",
"kmm college of arts and science" => "kmm college of arts and science",
"Krishna Menon Memorial Women`s College, Kannur" => "Krishna Menon Memorial Women`s College, Kannur",
"Kuriakose Gregrios College, Pampady, Kottayam" => "Kuriakose Gregrios College, Pampady, Kottayam",
"L.B.S College of Engineering, Kasaragod, Povval, Muliyar" => "L.B.S College of Engineering, Kasaragod, Povval, Muliyar",
"L.B.S Institute of Technology for Women, Poojapura" => "L.B.S Institute of Technology for Women, Poojapura",
"Little Flower College Guruvayoor" => "Little Flower College Guruvayoor",
"Lord Jegannath College of engg" => "Lord Jegannath College of engg",
"Lourdes Matha College of Science" => "Lourdes Matha College of Science",
"Loyola College of Social Sciences,Trivandrum" => "Loyola College of Social Sciences,Trivandrum",
"Loyola Institue Of Technology and Science, Thovala" => "Loyola Institue Of Technology and Science, Thovala",
"LOYOLA INSTITUTE OF TECHNOLOGY AND SCIENCE" => "LOYOLA INSTITUTE OF TECHNOLOGY AND SCIENCE",
"LOYOLA INSTITUTE OF TECHNOLOGY&SCIENCE" => "LOYOLA INSTITUTE OF TECHNOLOGY&SCIENCE",
"M E A Engineering College, Chemmaniyod, Malappuram" => "M E A Engineering College, Chemmaniyod, Malappuram",
"M E S College of Engineering, Kuttippuram" => "M E S College of Engineering, Kuttippuram",
"M G College of Engineering, Thiruvallom" => "M G College of Engineering, Thiruvallom",
"M G UNIVERSITY" => "M G UNIVERSITY",
"m g university college of engineering" => "m g university college of engineering",
"m g university college of engineering" => "m g university college of engineering",
"M. G. College,Thiruvananthapuram" => "M. G. College,Thiruvananthapuram",
"M. KUMARASAMY college of engineering, karur" => "M. KUMARASAMY college of engineering, karur",
"M.G.College, Iritty" => "M.G.College, Iritty",
"M.G.U.C.E,muttom" => "M.G.U.C.E,muttom",
"Maamallan Institute of Technology" => "Maamallan Institute of Technology",
"MACFAST,Thiruvalla" => "MACFAST,Thiruvalla",
"Madeerathul Uloom Arabic College, Pulikkal, Malappuram" => "Madeerathul Uloom Arabic College, Pulikkal, Malappuram",
"Maharajas College, Ernakulam" => "Maharajas College, Ernakulam",
"Mahatma Gandhi University College of Engineering, Muttom" => "Mahatma Gandhi University College of Engineering, Muttom",
"Malabar Christian College" => "Malabar Christian College",
"Malabar Christian College, Kozhikode" => "Malabar Christian College, Kozhikode",
"Mangalam College of Engineering, Ettumanoor" => "Mangalam College of Engineering, Ettumanoor",
"MANIPAL INSTITUTE OF TECHNOLOGY" => "MANIPAL INSTITUTE OF TECHNOLOGY",
"Mannam Memorial NSS College,Kottiyam, Kollam" => "Mannam Memorial NSS College,Kottiyam, Kollam",
"Mannaniya College of Arts" => "Mannaniya College of Arts",
"Mar Athanasius Arts and Science college,kothamangalam" => "Mar Athanasius Arts and Science college,kothamangalam",
"Mar Athanasius College of Engineering , Kothamangalam" => "Mar Athanasius College of Engineering , Kothamangalam",
"Mar Baselios College of Engineering" => "Mar Baselios College of Engineering",
"Mar Baselios College of Engineering,Idukki" => "Mar Baselios College of Engineering,Idukki",
"Mar Dianysius College, Pazhanji" => "Mar Dianysius College, Pazhanji",
"Mar Dioscorus college of pharmacy,sreekaryam" => "Mar Dioscorus college of pharmacy,sreekaryam",
"Mar Ephraem College, Marthandam" => "Mar Ephraem College, Marthandam",
"Mar Ivanios College, Thiruvananthapuram" => "Mar Ivanios College, Thiruvananthapuram",
"Mar Thoma College for Women, Perumbavoor" => "Mar Thoma College for Women, Perumbavoor",
"Mar Thoma College, Chungathara" => "Mar Thoma College, Chungathara",
"Marian College, Peerumade" => "Marian College, Peerumade",
"Marian Engineering College, Kazhakuttom" => "Marian Engineering College, Kazhakuttom",
"Martheophilus Training College, Bathanihills" => "Martheophilus Training College, Bathanihills",
"Marthoma College, Thiruvalla" => "Marthoma College, Thiruvalla",
"Mary Matha Arts and Science College, Mananthavady" => "Mary Matha Arts and Science College, Mananthavady",
"Mary Matha College of Engineering, Olathanni" => "Mary Matha College of Engineering, Olathanni",
"Matha College of Technology, Manakappadi" => "Matha College of Technology, Manakappadi",
"MBCET, NALANCHIRA" => "MBCET, NALANCHIRA",
"MEA Engineering College, Perinhalmanna" => "MEA Engineering College, Perinhalmanna",
"MEA Sullamussalam Science College, Areacode, Malappuram" => "MEA Sullamussalam Science College, Areacode, Malappuram",
"Medical College, Trivandrum" => "Medical College, Trivandrum",
"MEPCO Schlenk engineering college,Sivakasi" => "MEPCO Schlenk engineering college,Sivakasi",
"Mercy College, Palakkad" => "Mercy College, Palakkad",
"MES Asmabi College, Vemballur" => "MES Asmabi College, Vemballur",
"MES COLLEGE marampally" => "MES COLLEGE marampally",
"MES College, Ponnani" => "MES College, Ponnani",
"MES ENGINEERING COLLEGE PERINTHALMANA" => "MES ENGINEERING COLLEGE PERINTHALMANA",
"MES kuttiippuram,thrikkannapuram" => "MES kuttiippuram,thrikkannapuram",
"MES KVM College, Valancherry" => "MES KVM College, Valancherry",
"MES Mampad College, Mampad" => "MES Mampad College, Mampad",
"MES Medical College, Perinthalmanna" => "MES Medical College, Perinthalmanna",
"MG College Of Engineering" => "MG College Of Engineering",
"MGM College" => "MGM College",
"Miladi sherif Memorial College, Kayamkulam" => "Miladi sherif Memorial College, Kayamkulam",
"Model Engineering College, B.M.C Post, Thrikkaara" => "Model Engineering College, B.M.C Post, Thrikkaara",
"Mohandas College of Engg." => "Mohandas College of Engg.",
"Morning Star Home Science College, Angamaly" => "Morning Star Home Science College, Angamaly",
"MOSC Medical College, Kolenchery" => "MOSC Medical College, Kolenchery",
"Mount Carmel Training College, Kottayam" => "Mount Carmel Training College, Kottayam",
"Mount Tabour Training College, Pathanapuram" => "Mount Tabour Training College, Pathanapuram",
"Mount Zion College of Engg., Pathanamthitta" => "Mount Zion College of Engg., Pathanamthitta",
"Muhammed Adburahiman Memorial Orphange College, Mannassery" => "Muhammed Adburahiman Memorial Orphange College, Mannassery",
"Musaliar College of Engineering" => "Musaliar College of Engineering",
"Muslim Association College of Engineering, Venjaramoodu" => "Muslim Association College of Engineering, Venjaramoodu",
"Muslim Education Society Kalladi College, Mannarghat" => "Muslim Education Society Kalladi College, Mannarghat",
"Muslim Educational Society College, Marampally" => "Muslim Educational Society College, Marampally",
"Muslim Educational Society College, Nedumkandam" => "Muslim Educational Society College, Nedumkandam",
"N.S.S College of Engineering, Palakkad" => "N.S.S College of Engineering, Palakkad",
"Nangelil Ayurveda Medical College,Ernakulam" => "Nangelil Ayurveda Medical College,Ernakulam",
"Nasarathul Islam Arabic College, Kadavanthara" => "Nasarathul Islam Arabic College, Kadavanthara",
"national university of advanced legel studies" => "national university of advanced legel studies",
"Nehru Arts and Science College Kanhangad" => "Nehru Arts and Science College Kanhangad",
"Nehru Arts and Science College, Kanhangad" => "Nehru Arts and Science College, Kanhangad",
"Nehru College of Engg." => "Nehru College of Engg.",
"Newman College , Thodupuzha" => "Newman College , Thodupuzha",
"Nirmala College, Muvattupuzha" => "Nirmala College, Muvattupuzha",
"Nirmalagiri College, Koothuparambu" => "Nirmalagiri College, Koothuparambu",
"NIT, Calicut" => "NIT, Calicut",
"NIT,Surathkal" => "NIT,Surathkal",
"NIT,Trichy" => "NIT,Trichy",
"NIT,Warangal" => "NIT,Warangal",
"NMAMIT,Karnataka" => "NMAMIT,Karnataka",
"Noorul Islam College of Dental Science, Trivandrum" => "Noorul Islam College of Dental Science, Trivandrum",
"NOORUL ISLAM POLYTECHINC COLLEGE" => "NOORUL ISLAM POLYTECHINC COLLEGE",
"NSS College for Women, Thiruvananthapuram" => "NSS College for Women, Thiruvananthapuram",
"NSS College of Engineering,Palakkad" => "NSS College of Engineering,Palakkad",
"NSS College, Cherthala" => "NSS College, Cherthala",
"NSS College, Manjeri" => "NSS College, Manjeri",
"NSS College, Nemmara" => "NSS College, Nemmara",
"NSS College, Nilamel. Kollam" => "NSS College, Nilamel. Kollam",
"NSS College, Ottapalam" => "NSS College, Ottapalam",
"NSS College, Pandalam" => "NSS College, Pandalam",
"NSS College, Rajakumari" => "NSS College, Rajakumari",
"NSS Hindu College, Changanacherry" => "NSS Hindu College, Changanacherry",
"NSS Training College, Changanacherry" => "NSS Training College, Changanacherry",
"NSS Training College, Ottapalam" => "NSS Training College, Ottapalam",
"NSS Training College, Pandalam" => "NSS Training College, Pandalam",
"NUALS KOCHI" => "NUALS KOCHI",
"O C ET" => "O C ET",
"P A Aziz College of Engineering" => "P A Aziz College of Engineering",
"P.K.M.College of Education" => "P.K.M.College of Education",
"P.T.M Govt. College,Perinthalmanna" => "P.T.M Govt. College,Perinthalmanna",
"Pankajakasthuri CET" => "Pankajakasthuri CET",
"Pariyaram Medical College, Kannur" => "Pariyaram Medical College, Kannur",
"Pavanatma College, Murickassery" => "Pavanatma College, Murickassery",
"Payyannur College, Payyannur" => "Payyannur College, Payyannur",
"Pazhassi raja NSS College, Mattannur" => "Pazhassi raja NSS College, Mattannur",
"Pazhassiraja College, Pulpally" => "Pazhassiraja College, Pulpally",
"Peet Memorial Training College, Mavelikkara" => "Peet Memorial Training College, Mavelikkara",
"Physical Education College East Hill, Kozhikode" => "Physical Education College East Hill, Kozhikode",
"pondicherry engineering college" => "pondicherry engineering college",
"Prajyothi Nikethan College, Puthukkad, Thrissur" => "Prajyothi Nikethan College, Puthukkad, Thrissur",
"Providence Women`s College, Kozhikode" => "Providence Women`s College, Kozhikode",
"PRS College of engg" => "PRS College of engg",
"PSG College Of Arts" => "PSG College Of Arts",
"PSMO College, Thirurangadi" => "PSMO College, Thirurangadi",
"Pushpagiri College of Dental Sciences, Thiruvalla" => "Pushpagiri College of Dental Sciences, Thiruvalla",
"R K M Vivekananda College,Chennai" => "R K M Vivekananda College,Chennai",
"r v college of engineering, bangalore" => "r v college of engineering, bangalore",
"rajadhani institute of eng." => "rajadhani institute of eng.",
"Rajagiri College of Social Science, Kalamassery" => "Rajagiri College of Social Science, Kalamassery",
"Rajagiri School of Engg." => "Rajagiri School of Engg.",
"Rajalakshmi Engineering College,Chennai" => "Rajalakshmi Engineering College,Chennai",
"Rajiv Gandhi College Of Engineering And Technology, Pudhucherry" => "Rajiv Gandhi College Of Engineering And Technology, Pudhucherry",
"Rajiv Gandhi Institute of Technology, Kottayam" => "Rajiv Gandhi Institute of Technology, Kottayam",
"RGNUL Punjab" => "RGNUL Punjab",
"RL INS,MADURAI" => "RL INS,MADURAI",
"Ronsathal Uloom Arabic College, Farook" => "Ronsathal Uloom Arabic College, Farook",
"roses for the dead" => "roses for the dead",
"Royal College of Engineering" => "Royal College of Engineering",
"Royal Dental College,Palakkad" => "Royal Dental College,Palakkad",
"S .N College, Punalur, Kollam" => "S .N College, Punalur, Kollam",
"S R M University, Kattankulathur" => "S R M University, Kattankulathur",
"S. E. S. College, Sreekandapuram" => "S. E. S. College, Sreekandapuram",
"S. N. College for Women, Kollam" => "S. N. College for Women, Kollam",
"S. N. College, Alathur" => "S. N. College, Alathur",
"S. N. College, Chathannoor, Kollam" => "S. N. College, Chathannoor, Kollam",
"S. N. College, Chempazhanthy" => "S. N. College, Chempazhanthy",
"S. N. College, Chengannur" => "S. N. College, Chengannur",
"S. N. College, Cherthala" => "S. N. College, Cherthala",
"S. N. College, Nattika" => "S. N. College, Nattika",
"S. N. College, Sivagiri,Varkala" => "S. N. College, Sivagiri,Varkala",
"S. N. College, Thottada, Kannur" => "S. N. College, Thottada, Kannur",
"S. N. Guru College, Chelannur" => "S. N. Guru College, Chelannur",
"S. N. Training College, Nedumganda" => "S. N. Training College, Nedumganda",
"S. N.College, Kollam" => "S. N.College, Kollam",
"S. N.M.College, Maliankara" => "S. N.M.College, Maliankara",
"S.I.T ,Madurai,Tamilnadu" => "S.I.T ,Madurai,Tamilnadu",
"S.N College alathur,Palakad" => "S.N College alathur,Palakad",
"Sacred Heart College, Chalakudy" => "Sacred Heart College, Chalakudy",
"Sacred Heart College, Thevara" => "Sacred Heart College, Thevara",
"SAE College, Chennai" => "SAE College, Chennai",
"Sahodaran Ayyappan Smaraka(SNDP)Yogam College, Konni" => "Sahodaran Ayyappan Smaraka(SNDP)Yogam College, Konni",
"Sahrdaya College of Engineering" => "Sahrdaya College of Engineering",
"Saintgits College of Engineering, Pathamuttom" => "Saintgits College of Engineering, Pathamuttom",
"Sanatana Dharma College, Alappuzha" => "Sanatana Dharma College, Alappuzha",
"Sarabhai Institute of Science" => "Sarabhai Institute of Science",
"sastra university" => "sastra university",
"Sathyabama University" => "Sathyabama University",
"school of architecture,nasik" => "school of architecture,nasik",
"school of engineering,cusat" => "school of engineering,cusat",
"School of Management Studies, CUSAT" => "School of Management Studies, CUSAT",
"SCMS School of Engg." => "SCMS School of Engg.",
"SCT,CHALAKKUDI" => "SCT,CHALAKKUDI",
"Shahul Hameed Memorial Engineering College, Kadakkal" => "Shahul Hameed Memorial Engineering College, Kadakkal",
"shri devi institute of engineering and technology" => "shri devi institute of engineering and technology",
"siena college of professional studies" => "siena college of professional studies",
"Sir Syed College, Thaliparamba" => "Sir Syed College, Thaliparamba",
"SMCSI MEDICAL COLLEGE, KARAKONAM" => "SMCSI MEDICAL COLLEGE, KARAKONAM",
"SMU manipal" => "SMU manipal",
"SN COLLEGE CHEMPAZHANTHY" => "SN COLLEGE CHEMPAZHANTHY",
"SOE,cusat" => "SOE,cusat",
"Sree Buddha College of Engineering, Pattoor" => "Sree Buddha College of Engineering, Pattoor",
"Sree budha college of engineering" => "Sree budha college of engineering",
"Sree Chitra Thirunal College of Engineering, Pappanamcode" => "Sree Chitra Thirunal College of Engineering, Pappanamcode",
"Sree Gokulam Medical College" => "Sree Gokulam Medical College",
"Sree Kerala Varma College, Thrissur" => "Sree Kerala Varma College, Thrissur",
"Sree Krishna College, Thrissur" => "Sree Krishna College, Thrissur",
"Sree Narayana Guru College of Engineering" => "Sree Narayana Guru College of Engineering",
"Sree Narayana Gurukulam College of Engineering, Kadayiruppu" => "Sree Narayana Gurukulam College of Engineering, Kadayiruppu",
"Sree Narayana Mangalam Inst. of Mgmt." => "Sree Narayana Mangalam Inst. of Mgmt.",
"Sree Narayana Mangalam Training College, Moothakunnam" => "Sree Narayana Mangalam Training College, Moothakunnam",
"Sree Narayana Trust College, Shoranur" => "Sree Narayana Trust College, Shoranur",
"sree narayanacollege,alathur" => "sree narayanacollege,alathur",
"Sree Sankara College, Kalady" => "Sree Sankara College, Kalady",
"Sree Swathi Thirunal College of Music Thiruvananthapuram" => "Sree Swathi Thirunal College of Music Thiruvananthapuram",
"Sree Vivekananda College, Kizhoor" => "Sree Vivekananda College, Kizhoor",
"Sree Vyasa NSS College, wadakkancherry" => "Sree Vyasa NSS College, wadakkancherry",
"Sri Eshwar college of engineering coimbathor" => "Sri Eshwar college of engineering coimbathor",
"sri shakthi institute of engineering and technology, chennai" => "sri shakthi institute of engineering and technology, chennai",
"Sri Venkateswara College of Engineering, Chennai" => "Sri Venkateswara College of Engineering, Chennai",
"Sri. Ayyappa Devaswom Board College, Eramalikaraa" => "Sri. Ayyappa Devaswom Board College, Eramalikaraa",
"Sri. Sankara Dental College,Varkala." => "Sri. Sankara Dental College,Varkala.",
"Sri.Vidyadiraja NSS College, Vazhoor" => "Sri.Vidyadiraja NSS College, Vazhoor",
"Srinivas Institute of Management Studies,Mangalore" => "Srinivas Institute of Management Studies,Mangalore",
"SRM Chennai" => "SRM Chennai",
"SSV.College, Perumbavoor" => "SSV.College, Perumbavoor",
"St Thomas College, Palai" => "St Thomas College, Palai",
"st thomas institute of scince and technology" => "st thomas institute of scince and technology",
"St. Aloysius College, Edathua" => "St. Aloysius College, Edathua",
"St. Berchmans College, Changanacherry" => "St. Berchmans College, Changanacherry",
"St. Cyrils College, Adoor" => "St. Cyrils College, Adoor",
"St. Dominic College, Kanjirappally" => "St. Dominic College, Kanjirappally",
"St. George College, Aruvithura" => "St. George College, Aruvithura",
"St. Gregorios College, Kottarakara" => "St. Gregorios College, Kottarakara",
"St. Gregorios Dental College,Kothamangalam" => "St. Gregorios Dental College,Kothamangalam",
"St. Johns College Anchal" => "St. Johns College Anchal",
"St. Joseph College for Women, Alappuzha" => "St. Joseph College for Women, Alappuzha",
"St. Joseph Training College for Women, Ernakulam" => "St. Joseph Training College for Women, Ernakulam",
"St. Joseph Training College, Mannanam, Kottayam" => "St. Joseph Training College, Mannanam, Kottayam",
"St. Josephs College, Devagiri" => "St. Josephs College, Devagiri",
"St. Josephs College, Irinjalakuda" => "St. Josephs College, Irinjalakuda",
"St. Josephs College, Moolamattom" => "St. Josephs College, Moolamattom",
"St. Joseph`s College of Engg." => "St. Joseph`s College of Engg.",
"St. Mary`s College, Sulthan bathery" => "St. Mary`s College, Sulthan bathery",
"St. Michaels College, Cherthala" => "St. Michaels College, Cherthala",
"St. Stephen College, Pathanapuram" => "St. Stephen College, Pathanapuram",
"St. Stephens College, Uzhavoor" => "St. Stephens College, Uzhavoor",
"St. Theresas College, Ernakulam" => "St. Theresas College, Ernakulam",
"St. Thomas College, Kozhencherry" => "St. Thomas College, Kozhencherry",
"St. Thomas College, Ranni" => "St. Thomas College, Ranni",
"ST. THOMAS INSTITUTE OF SCIENCE AND TECHNOLOGY" => "ST. THOMAS INSTITUTE OF SCIENCE AND TECHNOLOGY",
"St. Thomas Training College, Palai" => "St. Thomas Training College, Palai",
"St. Xaviers College for Women, Aluva" => "St. Xaviers College for Women, Aluva",
"St. Xaviers College, Kothavara, Vaikom" => "St. Xaviers College, Kothavara, Vaikom",
"St. Xaviers College, Thiruvananthapuram" => "St. Xaviers College, Thiruvananthapuram",
"St.Alberts College, Ernakulam" => "St.Alberts College, Ernakulam",
"St.Aloysius College, Elthuruthu" => "St.Aloysius College, Elthuruthu",
"St.josephs college pala" => "St.josephs college pala",
"St.Marys College, Manarcadu" => "St.Marys College, Manarcadu",
"St.Marys College, Thrissur" => "St.Marys College, Thrissur",
"St.Peters College, Kolencherry" => "St.Peters College, Kolencherry",
"St.Pius College, Rajapuram" => "St.Pius College, Rajapuram",
"St.Thoma College, Thrissur" => "St.Thoma College, Thrissur",
"St.Thomas College, Pala" => "St.Thomas College, Pala",
"Sullamussalam Arabic College, Areacode" => "Sullamussalam Arabic College, Areacode",
"Sunnivva Arabic College, Chennamangallur" => "Sunnivva Arabic College, Chennamangallur",
"SUT Medical College, Trivandrum" => "SUT Medical College, Trivandrum",
"T. K. M Institute of Technology, Ezhukone" => "T. K. M Institute of Technology, Ezhukone",
"T.D MEDICAL COLLEGE,ALAPUZHA" => "T.D MEDICAL COLLEGE,ALAPUZHA",
"T.K.Madhavan Memorial College, Nangiarkulangara" => "T.K.Madhavan Memorial College, Nangiarkulangara",
"Thangal Kunju Memorial Arts and science College, Kollam" => "Thangal Kunju Memorial Arts and science College, Kollam",
"Thangal Kunju Musaliar Institute of Technology" => "Thangal Kunju Musaliar Institute of Technology",
"The national university of advanced legal studies, Kochi" => "The national university of advanced legal studies, Kochi",
"Titus II Teachers Colleges Thiruvalla" => "Titus II Teachers Colleges Thiruvalla",
"TKM College of Engineering, TKM College Post, Kollam" => "TKM College of Engineering, TKM College Post, Kollam",
"Toc H Institute of Science" => "Toc H Institute of Science",
"Travancore Engineering College, Aayoor" => "Travancore Engineering College, Aayoor",
"UIT" => "UIT",
"Union Christian College, Aluva" => "Union Christian College, Aluva",
"Unity women`s College, Manjeri" => "Unity women`s College, Manjeri",
"UNIVERSITY C" => "UNIVERSITY C",
"University College of Engg, Kariavattom, TVM" => "University College of Engg, Kariavattom, TVM",
"UNIVERSITY OF PETROLEUM AND ENERGY STUDIES, DEHRA DUN" => "UNIVERSITY OF PETROLEUM AND ENERGY STUDIES, DEHRA DUN",
"V.L.B JANAKIAMMAL COLLEGE OF ENGG." => "V.L.B JANAKIAMMAL COLLEGE OF ENGG.",
"vardhaman college of engineering" => "vardhaman college of engineering",
"Veda Vyasa Institute of Technology, Ponnempadam" => "Veda Vyasa Institute of Technology, Ponnempadam",
"Vel Tech University, Chennai" => "Vel Tech University, Chennai",
"Vel Tech University, Chennai" => "Vel Tech University, Chennai",
"Vel Tech University, Chennai" => "Vel Tech University, Chennai",
"Vel Tech University, Chennai" => "Vel Tech University, Chennai",
"velammal engineering college" => "velammal engineering college",
"Vellore Institute of Technology" => "Vellore Institute of Technology",
"Vidya Academy of Science" => "Vidya Academy of Science",
"Vidya College of Engineering" => "Vidya College of Engineering",
"VIDYODAYA Pre University College,Udupi" => "VIDYODAYA Pre University College,Udupi",
"Vimal Jyothi Engineering College, Chemperi" => "Vimal Jyothi Engineering College, Chemperi",
"Vimala College, Thrissur" => "Vimala College, Thrissur",
"Viswajyothi College of Engineering & Technology" => "Viswajyothi College of Engineering & Technology",
"VTB College, Mannampatta" => "VTB College, Mannampatta",
"VTM NSS College,Dhanuvachapuram" => "VTM NSS College,Dhanuvachapuram",
"W. M. O. Arts and Science College, Muttil" => "W. M. O. Arts and Science College, Muttil",
"Younus College of Engineering" => "Younus College of Engineering",
"Zamorins Guruvayurappan College, Kozhikode" => "Zamorins Guruvayurappan College, Kozhikode"
);
//echo form_dropdown('college', $carr, $this->input->post('college'), 'id="college"');
	?>
<input id="college" type="text" name="college" placeholder="Enter your college">
	<script>
	  jQuery('#college').combobox([
        <?php
		foreach($carr as $k => $v)
		{
		echo '"'.$k.'",';
		}
		?>
    ]);

	</script>
</div>

<div>
	<label for="cno">Contact Number</label><input type="text" name="cno" value="<?php echo $this->input->post('cno'); ?>">
</div>

<div>
	<label for="ce">Contact Email</label><input type="text" name="ce" value="<?php echo $this->input->post('ce'); ?>">
</div>

<div class="labels">
	<label for="dept">Department</label>
	<?php $radio_is_checked = $this->input->post('dept') === 'ec'; echo form_radio('dept', 'ec', $radio_is_checked); echo form_label('EC', 'ec');?> 
	<?php $radio_is_checked = $this->input->post('dept') === 'cs'; echo form_radio('dept', 'cs', $radio_is_checked); echo form_label('CS', 'cs');?> 
	<?php $radio_is_checked = $this->input->post('dept') === 'ce'; echo form_radio('dept', 'ce', $radio_is_checked); echo form_label('CE', 'ce');?> 
	<?php $radio_is_checked = $this->input->post('dept') === 'me'; echo form_radio('dept', 'me', $radio_is_checked); echo form_label('ME', 'me');?> 
	<?php $radio_is_checked = $this->input->post('dept') === 'eee'; echo form_radio('dept', 'eee', $radio_is_checked); echo form_label('EEE', 'eee');?> 
	<?php $radio_is_checked = $this->input->post('dept') === 'it'; echo form_radio('dept', 'it', $radio_is_checked); echo form_label('IT', 'it');?> 
	<br><span style="margin-left:20%;">
	<?php $radio_is_checked = $this->input->post('dept-other') === 'other'; echo form_radio('dept-other', 'other', $radio_is_checked); echo form_label('other', 'other');?> 
	<input type="text" name="dept-text" id="dept-text" maxlength="30" style="display:none;margin-left:10px;width:140px;" title="specify your department here">
	</span>	<script>
		$(document).ready(function () {
		 if($("input[type='radio'][name$='dept-other']").is(':checked')) {
		 $("#dept-text").show();
		 }
$("input[type='radio'][name$='dept-other']").click(function () {
	$("input[type='radio'][name$='dept']").prop('checked', false);
	$("#dept-text").show();
});

$("input[type='radio'][name$='dept']").click(function () {
	$("input[type='radio'][name$='dept-other']").prop('checked', false);
		$("#dept-text").hide();
});
});
		</script>
</div>

<div class="bottom">
	<label></label><input type="submit" name="submit" class="button" id="sub-but" value="Register Me">
</div>
</form>
<?php if($result !="") { ?>
<div id="error-box" class="arrow_box"><div class="error-head">Ouch...</div>
<p>We have found the following errors while trying to register you : </p>
<div class="error-msg">
<ul>
<?php echo $result; ?>
</ul></div>
</div>
<?php } ?>

<script>
$('#add-event').submit(function(){
$("#sub-but").attr("value","Registering..");
$("#sub-but").addClass("button-active");
$("#sub-but").attr("disabled","disabled");
});
/*
$('#add-event').submit(function(){
$('input[type=submit]').attr("disabled","disabled");
var data = $(this).serialize();
data += "&submit=submit";
$.ajax({
  type: "POST",
  url: $('#add-event').attr("action"),
  data: data,
  success: function(data)
  {
  if(data["status"])
  {
	$('#page').load('<?php echo base_url();?>online-register/step2');
  }
  else
  {
   $("#done-msg").empty();
   $("#error-msg").html(data["result"]); 
  }
  $('input[type=submit]').removeAttr("disabled");
  },
  dataType: 'json'
});
return false;
}); */
</script>
</div>