<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alpine examples</title>
    @vite('resources/css/app.css')   
    {{-- alpine --}}
    <script defer src=
    "https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js">
    </script>
</head>
<body class="bg-gray-200">
    <div class="container  mx-auto  py-4 bg-gray-100">
        <header class="bg-sky-300 p-4 mb-2">
            <h1 class="text-center" x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
        </header>
        <section>
            <h1 class="mx-3 mt-4">Counter</h1>
            <div class="bg-gray-200 m-4 p-2 shadow-lg shadow-neutral-300">
            <div x-data="{ count: 0 }">
                <x-button class="bg-yellow-400
                 hover:bg-lime-400
                 text-red-400
                 text-3xl
                 shadow-lg shadow-neutral-300"
                 x-on:click="count++"
                >+</x-button>

                <span x-text="count"></span>

                <x-button class="bg-yellow-400
                hover:bg-lime-400
                text-red-400
                text-3xl
                shadow-lg shadow-neutral-300"
                x-on:click="count--"
               >-</x-button>
            </div>
        </div>
        </section>
        <hr/>
        <section>
            <h1 class="mx-3 mt-4">Dropdown</h1>
            <div class="bg-gray-50 m-2 p-2 shadow-lg shadow-neutral-300">
            <div x-data="{ open: false }">
                <x-button class="bg-sky-400
                hover:bg-indigo-400
                text-red-800
                text-xl
                shadow-lg
                 shadow-neutral-300"
                 @click="open = ! open">Toggle</x-button>
             
                <div class="bg-purple-100 m-2 p-2
                shadow-lg
                shadow-neutral-300 " 
                    x-show="open" 
                    @click.outside="open = false"
                    >
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum perspiciatis distinctio qui minima repellat vel voluptas. Quis laudantium, debitis quasi aliquam sapiente, similique explicabo rerum corporis corrupti incidunt quo esse!
                </div>
            </div>
        </div>
        </section>
        <hr>
        <section>
            <h1 class="mx-3 mt-4">Search & Filter</h1>
            <div class="bg-gray-50 m-2 p-2 shadow-neutral-300" 
                 
                   x-data="{
                       search: '',
                       items: ['foo','fah', 'bar', 'baz','beep','beer'],
                       get filteredItems() {
                           return this.items.filter(
                               i => i.startsWith(this.search)
                           )
                       }
                   }" >
                   <div  class="bg-gray-100
                   m-2 p-2
                    shadow-neutral-500 shadow-md
                     h-auto " >
                   <input class="mx-6" x-model="search" placeholder="Search...">
                   <ul  class="bg-gray-50 m-2 p-2" >
                       <template class="bg-gray-50 m-2 p-2" x-for="item in filteredItems" :key="item">
                           <li x-text="item"></li>
                       </template>
                   </ul>
               </div>
             
        </div>
        </section>
    </div>
</body>
</html>