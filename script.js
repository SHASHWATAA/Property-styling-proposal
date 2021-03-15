

var json = [['Text', 'Address'], ['Text-Area', 'Enter notes here..'], ['Number', 'Fee'], ['Checkbox', 'GST inc'], ['Number', 'Delivery Fee'], ['Number', 'Weekly Hire Amounts'], ['Checkbox', 'Pay Options'], ['Submit', 'Submit']]


for (var i = 0; i < json.length; i++) {
	var type = json[i][1]
	var name = json[i][0]
	
		$("#form-ul").append(`<li><div class="grid grid-2"><input type="${type}" value="" name="${name}" placeholder="${name}"></div></li>`);
		// $("#form-ul").append('<input type="button" value="button">');
	}

