function buildHTML(response){
	
	var response_section = document.getElementById("search_results");
	var articles='';
	
	response.forEach(function(element){
		articles += '<article class=\"article_box\">\n';
		articles += '<a href=\"index.php/article?id=' + element.id + '\">';
		articles += '\t<img src=\"' + element.image + '\" class=\"cover_img\">\n';
		articles += '\t<section class=\"article_info\">\n';
		articles += '\t\t<p>' + element.name + '</p>\n';
		articles += '\t\t<p>' + element.price + '€' + '<\p>\n';
		articles += '\t</section>\n';
		articles += '</a>'
		articles += '</article>';
	});
	response_section.innerHTML = articles;
}


function search(){
	var xmlhttp = new XMLHttpRequest();
	if(xmlhttp){
		var user_search = document.getElementById("search_bar").value;
		xmlhttp.open("GET", "/ggshopmvc/models/search.php?terms=" + user_search, true);
		xmlhttp.send();
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				var response = JSON.parse(xmlhttp.responseText);
				buildHTML(response);
			}
		}
	}else{
		console.log("There is no XMLHttpRequest object!");
	}
}
