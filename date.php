<?php
	class Lb_Controller {
		public function verificarFDS($data) {
			$parte = explode("/", $data);
			$dia = date("w", strtotime($parte[2].$parte[1].$parte[0]));
			switch ($dia) {
				case '0':
					return "style='background: #e74c3c;color: #fff;'";
					break;
				case '6':
					return "style='background: #e67e22;color: #fff;'";
					break;
				default:
					return "";
					break;
			}
		}
		public function verificarHorario($hora) {
			//$parte = explode(":", $hora);
			$hora = date("g", strtotime($hora));
			switch ($hora) {
				case ($hora<7 || $hora>19):
					return "style='background: blue;' style='background: #e67e22 !important;color: #fff;'";
					break;
				
				default:
					return "";
					break;
			}
		}
	}
	//echo date("d/m/Y", mktime(0, 0, 0, date("m"), date("d"), date("Y")) );
	$datas = array();
	for ($i=0; $i < 30; $i++) {
		$data = date("d/m/Y", mktime(0, 0, 0, date("m"), date("d")-$i, date("Y")));
		array_push($datas, $data);
	}
	$horas = array();
	for ($i=0; $i < 24; $i++) {
		echo $hora = date("H:i:s",mktime(date("H")+$i, 0, 0, 0, 0, 0));
		array_push($horas, $hora);
	}

	$Lb = new Lb_Controller();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title></title>
	<link rel="shortcut icon" href="nome_icone.ico">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src=""></script>
</head>
<body>
	<div class="container"><!-- container -->
		<table class="table table-bordered table-striped table-hover">

		<?php foreach ($datas as $i => $data) :
				echo "<tr ".$Lb->verificarFDS($data).">";
				echo 	"<td>".($i+1)."</td>";
				echo 	"<td>".$data."</td>";
				echo "</tr>";
			endforeach; ?>

		<?php foreach ($horas as $i => $hora) :
				echo "<tr ".$Lb->verificarHorario($hora).">";
				echo 	"<td>".($i+1)."</td>";
				echo 	"<td>".$hora."</td>";
				echo "</tr>";
			endforeach; ?>

		</table>
		<ul class="list-inline">
			<li><i class="fa fa-asterisk" area-hidden="true"></i> Noite</li>
			<li style='color: #e67e22;'><i class="fa fa-asterisk" aria-hidden="true"></i> Sábado</li>
			<li style='color: #e74c3c;'><i class="fa fa-asterisk" aria-hidden="true"></i> Domingo</li>
		</ul>
	</div><!-- fim container -->
</body>
</html>

