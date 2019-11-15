
$(document).ready(function (){
	timerload();
	let ids = [];
	function timerload() {
		$.ajax({
			url: 'timerload.php',
			type: 'POST',
			success: function(data) {
				data = jQuery.parseJSON(data);

				$.each(data, function(i, item){
					if (jQuery.inArray(item.id, ids) == -1) {
						ids.push(item.id);
						$('#timers').append("<tr data-id=" + item.id + ">" + "<th>" + item.id + "</th>" + "<th>" + item.endtime + "</th>" + "<th>" + item.work + "</th>" + "<th>" + "<a class='button__edit' id=" + item.id + ">Edit</a>" + "</th>" + "</th>"  + "</tr>");
					} else {
						$("tr[data-id=" + item.id + "]").html("<th>" + item.id + "</th>" + "<th>" + item.endtime + "</th>" + "<th>" + item.work + "</th>" + "<th>" + "<a class='button__edit' id=" + item.id + ">Edit</a>" + "</th>" + "</th>");
					};
				});
			}
		});
	};
	$('#form').submit(function(event) {
		event.preventDefault();
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function() {
				$('#form').trigger("reset");
				$(".popup__edit").toggle();
				timerload();
				alertsuccess();
			},
		});
		
	});
	$("#timerload").click(function (){
		timerload();
	});
	$( "#timers" ).on('click', '.button__edit', function() {
		$(".popup__edit").toggle();
		$("#id").attr("value", this.id);
		$(".popup__edit h2 span").html(" | id=" + this.id + "");
	});
	$( ".close" ).click(function() {
		$(".popup__edit").hide();
	});
	function alertsuccess() {
		$("#success").fadeToggle("slow");	
		setTimeout(function(){
			$("#success").fadeToggle("slow");			
		}, 5000);		
	
	};

});
