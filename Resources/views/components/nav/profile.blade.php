@if(Auth::user())
    <div class="row">
        <div class="col-12 profile-sidebar">
            <div class="row">
                <div class="col-auto">
                    <figure class="avatar avatar-100 rounded-20 shadow-sm">
                        <img src="{{Auth::user()->getFirstMediaUrl("avatar")}}" alt="">
                    </figure>
                </div>
                <div class="col px-0 align-self-center">
                    <h5 class="mb-2">{{Auth::user()->name}}</h5>
                    <p class="text-muted size-12">New York City,<br />United States</p>
                </div>
            </div>
        </div>
    </div>
@endif

