<div class="card float-end" style="width: 16rem;">
    <div class="card-body">
        <form>
            <label>Buscar</label>
            <input type="text" id="buscar" name="buscar">
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
    </div>
</div>