<style type="text/css">
*{	border-radius: 0 !important;
box-shadow: none !important;
filter: progid:DXImageTransform.Microsoft.gradient(enabled = false) !important;
text-shadow: none !important;
font-family: "Open Sans", Arial, Helvetica, sans-serif;
font-weight: 400;
outline: none !important;
}
.navbar *{
background-image: none !important;
}
form *{
font-family: "Open Sans", Arial, Helvetica, sans-serif;
}
input, textarea{
background-image: none !important;
border: 1px solid #ccc !important;
font-family: "Open Sans", Arial, Helvetica, sans-serif !important;
}
select{
font-size: 13px !important;
height:27px;
width:170px;
background:#fff;
}
.panel-group  .panel-title{
margin-left: 4px;
}
input[type="radio"], input[type="checkbox"] {
margin: 0px 0 0 !important;
margin-right: 5px !important;
line-height: 23px !important;
border:0px !important;
}
.btn{
background-image: none !important;
font-family: "Open Sans", Arial, Helvetica, sans-serif;
}
.btn.btn-mini{
font-size: 11px !important;
}
body{
font-size: 13px;
line-height: 23px;
color: #666;
background:#fff;
-webkit-font-smoothing: antialiased;
}
#sortable li , .ui-sortable-handle{
border:1px solid transparent !important;
background: rgba(249, 143, 12, 0.44) !important;
}
h1,h2,h3,h4,h5,h6{
padding: 2px 0px;
margin: 2px 0px;
color: #777;
font-weight: 400;
}
h2{	
font-size: 30px;
line-height: 40px;
}
h3{
font-size: 23px;
line-height: 33px;
}
h4{
font-size: 15px !important;
line-height: 30px !important;
}
h5{
font-size: 18px;
line-height: 28px;
}
h6{
font-size: 15px;
line-height: 25px;
}
p{
padding: 1px 0px !important;
margin:1px 0px !important;
}
a{
color: #333;
text-decoration: none !important;
}
a:hover{
color: #888;
text-decoration: none;
}
a:hover,a:focus,a:active{
outline: 0;
}
.bold{
font-weight: 600;
}
hr{
margin:8px 0px 8px 0px !important;
padding:0px !important;
border-top:0px;
border-bottom:1px solid #ddd !important;
height:0px;
}
:focus {
outline:none;
}
::-moz-focus-inner {
border:0;
}
.well{
padding:3px 15px;
margin-bottom: 0px;
}
.btn{
font-size: 13px !important;
}a.btn{font-size: 13px !important;}.label{font-weight: 400;padding: 3px 6px !important;font-size: 13px;}.badge{font-weight: 400;padding: 3px 8px;font-size: 13px;}.progress{height: 17px;line-height: 17px;margin: 5px 0px !important;border: 0px;}.progress .bar{font-size: 12px;}.picker{padding:5px;border-radius:5px !important;}/* Sparkline tooltip */.jqstooltip {width: auto !important;height: auto !important;border-radius: 5px;padding: 4px 6px !important; background-color: rgba(0, 0, 0, 0.5) !important; border: 0 !important;}/* Button colors */.btn.btn-primary{background: #1171a3 !important;}.btn.btn-primary:hover{background: #0f608b !important;}.btn.btn-info{background: #52b9e9 !important;}.btn.btn-info:hover{background: #459fc9 !important;}.btn.btn-success{background: #43c83c !important;}.btn.btn-success:hover{background: #36a530 !important;}.btn.btn-warning{background: #f88529 !important;}.btn.btn-warning:hover{background: #d67323 !important;}.btn.btn-danger{background: #fa3031 !important;}.btn.btn-danger:hover{background: #d82829 !important;}/* Label colors */.label.label-success,.badge.badge-success{background: #43c83c !important;}.label.label-warning,.badge.badge-warning{background: #f88529 !important;}.label.label-important,.badge.badge-important{background: #fa3031 !important;}.label.label-info,.badge.badge-info{background: #52b9e9 !important;}/* Background colors */.blightblue{background:#52b9e9 !important;color: #fff !important;border: 0px !important;}.bblue{background:#1171a3 !important;color: #fff !important;border: 0px !important;}.bgreen{background: #43c83c !important;color: #fff !important;border: 0px !important;}.borange{background:#f88529 !important;color: #fff !important;border: 0px !important;	}.bred{background: #fa3031 !important;color: #fff !important;border: 0px !important;}.bviolet{background: #932ab6 !important;color: #fff !important;border: 0px !important;}.blightblue h2,.blightblue h3, .blightblue h3, .blightblue h4, .blightblue h5, .blightblue h6,.bblue h2,.bblue h3, .bblue h3, .bblue h4, .bblue h5, .bblue h6,.bgreen h2,.bgreen h3, .bgreen h3, .bgreen h4, .bgreen h5, .bgreen h6,.bred h2,.bred h3, .bred h3, .bred h4, .bred h5, .bred h6,.bviolet h2,.bviolet h3, .bviolet h3, .bviolet h4, .bviolet h5, .bviolet h6,.borange h2,.borange h3, .borange h3, .borange h4, .borange h5, .borange h6{color: #fff !important;}.blightblue a,.bblue a,.bgreen a,.bred a,.borange a,.bviolet a{	color: #eee !important;}.blightblue a:hover,.bblue a:hover,.bgreen a:hover,.bred a:hover,.borange a:hover,.bviolet a:hover{color: #ddd !important;}/* Text colors */.lightblue{color:#52b9e9 !important;}.blue{color:#1171a3 !important;}.green{color: #43c83c !important;}.orange{color:#f88529 !important;}.red{color: #fa3031 !important;}.violet{color: #932ab6 !important;}

/* Modal */

.modal-header{
padding-top:7px;
padding-bottom: 7px;
}

/* Form */

form{
margin: 10px;
margin-top:0px;
}

form input, form button, form textarea, form select{
font-size:13px !important;
}

form label{
font-size: 13px;
line-height: 13px;
}

.form-inline button{
margin-left: 15px;
}

.form-horizontal .control-label {
width: 90px;
}

.form-horizontal .controls {
margin-left: 110px;
}

.form-horizontal .controls:first-child {
*padding-left: 100px;
}

.form-horizontal .form-actions {
padding-left: 110px;
}

.form-actions {
padding: 5px 20px 5px;
background:transparent;
border-top:0px;
}

/* Back to top */

.totop {
position: fixed;
bottom: 25px;
right: 0px;
z-index: 104400;
background: #F88529;
display:none;
}

.totop a, .totop a:visited{
display: block;
width: 30px;
height: 30px;
color: #fff;
text-align: center;
line-height: 30px;
}

.totop a:hover {
color: #eee;
text-decoration: none;
}

/* Half column - CHECK LATER */

.col-left{
width: 48%;
float: left;
}

.col-right{
width: 48%;
float: right;
}

/* Dropdown menu */

.dropdown-big .dropdown-menu{
min-width: 250px;
padding:8px 10px;
background: #fff;
}

.dropdown-big .dropdown-menu p{
margin: 1px 0px;
padding: 1px 0px;
font-size: 12px;
line-height: 18px;
}

.dropdown-big .dropdown-menu a{
font-size: 13px;
line-height: 23px;
background:transparent;
padding: 0px;
color: #444 !important;
display: inline;
}

.dropdown-big .dropdown-menu a:hover{
color: #777 !important;
background:transparent !important;
}

.dropdown-big .dropdown-menu .drop-foot{
text-align: center;
}

.dropdown-big .dropdown-menu .drop-foot a{
font-size: 12px !important;
}

.dropdown-big .dropdown-menu hr{
padding:0px;
margin: 8px 0px;
border-top: 0px solid #aaa;
border-bottom: 1px solid #eee;
}

.dropdown-big .dropdown-menu h5{
color: #666 !important;
line-height: 18px;
font-weight: bold;
font-size: 13px;
}

.dropdown-menu {
background:#fff;
border-radius: 0px;
border: 1px solid #ddd;
border-bottom: 1px solid #ddd;
}  

.dropdown-menu li{
color: #777;
font-size: 13px;
line-height: 18px;
}

.dropdown-menu li > a{
color: #555;
line-height: 23px !important;
}

.dropdown-menu li > a:hover{
background: #f9f9f9 !important;
filter:none;
color: #888;
}

.dropdown-menu a:hover,.dropdown-menu a:focus{
filter:none !important;
background: #fff !important;
}

.dropdown-menu::after, .dropdown-menu::before{
border:none !important;
}

/* Navbar */

.navbar *{
text-shadow:none !important;
}

.navbar .container{
max-width:100%;
}

.navbar{
background: #000;
}

.navbar .navbar-brand{
color: #fff !important;
}


.navbar .nav > li > a{
font-size: 13px !important;
color: #fff !important;
}

.navbar i{
margin-right: 3px;
}

.navbar .caret{
border-top-color:#fff !important;
border-bottom-color:#fff !important;
}

.navbar .nav-user-pic{
width: 20px;
margin-right: 10px;
display:inline-block;
}

.navbar .badge{
margin-left: 5px;
}


/* Notification */

.gritter-custom p{
font-size: 13px;
line-height: 18px;
color: #fff;
}



/* Sidebar */

.sidebar{
width: 230px;
float: left;
display: block;
background:#111;
color: #eee;
position: relative;
}

.sidebar hr{
border-bottom: 1px solid #333 !important;
}

.sidebar ul{
padding: 0px;
margin: 0px;
list-style-type: none;	
}

.sidebar ul li{
list-style-type: none;
}

.sidebar .sidebar-inner{
display: block; 
width:100%; 
margin: 0 auto; 
position: absolute;
z-index: 60;	
background: #111;
}

.sidebar .navi li i{
margin-right: 5px;
}

.sidebar .navi li span i{
margin: 0px;
}

.sidebar .navi > li > a{ 
display: block; 
padding: 12px 20px;
font-size: 15px;
line-height: 25px;
color: #fff;
text-decoration: none;
border-bottom: 1px solid #222;
background-color: #111;
}

.sidebar .navi > li > a:hover, .sidebar .navi > li.open > a { 
border-bottom: 1px solid #222;
background-color: #222;
color: #fff;
}

.sidebar .navi li ul { 
display: none; 
background: #181818; 
}

.sidebar .navi li.open ul{
display: block;
}

.sidebar .navi li ul li a { 
display: block; 
background: none;
padding: 10px 0px;
padding-left: 30px;
text-decoration: none;
color: #999;
border-bottom: 1px solid #222;
}

.sidebar .navi li ul li.active a { 
background: #131313;
border-bottom: 1px solid #222;
}

.sidebar .navi li ul li a:hover {
background: #131313;
border-bottom: 1px solid #222;
}

/* Sidebar colors */

.sidebar .navi > li.nlightblue > a:hover, 
.sidebar .navi > li.open.nlightblue > a, 
.sidebar .navi > li.current.nlightblue > a { 
background:#52b9e9 !important;
-webkit-transition:background 0.5s ease;
-moz-transition:background 0.5s ease;
-o-transition:background 0.5s ease;
transition:background 0.5s ease;
}

.sidebar .navi > li.nblue > a:hover, 
.sidebar .navi > li.open.nblue > a,
.sidebar .navi > li.current.nblue > a { 
background:#1171a3 !important;
-webkit-transition:background 0.5s ease;
-moz-transition:background 0.5s ease;
-o-transition:background 0.5s ease;
transition:background 0.5s ease;
}

.sidebar .navi > li.ngreen > a:hover, 
.sidebar .navi > li.open.ngreen > a,
.sidebar .navi > li.current.ngreen > a { 
background:#43c83c !important;
-webkit-transition:background 0.5s ease;
-moz-transition:background 0.5s ease;
-o-transition:background 0.5s ease;
transition:background 0.5s ease;
}

.sidebar .navi > li.norange > a:hover, 
.sidebar .navi > li.open.norange > a,
.sidebar .navi > li.current.norange > a { 
background:#f88529 !important;
-webkit-transition:background 0.5s ease;
-moz-transition:background 0.5s ease;
-o-transition:background 0.5s ease;
transition:background 0.5s ease;
}

.sidebar .navi > li.nred > a:hover, 
.sidebar .navi > li.open.nred > a,
.sidebar .navi > li.current.nred > a { 
background:#fa3031 !important;
-webkit-transition:background 0.5s ease;
-moz-transition:background 0.5s ease;
-o-transition:background 0.5s ease;
transition:background 0.5s ease;
}

.sidebar .navi > li.nviolet > a:hover, 
.sidebar .navi > li.open.nviolet > a,
.sidebar .navi > li.current.nviolet > a { 
background:#932ab6 !important;
-webkit-transition:background 0.5s ease;
-moz-transition:background 0.5s ease;
-o-transition:background 0.5s ease;
transition:background 0.5s ease;
}

/* Sidebar dropdown */

.sidebar .sidebar-dropdown*{
text-decoration: none;
}

.sidebar .sidebar-dropdown{
display: none;
}

.sidebar .sidebar-dropdown a{
color: #ddd;  
background-color: #343434;	
padding:10px;
text-transform: uppercase;
text-align: center;
font-size: 13px;
line-height:19px;
display: block;
border-top: 1px solid #666;
border-bottom: 1px solid #333;  
}

.sidebar .sidebar-dropdown a:hover{
text-decoration: none;
}

/* Sidebar widget */

.sidebar .sidebar-widget{
padding: 10px 5px;
}

.sidebar .ui-datepicker{
width: 95%;
margin: 0 auto;
background: #111;
color: #888;
border: 0px;
padding: 0px;
}

.sidebar .ui-datepicker-header{
background: #222;
border: 1px solid #212121;
}

.sidebar .ui-datepicker-prev:hover{
background: transparent;
border: 0px;
top: 2px !important;
left: 2px !important;
}

.sidebar .ui-datepicker-next:hover{
background: transparent;
border: 0px;
top: 2px !important;
right: 2px !important;
}

.sidebar .ui-state-default{
background: #222;
border: 0px;
text-align: center;
color: #ccc;
}

.sidebar .ui-state-default:hover{
background: #282828;
color: #999;
}

.sidebar .ui-state-hightlight, .sidebar .ui-state-active{
background: #444;
}


/* Main */

.mainbar{
position: relative;
margin-left: 230px;
margin-right: 0px;
width: auto;
background:#fff;
min-height: 900px;
}

.mainbar .container{
max-width:100% !important;
}

/* Pagination*/

.pagination{
margin: 10px 0px 5px 0px;
}

.pagination ul > li > a, .pagination ul > li > span {
border: 1px solid #ccc;
margin-right: 3px;
padding: 3px 8px;
background-color: #fff;	
color: #666;
}	

.pagination ul > li > a:hover{
color: #333;
background: #fafafa;
}

/* Page head */

.mainbar .page-head{
padding: 15px 20px;
border-bottom: 1px solid #fff;
}

.mainbar .page-meta{
font-size: 13px;
line-height: 15px;
margin-left: 2px;
display: block;
}

/* Bread crumb */

.mainbar .bread-crumb{
font-size: 13px;
margin-top: 15px;
color: #aaa;
margin-left: 2px;
}

.mainbar .bread-crumb i{
margin-right: 3px;
display:inline;
position: static;
top: 0px;
width: auto;
}

.mainbar .bread-crumb .divider{
margin: 0px 3px;
}

.mainbar .bread-crumb a{
color: #666;
}

.mainbar .bread-crumb a.bread-current{
color: #888;
}


/* Notificationj Box*/

.slide-box{
width: 270px;
z-index: 400;
position: fixed;
bottom: 0px;
right: 5px;
}

.slide-box .slide-box-head{
line-height: 42px;
height: 42px;
cursor: pointer;
font-size: 15px;
padding-left: 10px;
}

.slide-box .slide-box-head i{
margin-right: 10px;
font-size: 12px;
}

.slide-box .slide-content{
margin: 0px;
padding: 0px;
background: #000;
min-height: 300px;
}

.slide-content .nav-tabs{
border-bottom: 1px solid #222 !important;
margin-bottom: 0px !important;
}

.slide-content .nav-tabs > li > a{
background: #111 !important;
margin: 0px !important;
border: 1px solid #222 !important; 
color: #888 !important;
}

.slide-content .nav-tabs > li.active > a{
color: #ccc !important;
background: #1c1c1c !important;
}

.slide-content .tab-content{
padding: 10px;
} 

.slide-content hr{
border-bottom: 1px solid #212121 !important;
}


/* Slidebox data */

.slide-data{
background: #111;
border:1px solid #222;
margin: 0px;
margin-bottom: 10px;
padding: 5px;
}

.slide-data .slide-data-text{
color: #fff;
font-weight: 600;
font-size: 13px;
float: left;
width: 60%;
}

.slide-data .slide-data-result{
color: #fff;
font-weight: 600;
font-size: 16px;
float: right;
width: 40%;
}

.slide-data .slide-data-result i{
font-size: 14px;
}

/* Matter */

.mainbar .matter{
border-top: 1px solid #ddd;
padding: 15px 0px;
}

/* Widget */

.widget {
margin-top: 10px;
margin-bottom: 20px; 
background: #fff;
}

.widget hr{
margin: 4px 0px;
padding: 4px 0px;
border-top: 0px;
border-bottom: 1px solid #ddd;
}

.widget .table{
margin: 0px;
width: 100%;
}

.widget .table-bordered{
border: 0px;
}

.widget .table-bordered th{
border-bottom: 1px solid #ccc !important;
}

.widget .table-bordered td{
border-top: 0px !important;
border-bottom: 1px solid #ccc !important;
}

.widget .table-bordered td:first-child, .widget .table-bordered th:first-child{
border-left: 0px;
}

.widget .padd{
padding: 15px;
}

.widget .widget-head{
background-color: #f5f5f5;
border: 1px solid #ddd;
color: #777;
font-size: 15px;
padding: 12px 15px;
}

.widget .widget-head .widget-icons i{
font-size: 14px;
margin: 0px 4px;
}

.widget .widget-head .widget-icons a{
color: #aaa;
}

.widget .widget-head .widget-icons a:hover{
color: #888;
}

.widget .widget-content{
border-left: 1px solid #ddd;
border-right:1px solid #ddd;
border-bottom: 1px solid #ddd;
}

.widget .widget-foot{
background-color: #f9f9f9;
border: 1px solid #ddd;
border-top: 0px;
padding: 8px 15px;
font-size: 13px;
color: #555;
}

/* Widget Content */

.chats{
padding-left:0px;
margin-left:0px;
}

.recent{
padding-left:0px;
margin-left:0px;
}

.quick-post .checkbox label{
display:inline-block;
}

.quick-post .radio label{
display:inline-block;
}

.widget-foot .form-inline button {
margin-left: -3px;
padding:7px 12px;
}

.widget-content .form-inline button {
margin-left: 0px;
padding:7px 12px;
}

.buttons button{
margin-top:10px;
}

.widget-content .checkbox label{
display:inline-block;
}

.widget-content ol#slist{
padding:0px;
}


