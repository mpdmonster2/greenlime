<style>
a.mikelimeb {
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
a.mikelimeb:hover {
color:#CD2769;
}
@media screen and (max-width:600px){
a.mikelimeb{
display:none;
}
}

.mikelimenav {
overflow: hidden;
background-color: #34062C;
}
.mikelimenav a {
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
.mikelimenav .icon {
display: none;
}
.mikelimedrop {
float: left;
overflow: hidden;
}
.mikelimedrop .mikelimedropmikelimebtncool {
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
.mikelimedrop-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}
.mikelimedrop-content a {
float: none;
color: black;
padding: 22px 7%;
text-decoration: none;
display: block;
text-align: left;
}
.mikelimenav a:hover, .mikelimedrop:hover .mikelimedropmikelimebtncool {
background-color: #4286f4;
color: white;
}
.mikelimedrop-content a:hover {
background-color: #ddd;
color: black;
}
.mikelimedrop:hover .mikelimedrop-content {
display: block;
}
@media screen and (min-width: 600px) {
.mikelimenav a:not(:first-child), .mikelimedrop .mikelimedropmikelimebtncool {
display: none;
}
.mikelimenav a.icon {
float: right;
display: block;
}
}
@media screen and (min-width: 600px) {
.mikelimenav.responsive {position: relative;}
.mikelimenav.responsive .icon {
position: absolute;
right: 7%;
top: 0;
}
.mikelimenav.responsive a {
float: none;
display: block;
text-align: left;
}
.mikelimenav.responsive .mikelimedrop {float: none;}
.mikelimenav.responsive .mikelimedrop-content {position: relative;}
.mikelimenav.responsive .mikelimedrop .mikelimedropmikelimebtncool {
display: block;
width: 100%;
text-align: left;
}
}

.mikelimebtncool {
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
.mikelimebtncool:hover, .mikelimebtncool:focus {
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

.mikelimebtncool2 {
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
.mikelimebtncool2:hover, .mikelimebtncool2:focus {
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

.mikelimebartop
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

.mikelimetext {
font-size: 48px;
font-family: title;
} @media (max-width:600px) {
.mikelimetext {
font-size: 40px;
font-family: title;
}
}
.mikelimetextwidth {
width:43%;
font-size: 20px;
}
@media (max-width:600px) {
.mikelimetextwidth {
width:85%;
}
}

.mikelimeleftText {
  margin-left:7%;
  margin-top:17px;
  float:left;
  color:#FFFFFF;
  text-decoration:none;
  font-weight:700;
  font-size:20px;
  font-family:'comfort',sans-serif;;
}
 .mikelimeleftText:hover, .mikelimeleftText:active {
  text-decoration: none;
  color: #FFFFFF;
}
@media (max-width:600px) {
.mikelimeleftText {
  display:none;
}
}

</style>

		<div class="mikelimebartop" style="vertical-align:top;" style="position:fixed;">
			 <div align="left">
					<a href="/" class="mikelimeleftText">MikeLime</a>
			 </div>
			 <div align="right">
					<a href="/selection.html" class="mikelimeb">Surf Freely</a>
					<a href="/gs.html" class="mikelimeb">Play Games</a>
					<a id="movie" class="mikelimeb">Watch Movies</a>
					<a href="/chatbox.html" class="mikelimeb">Chatbox</a>
					<div class="mikelimedrop" style="text-align:center !important;">
						 <button class="mikelimedropmikelimebtncool">MikeLime
						 <i class="fa fa-caret-down"></i>
						 </button>
						 <div class="mikelimedrop-content">
								<a href="/selection.html">Surf Freely</a>
								<a href="/gs.html">Play Games</a>
								<a id="movie">Watch Movies</a>
								<a href="/chatbox.html">Chatbox</a>
						 </div>
					</div>
			 </div>
		</div>
