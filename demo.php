<!doctype html>
<html ng-app>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.min.js"></script>
<script src="todo.js"></script>
<style>
	body	{font-size:32px;}
	img 	{width:700px;height:700px;}
	.graph 	{float:left;padding:20px;border:0px solid #000;}
</style>
</head>


<div ng-controller="TodoCtrl">

	<!-- Controls -->
	<div style="float:left;padding:20px;margin-left:10px;">

		<form ng-submit="addTodo()">
			<input type="text" ng-model="todoText" />
			<input class="btn-primary" type="submit" value="add" style="font-family:Arial,helvetica,sans-serif;font-size:20px;"/>
		</form>

		<span class="status">Displaying {{remaining()}} of {{todos.length}}</span>


		<div ng-repeat="todo in todos">
			<input type="checkbox" ng-model="todo.done">
			<span class="done-{{todo.done}}">{{todo.text}}</span>
		</div>

		<div>
		<a href="#" ng-click="archive()">Remove</a>
		</div>

	</div>

	<!-- Display Graph -->
	<div class="graph">
		<img src="https://chart.googleapis.com/chart?cht=gv:neato&chl=digraph{{getGraph()}}&chs=500x500" />
	</div>

</div>

</body>
</html>




