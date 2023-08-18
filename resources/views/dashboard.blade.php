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
            <h2>
                <a class="font-semibold text-xl text-gray-800 leading-tight" href="homepage" class="btn btn-primary my-2" > Homepage</a>
            </h2>           
        </div>  
    </x-slot>

</x-app-layout>
