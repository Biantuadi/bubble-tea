<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <header class="welcome">
        <div class="logo">
            <a href="/"><img src={{ asset('img/logo.png') }} alt="logo"></a>
        </div>
    
        <h1>BubbleMyTea</h1>
    </header>

    <div id="loginFormContainer">
        {{ $slot }}
    </div>

</div>
