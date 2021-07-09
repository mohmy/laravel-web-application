<x-app-layout>
    <div class="container">
        <div class="row gx-5 justify-content-center">
            <div class="col-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="text-center mt-4">
                            <img src="{{ auth()->user()->gravatar }}" class="image-fluid rounded-circle"
                                alt="{{ auth()->user()->name }}" width="128">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <h2 class="fw-bolder">Dashboard</h2>
            </div>
        </div>
    </div>
</x-app-layout>
