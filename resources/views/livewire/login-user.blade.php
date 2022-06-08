<div>
     

         <main class="form-signin">
          <form wire:submit.prevent="loginUser" class="text-center">
            <img style="margin-left: -20px;" class="mb-4 site-logo btn-outline-secondary" src="{{ asset('assets/images/expat-logo.png') }}" alt="" width="72" height="57">
           
              <div>
                    @if (session()->has('message_new_user'))

                        <div class="alert alert-success">

                            {{ session('message_new_user') }}

                        </div>

                    @endif

                    @if (session()->has('message_new_password'))

                        <div class="alert alert-success">

                            {{ session('message_new_password') }}

                        </div>

                    @endif

                    @if (session()->has('message_new_password'))

                        <div class="alert alert-danger">

                            {{ session('message_invalid_password') }}

                        </div>

                    @endif

                </div>

            <div class="form-floating">
              <input type="email" wire:model="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address
              @error('email')<span class="error">*</span> @enderror
              </label>
            </div>
            <div class="form-floating">
              <input type="password" wire:model="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password
               @error('password')<span class="error">*</span> @enderror
              </label>
            </div>

            
           
            <button class="w-100 btn btn-outline-secondary btn-lg btn-site-primary  mt-4 ">
              <div wire:loading wire:target="loginUser" class="spinner-grow text-dark" role="status">
                <span class="sr-only">Loading...</span>
              </div> 
           Sign in

           </button>
           <!--  <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> -->
          </form>
        </main>
</div>
