$(function(){

	prettyPrint();

	var api_base_url = '/';
	var nav = $("#navigation");

	$('.waypoint').waypoint(function(direction) {
		if (direction === 'down') {

		var anchor = '#' + $(this).attr('name');

			$.each($('#navigation a'), function(){
				if($(this).attr('href') == anchor){
					$('#navigation li').removeClass();
					$(this).parent().addClass('active');
					$(this).parents('li').addClass('active-section');
				}
			});

		}
	}, {
	offset: '50%'
	}).waypoint(function(direction) {
		if (direction === 'up') {

			var anchor = '#' + $(this).attr('name');

			$.each($('#navigation a'), function(){
					if($(this).attr('href') == anchor){
						$('#navigation li').removeClass();
						$(this).parent().addClass('active');
						$(this).parents('li').addClass('active-section');
					}
			});
		}
	}, {
		offset: '0'
	});


	$('#search').bind('keyup', function(e) {
		var value = $.trim($(this).val());
		if (e.keyCode == 13) {
			if (value == '' || value == null) $('body').unhighlight();
			$('body').unhighlight();
			$('body').highlight(value);
		}

	});

	$('.accordion').accordion({
		collapsible: true,
		active: 1,
		heightStyle: 'content',
		change: function(e, ui){
		    $.waypoints('refresh');
		}
    });

    if ($(window).width() < 568){
    	$('.parameter-header .parameter-name').text('PARAM');
    } else {
    	$('.parameter-header .parameter-name').text('PARAMETER');
    }

	$('.api-explorer-form').on('submit', function(e){

		e.preventDefault();

		var self = $(this);

		var btn = $(this).find('.generate-response-btn');
		btn.val('Loading...');
		btn.prop('disabled', true);
		self.find('.request-uri, .response-status, .response-header, .response-body').remove();

		var uri = $(this).attr('uri');

		$(':input', this).each(function() {
			name = '{' + this.name + '}';
   			uri = uri.replace(name, this.value);
  		});

		var url = api_base_url + uri;
		var type = self.attr('type');
		var data =	self.serialize();



	 	$.ajax({
			url: url,
			type: type,
			dataType: 'json',
			data: data,
			success: function(data, status, request)
	        {
	        	body = JSON.stringify(JSON.parse(request.responseText), undefined, 4);
	        	statusCode = request.statusCode().status;
	        	statusText = request.statusCode().statusText;
	        	responseHeaders = request.getAllResponseHeaders();
	            updateResponse(self, url, body, statusCode, statusText, responseHeaders);
	            enableBtn(btn);

		    },
	        error: function (response, status, request)
	        {
	        	enableBtn(btn);

	        	try {
		        	body = JSON.stringify(JSON.parse(response.responseText), undefined, 4);
	        	} catch (e){
	        		body = response.responseText;
	        	}

	        	statusCode = response.status;
	        	statusText = response.statusText;
	        	responseHeaders = response.getAllResponseHeaders();
	        	updateResponse(self,url, body, statusCode, statusText, responseHeaders);
	        	enableBtn(btn);
	        }
		});

		function enableBtn(btn)
		{
			btn.prop('disabled', false);
			btn.val('Generate Example Response');
		}

		function updateResponse(self, requestUri, responseBody, statusCode, statusText, resonseHeaders)
		{
			self.find('.request-uri, .response-status, .response-header, .response-body').remove();
			requestUrl = stringForResponse('Request URL', 'request-uri request', requestUri);
			responseHeaders = stringForResponse('Response Headers', 'response-header response', responseHeaders);
			responseStatus = stringForResponse('Response Status', 'response-status response', statusCode + ' ' + statusText);
			responseBody = stringForResponse('Response Body', 'response-body response', responseBody);

			self.append(requestUrl);
			self.append(responseHeaders);
			self.append(responseStatus);
			self.append(responseBody);
			prettyPrint();

			// refresh waypoints
			$.waypoints('refresh');
		}

		function stringForResponse(title, className, text)
		{
			var str = 	'<div class="' + className + '">';
			str += 		'<h3>' + title + '</h3>';
			str +=		'<div><pre class="prettyprint linenums">' + text + '</pre> </div> </div>';
			return str;

		}

	});

});
