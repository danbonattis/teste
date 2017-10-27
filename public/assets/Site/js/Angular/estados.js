var estadosModulo = angular.module('estadosModulo', []);

estadosModulo.controller('estadosController', function($scope, $http){
	$scope.estados = [];

	// Função para fazer a requisição para o servidor
	$scope.envia = function(){
		var nome = $scope.estado.nome;
		var id = $scope.estados.length + 1;

		var config = {
			method: 'GET',
			url: '/timezone/br/'+nome+'/'+id
		};

		$http(config).then(function(response){
			$scope.estados.push(response.data);

		}, function(response){
			alert(response.data);
		});
	}
});