<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') | Boutique Inventory</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    /* Critical Fixes */
    html, body {
      height: 100%;
      margin: 0;
      overflow: hidden; /* Prevents the whole page from scrolling */
    }

    .app-container.minimal-app {
      display: flex;
      height: 100vh; /* Exactly screen height */
      width: 100vw;
      overflow: hidden;
    }

    .content {
      flex: 1; /* Fills remaining width */
      height: 100vh;
      overflow-y: auto; /* This creates the scroll for the content ONLY */
      background-color: #f9f9f9;
      padding: 2.5rem 3rem;
      box-sizing: border-box;
    }
  </style>
</head>
<body>

  <div class="app-container minimal-app">
    
    {{-- Sidebar --}}
    @include('partials.sidebar')

    {{-- Main content area --}}
    <main class="content">
      @yield('content')
    </main>
    
  </div>

</body>
</html>