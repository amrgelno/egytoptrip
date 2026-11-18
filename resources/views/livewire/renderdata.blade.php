<div>

    @foreach ($Admin as $Admins)
        <li> {{ $Admins->username }} </li>
        <li> {{ $Admins->email }} </li>
    @endforeach


    <input type='text' wire:model ='name'>


    <button wire:click='store'>Store</button>

</div>
