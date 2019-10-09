function dd_intialize() {
    // Whatever instruction you want to run instantly after the page loads goes here
    console.log("This page is now active");
}

// Every other instructions, variables, functions that will run later goes below

function changeType() {
	var type = dd("input[name='type']:checked").val();

	if (type == "rent") {
		dd("#renting_price").fadeIn(500);
		dd("#normal_price").hide();
	} else {

		dd("#normal_price").fadeIn(500);
		dd("#renting_price").hide();
	}
}
