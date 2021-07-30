<x-app-layout>
    <div class="container">
        <h1 class="fw-bold">Akaun</h1>
        <h5><b>{{ Auth::user()->name }}</b>, {{ Auth::user()->email }} - <a href="{{ route('profile', Auth::user()) }}" class="air-link link-success">ke profil</a></h5>
        <div class="row justify-content-start mt-5">
            <div class="col-3">
                <div class="card card-link">
                    <div class="card-body p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#60b6b5" class="bi bi-person-lines-fill"
                            viewBox="0 0 24 24">
                            <path
                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                        </svg>
                        <h5 class="mt-4">Butiran peribadi ></h5>
                        <h6>Sertakan butiran peribadi dan cara bagaimana untuk kami hubungi anda</h6>
                        <a href="{{ route('account.personal') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffb400" class="bi bi-shield-fill-check"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z" />
                        </svg>
                        <h5 class="mt-4">Log masuk & keselamatan ></h5>
                        <h6>Kemaskini kata laluan anda dan selamatkan akaun anda.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
