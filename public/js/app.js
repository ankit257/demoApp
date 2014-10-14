// Angular App
var gameApp = angular.module('gameApp', ['ui.router']);

gameApp.filter('unsafe', function($sce) {
    return function(val) {
        return $sce.trustAsHtml(val);
    };
});

gameApp.directive('ngEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if(event.which === 13) {
                scope.$apply(function (){
                    scope.$eval(attrs.ngEnter);
                });

                event.preventDefault();
            }
        });
    };
});

gameApp.controller('ChatController', function($scope){
	$scope.logarea = '';
	$scope.message = '';

	$scope.log = function(text){
			$scope.logarea = $scope.logarea + '\n' + text;
			$scope.$apply;
	}

	$scope.send = function(text){
		Server.send( 'message', text );
	}

	$scope.keypress = function(){
		if($scope.message!=''){
			$scope.log('You: ' + $scope.message);
			$scope.send($scope.message);
			$scope.message = '';
		}
	}

	$scope.log('Connecting...');
	Server = new FancyWebSocket('ws://127.0.0.1:9300');

	//Let the user know we're connected
	Server.bind('open', function() {
		$scope.log( "Connected." );
	});

	//OH NOES! Disconnection occurred.
	Server.bind('close', function( data ) {
		$scope.log( "Disconnected." );
	});

	//Log any messages sent from server
	Server.bind('message', function( payload ) {
		$scope.log( payload );
	});

	Server.connect();
});