var cutiApp=angular.module('cutiApp',[]);
cutiApp.controller("BagianController",['$scope','$http',function($scope,$http){
	//pengambilan data 
	
	getInfo();
	function getInfo(){
		$http.get('backend/bagian/tampil_bagian.php').then(function succesCallback(response){
			$scope.details=response.data;
			
		});
	}
	//menampilkan button 
	$scope.show_form =true;
	$scope.bagianInfo = {};
	
	//ini untuk toogle
	$scope.formToggle = function () {
		$('#empForm').slideToggle();
		
	}
	
	
	
	
	
	
	
}]);