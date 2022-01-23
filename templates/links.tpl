<!doctype html>
<html lang="en">
{include file="head.tpl"}
<body>
    {include file="navigation.tpl"}
    <article>
        <h2>Fetched from DB</h2>
        <ul>
            {foreach from=$links item=link name=links}
            <li>{$link["title"]} - {$link["url"]}</li>
            {/foreach}
        </ul>
    </article>
</body>