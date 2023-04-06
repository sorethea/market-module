<div class="sidebar ">
    <!-- user information -->
    <x-market-nav-profile />
    <!-- user emnu navigation -->
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills">
                @foreach(config('market.mobile.sidebar') as $value)
                    <x-market-nav-item :name="$value['name']" :icon="$value['icon']" :url="$value['url']" />
                @endforeach
                <x-market-nav-logout />
            </ul>
        </div>
    </div>
</div>
