@section('content')
<h1>Hello, {{yourName}}!</h1>
<hr>
<label>Name:</label>
<input type="text" ng-model="yourName" placeholder="Enter a name here">
@stop