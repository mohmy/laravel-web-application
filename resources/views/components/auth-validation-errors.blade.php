@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="fw-bold">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <div class="">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    </div>
@endif
