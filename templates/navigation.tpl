<nav>
    {if $is_user_logged_in eq true}
    <ul>
        <li>{if $current_page eq "index"}<span>Home</span>{else}<a href="{$abs_app_url}">Home</a>{/if}</li>
        <li>{if $current_page eq "links"}<span>Links</span>{else}<a href='{$abs_app_url}/links'>Links</a>{/if}</li>
        <li>{if $current_page eq "article"}<span>Article</span>{else}<a href='{$abs_app_url}/article'>Article</a>{/if}</li>
        <li>{if $current_page eq "user"}<span>User</span>{else}<a href='{$abs_app_url}/user'>User</a>{/if}</li>
        <li>{if $current_page eq "server"}<span>Server</span>{else}<a href='{$abs_app_url}/server'>Server</a>{/if}</li>
        <li><a href="{$abs_app_url}/logout">Logout</a></li>
    </ul>
    {else}
    <ul>
        <li>{if $current_page eq "index"}<span>Home</span>{else}<a href="{$abs_app_url}">Home</a>{/if}</li>
        <li>{if $current_page eq "links"}<span>Links</span>{else}<a href='{$abs_app_url}/links'>Links</a>{/if}</li>
        <li>{if $current_page eq "article"}<span>Article</span>{else}<a href='{$abs_app_url}/article'>Article</a>{/if}</li>
        <li>{if $current_page eq "server"}<span>Server</span>{else}<a href='{$abs_app_url}/server'>Server</a>{/if}</li>
        <li>{if $current_page eq "login"}<span>Login</span>{else}<a href="{$abs_app_url}/login">Login</a>{/if}</li>
    </ul>
    {/if}
</nav>