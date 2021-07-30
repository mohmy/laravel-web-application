<x-app-layout>
    <div class="container">
        <h1 class="fw-bold">Dashboard saya</h1>
        <p>{{ auth()->user()->gravatar }}</p>
        <p>{{ auth()->user()->slug }}</p>
        <div class="" style="height: 10000px"></div>
        <div class="" data-kt-scroll-toggle>
            <a href="/dashboard">Anchor Link</a>
        </div>
    </div>
</x-app-layout>
