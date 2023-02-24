@extends('master')


@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Inscripcion</h2>
        <p> <strong>Nombre:</strong> Diana Araceli Murillo Condori</p>
        <p><strong>Registro: </strong>222222222</p>
         <p>  <strong>Carrera:</strong> Ingenieria Informatica</p>  

    </div>  
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                   
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                </div>
                <div class="ibox-content">
                    <form name="formBuscar" action="" method="get">
                        <div class="row">
                            <div class="col-sm-3 m-b-xs">
                                
                            </div>
                            <div class="col-sm-7 m-b-xs" >&nbsp;</div>
                            <div class="col-sm-2 m-b-xs" style="float: right;"></div>
                        </div>
                    </form>
                   
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> &nbsp;</th>
                                <th>Id</th>
                                <th>Materia</th>
                                <th>Cupo</th>
                                <th>Grupo</th>
                                <th>Horario</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                <tr>
                                    <td> <input type="checkbox"> </td>
                                    <td>1</td>
                                    <td>Lenguajes Formales</td>
                                    <td>5</td>
                                    <td><select class="form-control" name="tipo" id="tipo">
                                        <option value="adm">SA</option>    
                                        <option value="est">SC</option>     
                                    </select></td>
                                    <td>L-M-V : 07:00-08:30</td>
                                    
                                   
                                </tr>
                                <tr>
                                    <td> <input type="checkbox"> </td>
                                    <td>1</td>
                                    <td>Lenguajes Formales</td>
                                    <td>5</td>
                                    <td><select class="form-control" name="tipo" id="tipo">
                                        <option value="adm">SA</option>    
                                        <option value="est">SC</option>     
                                    </select>
                                </td>
                                    <td>L-M-V : 07:00-08:30</td>
                                    
                                   
                                </tr>
                           
                        </tbody>


                        <br>
<table>
                        
                    </table>  
                    </table>

                    <a type="submit" class="btn btn-primary block full-width m-b" href="{{ url('confirmacion') }}">Confirmar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
