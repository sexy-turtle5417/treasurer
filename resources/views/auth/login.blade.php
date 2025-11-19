<x-app>
    <div class="min-h-screen flex">
        <div class="flex-1 place-items-center">
            <div class="ml-40 mt-40">
                <h1 class="text text-6xl font-medium text-center text-info">treasurer</h1>
                <div class="mt-2">
                    <p class="text text-xs font-medium text-center">Keep <span class="font-bold text-info">track</span> of
                        all your
                        <span class="font-bold text-info">expenses</span>
                    </p>
                </div>

            </div>

        </div>
        <div class="flex-1 grid place-items-center">
            <div class="p-10 bg-base-300 shadow w-2/3">
                <form action="">
                    @csrf
                    <div class="flex flex-col gap-2">
                        <x-input name="email" id="email">
                            <label for="email" class=" font-medium text-info text-xs">SIGN IN WITH EMAIL</label>
                        </x-input>
                        <x-input name="password" id="password" type="password">
                            <label for="password" class="text-xs font-medium">PASSWORD</label>
                        </x-input>
                        <div class="flex gap-2">

                            <input type="checkbox" class="checkbox checkbox-xs checkbox-primary border-0 bg-primary"
                                name="remember_me" id="remember_me">
                            <label for="remember_me" class="font-medium text-xs label">REMEMBER ME</label>
                        </div>
                        <div>
                            <div class="place-items-center grid mt-6">
                                <button class="btn btn-primary rounded-none btn-wide">SIGN IN</button>
                            </div>
                        </div>
                        <div class="mt-6">
                            <p class="text text-xs font-medium text-center">Don't have an account? Sign up <a
                                    class="link link-info" href="{{ route('users.create') }}">here</a>.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-app>
