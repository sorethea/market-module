<div class="sidebar ">
    <!-- user information -->
    @include("market::components.profile-sidebar")
    <!-- user emnu navigation -->
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills">
                <x-market-nav-item url="market/message" name="Message" icon="chat-text"/>
            </ul>
        </div>
    </div>
</div>
