<div wire:poll.10000ms>
    <img src="../Front/IMG/{{ auth::guard('member')->user()->prof_pic }}" class="user-image img-circle elevation-2"
        alt="User Image">
    <span class="d-none d-md-inline">{{ auth::guard('member')->user()->username }}</span>
</div>
