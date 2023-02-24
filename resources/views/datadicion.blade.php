@extends('master')


@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Inscripciones UAGRM</h2>
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
                    <a class="btn btn-primary" href="">Agregar</a>
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
                                <th>Id</th>
                                <th>Sigla</th>
                                <th>Materia</th>
                                <th>Semestre</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                <tr>
                                    <td>1</td>
                                    <td>INF-123</td>
                                    <td>Redes I</td>
                                    <td>5</td>
                                    
                                   
                                </tr>
                           
                        </tbody>


                        <br>
<table>
                        <tbody>
                            <th>¿Desea habilitar sus materias electivas?</th>
                            <th><a class="btn btn-primary" href="">SI</a> 
                                <a class="btn btn-warning" href="">NO</a>      
                               
                            </th>
                        </tbody>
                    </table>  
                    <table>
                        <tbody>
                            <th>¿Desea habilitar su levantamiento de materias?</th>
                            <th><a class="btn btn-primary" href="">SI</a> 
                                <a class="btn btn-warning" href="">NO</a>      
                               
                            </th>
                        </tbody>
                    </table> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
