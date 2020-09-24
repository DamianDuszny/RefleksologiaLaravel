@extends('master')

@section('content')
    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">{{$post->title}}</h1>

            <!-- Author -->
            <p class="lead">
                Autor:
                <a href="#">{{$post->user->name}}</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>Utworzone: {{$post->created_at->format('M d, Y')}}</p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="/storage/{{$post->featured_image}}" alt="">

            <hr>

            <!-- Post Content -->
            {!! $post->content !!}
            <hr>

            <!-- Comments -->
            <!-- Edit button if admin is logged -->
        @can('isAdmin')
            <a href="/admin/blog-posts/{{$post->id}}/edit">Edytuj</a>
            @endcan
        </div>


        @include('widgets.sidebar')

    </div>
@endsection
