<div class="card card-primary card-outline">

    <input type='hidden' autofocus type='text' id='member_id' value='' wire:model='member_id' />
    <script>
        function getmember() {

            document.querySelector('#member_id').value = {{ $mem_id }};

        }
    </script>

    <div class="card-header">
        <h5 class="m-0">Featured</h5>
    </div>

    <div class="card-body" wire:poll.10000ms>

        <h6 class="card-title">inbox الرسائل</h6>
        <br />
        <br />

        @foreach ($orders as $orders_item)
            <div class="post">
                <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../Front/IMG/{{ $orders_item->profile_IMG }}"
                        alt="user image">
                    <span class="username">
                        <a href="#"> {{ $orders_item->username }}</a>
                    </span>
                    <span class="description"> {{ $orders_item->Time }}</span>
                </div>
                <!-- /.user-block -->
                <p>
                    {!! $orders_item->massage !!}
                </p>


            </div>
        @endforeach

    </div>


    {{-- <input type="hidden" name="member_id" value="{{ @$_POST['member_id'] }}"> --}}
</div>
