$(document).ready(function()
{
	$(".result").on("click", function()
	{
		var id = $(this).attr("linkId");
		var url = $(this).attr("href");
		
		if (!id) 
		{
			alert("data-linkId atributo não encontrado");
		}

		increaseLinkClicks(id, url);

		return false;
	});
});


function increaseLinkClicks(LinkId, url)
{
	$.post("includes/ajax/updateLinkCount.php", {linkId, linkId})
	.done(function(result)
	{
		if(result != "")
		{
			alert(result);
			return;
		}

		window.location.href = url;
	});
}