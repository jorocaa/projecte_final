<div class="card float-end menulateral" style="width: 16rem;">
    <div class="card-body">
        <form method="GET" action="{{ route('searched') }}">
            <label>Buscar</label><br>
            <input type="text" id="buscar" name="buscar" style="width: 150px">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
        </form>
        </br>

        <a href="{{route('randompage')}}">Post Aleatori</a><br/>

        @if(isset(Auth::user()->usertype))
            <a href="{{ route('bcreate')}}">Crear Post</a><br/>
            <a href="{{ route('blogspropis.index')}}">Llistar posts propis</a><br/>

        @endif

        <form method="GET" action="{{ route('near.index') }}">
            <a href="route('near.index')"
                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('A Prop Meu') }}
            </a>
            <input type="hidden" id="l1" name="l1" value="">
            <input type="hidden" id="l2" name="l2" value="">
        </form>
        @if(isset(Auth::user()->usertype))
            <a href="{{ route('incidencies.create')}}">Crear incidencia</a><br/>
        @endif
    </div>
</div>
<script>
    if(!navigator.geolocation) {
  } else {
    navigator.geolocation.getCurrentPosition(godyea)
  }
    function godyea(position) {
    const latitude  = position.coords.latitude;
    const longitude = position.coords.longitude;
    document.getElementById("l1").value=latitude
    document.getElementById("l2").value=longitude
  }
</script>
