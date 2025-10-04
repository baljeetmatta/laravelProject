<html>
    <style>
.odd{
    color:red;

}
.even{
    color:blue
}
        </style>
    <body>
        @includeWhen(false,"pages.header")
         @includeUnless(false,"pages.header")

        @php
            $names=["Name1","Name2"];
            $obj=["name"=>"Code","years"=>10];
        @endphp
        @include('pages.header',['status'=>$obj])

         
        Test PAge 
        @php
            $names=["One","Two","Three"];
$code="Code";
        @endphp

<ul>
        @foreach ($names as $name )
            @if($loop->odd)
                <li class="odd"> {{ $name }}</li>
            @else
             <li class="even"> {{ $name }}</li>
             @endif
        @endforeach
        <ul>
@{{ $code }}

@include('pages.footer')

    </body>
    </html>