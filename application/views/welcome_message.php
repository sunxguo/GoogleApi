<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>谷歌地图Api文档</h1>

	<div id="body">
		<p>地址获取经纬度等信息:</p>
		<code>
			<a href="http://googleapi.fengdukeji.com/welcome/tolatlng?address=尚领世家&language=zh-CN">
				http://googleapi.fengdukeji.com/welcome/tolatlng?address=尚领世家&language=zh-CN
			</a>
		</code>
		<p>经纬度获取地址等信息:</p>
		<code>
			<a href="http://googleapi.fengdukeji.com/api/toaddress?latlng=37.8245497,112.5539829&language=zh-CN">
				http://googleapi.fengdukeji.com/api/toaddress?latlng=37.8245497,112.5539829&language=zh-CN
			</a>
		</code>
		<p>支持的语言:</p>
		<code>
			<p>
			<table style="border:0px;font-size:14px;font-family:Roboto, sans-serif;margin:0px;width:677px;color:#212121;">
				<tbody>
					<tr>
						<th style="border:0px;font-weight:500;font-size:16px;vertical-align:middle;color:#FFFFFF;">
							语言代码
						</th>
						<th style="border:0px;font-weight:500;font-size:16px;vertical-align:middle;color:#FFFFFF;">
							语言
						</th>
						<th style="border:0px;font-weight:500;font-size:16px;vertical-align:middle;color:#FFFFFF;">
							语言代码
						</th>
						<th style="border:0px;font-weight:500;font-size:16px;vertical-align:middle;color:#FFFFFF;">
							语言
						</th>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ar
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							阿拉伯语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							kn
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							卡纳达语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							bg
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							保加利亚语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ko
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							韩语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							bn
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							孟加拉语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							lt
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							立陶宛语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ca
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							加泰罗尼亚语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							lv
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							拉脱维亚语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							cs
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							捷克语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ml
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							马拉雅拉姆语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							da
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							丹麦语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							mr
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							马拉地语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							de
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							德语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							nl
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							荷兰语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							el
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							希腊语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							否
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							挪威语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							en
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							英语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							pl
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							波兰语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							en-AU
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							英语（澳大利亚）
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							pt
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							葡萄牙语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							en-GB
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							英语（英国）
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							pt-BR
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							葡萄牙语（巴西）
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							es
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							西班牙语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							pt-PT
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							葡萄牙语（葡萄牙）
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							eu
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							巴斯克语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ro
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							罗马尼亚语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							eu
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							巴斯克语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ru
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							俄语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							fa
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							波斯语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							sk
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							斯洛伐克语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							fi
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							芬兰语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							sl
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							斯洛文尼亚语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							fil
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							菲律宾语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							sr
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							塞尔维亚语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							fr
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							法语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							sv
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							瑞典语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							gl
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							加利西亚语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ta
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							泰米尔语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							gu
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							吉吉拉特语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							te
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							泰卢固语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							hi
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							印地语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							th
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							泰语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							hr
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							克罗地亚语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							tl
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							塔加拉族语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							hu
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							匈牙利语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							tr
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							土耳其语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							id
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							印度尼西亚语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							uk
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							乌克兰语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							it
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							意大利语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							vi
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							越南语
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							iw
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							希伯来语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							zh-CN
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							简体中文
						</td>
					</tr>
					<tr>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							ja
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							日语
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							zh-TW
						</td>
						<td style="border:0px;vertical-align:top;background:rgba(255, 255, 255, 0.952941);">
							繁体中文
						</td>
					</tr>
				</tbody>
			</table>
		</p>
		</code>
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
</div>

</body>
</html>