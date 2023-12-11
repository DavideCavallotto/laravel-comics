<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Comics</title>
</head>
<body>
    @include('partials.header')
 
    <main>        
        <div class="cards-container">
            @yield('content')
        </div>        
    </main>

    @include('partials.footer')
    
</body>
</html>
<style>   

  
</style>

