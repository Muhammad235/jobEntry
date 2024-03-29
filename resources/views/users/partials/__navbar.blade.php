<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <title>Document</title>
    
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
</head>
<body>
    <header class="header">
        <div class="header-content responsive-wrapper">
            <div class="header-logo">
                <a href="">
                    JobEntry
                </a>
            </div>
            <div class="header-navigation">
                <nav class="header-navigation-links">
                    {{-- <a href="#"> Home </a> --}}
                </nav>
                <div class="header-navigation-actions">
                    <i class="text-success fs-2 bi bi-person-check"></i>

                    <a class="username mx-3"> {{auth()->user()->name}}</a>

                    <a href="/" class="px-2 ">Go to website</a>
                    <form action="/logout" class="button" method="POST">
                        @csrf
                        <button class="btn" type="submit"><span>Logout</span></button>
                     </form>
                </div>    
            </div>
        </div>
    </header>