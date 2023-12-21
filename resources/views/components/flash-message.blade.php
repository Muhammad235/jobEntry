@if (session()->has('message'))
    <div x-data= "{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show" class="fixed top-0 bg-primary p-3 w-50 mx-auto">
        <p class="text-white text-center transform-translatex-1/2"><b>{{session('message')}}</b></p> 
    </div>
@endif

<script src="//unpkg.com/alpinejs" defer></script>
