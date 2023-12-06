<x-layout>
    <div class="container max-w-2xl mx-auto bg-gray-300">
        <header class="bg-sky-300 p-4">
            <h1 class="font-bold text-white">My Site</h1>
        </header>
    
        <div class="grid grid-cols-12 p-4">
            <aside class="mr-6 col-span-3 text-sm">
                <ul class="space-y-4">
                    <li>Link 1</li>
                    <li>Link 2</li>
                    <li>Link 3</li>
                </ul>
            </aside>
    
            <main class="text-sm col-span-9">
                <p class="mb-4">
                    Exercitation commodo velit duis reprehenderit anim duis ullamco et ut cillum officia nostrud.
                </p>
                <p class="mb-4">
                    Pariatur eu ad ad dolor esse mollit sunt esse esse.
                </p>
                <p>
                    Eiusmod laborum duis et ipsum occaecat aliquip minim nulla consequat esse nisi voluptate.
                </p>
            </main>
        </div>
    
        <footer class="bg-sky-300 p-4 flex items-center justify-between text-xs text-white">
            <h5 class="text-xs">My Site</h5>
            <p>2021</p>
        </footer>
    </div>

{{-- Modal--}}
<x-confirmation-modal title="blah" body="blah" footer="blah">
     <x-slot:title > Are You Sure?  </x-slot>
     <x-slot:body >If you continue data will be lost</x-slot> 
     <x-slot:footer > 
        <x-button class="bg-gray-400 hover:bg-gray-600">Cancel</x-button>
         <x-button class=" bg-blue-400 hover:bg-blue-600">Continue</x-button>
    </x-slot>   
</x-confirmation-modal>


</x-layout>
