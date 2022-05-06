@extends('layouts.template')

@section('content')
<div class="container mb-5" style="margin-top: 200px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтвердите свою электронную почту') }}</div>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Актуальная ссылка для верификации была отправлена только-что на вашу актуальную электронную почту.') }}
                        </div>
                    @endif

                    {{ __('Прежде чем вы продолжите, проверьте вашу почту на верификационную ссылку') }}
                    {{ __('Если вы не получили письмо с верификацией') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('нажмите здесь, чтобы заказать ещё одно') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