/* Widget colors */

.widget.wred .widget-head{
background-color: #fa3031;
border: 1px solid #fa3031;
color: #fff;
}

.widget.wlightblue .widget-head{
background-color: #52b9e9;
border: 1px solid #52b9e9;
color: #fff;
}

.widget.wblue .widget-head{
background-color: #1171a3;
border: 1px solid #1171a3;
color: #fff;
}

.widget.wgreen .widget-head{
background-color: #43c83c;
border: 1px solid #43c83c;
color: #fff;
}

.widget.worange .widget-head{
background-color: #f88529;
border: 1px solid #f88529;
color: #fff;
}

.widget.wviolet .widget-head{
background-color: #932ab6;
border: 1px solid #932ab6;
color: #fff;
}

.widget.wred .widget-head .widget-icons a,
.widget.wblue .widget-head .widget-icons a,
.widget.wlightblue .widget-head .widget-icons a,
.widget.worange .widget-head .widget-icons a,
.widget.wgreen .widget-head .widget-icons a,
.widget.wviolet .widget-head .widget-icons a{
color: #fff;
}

.widget.wred .widget-head .widget-icons a:hover,
.widget.wblue .widget-head .widget-icons a:hover,
.widget.wlightblue .widget-head .widget-icons a:hover,
.widget.worange .widget-head .widget-icons a:hover,
.widget.wgreen .widget-head .widget-icons a:hover,
.widget.wviolet .widget-head .widget-icons a:hover{
color: #eee;
}

