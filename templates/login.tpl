<!doctype html>
<html lang="en">
{include file="head.tpl"}
<body>
    {include file="navigation.tpl"}
    <article>
        <h1>Login</h1>
        <form method="POST">
            <div class="row">
                <label for="username">Username</label>
                <input id="username" name="username" type="text"/>
            </div>
            <div class="row">
                <label for="password">Password</label>
                <input id="password" name="password" type="password"/>
            </div>
            <div class="row">
                <input type="submit" value="Submit"/>
            </div>
        </form>
    </article>
</body>