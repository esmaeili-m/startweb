<div>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>صفحه اصلی</title>
        @stack('styles')
        <link href="{{asset('home/css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        @livewireStyles
    </head>
    <style>

    </style>
</div>
