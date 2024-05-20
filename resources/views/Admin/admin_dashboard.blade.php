@extends('layouts.admin')

@section('title')
Admin
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="icon icon-warning">
                            <i class="zmdi zmdi-equalizer"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class="category"><strong> Automobiles </strong></p>
                        <h3 class="card-title">10.114.356</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-info">info</i>
                            <a href="#pablo">Voir liste </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="icon icon-rose">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class="category"><strong>Infractions</strong></p>
                        <h3 class="card-title">102</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-info">info</i>
                            <a href="#pablo">Auto en infraction </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="icon icon-success">
                            <i class="zmdi zmdi-money"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"> Gestion des citoyens </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> Weekly sales
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="icon icon-info">
                            <i class="zmdi zmdi-twitter"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class="category"><strong>Followers</strong></p>
                        <h3 class="card-title">+245</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')


    

