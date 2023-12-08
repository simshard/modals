<div> 
    <form  x-data id ="delete-everything-form">
   <x-button class=" bg-blue-400 hover:bg-blue-600"   wire:click="$set('showModal' ,true)">
    Yes Delete it all
</x-button>


@if ($showModal)
    <x-confirmation-modal title="blah" body="blah" footer="blah">
        <x-slot:title >Are you sure?  </x-slot>
        <x-slot:body >You are losing your Vitamin C </x-slot> 
        <x-slot:footer > 
           <a href="" class="bg-gray-400 hover:bg-gray-600 text-white text-xs  rounded-md py-2 px-4">Cancel</a>
            <x-button class=" bg-blue-400 hover:bg-blue-600" wire:click="handle">Continue</x-button>
       </x-slot>   
    </x-confirmation-modal>
@endif

</form>
</div>