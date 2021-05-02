<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Montalban Advance Security Alert</title>

        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">      
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
               
        @livewireStyles
    </head>
 
    <body>            
        <section>  @livewire('page1')</section>
        <section>   @livewire('page1body')</section>
        <section>   @livewire('page2')</section>
        <section>   @livewire('page3')</section>
        
        @livewire('footer')
    @livewireScripts
  
    </body>
  
</html>
