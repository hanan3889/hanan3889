<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task manager</title>

    @include('front.partials.styles')
    @include('front.partials.scripts')
    @include('front.partials.header')
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Welcome in my project Cube</h1>
        <div class="d-flex flex-column align-items-center">
            <p class="text-center my-3">Please connect or create an account to access all features</p>
            <button type="button" class="btn btn-primary my-4">
                <a class="text-decoration-none text-white" href="{{ route('login') }}">Login</a>
            </button>
            <button type="button" class="btn btn-success">
                <a class="text-decoration-none text-white" href="{{ route('register') }}">Create an account</a>
            </button>
        </div>
    </div>
    
    
    @include('front.partials.footer')
</body>

</html>