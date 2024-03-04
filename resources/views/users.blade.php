@foreach ($users as $id => $u)
    <h1>{{ $id }} {{ $u['name'] }}</h1>
    <a href="{{ route('view.user' , $id ) }}">click</a>
    
@endforeach