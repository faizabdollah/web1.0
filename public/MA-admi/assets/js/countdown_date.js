/*------------------------------------------------------------------
	Countdown
	-------------------------------------------------------------------*/
 
	var endDate = "December 22, 2020";
	$('#countdown').countdown({
	  date: endDate,
	  render: function(data) {
		$(this.el).html("<ul><li><div class='time-box'> <strong>" + this.leadingZeros(data.hours, 2) + "</strong> <span>Hours</span></div></li> <li><div class='time-box'> <strong>" + this.leadingZeros(data.min, 2) + "</strong><span>Minutes</span></div></li> <li><div class='time-box'> <strong>" + this.leadingZeros(data.sec, 2) + "</strong><span>Seconds</span></div><li></ul>");
	  }
	});	
	
	var endDate = "December 22, 2020";
	$('#deals_days').countdown({
	  date: endDate,
	  render: function(data) {
		$(this.el).html("<ul class='list-style-none'><li>" + this.leadingZeros(data.hours, 2) + "<span>:</span></li> <li>" + this.leadingZeros(data.min, 2) + "<span>:</span></li> <li>" + this.leadingZeros(data.sec, 2) + "<li></ul>");
	  }
	});	
	
	var endDate = "December 22, 2020";
	$('#deals_days_2').countdown({
	  date: endDate,
	  render: function(data) {
		$(this.el).html("<ul><li><div class='time-box'><strong>" + this.leadingZeros(data.hours, 2) + "</strong> <span>Hours</span></div></li> <li><div class='time-box'><strong>" + this.leadingZeros(data.min, 2) + "</strong><span>Minutes</span></div></li> <li><div class='time-box'><strong>" + this.leadingZeros(data.sec, 2) + "</strong><span>Seconds</span></div></li></ul>");
	  }
	});	