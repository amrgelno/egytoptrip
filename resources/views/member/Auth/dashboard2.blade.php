@if (auth::guard('member')->check())
    @extends('member.Auth.cmstheme')


    @section('ClientprofAvater')

        @livewire('clientprof-avater')

    @stop



    @section('FavAds')

        @livewire('favads')

    @stop


    @section('Marketemail')

        @include('member.Auth.ClientMssginbox')

    @stop


    @section('ProfileSetting')

        @livewire('profilesetting')

    @stop
@else
    {{--  without middleware checkdata auth->guard('admin')==auth::guard('admin')  --}}
    <ul>

        <script>
            alert('you must login first');
        </script>

        <meta http-equiv='refresh' content='0,url={{ route('member.Login') }}' />
@endif
