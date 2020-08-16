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

    <table style="width:100% ">
      <caption style="background:#eee;padding:5px  ">
        <img src="{{asset('img/logo.png')}}" width="100px" alt="" style="float:left "> 
        <strong>REPORTE GENERAL DE COMUNICACIONES</strong>
        <small style="float:right;font-size:10px  ">Impreso: {{date('Y-m-d H:i')}} </small>
      </caption>
        <thead>
            <tr>
              <th>#</th>
              <th>Institución</th>
              <th>Contacto</th>
              <th>Motivo</th>
              <th>Observacion</th>
              <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php $x=1?>
        @foreach($comunicaciones as $comunicaciones)
            <tr>
                <td>{{$x++}}</td>
            <td>{{ $comunicaciones->INS_DESCRIPCION }}</td>
            <td>{{ $comunicaciones->CON_NOMBRES.' / '.$comunicaciones->CON_CARGO }}</td>
            <td>{{ $comunicaciones->COM_MOTIVO }}</td>
            <td>{{ $comunicaciones->COM_OBS }}</td>
            <td>{{ $comunicaciones->COM_FECHA.' '.$comunicaciones->COM_HORA }}</td>
            </tr>
        @endforeach
        </tbody>    
      </table>

