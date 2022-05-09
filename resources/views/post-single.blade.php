@extends('layouts.template')
@section('content')
    <section id="blogsingle">
        <div class="blogsingle-container" style="margin-top: 200px;">
            <div class="container h-100">
                <div class="row h-100 justify-content-between text-center mb-5">
                    <div class="col-md-6">
                        <div class="ratio ratio-21x9 shadow-lg overflow-hidden wow bounceInUp">
                            <img src="{{ asset('storage'.DIRECTORY_SEPARATOR.$post->image) }}" class="img-fluid" alt="Пост {{ $post->id }}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wow bounceInUp">
                            <div class="info mb-5">
                                <p class="text-black date wow bounceInLeft" data-wow-delay="0.1s"><time datetime="2020-01-01">{{ date('M d, Y', strtotime($post->created_at)) }}</time></p>
                                <h1 class="text-dark wow bounceInLeft" data-wow-delay="0.2s">
                                    {{ $post->title }}
                                </h1>
                                <p class="wow bounceInLeft text-left" data-wow-delay="0.6s">
                                    <?php echo $post->body;?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="d-flex align-items-center justify-content-between">
                            @if($post->id == $first_post_id)
                                <p class="text-dark wow bounceInLeft">Нет новых постов</p>
                            @else
                                <a class="wow bounceInRight" href="{{ route('postsingle') }}/{{ $post->id + 1}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                    </svg>
                                    Следующая статья
                                </a>
                            @endif
                            @if($post->id == $last_post_id)
                                <p class="text-dark wow bounceInLeft">Конец</p>
                            @else
                                <a class="wow bounceInLeft" href="{{ route('postsingle') }}/{{ $post->id - 1}}">
                                    Предыдущая статья
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
