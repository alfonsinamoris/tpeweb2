{include file="header.tpl"}
     <form method='POST' action="editarcat">
         <input type="hidden" name="id" value="{$tipo->id_tipo}">
         <input class="form-control" placeholder="editar categoria" name="tipo" value="{$tipo->tipo}">
         <button class="btn btn-outline-secondary" type="submit">editar</button>
     </form>
 {include file="templates/footer.tpl"}