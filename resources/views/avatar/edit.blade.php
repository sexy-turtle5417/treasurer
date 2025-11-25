<x-app>
    <x-navbar></x-navbar>
    <div class="min-h-screen place-items-center">
        <div class="bg-base-300 w-1/3 mt-20 shadow">
            <div class="flex justify-center p-10">
                <div class="avatar avatar-placeholder">
                    <div class="bg-neutral text-neutral-content w-40 rounded-full">
                        <span class="text-4xl">{{ Auth::user()->name[0] }}</span>
                    </div>
                </div>

            </div>
            <div class="flex justify-center pb-6">

                <form action="{{ route('avatar.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="file" class="file-input border-0 rounded-none" name="avatar" />
                    <div class=" flex justify-center mt-6">
                        <button class="btn btn-wide rounded-none btn-primary">CHANGE PHOTO</button>
                    </div>
                </form>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</x-app>
