<span>
    <button wire:click="sub"> - </button>
    <span id="boxcounter">

        @if ($num <= 10 && $num > 0)
            {{ $num }}
        @elseif($num <= 0)
            0
        @elseif($num > 10)
            10
        @endif

    </span>
    <button wire:click="add"> + </button>
</span>
