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
      <div class="container max-w-2xl mx-auto bg-gray-300">
            <header class="bg-sky-300 p-4">
                <h1 class="font-bold text-white">My Site</h1>
            </header>
        
            <div class="grid grid-cols-12 p-4">
                <aside class="mr-6 col-span-3 text-sm">
                    <ul class="space-y-4">
                        <li>  <a href="/alpine" class="underline text-blue-500">Alpine widget examples</a></li>
                        <li>Link 2</li>
                        <li>Link 3</li>
                    </ul>
                </aside>
                <main class="text-sm col-span-9">
                  {{$slot}}
                </main>
            </div>
        
            <footer class="bg-sky-300 p-4 flex items-center justify-between text-xs text-white">
                <h5 class="text-xs">My Site</h5>
                <p>2021</p>
            </footer>
        </div>
         





    
        
      
    </body>
 </html>