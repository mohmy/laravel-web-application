@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="fw-bold">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <div class="text-muted">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    </div>
@endif
