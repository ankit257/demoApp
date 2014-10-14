<!doctype html>
<html>
<head>
	<title>Angular WS Application</title>
	<meta charset='UTF-8' />
	<style>
		input, textarea {border:1px solid #CCC;margin:0px;padding:0px}

		#body {max-width:800px;margin:auto}
		#log {width:100%;height:400px}
		#message {width:100%;line-height:20px}
	</style>
</head>
<body ng-app="gameApp">
	<div id='body' ng-controller='ChatController'>
		<textarea id='log' name='log' readonly='readonly' ng-bind-html="logarea | unsafe"></textarea><br/>
		<input type='text' id='message' name='message' ng-model="message" ng-enter='keypress()' />
	</div>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.11/angular-ui-router.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/websocket.js"></script>
</body>
</html>
