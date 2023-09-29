
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="style.css">
        <!-- Fontawesome CDN Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
/* Style for the parent container */
.container {
  position: relative; /* Establish positioning context for children */
}

/* Style for the background container */
.background-container {
  background-color: #e0e0e0; /* Set a background color for the background container */
  padding: 20px; /* Add some padding for visibility */
}

/* Style for the overlay container */
.overlay-container {
  background-color: rgba(255, 255, 255, 0.5); /* Use rgba with an alpha value (0.5 for 50% transparency) */
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

 </style>
        
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

           
            <main>
              <div class="container">
                
            <div class="background-container">
    <!-- Content of the background container -->
    <h1>This is the background container</h1>
    <p>Some content here...</p>
  </div>

  <div class="overlay-container">
    <!-- Content of the overlay container -->
    <h2>This is the overlay container</h2>
    <p>Overlay content goes here...</p>
  </div>
</div>
            </main>
        </div>
                
        @stack('modals')
        @livewireScripts
    </body>
</html>