/* Widget white extras */

.widget .nav-tabs > li a {
padding: 5px 10px;
}

.widget .nav-tabs {
margin-bottom: 5px;
}

.widget .tab-content{
/*margin-bottom: 10px;*/
}

/* Calendar */

.fc-header-title h2 {
font-size: 15px;
line-height: 20px;
}

.fc-event-skin {
background-color: #ff5d5e;
border-color: #ff3839;
}	

.fc-button-month, .fc-button-agendaWeek, .fc-button-agendaDay {
right: 20px;
}

.fc-state-default {
background: #eee !important;
}

.fc-state-default:hover{
background: #ddd !important;
}

.fc-widget-header {
padding: 7px 0px !important;
color: #666;
background: #eee;
border-color: #ccc;
}

.fc-content {
background: #fff;	
}

.fc-content td:hover{
background: #f3f3f3;	
}

/* Current status */

.current-status{
list-style-type: none;
padding: 0px;
margin: 0px;
}

.current-status .bold{
font-size: 13px;
margin-left: 8px;
}

.current-status li{
padding: 10px 0px;
}

/* Knob */

.dial{
border: 0px !important;
}

/* Today datas */

.today-datas{
list-style-type: none;
padding: 0px;
margin: 10px 0px;
}

.today-datas li{
display: inline-block;
margin-bottom: 5px;
margin-right: 10px;
padding: 20px 15px;
background-color: #f8f8f8;	
background: #f8f8f8;
border: 1px solid #ccc;
max-width: 100%;
text-align: center;
}

