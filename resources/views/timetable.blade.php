@extends('layouts.template')
@section('content')
    <section id="timetable">
        <div class="timetable-container">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-md-12">
                        <div class="wow bounceInUp">
                            <h1 style="color: #E40001; margin-top: 200px;">
                                Расписание встреч
                            </h1>
                            <p>
                                Здесь вы можете посмотреть, кто будет на ваших занятиях. За день до встреч наш менеджер свяжется с вами.
                            </p>
                            @if(!empty($clients[0]))
                                <div class="table-container mt-5 mb-5 ">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-borderless table-light border-light">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Встреча</th>
                                                <th scope="col">Имя</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($clients as $client)
                                                <tr @if(\Illuminate\Support\Facades\Auth::user()->getAuthIdentifier() == $client->user_id) class="bg-primary color-light" @endif>
                                                    <th scope="col"><?php echo $counter; $counter++; ?></th>
                                                    <th scope="col">{{ date('d.m.Y в h:i:sa', strtotime(App\Models\Meeting::where('id', $client->meeting_id)->first()->time)) }} ({{App\Models\Meeting::where('id', $client->meeting_id)->first()->type}})</th>
                                                    <th scope="col">{{$client->name}} @if(\Illuminate\Support\Facades\Auth::user()->getAuthIdentifier() == $client->user_id) (Вы)@endif</th>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        {{$clients->links()}}
                                    </div>
                                </div>
                            @else
                                <p class="mt-5">Увы сейчас никто не записан на встречи. Вы можете записаться <a
                                        href="{{ route('home') }}/#contact">здесь</a>.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
