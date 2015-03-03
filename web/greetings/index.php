<?php 
  $title = 'Ang 2 Greetings';
  $base = '/greetings/';
?>
<!DOCTYPE html>
<html ng-app="myApp">
<head>
  <title><?php echo $title; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <base href="<?php echo $base; ?>">
  <script src="/bower_components/angular/angular.min.js"></script>
  <script src="app.js"></script>
</head>
<body>
    
<div ng-controller="GreetingController">
  {{ greeting }}<br />
  Two times <input ng-model="num"> equals {{ double(num) }}
</div>

</body>
</html>
