<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::-moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #09f;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #ccc;
		background-color: transparent;
		font-weight: normal;
		font-style: italic;
		text-decoration: none;
	}

	h1 {
		color: #fff;
		background-color: transparent;
		font-size: 59px;
		font-weight: normal;
		font-style: italic;
		font-family: serif;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	
button {border: none;padding: 5px;border-radius: 10px;color: white;background: linear-gradient(#777,#666);}
button:active{background:linear-gradient(#666,#777); }

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #0bf;
		border: 1px dashed #09f;
		color: #000;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
		min-height: 300px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	#creds{ width:400px;margin: 20px auto;text-align: center;}
	#creds input[type='text'],#creds input[type='password']{border: thin dashed gray;padding: 5px;border-radius: 5px;margin: 5px;}
	
	#container{
		margin: 10px;
		/*border: 1px solid #D0D0D0;*/
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	#foot{
		background: #fff;
		width: 100%;
		margin: 0 15px 0 15px;

	}
	h2 > a{color:#777;}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to QFest!</h1>

	<div id="body">
		<p>Automate your event management</p>
		<hr style="border-top: medium none; border-bottom: medium dashed rgb(204, 204, 204);">

		<h2> Login to <a href='admin'>Admin </a> page</h2>
		<h2> Go to <a href='online_reg'>Online Registration</a> page</h2>
		<p>Embed the online registration page:</p>
		<code>&lt;iframe src='<?php echo base_url(); ?>online_reg'&gt;&lt;/iframe&gt;</code>
<div id='creds'>

		<p>Update access credentials</p>
<?php echo form_open(base_url().uri_string(),array('id'=>'edit-event','name'=>'edit-event', 'class'=>'style-form')); ?>
<b style="color:red"><?php echo $error; ?></b><br>
<label for="usr">new Username:</label><input type="text" name="username" value="" id='usr'><br>
<label for="pass">new Password:</label><input type="password" name="password" value="" id='pass'><br>
<label for="mast">Enter Master Password</label><br><input type="password" name="master" value="" id='mast'>
<button>Save</button>
</form>
</div>
		<hr style="border-top: medium none; border-bottom: medium dashed rgb(204, 204, 204);">
<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>QFest is built upon CodeIgniter. </p>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
		
	</div>

</div>
</body>
</html>