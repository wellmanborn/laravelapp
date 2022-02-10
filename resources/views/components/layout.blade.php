<!DOCTYPE html>
<html lang="en">
<x-head></x-head>
<body>
<x-sidebar></x-sidebar>
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <x-header></x-header>
    <div class="body flex-grow-1 px-3">
        <div class="container">
            <div class="card mb-4">
                <div class="card-header">
                    {{ $pagehead }}
                </div>
                <div class="card-body">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</div>
<x-scripts></x-scripts>
</body>
</html>
