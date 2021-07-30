<x-app-layout>
    <div class="container">
        <div class="row gx-5 justify-content-center">
            <div class="col-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="text-center mt-4">
                            <img src="{{ $user->gravatar }}" class="image-fluid rounded-circle"
                                alt="{{ $user->name }}" width="128">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <h2 class="fw-bolder">{{ $user->name }}</h2>
            </div>
        </div>
    </div>
</x-app-layout>
