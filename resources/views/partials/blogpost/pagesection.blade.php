<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    <div class="post-thumbnail">
                        <img src="/img/blog/{{$post->img}}" alt="">
                        <div class="post-date">
                            <h2>{{$post->dateDay}}</h2>
                            <h3>{{$post->dateMonth}} {{$post->dateYear}}</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$post->title}}</h2>
                        <div class="post-meta">
                            <a href="">{{$post->category->category}}</a>
                            @foreach($post->tag as $tag)
                                <a href="">{{$tag->tag}}</a>
                            @endforeach
                            <a href="">2 Comments</a>
                        </div>
                        <p>{{$post->text}}</p>
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src={{asset('/img/avatar/'. $post->user->img)}} alt="">
                        </div>
                        <div class="author-info">
                            <h2>Lore Williams, <span>Author</span></h2>
                            <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">
                        <h2>
                            @if ($post->comment->count() == 1)
                                Comment ({{$post->comment->count()}})
                            @else
                                Comments ({{$post->comment->count()}})
                            @endif
                        </h2>
                        <ul class="comment-list">
                            @foreach ($comments as $comment)
                                <li>
                                    <div class="commetn-text">
                                        <h3>{{$comment->name}} | {{$comment->dateDay}} {{$comment->dateMonth}}, {{$comment->dateYear}} | Reply</h3>
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                </li>                   
                            @endforeach
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            <form class="form-class" method="POST" action="{{route('comment.store', $post->id)}}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" id="name" placeholder="Your name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" id="email" placeholder="Your email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea name="comment" id="comment" placeholder="Message"></textarea>
                                        <button class="site-btn">send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        <li><a href="#">Vestibulum maximus</a></li>
                        <li><a href="#">Nisi eu lobortis pharetra</a></li>
                        <li><a href="#">Orci quam accumsan </a></li>
                        <li><a href="#">Auguen pharetra massa</a></li>
                        <li><a href="#">Tellus ut nulla</a></li>
                        <li><a href="#">Etiam egestas viverra </a></li>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        <li><a href="">branding</a></li>
                        <li><a href="">identity</a></li>
                        <li><a href="">video</a></li>
                        <li><a href="">design</a></li>
                        <li><a href="">inspiration</a></li>
                        <li><a href="">web design</a></li>
                        <li><a href="">photography</a></li>
                    </ul>
                </div>
                <!-- Single widget -->
            </div>
        </div>
    </div>
</div>