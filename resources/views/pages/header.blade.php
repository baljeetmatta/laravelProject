<h3>Header View with Navigation</h3>
{{-- <ul>
@foreach ($status as $name )
    <li>{{ $name }}</li>
@endforeach
</ul> --}}

@isset($status)
    

@foreach ($status as $key=>$value )
    
{{ $key }} -- {{ $value }}
@endforeach

@endisset