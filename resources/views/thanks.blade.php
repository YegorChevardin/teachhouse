@extends('layouts.template')
@section('content')
    <section id="tnx">
        <div class="tnx-container">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-md-6">
                        <div class="wow bounceInUp">
                            <h1 style="color: #005cbf;">
                                Спасибо
                            </h1>
                            @if(isset($rate))
                                <h5>Ваши данные были успешно отправлены к нам! Мы вскорее напишем вам!</h5>
                            @else
                                <h5>Вы успешно зарегистрировались на бесплатное занятие, наш менеджер в ближайшее время свяжется с вами, для уточнения подробностей.</h5>
                            @endif
                            <p>Желаете больше познакомится с нами - посмотрите наш <a href="{{ route('blog') }}">блог</a>!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
