<html>
	<head>
		<style>
			body {
				font-size: 14px;
			}
			/*Button Style*/
			.button {
				float:left;
				height:auto;
				font:76%/150% "Lucida Grande", Geneva, 
				Verdana, Arial, Helvetica, sans-serif;
				width:10em;
				text-align:center;
				white-space:nowrap;
			}
			/*Button Arrow Styles*/
			.arrows {
				font-size:90%;
				margin:0.2em;
			}
			/*Button link styles*/
			.button a:link, .button a:visited {
				color: #eee;
				background-color:#1e5184;
				font-size:1em;
				font-weight:bolder;
				text-decoration: none;
				border-bottom:0.1em solid #555;
				border-right:0.1em solid #555;
				border-top:0.1em solid #ccc;
				border-left:0.1em solid #ccc;
				margin: 0.2em;
				padding:0.2em;
				display:block;
			}
			.button a:hover {
				background-color:#003366;
				color:#999;
				border-top:0.1em solid #777;
				border-left:0.1em solid #777;
				border-bottom:0.1em solid #aaa;
				border-right:0.1em solid #aaa;
				padding:0.2em;
				margin: 0.2em;
			}
			ul#gal_list
			{
				padding: 2em;
				list-style: none;
			}
			ul#gal_list li
			{
				position: absolute;
			}
			li.selected
			{
				z-index: 99;
			}
			.img
			{
				width: 200px;
				height: 200px;
			}
			div#gal_block
			{
				margin: 5px 5px 100px 300px;
				height: 350px;
			}
		</style>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="gal.js"></script>
	</head>
	<body>
		<div id="gal_block">
			<input type="button" class="button" id="btn_next" value="Next">
			<input type="button" class="button" id="btn_pre" value="Pre">
			<ul id="gal_list">
				<li class="selected"><img class="img" id="img_1" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/83/cultural-culture-interest-16000883-o.jpg" alt="test" /></li>
				<li><img class="img" id="img_2" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/84/recycle-recycling-ecology-16000884-o.jpg" alt="test" /></li>
				<li><img class="img" id="img_3" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/80/stay-trail-walk-16000880-o.jpg" alt="test" /></li>
				<li><img class="img" id="img_4" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/68/water-building-landmark-16000868-o.jpg" alt="test" /></li>
				<li><img class="img" id="img_5" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/67/watch-tower-watchtower-16000867-o.jpg" alt="test" /></li>
				<li><img class="img" id="img_6" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/66/tunnel-street-road-16000866-o.jpg" alt="test" /></li>
				<li><img class="img" id="img_7" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/77/plane-seaplane-water-16000877-o.jpg" alt="test" /></li>
				<li><img class="img" id="img_8" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/66/tunnel-street-road-16000866-o.jpg" alt="test" /></li>
			</ul>
		</div>
	</body>
</html>