<html>
	<head>
		<style>
			
/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
			
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
				cursor:pointer;
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
			/* gal css */
			ul#gal_list
			{
				height: 100px;
				width: 960px;
				list-style: none;
			}
			ul#gal_list li
			{
				display: inline;
				width: 100px;
				height: 100px;
				float: left;
				margin-right: 100px;
				margin-top: 10px;
				margin-bottom: 10px;
			}
			.s_img
			{
				cursor:pointer;
				height: 100px;
			}
			.selected
			{
			    border-color:red; 
				border-style: solid;
			}
			div#gal_block
			{
				margin: 5px 0px 55px 100px;
				height: 300px;
			}
			div#display_block
			{
				margin-left: 235px;
			}
			div#btn_block
			{
				height: 50px;
				position: relative;
			}
		</style>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				function display_large_pic( pic_link )
				{
					$('#large_img').attr('src',pic_link);
				}
				$('ul#gal_list li img').click(function(){
					var link = $(this).attr('src');
					$('.selected').removeClass('selected');
					$(this).parent().find('img').attr('class', 's_img selected');
					display_large_pic(link);
				});
				$('#btn_next').click(function(){
					var li_pos = $('ul#gal_list li img').index($('.selected'));
					var total_pos = $('ul#gal_list li').size();
						
					if((total_pos - 1) != li_pos)
					{
						$('.selected').removeClass('selected').parent().next().find('img').attr('class','s_img selected');
						
					}
					if((total_pos - 1) == li_pos)
					{
						$('.selected').removeClass('selected').parents().find('li:first img').attr('class','s_img selected');
					}
					/* 取得最後得到的pic */
					//var pic = $('.selected').find('img').attr('src');
					var pic = $('.selected').attr('src');
					display_large_pic(pic);
				});
				$('#btn_pre').click(function(){
					var li_pos = $('ul#gal_list li img').index($('.selected'));
					var first_pos = 0;
								
					if(first_pos != li_pos)
					{
						$('.selected').removeClass('selected').parent().prev().find('img').attr('class','s_img selected');
					}
					if(first_pos == li_pos)
					{
						$('.selected').removeClass('selected').parents().find('li:last img').attr('class','s_img selected');
					}
					/* 取得最後得到的pic */
					// var pic=$('.selected').find('img').attr('src');
					var pic=$('.selected')..attr('src');
					display_large_pic(pic);
				});
				
			});
		</script>
		
	</head>
	<body>
		<div id="btn_block">
			<input type="button" class="button" id="btn_next" value="Next">
			<input type="button" class="button" id="btn_pre" value="Pre">
		</div>
		<div id="gal_block">	
			<ul id="gal_list">
				<li id="img_1"><img class="s_img selected" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/83/cultural-culture-interest-16000883-o.jpg" alt="test" /></li>
				<li id="img_2"><img class="s_img" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/84/recycle-recycling-ecology-16000884-o.jpg" alt="test" /></li>
				<li id="img_3"><img class="s_img" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/80/stay-trail-walk-16000880-o.jpg" alt="test" /></li>
				<li id="img_4"><img class="s_img" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/68/water-building-landmark-16000868-o.jpg" alt="test" /></li>
				<li id="img_5"><img class="s_img" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/67/watch-tower-watchtower-16000867-o.jpg" alt="test" /></li>
				<li id="img_6"><img class="s_img" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/66/tunnel-street-road-16000866-o.jpg" alt="test" /></li>
				<li id="img_7"><img class="s_img" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/77/plane-seaplane-water-16000877-o.jpg" alt="test" /></li>
				<li id="img_8"><img class="s_img" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/78/wood-gathering-gatherer-16000878-o.jpg" alt="test" /></li>
			</ul>
		</div>
		<div id="display_block">
			<img class="img" id="large_img" src="http://s3.amazonaws.com/everystockphoto/fspid/16/00/08/83/cultural-culture-interest-16000883-o.jpg" alt="test" />
		</div>
	</body>
</html>