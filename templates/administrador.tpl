{include file="header.tpl"}
<form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<h2> Si estas leyendo esto, el template de administrador se copio en la vista de las propiedades, nadie sabe todavia por qué </h2>

<br> 
<h6> ojala sea un error por incluir mal smarty, ah seguia </h6>

{* todavia no sé por qué muestra esta mierda en los detalles de las propiedades...
te toca resolverlo a vos y estresarte un poquito *}

{include file="templates/footer.tpl"}