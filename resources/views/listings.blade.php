<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$heading}}</h1>

    {{-- @if (count($listings) == 0)
        <h3>No listings found</h3>
    @endif --}}


        @unless (count($listings) == 0)
              
            @foreach($listings as $listing)
                <h2>
                   <a href="/listing/{{$listing['id']}}">{{$listing['title']}}</a> 
                </h2>

                <p>
                    {{$listing['description']}}
                </p>
            @endforeach
        @else
        <h3>No listings found</h3>

    @endunless

</body>
</html>