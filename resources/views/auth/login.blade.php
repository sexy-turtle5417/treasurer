<x-app>
    <div class="min-h-screen grid place-items-center  bg-base-300">
        <div class="w-1/3 bg-base-100  shadow rounded-none p-6">
            <form action="">
                <div class="flex flex-col gap-3">

                    <div>
                        <label for="username" class="font-bold label text-sm">SIGN IN WITH USERNAME</label>
                        <input id="username" type="text" class="input rounded-none w-full border-0 bg-base-300">
                    </div>

                    <div>
                        <label for="password" class="font-bold label text-sm">PASSWORD</label>
                        <input type="password" id="password"
                            class="input rounded-none w-full border-0 bg-base-300 font-bold">
                    </div>
                    <div>
                        <input id="checkbox" type="checkbox" class="checkbox checkbox-info rounded-none checkbox-sm  ">
                        <label for="checkbox" class="font-bold label text-sm">Remember me</label>
                    </div>
                    <div class="mt-1">
                        <div>
                            <button class="btn w-full text-sm font-bold btn-primary rounded-none">Sign
                                in</button>
                        </div>
                        <div class="divider text-sm opacity-60 font-bold">Don't have an account yet?</div>
                        <div>
                            <a class="btn w-full text-sm font-bold btn-accent rounded-none">Create account</a>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>
</x-app>
