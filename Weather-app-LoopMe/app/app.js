var app = angular.module('weatherApp', ['angular-loading-bar']);

app.controller('weatherControl', function($http,$scope){
	$scope.items = {};
    $scope.assetName = '';
	$scope.totalCount = {};
    $scope.date = new Date();
	$scope.searchWeather = function(){
		var searchTerm = $scope.assetName;
		$http.get('http://api.openweathermap.org/data/2.5/find?q='+searchTerm+'&cnt=5&units=metric&APPID=300f94d83ebb6e6b302eaa46a006c6cb').success(function(data){
			$scope.items = data.list;
			// $scope.totalCount = data.list;
		});
        $http.get('http://api.openweathermap.org/data/2.5/forecast?q='+searchTerm+'&cnt=5&units=metric&APPID=300f94d83ebb6e6b302eaa46a006c6cb').success(function(data){
            $scope.totalCount = data.list;
        });



	};
});
// api.openweathermap.org/data/2.5/forecast/daily?q=London&mode=xml&units=metric&cnt=5
// api.openweathermap.org/data/2.5/weather?q=London,uk&callback=test
// api.openweathermap.org/data/2.5/forecast?q=London
// http://api.openweathermap.org/data/2.5/forecast?q='+searchTerm+'&type=like&sort=population&cnt=5&units=metric&APPID=300f94d83ebb6e6b302eaa46a006c6cb'
