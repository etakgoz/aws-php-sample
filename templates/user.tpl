<!doctype html>
<html lang="en">
{include file="head.tpl"}
<body>
    {include file="navigation.tpl"}
    <article>
        <h1>User</h1>
        {if $is_user_logged_in eq true}
        <p>Is User Logged In?: Yes</p>
        <p>Username: {$logged_in_username}</p>
        {else}
        <p>Is User Logged In?: No</p>
        {/if}
    </article>
</body>