@if ($flash = session('flash-message'))
    <div class="flash-message alert alert-success fade show h5" role="alert">
        {{ $flash }}
    </div>
    <style type="text/css">
        .flash-message {
            position: absolute;
            bottom: 20px;
            right: 20px;
            z-index: 10;
            animation: flash-message 3s forwards;
        }

        @keyframes flash-message {
            0%   {opacity: 0; display:none;}
            10%   {opacity: 0; display:none;}
            12%   {opacity: 1;}
            85%   {opacity: 1;}
            100% {opacity: 0; display:none;}
        }
    </style>
@endif