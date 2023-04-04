<div class="sidebar ">
    <!-- user information -->
    @include("market::components.profile-sidebar")
    <!-- user emnu navigation -->
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills">
                @foreach(config('market::mobile.sidebar') as $value)
                    <x-market-nav-item :name="$value->name" :icon="$value->icon" :url="$value->url" />
                @endforeach
            </ul>
        </div>
    </div>
</div>
