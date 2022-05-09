@extends('layouts.template')
@section('content')
    <!-- ==============================================
    BLOG
    =============================================== -->

    <section id="blog">
        <div class="container">
            <!-- Title -->
            <h5 class="sans-serif">Блог</h5>
            <h2 style="color: #E40001;">TeachHouse</h2>
            <div class="row" data-masonry='{"percentPosition": true }'>
                <!-- Single blog post -->
                @forelse($posts as $key => $post)
                    <div class="col-lg-4 blog-post wow fadeInRight mb-5" data-wow-duration=".2s" data-wow-delay=".{{3 + $key}}s">
                        <div class="blog-wrapper">
                            <!-- Posts image -->
                            <div class="blog-img">
                                @if(isset($post->image))
                                    <img src="{{ asset('storage'.DIRECTORY_SEPARATOR.$post->image) }}" class="img-fluid" alt="{{ $post->id }} post image"/>
                                @endif
                            </div>
                            <!-- Posts Content -->
                            <div class="blog-content">
                                <span class="date">{{ date('M d, Y', strtotime($post->created_at)) }}</span>
                                <h5>{{ $post->title }}</h5>
                                <p>{{ $post->excerpt }}</p>
                                <a href="postsingle/{{ $post->id }}" class="inline-link">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-6 wow fageInRight mb-5 d-flex justify-content-center align-items-center">
                        <h1>Блог на данный момент пуст</h1>
                        <p>Вы можете найти больше информации в наших соц сетях. Чтобы перечти нажмите <a href="https://www.instagram.com/teachhouse.nikopol/" target="_blank">сюда</a>.</p>
                    </div>
                @endforelse
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center align-items-center">
                        <nav style="background-color: #f9f9f9">
                            {{ $posts->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
