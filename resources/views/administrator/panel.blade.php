
@extends('layouts.app')

@section('content')
    <main>
        <div class="container-fluid" style="margin-top:20px;">
            <div class="row right-align">
                <div class="col s3 m2 center-align">
                    <i class="fas fa-bullhorn" style="font-size: 50px; margin-top: 1rem;"></i>
                </div>
                <div class="col s9 m10">
                    <span style="font-size: 40px; font-weight: bolder;">Atención</span><br>
                    <span>Realizar la llamada por ticket de cliente para cada servicio.</span>
                </div>
            </div>
            <div class="divider"></div>
          
        @if($ticketFirst)
            <div class="row">
                <div class="col s12 m3 blue center-align" style="border: solid 1px #cccccc">
                    <h6 class="white-text">Taquilla</h6>
                <span class="white-text" style="font-size: 70px;">{{$ticketFirst->number_ticket}}</span><br>
                    <a href="#taquilla" class="btn btn-flat white-text modal-trigger">Cambiar</a>
                </div>

                <div class="col s12 m9">

                        <div class="row">
                            <div class="col s12" style="margin-bottom:40px;margin-top:25px;">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Numero Taquilla</td>
                                            <td>{{$ticketFirst->number_ticket}}</td>
                                        </tr>
                                        <tr>
                                            <td>Servicio</td>
                                            <td>{{$ticketFirst->name_ticket}}</td>
                                        </tr>
                                        <tr>
                                            <td>Descripción</td>
                                            <td>{{$ticketFirst->description_ticket}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col s12 m4 animated bounceIn">
                                <a href="" class="btn-app white black-text">
                                    <i class="fas fa-bullhorn blue-text"></i>
                                    <span style="font-size: 16px;">Llamar de Nuevo</span>
                                </a>
                            </div>
                            <div class="col s12 m4 animated bounceIn">
                                <a href="" class="btn-app white black-text ">
                                    <i class="fas fa-play blue-text"></i>
                                    <span style="font-size: 16px;">Iniciar Atención</span>
                                </a>
                            </div>
                            <div class="col s12 m4 animated bounceIn">
                                <a href="" class="btn-app white black-text">
                                    <i class="fas fa-user-times red-text"></i>
                                    <span style="font-size: 16px;">No se presentó</span>
                                </a>
                            </div>
                        </div>
                    </div>
                                    
            
                        <div class="row">
                            <div class="col s12">
                                <div class="collection with-header">
                                    <div class="collection-header"><h5>Mi Fila (Todos)</h5></div>
            
                                    <a href="#modal1" class="collection-item avatar modal-trigger">
                                        <i class="circle blue fas fa-user"></i>
                                        <span class="title">A002</span><br>
                                        <span class="title">282886639</span>
                                    </a>
                                    <a href="" class="collection-item avatar">
                                        <i class="circle blue fas fa-user"></i>
                                        <span class="title">A002</span><br>
                                        <span class="title">282886639</span>
                                    </a>
                                    <a href="" class="collection-item avatar">
                                        <i class="circle blue fas fa-user"></i>
                                        <span class="title">A002</span><br>
                                        <span class="title">282886639</span>
                                    </a>
                                    <a href="" class="collection-item avatar">
                                        <i class="circle blue fas fa-user"></i>
                                        <span class="title">A002</span><br>
                                        <span class="title">282886639</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

        @elseif($ticket)
            <div class="row">
                    <div class="col s12 m3 blue center-align" style="border: solid 1px #cccccc">
                        <h6 class="white-text">Taquilla</h6>
                    <span class="white-text" style="font-size: 70px;">{{$ticket->number_ticket}}</span><br>
                        <a href="#taquilla" class="btn btn-flat white-text modal-trigger">Cambiar</a>
                    </div>
    
                    <div class="col s12 m9">
    
                            <div class="row">
                                <div class="col s12" style="margin-bottom:40px;margin-top:25px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Numero Taquilla</td>
                                                <td>{{$ticket->number_ticket}}</td>
                                            </tr>
                                            <tr>
                                                <td>Servicio</td>
                                                <td>{{$ticket->name_ticket}}</td>
                                            </tr>
                                            <tr>
                                                <td>Descripción</td>
                                                <td>{{$ticket->description_ticket}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col s12 m4 animated bounceIn">
                                    <a href="" class="btn-app white black-text">
                                        <i class="fas fa-bullhorn blue-text"></i>
                                        <span style="font-size: 16px;">Llamar de Nuevo</span>
                                    </a>
                                </div>
                                <div class="col s12 m4 animated bounceIn">
                                    <a href="" class="btn-app white black-text ">
                                        <i class="fas fa-play blue-text"></i>
                                        <span style="font-size: 16px;">Iniciar Atención</span>
                                    </a>
                                </div>
                                <div class="col s12 m4 animated bounceIn">
                                    <a href="" class="btn-app white black-text">
                                        <i class="fas fa-user-times red-text"></i>
                                        <span style="font-size: 16px;">No se presentó</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                                        
                
                            <div class="row">
                                <div class="col s12">
                                    <div class="collection with-header">
                                        <div class="collection-header"><h5>Mi Fila (Todos)</h5></div>
                
                                        <a href="#modal1" class="collection-item avatar modal-trigger">
                                            <i class="circle blue fas fa-user"></i>
                                            <span class="title">A002</span><br>
                                            <span class="title">282886639</span>
                                        </a>
                                        <a href="" class="collection-item avatar">
                                            <i class="circle blue fas fa-user"></i>
                                            <span class="title">A002</span><br>
                                            <span class="title">282886639</span>
                                        </a>
                                        <a href="" class="collection-item avatar">
                                            <i class="circle blue fas fa-user"></i>
                                            <span class="title">A002</span><br>
                                            <span class="title">282886639</span>
                                        </a>
                                        <a href="" class="collection-item avatar">
                                            <i class="circle blue fas fa-user"></i>
                                            <span class="title">A002</span><br>
                                            <span class="title">282886639</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

            @else
            <div class="row">
                <div class="col s12 m3 blue center-align" style="border: solid 1px #cccccc">
                    <h6 class="white-text">Taquilla</h6>
                <span class="white-text" style="font-size: 70px;">0</span><br>
                    <a href="#taquilla" class="btn btn-flat white-text modal-trigger">Cambiar</a>
                </div>
                        <div class="col s12 m9" style="margin-bottom:40px;margin-top:25px;">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Seleccione una taquilla o registre en el menu de configuración</td>
                                        <td>0000</td>
                                    </tr>
                                    <tr>
                                        <td>0000</td>
                                        <td>0000</td>
                                    </tr>
                                    <tr>
                                        <td>0000</td>
                                        <td>0000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>        
            @endif              
    </div>

  <!-- Modal Structure -->
        <div id="taquilla" class="modal bottom-sheet">
                <div class="modal-content">
                    <div class="row">
                        <div class="col s12 m1 right">
                            <i class="icon-assignment medium blue-text" style="text-aling:center"></i>
                        </div>

                        <div class="centered col s12 m11">
                            <h5 style="margin-left:15px;margin-top:15px;">  Taquillas </h5></div>
                        </div>
                    </div>

        @if($ticketAll)    
                <div class="row">
                    <div class="col s12 m12">                                              
                        <ul class="collection"> 
                            @foreach ($ticketAll as $tickets)                           
                            <li class="collection-item avatar">
                                <i class="icon-attach_file circle orange"></i>
                                <span class="title">{{$tickets->number_ticket}}</span>
                                <p>{{$tickets->name_ticket}} <br>
                                   {{$tickets->description_ticket}}
                                </p>
                            <a href="{{route('panel.select', ['id'=>$tickets->id])}}" class="secondary-content" class="blue-text">Seleccionar</a>
                        </li>
                        @endforeach
                    </ul>                 
                </div>
            </div>
            
        @else
                <div class="row">
                    <div class="col s12 m12">
                        <span class="black-text">No hay taquillas</span>
                    </div>
                </div>
        @endif
                
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">cerrar</a>
            </div>
        </div>
    </div>
            <!-- Modal va en una seccion aparte, solo que aqui esta la prueba -->
            <div id="modal1" class="modal">
                <div class="modal-content blue-text center-align">
                    <div class="row">
                        <div class="col s12 center-align">
                            <span style="font-size:50px;">Ticket</span>
                        </div>
                        <div class="col s12 center-align">
                            <span style="font-size: 80px; font-weight: 900">A002</span>
                        </div>
                    </div>
                </div>

            </div>
    </main>
@endsection
