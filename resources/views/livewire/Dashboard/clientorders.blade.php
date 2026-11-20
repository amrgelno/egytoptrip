<div id="Box-Anyltics" wire:poll.2000ms>

    <div class="card-body p-0">
        <div class='card card-primary card-outline'>

            <div class="table-responsive col-lg-12">
                <table border="1" class="table table-striped projects ">
                    <thead>
                        <tr>

                            <th> # </th>
                            <th> username </th>
                            <th> email </th>
                            <th> mobile </th>
                            <th> Distantion </th>
                            <th> country </th>
                            <th> facebook </th>
                            <th> instgram </th>
                            <th> olx </th>
                            <th> orders </th>

                        </tr>

                    </thead>
                    @php   $i=0;   @endphp


                    @foreach ($memberorders as $memberitem)
                        <tbody>
                            <tr>
                                <td> {{ ++$i }} </td>
                                <td> {{ $memberitem->username }} </td>
                                <td> <a href="mailto:{{ $memberitem->email }}">{{ $memberitem->email }} </a> </td>
                                <td> <a href="https://api.whatsapp.com/send?phone={{ $memberitem->mobile }}">{{ $memberitem->mobile }}
                                    </a> </td>
                                <td> {{ $memberitem->Distantion }} </td>
                                <td> {{ $memberitem->country }} </td>
                                <td> <a href="mailto:{{ $memberitem->facebook }}">{{ $memberitem->facebook }} </a>
                                </td>
                                <td> <a href="mailto:{{ $memberitem->instgram }}">{{ $memberitem->instgram }} </a>
                                </td>
                                <td> <a href="mailto:{{ $memberitem->olx }}">{{ $memberitem->olx }} </a> </td>
                                <td> {{ $memberitem->massage }} </td>
                                <td>

                                    <form action="{{ route('Reorder') }}" method="POST">

                                        @csrf
                                        @METHOD('POST')

                                        <input type="hidden" name='member_id' value="{{ $memberitem->sender_id }}">


                                        <input type="submit" value="ReorderByEmail">


                                    </form>
                                </td>

                            </tr>
                        </tbody>
                    @endforeach

                </table>

            </div>

        </div>
    </div>

</div>
