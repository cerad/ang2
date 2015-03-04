<?php 
  $title = 'Ang 2 Form 3';
  $base = '/forms/form3/';
?>
<!DOCTYPE html>
<html ng-app="myApp" ng-strict-di>
<head>
  <title><?php echo $title; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <base href="<?php echo $base; ?>">
  <link rel="stylesheet" type="text/css" href="app.css">
</head>
<body ng-include="'app.html'">
<script src="/bower_components/angular/angular.js"></script>
<script src="app.js"></script>
</body></html>