.today-datas li .spark{
margin-right: 10px;
}

.today-datas li .datas-text{
font-size: 13px;
padding: 7px 0px 0px 0px;
font-weight: normal;
}

.today-datas li .datas-text span{
display: block;
font-size: 24px;
margin-bottom: 5px;
}

.today-datas li i{
font-size: 50px;
margin-right: 10px;
}

.today-datas li .dial{
margin-right: 10px !important;
}

/* Profile */

.profile{
margin-top: 15px;
}

/* Error */

.error-page{
max-width: 500px;
margin: 50px auto;
}

.error h1{
font-weight: normal;
}

/* Grid */

.show-grid div{
background: #eee;
text-align: center;
margin: 10px 0px;
border: 1px solid #ddd;
}

/* Slider */

#eq span {
height:120px; float:left; margin:15px
}

.ui-slider .ui-slider-handle { 
position: absolute; 
z-index: 2; 
width: 1em; 
height: 1em; 
cursor: default; 
background: #fafafa !important;
border: 1px solid #ccc !important; 
}

.ui-slider-horizontal { 
height: .5em; 
border: 0px solid #eee !important; 
background: #dfdfdf !important;
}

.ui-slider-vertical { 
height: 100px; 
width: 0.5em;
border: 0px solid #fff !important; 
background: #dfdfdf !important;
}

