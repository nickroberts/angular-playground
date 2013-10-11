@section('content')
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Angular Development</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="starter-template">
        <h1>Hello, {{yourName}}!</h1>
        <hr>
        <label>Name:</label>
        <input type="text" ng-model="yourName" placeholder="Enter a name here">
    </div>
</div>
@stop