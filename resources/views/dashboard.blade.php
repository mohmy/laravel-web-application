<x-app-layout>
    <div class="container">
        <h1 class="fw-bold">Dashboard saya</h1>
        <p>{{ auth()->user()->gravatar }}</p>
        <p>{{ auth()->user()->slug }}</p>
    </div>
</x-app-layout>