#master1, #master2, #master3, #master4, #master5, #master6{
width: 100%;
margin:15px 0px !important;
}

.slider-red .ui-widget-header{
background: #dd514c !important;
border-color: #dd514c !important;
}	

.slider-blue .ui-widget-header{
background: #36a5c6 !important;
border-color: #36a5c6 !important;
}	

.slider-green .ui-widget-header{
background: #44c636 !important;
border-color: #44c636 !important;
}	

.slider-yellow .ui-widget-header{
background: #fcd419 !important;
border-color: #fcd419 !important;
}	

.slider-orange .ui-widget-header{
background: #fc9419 !important;
border-color: #fc9419 !important;
}	

.slider-violet .ui-widget-header{
background: #9919fc !important;
border-color: #9919fc !important;
}	

/* Toggle button */

.make-switch{
margin:5px 0px;
}

/* Gallery */

.gallery img{
max-width: 170px;
margin: 5px;
}

/* Error log */

.error-log{
height: 400px;
overflow: auto;
}

.error-log ul{
list-style-type: none;
margin: 0px;
padding: 0px;
}

.error-log ul li{
padding: 10px 0px;
}

/* Media */

.medias .checker {
width: 5px !important;
}

.medias img{
max-width: 40px;
}

/* CL Editor */

.cleditorMain{
border: 1px solid #ccc;
margin: 10px 0px;
}

