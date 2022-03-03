@extends('layouts.guest')
@section("pageTitle", "Welcome To Data Encryption and Decryption App.")
@section("securityPageActive", "active")
@section('pageContent')

<div class="container">
    <div class="row">




        <div class="col-md-6 offset-md-3"></div>
        <div class="col-md-6 offset-md-3">
            <div id="content mt-5">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-sm-12 auth-box mt-5">
                            <div class="proclinic-box-shadow">

                                <div class="user-dashboard-info-box bg-light p-3">
                                    <div class="form-row offset-md-0 row">
                                        <div class="col-md-12">
                                            <div class="h5">TOPIC</div>
                                               Design And Implementation Of Computer Security; Data
                                               Encryption, Decryption Using Hash Algorithms
                                        </div>

                                        <div class="col-md-12">
                                            <br />
                                            <div class="h5">DEVELOPED BY</div>
                                            <div class="text-uppercase"> Name: Adelakin Joan Aanuoluwapo | Matric: 1830120014</div>
                                            and
                                            <div class="text-uppercase"> Name: Omotoso Adebisi Alice | Matric: 1830120018</div>
                                        </div>
                                        <div class="col-md-12">
                                            <br />
                                            <div class="h5">SUPERVISED BY</div>
                                            <div class="text-uppercase"> Mrs Olaniyan</div>
                                        </div>
                                    </div>
                                </div>

                                    <div class="button-btn-block">
                                        <a href="{{route('login')}}" class="btn btn-primary btn-lg btn-block">Login</a>
                                    </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>




@endsection

{{-- Style --}}
@section('style')

@endsection

{{-- Script --}}
@section('script')

@endsection
