<x-app>
    <x-navbar></x-navbar>
    <div class="min-h-screen place-items-center">

        <div class="min-w-1/2 mt-20">
            <div class="flex gap-3">
                <div>
                    <div class="bg-base-300 shadow p-6 grid place-items-center flex-1">
                        <div>
                            @if ($avatar = Auth::user()->avatar)
                                <div class="avatar">
                                    <div class="w-32 rounded-full">
                                        <img src="{{ asset('storage/' . $avatar) }}" />
                                    </div>
                                </div>
                            @else
                                <div class="avatar avatar-placeholder">
                                    <div class="bg-neutral text-neutral-content w-32 rounded-full">
                                        <span class="text-3xl">{{ Auth::user()->name[0] }}</span>
                                    </div>
                                </div>
                            @endif

                        </div>
                        <div class="mt-3">
                            <a href="" class="text-xs link link-info font-medium"> CHANGE PHOTO </a>
                        </div>
                    </div>
                </div>

                <div class="flex-3">
                    <div class="bg-base-300 shadow-sm">
                        <div class="">
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <tbody class="text text-xs font-medium">
                                        <tr>
                                            <th>Email</td>
                                            <td class="opacity-45">{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <th class="w-1">Name</td>
                                            <td class="opacity-45">{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            @if ($user->is_admin)
                                                <td class="opacity-45">Admin</td>
                                            @else
                                                <td class="opacity-45">Non-Admin</td>
                                            @endif
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="p-3">
                                    <a class="btn btn-primary btn-sm rounded-none w-32">EDIT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>
</x-app>
