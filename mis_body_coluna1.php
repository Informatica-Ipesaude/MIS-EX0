<div class="col bg-primary">

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <h1>Referências úteis</h1>
    <div class="row">

        <div ng-app="">
            <h2>Nome: <input type="text" ng-model="nn"></h2>
            <!-- ng-bind e {{}} são = -->
            <p ng-bind="nn"></p>
            <p>Nome: {{nn}}</p>
        </div>


        <h1>****************************</h1>

        <div ng-app="myApp" ng-controller="customersCtrl">

            <table>
                <tr ng-repeat="x in names">
                    <td>{{ x.Name }}</td>
                    <td>{{ x.Country }}</td>
                </tr>
            </table>

        </div>

        <script>
            var app = angular.module('myApp', []);
            app.controller('customersCtrl', function($scope, $http) {
                $http.get("customers.php")
                    .then(function(response) {
                        $scope.names = response.data.records;
                    });
            });
        </script>


        <h1>****************************</h1>

        <!DOCTYPE html>

<div ng-app="myApp" ng-controller="myCtrl">

<select ng-model="selectedName" ng-options="x for x in names">
</select>

</div>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.names = ["Emil", "Tobias", "Linus"];
});
</script>






        <h1>****************************</h1>




        
    </div>
</div>