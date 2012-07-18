<html>
<head>
{include file="head.tpl"}
</head>

<body>
{include file="header.tpl"}
{include file="menu.tpl"}
{if isset($mensaje)}
	{include file="mensaje.tpl"}
{/if}
{if isset($vista)}
	{include file="$vista.tpl"}
{/if}
{include file="footer.tpl"}
</body>
</html>