.cleditorMain textarea, .cleditorMain iframe{
width: 100% !important;
}

/* Chart */

#curve-chart,#live-chart,#pie-chart,#pie-chart2,#pie-chart3{
height: 250px;
max-width: 100%;
}

#bar-chart{
height: 283px;
width: 99.5%;	
}

#pie-chart,#pie-chart2,#pie-chart3{
max-width: 300px;
margin: 10px auto;
}

/* Support page */

#slist p{
display: none;
margin:5px 0px;
padding:5px 10px !important; 
background:#fff;
line-height: 25px;
border:1px solid #eee;
}

#slist{
margin-left: 20px;
}

#slist li{
margin-bottom: 10px;
}

#slist li a{
display: block;
margin-bottom: 0px;
}

.support-contact i{
margin-right: 3px;
}

/* Post form */

.post{
margin-top: 20px;
}

/* Login and Register form */

.admin-form{
max-width: 500px;
margin: 50px auto;
}

.admin-form form{
padding: 10px 0px;
}
/* Responsive */

@media (max-width: 480px){
.mainbar .page-head h2{
	float: none;
}
.mainbar .bread-crumb{
	float: none;
	margin-top: 10px;
}
.col-left{
	width: 100%;
	float: none;
	margin-right: none;
}
.col-right{
	width: 100%;
	float: none;
}
.fc-button-month, .fc-button-agendaWeek, .fc-button-agendaDay {
	display: none;
}
}

@media (max-width: 767px){
body{
	margin: 0 auto;
}
.mainbar .matter{
	padding-left: 20px;
	padding-right: 20px;
}			
.form-inline button{
	margin-left:0px;
} 
.navbar,.navbar-inner{
	margin-top: 0px !important;
	margin-bottom: 0px !important;
}
.navbar-collapse .dropdown-big .dropdown-menu{
	color: #bbb !important;
}	
.navbar-collapse .dropdown-big .dropdown-menu a{
	color: #ccc !important;
	padding-left: 0px !important;
	padding-right: 0px !important;
}
.navbar-collapse .dropdown-big .dropdown-menu a:hover{
	color: #aaa !important;
}
.navbar-collapse .dropdown-big .dropdown-menu h5{
	color: #eee !important;
}		
.navbar-collapse .dropdown-menu{
	padding: 10px 10px !important;
}
.navbar-collapse .dropdown-menu a {
	color: #fff !important;
}
.navbar-collapse .dropdown-menu a:hover{
	background:transparent !important;
}
.navbar-collapse .dropdown-menu hr{
	border-top: 0px solid #eee;
	border-bottom: 1px solid #333;
}
.sidebar{
	float: none;
	width: 100%;
}
.sidebar .sidebar-dropdown{
	display: block;
}
.sidebar .sidebar-inner{
	display: none;
	max-width:300px;
	padding:0px 20px;
}
.sidebar .sidebar-widget{
}
.mainbar{
	margin: 0px;
	float: none;
}
.today-datas{	
	text-align: center;
}
.slide-box{
	display: none;
}
}

