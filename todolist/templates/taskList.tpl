{include file="templates/header.tpl"}

<h1>{$titulo}</h1>

<h3> Hola!! Acá listo las tareas </h3>

<!-- Inicio del contenido principal -->
<div class="container">
<!-- Content here -->
    <ul class="list-group mt-5">
        {foreach from=$tasks item=$task}
            <li class='list-group-item{if $task->finalizada}-success finalizada{/if}'> <a href="viewTask/{$task->id}"> {$task->titulo|truncate:20|upper} </a> -- {$task->prioridad} - {$task->descripcion} -
                <button class='btn btn-danger'> <a href='borrar/{$task->id}'> BORRAR </a> </button>  - 
                {if !$task->finalizada}
                    <button class='btn btn-primary'> <a href='completar/{$task->id}'> COMPLETAR </a> </button>
                {else}
                    {* <button class='btn btn-primary'> <a href='completar/{$task->id}'> NO completada </a> </button> *}
                {/if}
            </li>
        {/foreach}
        
    </ul>

    <!-- formulario de alta de tarea -->
    <form action="insertar" method="POST" class="my-4" enctype="multipart/form-data">
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>Título</label>
                    <input name="titulo" type="text" class="form-control">
                </div>
            </div>

            <div class="col-3">
                <div class="form-group">
                    <label>Prioridad</label>
                    <select name="prioridad" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Descripcion</label>
            <textarea name="descripcion" class="form-control" rows="3"></textarea>
        </div>

        <input type="checkbox" name="completada" id="completada">

        <input type="file" name="image" id="image">

        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    </form>
</div>

{include file="templates/footer.tpl"}