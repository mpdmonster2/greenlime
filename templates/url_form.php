<style>
a.button1 {
padding:1.4em 1.4em;
margin:0 0.3em 0.3em 0;
text-decoration:none;
font-family:'comfort',sans-serif;
font-weight:700;
color:#FFFFFF;
text-align:center;
transition: all 0.2s;
margin-top:8px;
float:right;
}
a.button1:hover {
color:#CD2769;
}
@media screen and (max-width:600px){
a.button1{
display:none;
}
}

.topnav {
overflow: hidden;
background-color: #34062C;
}
.topnav a {
float: left;
display: block;
color: #CD2769;
text-align: center;
padding: 24px 7%;
text-decoration: none;
font-size: 17px;
}
.active {
background-color: #4CAF50;
color: white;
}
.topnav .icon {
display: none;
}
.dropdown {
float: left;
overflow: hidden;
}
.dropdown .dropbtn {
font-size: 15px;
border: none;
outline: none;
color: white;
padding: 24px 7%;
background-color: inherit;
font-family: inherit;
margin: 0;
text-align: center;
}
.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}
.dropdown-content a {
float: none;
color: black;
padding: 22px 7%;
text-decoration: none;
display: block;
text-align: left;
}
.topnav a:hover, .dropdown:hover .dropbtn {
background-color: #4286f4;
color: white;
}
.dropdown-content a:hover {
background-color: #ddd;
color: black;
}
.dropdown:hover .dropdown-content {
display: block;
}
@media screen and (min-width: 600px) {
.topnav a:not(:first-child), .dropdown .dropbtn {
display: none;
}
.topnav a.icon {
float: right;
display: block;
}
}
@media screen and (min-width: 600px) {
.topnav.responsive {position: relative;}
.topnav.responsive .icon {
position: absolute;
right: 7%;
top: 0;
}
.topnav.responsive a {
float: none;
display: block;
text-align: left;
}
.topnav.responsive .dropdown {float: none;}
.topnav.responsive .dropdown-content {position: relative;}
.topnav.responsive .dropdown .dropbtn {
display: block;
width: 100%;
text-align: left;
}
}

.btn {
box-sizing: border-box;
background-color: transparent;
border: 2px solid #CD2769;
border-radius: 0.6em;
color: #CD2769;
margin:0.3em;
cursor: pointer;
display: inline-block;
align-self: center;
font-size: 1rem;
font-weight: 400;
line-height: 1;
width:150px;
margin-left: 7%;
padding: 1.0em;
text-decoration: none;
vertical-align: middle;
text-align: center;
text-transform: uppercase;
font-family: 'Montserrat', Sans-Serif;
font-weight: 700;
}
.btn:hover, .btn:focus {
color: #fff;
outline: 0;
}
.fourth {
border-color: #CD2769;
color: #fff;
background-image: linear-gradient(45deg, #CD2769, 50%, transparent 50%);
background-position: 100%;
background-size: 400%;
transition: background 300ms ease-in-out;
}
.fourth:hover {
background-position: 0;
}

.btn2 {
box-sizing: border-box;
background-color: transparent;
border: 2px solid #CD2769;
border-radius: 0.6em;
color: #CD2769;
margin:0.3em;
cursor: pointer;
display: inline-block;
align-self: center;
font-size: 1rem;
font-weight: 400;
line-height: 1;
width:150px;
margin-left: 2%;
padding: 1.0em;
text-decoration: none;
vertical-align: middle;
text-align: center;
text-transform: uppercase;
font-family: 'Montserrat', Sans-Serif;
font-weight: 700;
}
.btn2:hover, .btn2:focus {
color: #fff;
outline: 0;
}
.fourth2 {
border-color: #CD2769;
color: #fff;
background-image: linear-gradient(45deg, #CD2769, 50%, transparent 50%);
background-position: 100%;
background-size: 400%;
transition: background 300ms ease-in-out;
}
.fourth2:hover {
background-position: 0;
}

.topFixedBar
{
background-color: #120a21;
height: 67px;
width: 100%;
top: 0px !important;
}

@font-face {
font-family: title;
src: url(autobus.ttf);
}
@font-face {
font-family: comfort;
src: url(Comfortaa.ttf);
}

.text {
font-size: 48px;
font-family: title;
} @media (max-width:600px) {
.text {
font-size: 40px;
font-family: title;
}
}
.textwidth {
width:43%;
font-size: 20px;
}
@media (max-width:600px) {
.textwidth {
width:85%;
}
}

.leftText {
  margin-left:7%;
  margin-top:17px;
  float:left;
  color:#FFFFFF;
  text-decoration:none;
  font-weight:700;
  font-size:20px;
  font-family:'comfort',sans-serif;;
}
 .leftText:hover, .leftText:active {
  text-decoration: none;
  color: #FFFFFF;
}
@media (max-width:600px) {
.leftText {
  display:none;
}
}

</style>

		<div class="topFixedBar" style="vertical-align:top;" style="position:fixed;">
			 <div align="left">
					<a href="/" class="leftText">MikeLime</a>
			 </div>
			 <div align="right">
					<a href="/selection.html" class="button1">Surf Freely</a>
					<a href="/gs.html" class="button1">Play Games</a>
					<a id="movie" class="button1">Watch Movies</a>
					<a href="/chatbox.html" class="button1">Chatbox</a>
					<div class="dropdown" style="text-align:center !important;">
						 <button class="dropbtn">MikeLime
						 <i class="fa fa-caret-down"></i>
						 </button>
						 <div class="dropdown-content">
								<a href="/selection.html">Surf Freely</a>
								<a href="/gs.html">Play Games</a>
								<a id="movie">Watch Movies</a>
								<a href="/chatbox.html">Chatbox</a>
						 </div>
					</div>
			 </div>
		</div>
