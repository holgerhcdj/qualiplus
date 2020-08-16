<style>

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }
body { box-sizing: border-box;margin: 0 auto; overflow: hidden; padding: 25px;}
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

body { 
     width: 8.3in; 
     height:auto;
    }

    table{
       border-collapse: collapse;        
    }
    td{
        font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;       
        font-size:10px;
        border-bottom:dashed 1px #ccc;  
    }
    th{
        font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;       
        font-size:12px; 
        border-bottom:dashed 1px #ccc;  
        padding:5px; 
    }

@media all {
   .saltopagina{
      display: none;
   }
}
   
@media print{

    *{ -webkit-print-color-adjust: exact; }
    html{ background: none; padding: 0; }
    body{ box-shadow: none; margin: 0; }

   .saltopagina{
      display:block;
      page-break-before:always;
   }
}     
</style>

    <table>
      <caption style="background:#eee;padding:5px  ">
        <img src="{{asset('img/logo.png')}}" width="100px" alt="" style="float:left "> 
        <strong>REPORTE GENERAL DE INSTITUCIONES</strong>
        <small style="float:right;font-size:10px  ">Impreso: {{date('Y-m-d H:i')}} </small>
      </caption>
        <thead>
            <tr>
              <th>#</th>
              <th>Asesor</th>
              <th>Descripcion</th>
              <th>Provincia</th>
              <th>Distrito</th>
              <th>Zona</th>
              <th>Regimen</th>
              <th>Telefono</th>
              <th>Email</th>
              <th>Tipo</th>
              <th>Oferta</th>
              <th>Estado</th>
            </tr>
        </thead>
        <tbody>
          <?php $x=1;?>
        @foreach($ins as $instituciones)
            <tr>
              <td>{{$x++}}</td>
            <td>{{ $instituciones->name }}</td>
            <td>{{ $instituciones->INS_DESCRIPCION }}</td>
            <td>{{ $instituciones->INS_PROVINCIA }}</td>
            <td>{{ $instituciones->INS_DISTRITO }}</td>
            <td>{{ $instituciones->INS_ZONA }}</td>
            <td>
                @if($instituciones->INS_REGIMEN==1)
                {{'Costa'}}
                @else
                {{'Sierra'}}
                @endif                
            </td>
            <td>{{ $instituciones->INS_TELEFONO }}</td>
            <td>{{ $instituciones->INS_EMAIL }}</td>
            <td>
                @if($instituciones->INS_TIPO==0)
                {!!'Pública'!!}
                @elseif($instituciones->INS_TIPO==1)
                {{'Privada'}}
                @elseif($instituciones->INS_TIPO==2)
                {{'Municipal'}}
                @endif
            </td>
            <td>{{ $instituciones->INS_OFERTA }}</td>
            <td>
                @if($instituciones->INS_ESTADO==0)
                {{'Activa'}}
                @else
                {{'Inaciva'}}
                @endif

            </td>
            </tr>
        @endforeach
        </tbody>
    </table>

