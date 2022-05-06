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
                                Встречи состоят из 10 человек, когда настанет ваша очередь, мы вам позвоним.
                            </p>
                            <div class="table-container border-radius-16">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-borderless table-light border-light">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Sit</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Adipisicing</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Hic</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Hic</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Hic</td>
                                        </tr>
                                        <tr class="bg-primary color-light">
                                            <th scope="row">6</th>
                                            <td>Hic (You)</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Hic</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>Hic</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <td>Hic</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td>Hic</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <nav>
                                        <ul class="pagination pagination">
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">1</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