@media (min-width: 768px) and (max-width: 979px){
.form{
	margin: 0px !important;
}
form .control-group{
	margin:0px !important;
}
form .control-label{
	float: none !important;
	width: auto !important;
	text-align: left !important;
}
form .controls{
	float: none !important;
	margin-left: 0px !important;
}
form .form-actions{
	padding-left: 0px !important;
}
.navbar,.navbar-inner{
	margin-top: 0px !important;
	margin-bottom: 0px !important;
}
.nav-collapse .dropdown-big .dropdown-menu{
	color: #bbb !important;
}	
.nav-collapse .dropdown-big .dropdown-menu a{
	color: #ccc !important;
	padding-left: 0px !important;
	padding-right: 0px !important;
}
.nav-collapse .dropdown-big .dropdown-menu a:hover{
	color: #aaa !important;
}
.nav-collapse .dropdown-big .dropdown-menu h5{
	color: #eee !important;
}		
.nav-collapse .dropdown-menu{
	padding: 10px 10px !important;
}
.nav-collapse .dropdown-menu a {
	color: #fff !important;
}
.nav-collapse .dropdown-menu a:hover{
	background:transparent !important;
}
.nav-collapse .dropdown-menu hr{
	border-top: 0px solid #eee;
	border-bottom: 1px solid #333;
}
.sidebar{
	width: 200px;
}
.mainbar{
	margin-left: 200px;
}
}







#content{
background:#fff;
box-shadow: 1px 2px 1px #000;
min-height:300px;
margin-top: 80px;
padding: 2px;

}

.table{
margin-top: 6px;
}

.table thead th {
background-color: #F88529;
text-shadow: 1px 1px 1px #ccc;
}




.table td, .table th{padding:0px !important;padding-left:3px;
}.table th, .table caption{ background: #F88529;color: #fff;font-weight: bold;}.table-striped>tbody>tr:nth-child(odd)>td,.table-striped>tbody>tr:nth-child(odd)>th{background-color:rgba(249, 143, 12, 0.18);}.tablesorter th{background-image: url("../images/bg.gif");background-repeat: no-repeat;background-position: center right;cursor: pointer;}.tablesorter th.headerSortUp{background-image: url("../images/asc.gif");}.tablesorter th.headerSortDown{background-image: url("../images/desc.gif");}.tablesorter th.no_order{background-image: none !important;}




.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus {
	color: #555;ground-color: #f88529;
}

.navbar-default .navbar-collapse, .navbar-default .navbar-form{background:#222 !important;}.navbar-brand{padding-bottom: 0px;}.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus{background-color: #f88529;}.dropdown-menu li > a:hover{ background-color: #428bca !important;color:#fff !important;}*[data-toggle="buttons"] .btn-default.active{color: #333;background-color: #f88529;border-color: #adadad;}#footer_lispbx {background: #222;height: 25px;width: 100%;position: fixed;bottom: 0px;z-index: 5000;padding-left: 10px;padding-right: 10px;color:#fff;}legend{background-color: #F88529;font-weight: bold;text-align: center;}.nav-tabs > li > a {font-weight: bold;}.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {}.example{font-size:11px !important;}@media (max-width : 1200px){.example{display: none;}}.example,.optional{color:#3D3D3D;font-style: italic;}.optional:after{content: "(Opcional)";}fieldset{border:1px solid #ccc !important;padding:5px;}fieldset > legend{border-bottom:0px !important;background: none !important;font-size:12px;width:inherit !important;text-align: inherit !important;font-weight: bold !important;margin-bottom: 0px !important;}fieldset > legend.text-right{ text-align: right !important;}.dropdown-menu li{text-align: left;}.alert-danger{ background-color: #cc0000 !important;border-color: #bd001f !important;color: #ffffff !important;}.alert-success {background-color: #77b300 !important;border-color: #809a00 !important;color: #ffffff !important;}.table td:nth-child(1){text-align: left !important;padding-left: 5px !important;}.table td{vertical-align: middle !important;}#lis_clock_media{position: fixed;top:55px;left:0px;background:#E9601C;width:370px;height:30px;border-top-right-radius:5px 5px !important;border-bottom-right-radius:5px 5px !important;color:#fff;}	#lis_clock_play{position: relative;top:-7px;left:-55px;color:#fff;}	#lis_clock_player{position: relative;top:10px;left:50px;width:200px;}	#lis_clock_timer{position: relative;top:-6px;left:260px;		color:#fff;}	#lis_clock_volume{position: relative;top:-6px;left:265px;color:#fff;}#lis_clock_download{position: relative;top:-6px;left:275px;color:#fff;}	#lis_clock_close{position: relative;top:-6px;left:285px;color:#fff;}#lis_clock_control_vol{	height:100px;position: relative;left:298px;top:-9px;}.ui-autocomplete{z-index:2000 !important;}
</style>