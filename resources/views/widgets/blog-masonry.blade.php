
@foreach($posts as $post)
    <!-- Blog Post -->
    <div class="card mb-4">
        <img class="card-img-top" src="/storage/{{$post->featured_image}}" alt="Brak zdjęcia">
        <div class="card-body">
            <h2 class="card-title">{{$post->title}}</h2>
            <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 200, '...') }}</p>
            <a href="/post/{{$post->slug}}" class="btn btn-primary">Zobacz więcej →</a>
        </div>
        <div class="card-footer text-muted">
            Utworzone {{$post->created_at->format('d-m-Y')}}. Autor:
            <a href="#">{{$post->user->name}}</a>
        </div>
    </div>
@endforeach
