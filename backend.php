<html ng-app="tutorialApp">
<head>
  <meta charset="utf8" />
  <title>AngularJS Tutorial</title>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <input type="text" ng-model="search">
    <p ng-show="search">Du suchst gerade nach: {{search}}</p>

    <div class="col-md-4">
      <h2>Seiten</h2>
      <table class="table" ng-controller="ArticlesCtrl">
        <tr ng-repeat="article in articles | filter:search">
          <td>{{article.id}}</td>
          <td>{{article.name}}</td>
          <td>{{article.price}}</td>
        </tr>
      </table>
    </div>
    <div class="col-md-8">
      <h2>Content</h2>
    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.js"></script>
  <script src="app.js"></script>
</body>
</html>
