//Welcome to Transmission panel for Statusboard Version 0.1.

//Defines

<?php
$ip = 'localhost';
$port = 2626;
?>

//Shouldn't have to mess with this stuff down here.
<style>
	
.name {
	width: 200px;
}

.state {
	width: 104px;
	text-align: center;
}

.progress {
	width: 150px;
}
@font-face {
  font-family: 'StatusBoardFontLight';
  src: url('fonts/UniversLTStd-LightCn.woff') format('woff');
}

.no-torrents{
       text-align: center;
   font-family: 'StatusBoardFontLight', 'StatusBoardFont';
   min-height: 45px;
   font-size: .8em;
   color: rgb(100, 100, 100);
   line-height: 150%;
}

.team {
	width: auto;
}

html 
{
   background: transparent
}

body,
div,
dl,
dt,
dd,
ul,
ol,
li,
h1,
h2,
h3,
h4,
h5,
h6,
pre,
code,
form,
fieldset,
legend,
input,
button,
textarea,
select,
p,
blockquote,
th,
td 
{
   margin: 0;
   padding: 0
}

table 
{
   border-collapse: collapse;
   border-spacing: 0
}

fieldset,
img 
{
   border: 0
}

address,
button,
caption,
cite,
code,
dfn,
em,
input,
optgroup,
option,
select,
strong,
textarea,
th,
var 
{
   font: inherit
}

del,
ins 
{
   text-decoration: none
}

li 
{
   list-style: none
}

caption,
th 
{
   text-align: left
}

h1,
h2,
h3,
h4,
h5,
h6 
{
   font-size: 100%;
   font-weight: normal
}

q:before,
q:after 
{
   content: ''
}

abbr,
acronym 
{
   border: 0;
   font-variant: normal
}

sup 
{
   vertical-align: baseline
}

sub 
{
   vertical-align: baseline
}

legend 
{
   color: #000
}

* 
{
   color: transparent
}

body 
{
   background: transparent;
   color: green;
}

* 
{
   pointer-events: none;
   -webkit-user-select: none;
   -webkit-user-modify: none;
   -webkit-user-drag: none;
}

table 
{
   border-collapse: collapse;
   empty-cells: show;
   table-layout: fixed;
   font-family: 'StatusBoardFont', 'StatusBoardFontLight';
   text-transform: uppercase;
   border-spacing: 0px;
   width: 100%;
}

/* A single project box */

tr 
{
   height: 64px !important;
}

td,
th 
{
   max-height: 44px;
   min-height: 44px;
   height: 44px !important;
   color: rgba(255, 255, 255, 1);
   padding: 10px 12px 0px 12px !important;
   white-space: nowrap;
   overflow: hidden;
   text-overflow: ellipsis;
   font-size: 2.3em;
   border-bottom: 1px solid rgba(255, 255, 255, .13);
}

td img 
{
   max-height: 44px;
}

th 
{
   text-align: center;
   font-family: 'StatusBoardFontLight', 'StatusBoardFont';
   min-height: 45px;
   font-size: 1.5em;
   color: rgb(100, 100, 100);
   line-height: 110%;
}

.smallType 
{
   font-family: 'StatusBoardFontLight', 'StatusBoardFont';
   min-height: 45px;
   font-size: 1.3em;
   color: rgb(200, 200, 200);
   line-height: 110%;
   position: relative;
   top: -2px;
}

.projectIcon 
{
   text-align: center;
   width: 50px;
   max-width: 50px;
   min-width: 50px;
}

.projectIcon img 
{
   height: 30px;
   position: relative;
   top: -5px;
}

.projectName 
{
   width: 215px;
}

.projectVersion 
{
   width: 80px;
}

.projectPersons 
{
   width: auto;
}

.person 
{
   height: 35px;
   margin-left: -8px;
}


div.barSegment{
   height:80%!important; color: red; verticle-align: middle; 
    position: relative;
  top: -10%;
  transform: translateY(-50%);
}

/* End Progress bars */

div.value1 
{
   background-color: #ff3000;
}

div.value2 
{
   background-color: #ff4700;
}

div.value3 
{
   background-color: #ff6a00;
}

div.value4 
{
   background-color: #ff9000;
}

div.value5 
{
   background-color: #ffb100;
}

