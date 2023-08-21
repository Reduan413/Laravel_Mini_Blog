function getServicesData(){
	axios.get('/getServicesData').then(function(response){

		var jsonData=response.data;
		
		$.each(jsonData,function(i,item){
			$('<tr>').html(
				"<td>"+jsonData[i].id +"</td>"+
				"<td><div class='avatar'><img src="+jsonData[i].service_img +" </div></td>"+
				"<td>"+jsonData[i].service_title +"</td>"+
				"<td>"+jsonData[i].service_text +"</td>"+
				"<td><button class='btn btn-primary'>Edit item</button></td>"+
				"<td><button class='btn btn-danger'>Delete item</button></td>"

			).appendTo('#service_table');
		});
	})
	.catch(function(error){

	});
}