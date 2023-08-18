<style>
    .post-grid {
        margin-top: 5vh;
        display: grid;
        grid-template-columns: 60% 40%; 
        grid-template-rows: min-content; 
        position: relative;
      }

</style>

<x-app-layout>
    <x-slot name="header">
            <div class="post-grid">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
                <a href="homepage" class="font-semibold text-xl text-gray-800 leading-tight">
                    Homepage
                </a>    
            </div>  
        
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
