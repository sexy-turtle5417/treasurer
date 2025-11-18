<x-app>
    <div class="min-h-screen bg-base-300 grid place-items-center">
        <div class="w-1/3  bg-base-100 shadow p-6">
            <form action="">
                <div class="flex flex-col gap-3">

                    <div>
                        <label for="username" class="font-bold label text-sm">USERNAME*</label>
                        <input id="username" type="text" class="input rounded-none w-full border-0 bg-base-300">
                    </div>

                    <div>
                        <label for="password" class="font-bold label text-sm">PASSWORD*</label>
                        <input id="password" type="password" class="input rounded-none w-full border-0 bg-base-300">
                    </div>

                    <div>
                        <label for="password" class="font-bold label text-sm">CONFIRM PASSWORD*</label>
                        <input id="password" type="password" class="input rounded-none w-full border-0 bg-base-300">
                    </div>
                    <div class="mt-6">
                        <div>
                            <button class="btn w-full text-sm font-bold btn-primary rounded-none">Create
                                account</button>
                        </div>

                        @if ($userCount != 0)
                            <div class="divider text-sm opacity-60 font-bold">Already have an account?</div>
                            <div>
                                <a class="btn w-full text-sm font-bold btn-accent rounded-none">Log in</a>
                            </div>
                        @endif

                    </div>

                </div>
            </form>

        </div>
    </div>
</x-app>
