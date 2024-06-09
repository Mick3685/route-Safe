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
                        <h4 class="card-title">365 Automobiles</h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-info">info</i>
                            <a href="#pablo">Automobiles en infraction </a>
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
                        <center><h3 class="card-title"> Gestion des citoyens </h3></center>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-info">info</i> vue sur les citoyens
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
                        <p class="category"><strong></strong></p>
                        <h3 class="card-title">Assistance au citoyens</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i>messages
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8" style="width: 100%">
            <div class="card" style="min-height: 350px">
                <div class="card-header card-header-icon">
                    <i class="material-icons">timeline</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Nombre d'automobiles en infraction
                    </h4>
                    <div class="chart-edge">
                        <div id="line-chart" class="demo-placeholder" style="padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 878px; height: 220px;" width="878" height="220"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><div style="position: absolute; max-width: 55px; top: 204px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 21px; text-align: center;">Jan</div><div style="position: absolute; max-width: 55px; top: 204px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 97px; text-align: center;">Feb</div><div style="position: absolute; max-width: 55px; top: 204px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 173px; text-align: center;">Mar</div><div style="position: absolute; max-width: 55px; top: 204px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 250px; text-align: center;">Apr</div><div style="position: absolute; max-width: 55px; top: 204px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 324px; text-align: center;">May</div><div style="position: absolute; max-width: 55px; top: 204px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 401px; text-align: center;">Jun</div><div style="position: absolute; max-width: 55px; top: 204px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 479px; text-align: center;">Jul</div><div style="position: absolute; max-width: 55px; top: 204px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 553px; text-align: center;">Aug</div><div style="position: absolute; max-width: 55px; top: 204px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 629px; text-align: center;">Sep</div><div style="position: absolute; max-width: 55px; top: 204px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 706px; text-align: center;">Oct</div><div style="position: absolute; max-width: 55px; top: 204px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 781px; text-align: center;">Nov</div><div style="position: absolute; max-width: 55px; top: 204px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 858px; text-align: center;">Dec</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><div style="position: absolute; top: 187px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 7px; text-align: right;">25</div><div style="position: absolute; top: 149px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 7px; text-align: right;">50</div><div style="position: absolute; top: 112px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 7px; text-align: right;">75</div><div style="position: absolute; top: 75px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 1px; text-align: right;">100</div><div style="position: absolute; top: 38px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 1px; text-align: right;">125</div><div style="position: absolute; top: 1px; font: 400 11px / 15px Roboto, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); left: 1px; text-align: right;">150</div></div></div><canvas class="flot-overlay" width="878" height="220" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 878px; height: 220px;"></canvas></div>
                    </div>
                </div>
            </div>
        </div>

    <div><div class="col-lg-6 col-md-12">
            <div class="card" style="min-height: 485px">
                <div class="card-header">
                    <h4 class="card-title">Gestion des actualités</h4>
                </div>
                <div class="card-content">
                    <div class="dropdown pull-right">
                        <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">build</i>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li>
                                <a href="#action">Action</a>
                            </li>
                            <li>
                                <a href="#action">Another action</a>
                            </li>
                            <li>
                                <a href="#here">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#link">Separated link</a>
                            </li>
                        </ul>
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                                </label>
                                    </div>
                                </td>
                                <td><h4>Actualités Assurance Automobiles</h4></td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Actualiser" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">edit</i>
                                            </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="material-icons">close</i>
                                            </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                    </div>
                                </td>
                                <td><h4>Actualités TVM</h4></td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Actualiser" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">edit</i>
                                            </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="material-icons">close</i>
                                            </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                    </div>
                                </td>
                                <td><h4>Actualités Visite Technique </h4></td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Actualiser" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">edit</i>
                                            </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="material-icons">close</i>
                                            </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                                </label>
                                    </div>
                                </td>
                                <td> <h4>Actualités Excès de vitesse </h4> </td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Actualiser" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">edit</i>
                                            </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="material-icons">close</i>
                                            </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="card" style="min-height: 485px">
                <div class="card-header">
                    <h4 class="card-title">INFO sur les Infractions</h4>
                </div>
                <div class="card-content">
                    <div class="streamline">
                        <div class="sl-item sl-primary">
                            <div class="sl-content">
                                <small class="text-muted">Il y a 5 min</small>
                                <p>Le citoyen <span style="color: rgb(58, 8, 238)">Williams</span> a effectuer un eccès de vitesse devant l'UAC d'Abomey-Calavi.</p>
                                <button type="button" rel="tooltip" title="Amender le citoyen" class="btn btn-primary btn-simple btn-xs">
                                    <i>Amender</i>
                                </button>
                            </div>
                        </div>
                        <div class="sl-item sl-danger">
                            <div class="sl-content">
                                <small class="text-muted">il y a 25 min</small>
                                <p>Le citoyen <span style="color: rgb(216, 16, 9)">Ulrich Ayenon</span> a le feu du carrefou Ste Michel.</p>
                                <button type="button" rel="tooltip" title="Amender le citoyen" class="btn btn-primary btn-simple btn-xs">
                                    <i>Amender</i>
                                </button>
                            </div>
                        </div>
                        <div class="sl-item sl-success">
                            <div class="sl-content">
                                <small class="text-muted"> il y a 40 min</small>
                                <p><span style="color: rgb(9, 243, 40)">Agossa Marjolaine</span> Usage du téléphone au volant. </p>
                                <button type="button" rel="tooltip" title="Amender le citoyen" class="btn btn-primary btn-simple btn-xs">
                                    <i>Amender</i>
                                </button>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-content">
                                <small class="text-muted">il y a 45 min</small>
                                <p><span style="color: rgb(137, 143, 148)">Williams</span> a effectuer un eccès de vitesse devant l'UAC d'Abomey-Calavi.</p>
                            
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
   
    </div>

    </div>



@endsection('content')


    