div.value6 
{
   background-color: #fec600;
}

div.value7 
{
   background-color: #d6c600;
}

div.value8 
{
   background-color: #9dc600;
}

div.value9 
{
   background-color: #5fc600;
}

div.value10 
{
   background-color: #00ba00;
}

td.projectsBars div.barSegment 
{
   width: 10px;
   min-width: 10px;
   max-width: 10px;
   display: inline-block;
   position: absolute;
   bottom: 10%;
}

div.barSegment:nth-of-type(1) 
{
   height: 8%;
   left: 4;
}

div.barSegment:nth-of-type(2) 
{
   height: 16%;
   left: 16px;
}

div.barSegment:nth-of-type(3) 
{
   height: 24%;
   left: 28px;
}

div.barSegment:nth-of-type(4) 
{
   height: 32%;
   left: 40px;
}

div.barSegment:nth-of-type(5) 
{
   height: 40%;
   left: 52px;
}

div.barSegment:nth-of-type(6) 
{
   height: 48%;
   left: 64px;
}

div.barSegment:nth-of-type(7) 
{
   height: 56%;
   left: 76px;
}

div.barSegment:nth-of-type(8) 
{
   height: 64%;
   left: 88px;
}

div.barSegment:nth-of-type(9) 
{
   height: 72%;
   left: 100px;
}

div.barSegment:nth-of-type(10) 
{
   height: 80%;
   left: 112px;
}

/* Progress bars */

td.projectProgress 
{
   position: relative;
   padding: 0px 12px !important;
}

.projectProgress span 
{
   background-color: red;
   display: block;
   position: absolute;
   height: 100%;
}

.progressBarContainer 
{
   white-space: nowrap;
   overflow: hidden;
   position: relative;
   width: auto;
   height: 40px;
   /* 	top: 1px; */
   
   background: rgba(255, 255, 255, .15);
}

.projectProgress.green span 
{
   background-color: #00b800;
}

.projectProgress.red span 
{
   background-color: #fc2f00;
}

.projectProgress.purple span 
{
   background-color: #9900c0;
}

.projectProgress.blue span 
{
   background-color: #006be3;
}

.projectProgress.gray span 
{
   background-color: #667175;
}

.projectProgress.silver span 
{
   background-color: #b1b9bc;
}

.projectProgress.orange span 
{
   background-color: #fc6b00;
}

.projectProgress.teal span 
{
   background-color: #03a199;
}

.projectProgress.pink span 
{
   background-color: #ff5ab5;
}

</style>
<head>
<meta data-refresh-every-n-seconds="300" application-name="Transmission"  />
</head>

<?php
require __DIR__ . '/vendor/autoload.php';
use Transmission\Transmission;

$transmission = new Transmission($ip, $port);
$torrentList = array();
// Getting all the torrents currently in the download queue
$torrents = $transmission->all();
foreach ($torrents as $torrent) {

    $percentDone = $torrent->getPercentDone();
    if($percentDone != 100){
        $name = $torrent->getName();
        $id = $torrent->getId();
        if (!in_array($id, $torrentList)){
            array_push($torrentList, $id);
        }
    }else{
        $name = $torrent->getName();
        $id = $torrent->getId();
        if(($key = array_search($id, $torrentList)) !== false) {
            unset($torrentList[$key]);
        }    
        }
}

?>
<table id="projects">

	<?php
	foreach($torrentList as $torrentId){
  if(count($torrentList) == 0){
    	echo '<tr><td></td></tr><tr><td></td></tr><tr><td><h3 class = "no-torrents">No Torrents</h3></td></tr>';
	}
	foreach($torrentList as $torrentId){
    $torrent = $transmission->get($torrentId);
    $green = '#72f455';
    $blue = '#33a0af';

    $name = $torrent->getName();
	$percent = $torrent->getPercentDone();
	if($torrent->getPercentDone() < 1){
	$percent = 100;
	$color = "#ff3000";
	}else{
    $color = $blue;
	}
	
echo'	<tr>
		<td class="projectName" style="width: auto">'.$name.'</td>
        <td class="projectBars"><div class="barSegment value1" style="width: '.$percent.'%; background-color:'.$color.'!important;"></div></td>

	</tr>';
	
	}

	?>
	
</table>
