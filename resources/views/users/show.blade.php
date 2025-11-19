<x-app>
    <x-navbar></x-navbar>
    <div class="min-h-screen grid place-items-center">
        <div class="bg-base-300 min-w-1/3 min-h-3/4 shadow">

            <form action="{{ route('avatar-upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="file" class=" file-input" name="avatar">
                <button class="btn btn-primary">Upload</button>
            </form>

        </div>
    </div>
</x-app>
