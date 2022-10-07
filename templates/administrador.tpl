{include file="header.tpl"}
{if(!isset($smarty.session.USER_EMAIL))}
   <form method="POST" action="validate">
        <div class="mb-3">
            <label for="email" class="form-label">Email </label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-outline-secondary">INGRESAR</button>
        {if $error}
            <div class= "alert alert-danger mt-3">
                {$error}
            </div>
        {/if}    
    </form>
{/if}


{include file="templates/footer.tpl"}