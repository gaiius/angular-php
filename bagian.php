<html ng-app="cutiApp">
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/JQuery/jquery.min.js"></script>
<script src="lib/angular/angular.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="container wrapper" ng-controller="BagianController">
<h1></h1>
<div ng-include src="'template/header.php'"></div>
<br>
<br>
<nav class="navbar navbar-default">
<div class="navbar-header">
<div class="alert alert-default navbar-brand search-box">
<button class="btn btn-danger" ng-show="show_form" ng-click="formToggle()">Input Baru <span class="gylphicon gylphicon-plus"
aria-hidden="true"></span></button>

</div>
<div class="alert alert-default input-group search-box">
<span class="input-group-btn">
<input type="text" class="form-control" ng-model="search_query">
</span>
</div>
</div>

</nav>
<div class="col-md-6 col-md-offset-3">
<div ng-include src="'template/inputbagianForm.php'"></div>
<div ng-include src="'template/editbagianForm.php'"></div>
</div>

<table class="table table-responsive">
<tr>
	<td>Id</td>
	<td>Nama Bagian</td>
	<td colspan="2">Action</td>
	
</tr>
<tr ng-repeat="x in details|filter:search_query">
<td>{{ x.id }}</td>
<td>{{ x.nama }}</td>
<td><button class="btn btn-warning" ng-click="editData(x.id)" title="Edit">Edit</button></td>
<td><button class="btn btn-danger" ng-click="deleteData(x.id)" title="Hapus">Hapus</button></td>
</tr>


</table>

</div>
</body>
<script src="controller/bagianController.js"></script>
</html>


