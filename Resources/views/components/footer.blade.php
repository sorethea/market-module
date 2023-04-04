<footer class="footer">
    <div class="container">
        <ul class="nav nav-pills nav-justified">
            @foreach(config('market.mobile.sidebar') as $value)
                <x-market-nav-item :name="$value['name']" :icon="$value['icon']" :url="$value['url']" />
            @endforeach
        </ul>
    </div>
</footer>
