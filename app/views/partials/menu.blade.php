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
                <li [[ Request::is('/') ? ' class="active"' : '' ]]><a href="/">Home</a></li>
                <li [[ Request::is('todos') ? ' class="active"' : '' ]]><a href="/todos">Todos</a></li>
            </ul>
        </div>
    </div>
</div>