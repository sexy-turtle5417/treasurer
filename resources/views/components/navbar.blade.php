<div class="navbar bg-base-300 shadow-sm">
    <div class="flex-1">
        <a class="btn btn-ghost text-xl text-info">treasurer</a>
    </div>
    <div class="flex gap-2">
        <div class="dropdown dropdown-end">
            @if ($avatar = Auth::user()->avatar)
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle bg-base-100 avatar">
                    <div class="w-10 rounded-full ">
                        <img src="{{ asset('storage/' . $avatar) }}" alt="">
                    </div>
                </div>
            @else
                <div tabindex="0" role="button"
                    class="btn btn-ghost btn-circle bg-base-100 avatar avatar-placeholder">
                    <div class="w-10 rounded-full ">
                        <span class="font font-bold">{{ Auth::user()->name[0] }}</span>
                    </div>
                </div>
            @endif

            <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-200 rounded-none z-1 mt-3 w-52 p-2 shadow">

                <div class="font-medium text-xs">
                    <div>
                        <div class="mb-6 p-3">
                            <div class="text text-info mb-2">LOGGED IN AS</div>
                            <div>{{ Auth::user()->name }}</div>
                            <div class="opacity-50">{{ Auth::user()->email }}</div>
                        </div>
                    </div>


                    <li>
                        <a class="justify-between" href="{{ route('users.show', [Auth::user()->id]) }}">
                            Profile
                        </a>
                    </li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <li><button>Logout</button></li>
                    </form>
                </div>

            </ul>
        </div>
    </div>
</div>
