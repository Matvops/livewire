<div class="d-flex justify-content-around gap-5 my-2">
    
    <button wire:click="increment" class="btn btn-primary px-5">Increment</button>
    <h1>Count: {{ $number }}</h1>
    <button wire:click="decrement" class="btn btn-primary px-5">Decrement</button>
</div>
