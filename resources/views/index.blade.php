@extends('layouts.index')

@section('header')
    <div class="mysite_index-header d-flex justify-content-between">
        <h1>Empathea</h1>
        <div class=" mysite_index-link d-flex justify-content-around">
            <a href="#">
                about
            </a>
            <!-- Button trigger modal -->
            <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                Login
            </a>
        </div>
    </div>
@endsection

@section('content')
    <main class="container-fluid" style="width: 100%; height: 100%;">
        <div class="mysite_index d-flex justify-content-around" style="width: 100%; height: 100%;">
            <div class="mysite_index-img d-flex justify-content-center align-items-center">
                <img src="{!! asset('img/empatia.png') !!}" alt="">
            </div>
            <div class="mysite_index-about d-flex flex-column align-items-end justify-content-center">
                <h1>Out here</h1>
                <hr>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
                <a href="/home">more</a>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex flex-column">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="e-mail" aria-label="Username"
                               aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="password" class="form-control" placeholder="password" aria-label="Username"
                               aria-describedby="basic-addon1">
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="/home" type="button" class="btn btn-primary" style="color: #fff;">Login</a>
                </div>
            </div>
        </div>
    </div>

@endsection
