function loadData() {
var heading = '<tr><th>Title</th> <th>Author</th> <th>Year</th> <th>Price</td></th>';
			$("table").append(heading);
debugger ;
	$.ajax({
		 url: "books.xml",
		 dataType: "xml",
		 success: function(data) {
		    alert("file is loaded");
		    $(data).find('book').each(function(){
			var title = $(this).find('title').text();
			var authorText = '';
			$(this).find('author').each(function(){
			if(authorText === ''){
			authorText =  $(this).text();
			}else{
			authorText = authorText + ', ' + $(this).text();
			}
			});
			
			var year =$(this).find('year').text();
			var price = $(this).find('price').text();
			var info = '<tr><td>'+title+'</td> <td> '+authorText+' </td> <td> '+year+' </td> <td> '+price+' </td></tr>';
			$("table").append(info);
		        });

		 },
		 error: function() { alert("error loading file");  }
     });
}