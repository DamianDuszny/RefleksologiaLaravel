<!-- Sidebar Widgets Column -->
<div class="col-md-4">

 {{--   <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
        </div>
    </div>
--}}
    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Kategorie</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        @foreach($categories as $category)
                            <li>
                                <a href="/category/{{$category->slug}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Tags Widget -->
    <div class="card my-4">
        <h5 class="card-header">Tagi</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        @foreach($tags as $tag)
                            <li>
                                <a href="/tag/{{$tag->name}}">{{$tag->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Posts Widget -->
    <div class="card my-4">
        <h5 class="card-header">Ostatnie artykuły</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled mb-0">
                        @foreach($recent_posts as $post)
                            <li>
                                <a href="/post/{{$post->slug}}">{{$post->title}}</a>
                            </li>
                            <hr>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">Inne</h5>
        <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
    </div>

</div>