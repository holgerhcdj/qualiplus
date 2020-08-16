<div class="card" style="width: 50%;border:solid 1px #eee;padding:15px 5px;border-radius:5px;   ">
  <div class="card-body">
    <h5 class="card-title "><strong>{{ $comunicaciones->CON_NOMBRES.' ('.$comunicaciones->CON_CARGO.')' }} </strong></h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $comunicaciones->INS_DESCRIPCION }}</h6>
    <p class="card-text">{{$comunicaciones->COM_OBS}}</p>
    <span class="card-link text-primary">{{$comunicaciones->COM_MOTIVO}}</span>
    <br>
    <span class="card-link text-primary">{{$comunicaciones->COM_FECHA.' '.$comunicaciones->COM_HORA}}</span>
  </div>
</div>
