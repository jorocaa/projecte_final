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
        <a href="#">Post Aleatori</a> </br>
        @if(isset($_SESSION['tipus']))
            <a href="crear_post">Crear Post</a> </br>
            <a href="#">Llistar Posts Propi</a> </br>
        @endif
    </div>
</div>