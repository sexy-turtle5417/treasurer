<x-app>
    <div class="min-h-screen grid place-items-center">
        <div class="w-1/3 bg-base-300 p-10 shadow">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                @if ($userCount < 1)
                    <div class=" mb-6">
                        <div class="alert alert-info rounded-none">
                            <x-info-icon></x-info-icon>
                            <p class="text-xs font-medium text-left text-info-content">There are no accounts in the
                                system. Create the
                                first
                                admin account.</p>
                        </div>
                    </div>
                @endif
                <div class="flex flex-col gap-2">
                    <x-input name="email" id="email">
                        <label for="email" class=" font-medium text-info text-xs">SIGN UP WITH EMAIL</label>
                    </x-input>
                    <x-input name="name" id="name">
                        <label for="name" class=" font-medium text-xs">FULL NAME</label>
                    </x-input>
                    <x-input name="password" id="password" type="password">
                        <label for="password" class="text-xs font-medium">PASSWORD</label>
                    </x-input>
                    <x-input name="password_confirmation" id="password_confirmation" type="password">
                        <label for="password_confirmation" class="text-xs font-medium">CONFIRM PASSWORD</label>
                    </x-input>
                </div>
                <div class="place-items-center grid mt-6">
                    <button class="btn btn-primary rounded-none btn-wide">SIGN UP</button>
                </div>

                @if ($userCount > 0)
                    <div class="mt-6">
                        <p class="text-xs font-medium text-center">Already have an account? Sign in <a
                                href="{{ route('login') }}" class="link link-info">
                                here</a>.</p>
                    </div>
                @endif
            </form>
        </div>
    </div>

</x-app>
