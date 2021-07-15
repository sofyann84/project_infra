<!DOCTYPE html>
<html>

<head>
    <title>Project Infra</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Project Infra</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item{{ str_contains(request()->route()->getActionName(), 'Summary') ? ' active' : ''}}">
                        <a class="nav-link" href="/">Summary{!! str_contains(request()->route()->getActionName(), 'Summary') ? htmlspecialchars_decode(' <span class="sr-only">(current)</span>') : ''!!}</a>
                    </li>
                    <li class="nav-item{{ str_contains(request()->route()->getActionName(), 'Site') ? ' active' : ''}}">
                        <a class="nav-link" href="/sites">Site{!! str_contains(request()->route()->getActionName(), 'Summary') ? htmlspecialchars_decode(' <span class="sr-only">(current)</span>') : ''!!}</a>
                    </li>
                    <li class="nav-item{{ str_contains(request()->route()->getActionName(), 'Task') ? ' active' : ''}}">
                        <a class="nav-link" href="/tasks">Task{!! str_contains(request()->route()->getActionName(), 'Summary') ? htmlspecialchars_decode(' <span class="sr-only">(current)</span>') : ''!!}</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
    </div>

</body>

</html>