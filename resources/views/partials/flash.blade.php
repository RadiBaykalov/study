@if ($flash = session('flash-message'))
    <div class="flash-message alert alert-success fade show" role="alert">
        {{ $flash }}
    </div>
    <style type="text/css">
        .flash-message {
            position: absolute;
            bottom: 20px;
            right: 20px;
            z-index: 10;
        }
    </style>
    <script type="text/javascript">
        window.onload = setTimeout(function() {
                $('.flash-message').alert('close');
        }, 3000);
    </script>
@endif