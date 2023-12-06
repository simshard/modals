<!DOCTYPE html>

<html> 
 <head>
      <title>Modals</title>
 
      @vite('resources/css/app.css')   
      {{-- alpine --}}
      <script defer src=
      "https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js">
      </script>
 </head>
    <body class="bg-gray-100">
       
    
          {{$slot}}
    
      
    </body>
 </html>