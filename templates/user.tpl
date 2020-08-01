<!doctype html>
<html lang="en">
{include file="head.tpl"}
<body>
    {include file="navigation.tpl"}
    <article>
        <h1>User</h1>
        <p>Is User Logged In?:  <?php echo $isUserLoggedIn; ?></p>
        <p>Username:  <?php echo $username; ?></p>
    </article>
</body>