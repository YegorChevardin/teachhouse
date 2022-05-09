@extends('layouts.template')
@section('content')
    <!-- ==============================================
    CONTACT
    =============================================== -->
    <section id="profile" style="margin-top: 200px;">
        <div class="container">
            <div class="row justify-content-between mb-5">
                <!-- Contact Us -->
                <div class="col-md-4">
                    <div class="ratio ratio-1x1 shadow-lg overflow-hidden wow bounceInUp">
                        <img src="{{ Voyager::image(Auth::user()->avatar) }}" class="img-fluid" alt="{{ Auth::user()->name }}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="text-center">{{ Auth::user()->name }}</h1>
                    <div class="info mt-5 text-center">
                        <p>Электронна почта: {{ Auth::user()->email }}</p>
                        <p>Роль: {{ Auth::user()->role->display_name }}@if(Auth::user()->hasRole('admin')) - <a href="{{ route('voyager.dashboard') }}" target="_blank">перейти в админ панель</a>@endif</p>
                        <p>Аккаун создан: {{ date('M d, Y', strtotime(Auth::user()->created_at)) }}</p>
                        <div class="image_form_container mt-4">
                            <form enctype="multipart/form-data" method="post" id="image_form_container" action="{{ route('changeimg') }}">
                                @csrf
                                <input required placeholder="Изменить аватар" class="form-control" type="file" name="avatar"/>
                                <button id="img_submit" type="submit" class="btn btn-primary btn-small btn-sm mt-2">Изменить аватар</button>
                            </form>
                        </div>
                        <div class="name_form_container mt-4">
                            <form method="post" id="name_form_container" action="{{ route('changename') }}">
                                @csrf
                                <input required placeholder="Изменить имя" class="form-control" type="text" name="name"/>
                                <button id="name_submit" type="submit" class="btn btn-primary btn-small btn-sm mt-2">Изменить имя</button>
                            </form>
                        </div>
                        <div class="image_form_container mt-4">
                            <form method="post" id="image_form_container" action="{{ route('changeemail') }}">
                                @csrf
                                <input required placeholder="Изменить электронную почту" class="form-control" type="email" name="avatar"/>
                                <button id="email_submit" type="submit" class="btn btn-primary btn-small btn-sm mt-2">Изменить почту</button>
                            </form>
                        </div>
                        <p class="mt-4"><a href="{{ route('logout') }}">Выйти из аккаунта</a></p>
                        <div class="delete-container mt-5">
                            <form id="delete_form" action="{{ route('userdelete') }}" method="post">
                                @csrf
                                <button id="delete_submit" type="submit" class="btn btn-danger btn-sm">Удалить аккаунт</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
