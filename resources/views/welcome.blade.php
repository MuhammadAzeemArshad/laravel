<h1>Our First page</h1>
<br>
<a href="/anchor">go to</a>
<br>
<a href="{{ route('Post')}}"> go to post page</a>
<br>
{{" hello world this is blade practise "}}
<br>
{{-- this is comment --}}
<br>
{{-- now start base basic blade php practice --}}

@php
    $array =["title","description","formalized" , "title","description","formalized"];
    $Name= "Muhammad Azeem Arshad";
@endphp
<ul>
@foreach ( $array as $n )
    @if ($loop->even)
        <li style="color: red">{{ $n }}</li>
    @else
        <li style="color: green">{{ $n }}</li>

    @endif
@endforeach
</ul>

{{ $Name }}