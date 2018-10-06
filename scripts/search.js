function search(){
	var xmlhttp = new XMLHttpRequest();
	if(xmlhttp){
		var response_section = document.getElementById("search_results");
		var user_search = document.getElementById("search_bar").value;
		xmlhttp.open("GET", "/ggshopmvc/models/search.php?terms=" + user_search, true);
		xmlhttp.send();
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				var response = JSON.parse(xmlhttp.responseText);
				response.forEach(function(element){

					var new_article = document.createElement("article");//create an <article> element.
					var article_att = document.createAttribute("class");
					article_att.value = "game_box";
					new_article.setAttributeNode(article_att);

					var new_img = document.createElement("img");//creates an <img> element.
					var img_att = document.createAttribute("src");
					var img_att_clss = document.createAttribute("class");
					img_att.value = element.cover_img_link;
					img_att_clss.value = "cover_img";
					new_img.setAttributeNode(img_att);
					new_img.setAttributeNode(img_att_clss);

					var new_section = document.createElement("section");//creates a <section> element that contains the info of the item.
					var section_att = document.createAttribute("class");
					section_att.value = "game_info";
					new_section.setAttributeNode(section_att);
					
					var new_name = document.createElement("p");//creates a <p> element.
					new_name.innerHTML = element.name;
					new_section.appendChild(new_name);

					var new_price = document.createElement("p");//creates a <p> element for the price of the item.
					new_price.innerHTML = element.price + '€';
					new_section.appendChild(new_price);


					new_article.appendChild(new_img);
					new_article.appendChild(new_section);
					document.getElementById("search_results").appendChild(new_article);

					});
			}
		}
	}else{
		console.log("There is no XMLHttpRequest object!");
	}
}
