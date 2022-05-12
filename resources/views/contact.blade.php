@extends('layouts.template')
@section('content')
    <!-- ==============================================
    CONTACT
    =============================================== -->
    <section id="contact" class="mt-5">
        <div class="container-fluid">
            <div class="row">
                <!-- Contact Us -->
                <div class="col-lg-6 contact-content">
                    <h5 class="sans-serif">Свяжись с нами</h5>
                    <h2>Возник вопрос - <span>пиши</span></h2>
                    <!-- Forms Start Here -->
                    <form method="post" action="{{ route('rate') }}" autocomplete="on">
                        @csrf
                        <!-- Form Input -->
                        <div class="form-group wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".2s">
                            <input name="email" type="email" class="form-control" placeholder="Электронная почта: " required>
                        </div>
                        <!-- Form Name -->
                        <div class="form-group wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
                            <input name="name" type="text" class="form-control" placeholder="Имя: " required>
                        </div>
                        <!-- Form Subject -->
                        <div class="form-group wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
                            <input name="subject" type="text" class="form-control" placeholder="Тема: " required>
                        </div>
                        <!-- Form Group -->
                        <div class="form-group wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
                            <textarea name="text" cols="30" rows="5" class="form-control" placeholder="Уведомление:" required></textarea>
                        </div>
                        <button type="submit" name="submit" value="send" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
                <!-- Google Map -->
                <div class="col-lg-6 map-wrap">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
