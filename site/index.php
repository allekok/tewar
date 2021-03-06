<!DOCTYPE HTML>
<html lang="ckb" dir="rtl">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			تەوار
		</title>
		<meta name="keywords" content="واتای وشە,مانای وشە,فەرهەنگی کوردی">
		<meta name="description" content="گەڕان بۆ واتای وشە لە چەند فەرهەنگی ئانلاینی کوردی">
		{SERVICE_WORKER}
		{STYLE}
	</head>
	<body>
		<div style="flex: 1 0 auto;">
			<form id="frmS" method="GET">
				<h1 style='margin:auto 0 auto .5em;font-size:1.5em;font-weight:bold'><a style="color:black;" href='index.php' onclick="clear_screen(event)">
					تەوار
				</a></h1>
				<input type="text" name="q"
				       value="<?php 
					      if(isset($_GET['q'])) 
						      echo htmlspecialchars($_GET['q']); 
					      ?>" placeholder="وشە..." >
				<button type="submit">گەڕان &rsaquo;</button>
			</form>

			<small style="font-size: .7em;color: #444;display: block;margin: 0 1.5em 0">
				<div style='font-size:.95em'>
					فەرهەنگەکان:
					<a target='_blank' rel='noopener noreferrer nofollow' href="http://ferheng.info/">
						ئەناهیتا
					</a>
					&bull;
					<a target='_blank' rel='noopener noreferrer nofollow' href="http://farhangumejuikawa.com/kawe/">
						کاوە
					</a>
					&bull;
					<a target='_blank' rel='noopener noreferrer nofollow' href="http://dictio.kurditgroup.org/">
						دیکتیۆ
					</a>
					&bull;
					<a target='_blank' rel='noopener noreferrer nofollow' href="https://ku.wiktionary.org/">
						ویکیفەرهەنگ
					</a>
					&bull;
					<a target='_blank' rel='noopener noreferrer nofollow' href="https://ckb.wikipedia.org/">
						ویکیپیدیا
					</a>
					&bull;
					<a target='_blank' rel='noopener noreferrer nofollow' href="https://lex.vejin.net/">
						فەرهەنگەکانی ڤەژین
					</a>
					&bull;
					<a target='_blank' rel='noopener noreferrer nofollow' href="https://allekok.ir/tewar/">
						تەوار - وەشانی ٢
					</a>
				</div>
			</small>
			
			<div id="res">
				<div id="res_tewar_2"></div>
				<div id="res_vejin"></div>
				<div id="res_farhangumejuikawa"></div>
				<div id="res_ferheng"></div>
				<div id="res_wikipedia"></div>
				<div id="res_wiktionary"></div>
				<div id="res_dictio"></div>
			</div>
		</div>
		
		<footer style="text-align:center;flex-shrink:0">
			<a href="https://allekok.github.io/donate/"
			   style="color:#00E">
				یارمەتیی ماڵی
			</a>
			<a href="dev.html">
				کۆد
			</a>
			<a href="https://allekok.github.io/">
				بەرنامەکانی ئاڵەکۆک
			</a>
		</footer>
		{SCRIPT}
	</body>    
</html>
