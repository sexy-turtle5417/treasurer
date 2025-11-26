<x-app>
    <x-navbar></x-navbar>
    <div class="min-h-screen place-items-center">
        <div class="bg-base-300 w-1/3 mt-20 shadow">
            <div class="flex justify-center p-10">
                @if ($avatar = Auth::user()->avatar)
                    <div>
                        <div class="avatar">
                            <div class="w-40 rounded-full">
                                <img id="current-avatar" src="{{ asset('storage/' . Auth::user()->avatar) }}" />
                                <img class="hidden" id="new-avatar" src="" />
                            </div>
                        </div>
                    </div>
                @else
                    <div>
                        <div class="avatar avatar-placeholder" id="avatar-placeholder">
                            <div class="bg-neutral text-neutral-content w-40 rounded-full">
                                <span class="text-4xl">{{ Auth::user()->name[0] }}</span>
                            </div>
                        </div>
                        <div class="avatar hidden" id="new-avatar-container">
                            <div class="w-40 rounded-full">
                                <img id="new-avatar" src="" />
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="flex justify-center pb-6">

                <form action="{{ route('avatar.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="file" class="file-input border-0 rounded-none text-xs font-medium" name="avatar"
                        id="fileInput" accept="image/*" />

                    <div class=" flex justify-center mt-6">
                        <button class="btn btn-wide rounded-none btn-primary font-medium text-xs">CHANGE PHOTO</button>
                    </div>
                </form>
            </div>
            @if ($errors->any())
                <div class="mt-4">
                    <div class="flex flex-col gap-2 pl-3 pr-3 pb-3">
                        @foreach ($errors->all() as $error)
                            <div role="alert" class="alert alert-error alert-soft">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ $error }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </div>
    <script>
        const fileInput = document.getElementById('fileInput');
        const newAvatar = document.getElementById('new-avatar');
        const currentAvatar = document.getElementById('current-avatar');
        const avatarPlaceholder = document.getElementById('avatar-placeholder');
        const newAvatarContainer = document.getElementById('new-avatar-container');

        fileInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    newAvatar.src = e.target.result;
                    newAvatar.classList.remove('hidden');

                    // Hide the current avatar or placeholder
                    if (currentAvatar) {
                        currentAvatar.classList.add('hidden');
                    }
                    if (avatarPlaceholder) {
                        avatarPlaceholder.classList.add('hidden');
                        newAvatarContainer.classList.remove('hidden');
                    }
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-app>
