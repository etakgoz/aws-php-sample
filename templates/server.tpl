<!doctype html>
<html lang="en">
{include file="head.tpl"}
<body>
    {include file="navigation.tpl"}
    <article>
        <h2>Server Variable</h2>
        <dl>
            {foreach from=$server_vars key=name item=value}
            <div class="dl-item">
                <dt>{$name}</dt>
                <dd>{$value}</dd>
            </div>
            {/foreach}
        </dl>
    </article>
</body>