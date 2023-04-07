<div>
        <form class="needs-validation" wire:submit.prevent="submit" novalidate>

        <div class="row h-100">
            <div class="col-11 col-sm-11 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center py-4">
                <h2 class="mb-4"><span class="text-secondary fw-light">Sign In</span></h2>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" value="" id="email" placeholder="Username" wire:model="email">
                    <label class="form-control-label" for="email">Username</label>

                </div>
                @error('email')
                <div class="alert small alert-danger">
                    {{$message}}
                </div>
                @enderror
                <div class="form-group form-floating mb-3">
                    <input type="password" class="form-control " id="password" placeholder="Password" wire:model="password">
                    <label class="form-control-label" for="password">Password</label>
                </div>
                @error('password')
                <div class="alert small alert-danger">
                    {{$message}}
                </div>
                @enderror

                @if (session()->has('invalid-credentials'))
                    <div class="alert small alert-danger">
                        {{ session('invalid-credentials') }}
                    </div>
                @endif
            </div>
            <div class="col-11 col-sm-11 mt-auto mx-auto py-4">
                <div class="row">
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <button type="submit" class=" btn btn-default btn-lg btn-rounded shadow-sm">Sign In</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
</div>
