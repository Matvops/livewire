<div>
    
    <form wire:submit="submitForm">
        <input wire:model="name" type="text" name="username" placeholder="USERNAME">
        <input wire:model="email" type="email" name="email" placeholder="EMAIL">
        <button class="btn btn-secondary px-2">SUBMIT</button>
        <p>NOME: <strong>{{ $name }}</strong></p>
        <p>EMAIL: <strong>{{ $email }}</strong></p>
    </form>
</div>
