<html>
    <body>
        Welcome to php Laravel
        <div>
            <a href="/page/abc">ABC Route</a>
            
            <a href="/">Home</a>
            
            {{ "<h1>Hello</h1>" }} //echo ->string
            {!! "<h1>Hello</h1>" !!}
        {!! "<script>alert('hello')</script>" !!}


       @php
           $name=20;
       @endphp     
        {{ $name }}

        @if($name>=30)
                    <p>Above 20</p>
           
        @else
        <p>Not</p>
        @endif

        @switch($name)
            @case(20)
                
                @break
            @case (30)

            @break
        
            @default
                
        @endswitch

        <?php
        if(isset($age))
        {}

?>

@isset($age)
    
@endisset

@empty($age)

@endempty

@for($i=1;$i<=10;$i++)
{{ $i }}
@endfor

    </div>
    </body>
</html>