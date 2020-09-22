@extends("master")

@section("content")
    <div class="row" style="height: 500px">

        <span class="test">Login: {{$UserData->name}}</span>
        <span class="test">Email: {{$UserData->email}}</span>
        <span class="test">Utworzone: {{$UserData->created_at}}</span>
    </div>
@endsection
