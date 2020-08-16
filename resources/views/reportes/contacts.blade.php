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
        <strong>REPORTE GENERAL DE CONTACTOS</strong>
        <small style="float:right;font-size:10px  ">Impreso: {{date('Y-m-d H:i')}} </small>
      </caption>
        <thead>
            <tr>
                <th>#</th>
       <th>Institución</th>
        <th>Nombres del contacto</th>
        <th>Cargo</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Principal</th>
        <th>Estado</th>
      </tr>
        </thead>
        <tbody>
            <?php $c=1;?>
        @foreach($con as $contactos)
            <tr>
                <td>{{$c++}}</td>
            <td>{{ $contactos->INS_DESCRIPCION }}</td>
            <td>{{ $contactos->CON_NOMBRES }}</td>
            <td>{{ $contactos->CON_CARGO }}</td>
            <td>{{ $contactos->CON_TELEFONO }}</td>
            <td>{{ $contactos->CON_EMAIL }}</td>
            <td>
                {{ $contactos->CON_PRINCIPAL==1?'SI':'NO'   }}
            </td>
            <td>{{ $contactos->CON_ESTADO==0?'Activo':'Inactivo'   }} </td>
            </tr>
        @endforeach
        </tbody>
    </table>

