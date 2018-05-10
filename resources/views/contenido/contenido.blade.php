@extends('principal')
@section('contenido')

@if(Auth::check())
        
        @if (Auth::user()->idrol == 1)

                <template v-if="menu==0">
                        <h1>ESCRITORIO 00</h1>
                </template>

                <template v-if="menu==1">
                        <h1>CONTRATO menu 01</h1>
                </template>
                
                <template v-if="menu==2">
                        <h1>FICHA TECNICA menu 02</h1>
                </template>

                <template v-if="menu==3">
                        <h1>CRONOGRAMA menu 03</h1>
                </template>

                <template v-if="menu==4">
                        <h1>ORDEN DE SERVICIO menu 04</h1>
                </template>

                <template v-if="menu==5">
                        <categoria></categoria>
                </template>

                <template v-if="menu==6">
                        <articulo></articulo>
                </template>

                <template v-if="menu==7">
                        <h1>MOVIMIENTOS INVENTARIOS menu 07</h1>
                </template>

                <template v-if="menu==8">
                        <ingreso></ingreso>
                </template>

                <template v-if="menu==9">
                        <proveedor></proveedor>
                </template>

                <template v-if="menu==10">
                        <h1>ORDEN DE COMPRA menu 010</h1>
                </template>

                <template v-if="menu==11">
                        <venta></venta>
                </template>
        
                <template v-if="menu==12">
                        <cliente></cliente>
                </template>
        
                <template v-if="menu==13">
                        <user></user>
                </template>
        
                <template v-if="menu==14">
                        <rol></rol>
                </template>
        
                <template v-if="menu==15">
                        <h1>REPORTE INGRESO menu 015</h1>
                </template>
        
                <template v-if="menu==16">
                        <h1>REPORTE DE VENTAS menu 016</h1>
                </template>
        
                <template v-if="menu==17">
                        <h1>OTROS REPORTES menu 017</h1>
                </template>
        
                <template v-if="menu==18">
                        <h1>AYUDA menu 018</h1>
                </template>
        
                <template v-if="menu==19">
                        <h1>ACERCA DE... menu 019</h1>
                </template>

        @elseif (Auth::user()->idrol == 2)

                <template v-if="menu==0">
                        <h1>ESCRITORIO 00</h1>
                </template>

                <template v-if="menu==1">
                        <h1>CONTRATO menu 01</h1>
                </template>
                
                <template v-if="menu==2">
                        <h1>FICHA TECNICA menu 02</h1>
                </template>

                <template v-if="menu==3">
                        <h1>CRONOGRAMA menu 03</h1>
                </template>

                <template v-if="menu==4">
                        <h1>ORDEN DE SERVICIO menu 04</h1>
                </template>

                <template v-if="menu==11">
                        <venta></venta>
                </template>
        
                <template v-if="menu==12">
                        <cliente></cliente>
                </template>

                <template v-if="menu==16">
                        <h1>REPORTE DE VENTAS menu 016</h1>
                </template>

                <template v-if="menu==18">
                        <h1>AYUDA menu 018</h1>
                </template>
        
                <template v-if="menu==19">
                        <h1>ACERCA DE... menu 019</h1>
                </template>

        @elseif (Auth::user()->idrol == 3)

                <template v-if="menu==5">
                        <categoria></categoria>
                </template>

                <template v-if="menu==6">
                        <articulo></articulo>
                </template>

                <template v-if="menu==7">
                        <h1>MOVIMIENTOS INVENTARIOS menu 07</h1>
                </template>

                <template v-if="menu==8">
                        <ingreso></ingreso>
                </template>

                <template v-if="menu==9">
                        <proveedor></proveedor>
                </template>

                <template v-if="menu==10">
                        <h1>ORDEN DE COMPRA menu 010</h1>
                </template>
                
                <template v-if="menu==15">
                        <h1>REPORTE INGRESO menu 015</h1>
                </template>

                <template v-if="menu==18">
                        <h1>AYUDA menu 018</h1>
                </template>
        
                <template v-if="menu==19">
                        <h1>ACERCA DE... menu 019</h1>
                </template>
        @else

        @endif

@endif
@endsection