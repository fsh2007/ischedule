jQuery(function($){
    var params = birs_params;
    var ajaxUrl = params.ajax_url;
    var allSchedule = params.all_schedule;
    var servicePriceMap = params.service_price_map;
    var serviceMap = params.service_map;
    var serverGmtOffset = params.gmt_offset;
    var allDayoffs = params.all_dayoffs;
    
    function getServerNow() {
        return birchschedule.getServerNow(serverGmtOffset);
    }
    
    /*
    function changeServiceOptions() {
        var serviceId = $('#birs_appointment_service').val();
        var locationId = $('#birs_appointment_location').val();
        var avaliableServices = params.location_service_map[locationId];
        $('#birs_appointment_service').empty();
        $.each(params.service_order, function(index, key) {
            if(_(avaliableServices).has(key)) {
                var value = avaliableServices[key];
                $('#birs_appointment_service').
                    append($("<option></option>").attr("value", key).text(value));
            }
        });
        $('#birs_appointment_service').val(serviceId).trigger('change');
    }*/
    
    function changeStaffOptions() {
        var locationId = $('#birs_appointment_location').val();
        var clientTypeId = $('#birs_appointment_client_type').val();
        var serviceId = 0;
        var serviceStaffMap = null;
        var locationStaffMap = params.location_staff_map[locationId];
        $("input[name='birs_appointment_service[]']").each(function(){
            serviceId = $(this).val();
        	serviceStaffMap = params.service_staff_map[serviceId];
            birchschedule.changeStaffOptions(serviceStaffMap, locationStaffMap, params.staff_order);
        });
    }
    
    function changeServiceOptions(){
    	var clientTypeId = $('#birs_appointment_client_type').val();
        var locationId = $('#birs_appointment_location').val();
        var avaliableServices = params.location_service_map[locationId];
    	var services = params.service_map[clientTypeId];
    	var htmlStr = "";
    	var idv = "birs_appointment_service_";
    	var seperator = "-";
    	$('#birs_appointment_service_div').html('');
    	$.each(services, function(key, values){
            if(_(avaliableServices).has(key)) {
	    		idv = idv + clientTypeId + "_" + key;
	    		if(values['service_price_type'] == 'dont-show'){
	    			seperator = "";
	    		}
	    		
	    		htmlStr = "<input type='checkbox' name='birs_appointment_service[]' id='" + idv + "' value='" + key + "' />";
	    		htmlStr = htmlStr + values['service_title'] + "(" + values['service_length'] + " mins) " + seperator + values['service_price'];
	    		htmlStr = htmlStr + "<br/>";
	    		
	    		$('#birs_appointment_service_div').append(htmlStr);
	    		$('#' + idv).on('click', function(){
	    			changeStaffOptions();
	    			return true;
	    		});
            }
    	});
    }

    function getTimeOptions(){
        $('#birs_appointment_timeoptions').html('');
        $('#birs_appointment_time').val('');
        var postData = $('#birs_appointment_form').serialize();
        postData += '&' + $.param({
            action: 'birs_get_avaliable_time'
        });
        $.post(ajaxUrl, postData, function(data, status, xhr){
            $('#birs_appointment_timeoptions').html(data);
            $('#birs_appointment_timeoptions a').click(function() {
                $('#birs_appointment_time').val($(this).attr('data-time'));
                $('#birs_appointment_timeoptions a').removeClass('selected');
                $(this).addClass('selected');
            });
        }, 'html');
    }
    function changeAppointmentPrice() {
    	var serviceId = 0;
    	var price = 0;
        $("input[name='birs_appointment_service[]']").each(function(){
        	if( $(this).attr("checked") == true ){
        		serviceId = $(this).val();
        		price = price + servicePriceMap[serviceId].price;
        	}
        });
       	$('#birs_appointment_price').val(price);  
    }

    function changeAppointmentDuration() {
    	var clientTypeId = $('#birs_appointment_client_type').val();
        var serviceDurationMap = params.service_duration_map;
        var serviceId = 0;
        var duration = 0;
        $("input[name='birs_appointment_service[]']").each(function(){
        	if( $(this).attr("checked") == true ){
        		serviceId = $(this).val();
        		duration = duration + serviceDurationMap[clientTypeId][serviceId].duration;
        	}
        });
        $('#birs_appointment_duration').val(duration);
    }

    function isDayAvaliableByBookingPreferences(date, futureTime, cutOffTime) {
        var serverNow = getServerNow();
        var timeOfServer = serverNow.getTime();
        var timeOfSelect = date.getTime();
        var hoursBetween = (timeOfSelect - timeOfServer) / (1000 * 60 * 60) + 24; 
        var daysBetween = hoursBetween / 24;
        if(daysBetween > futureTime || hoursBetween < cutOffTime) {
            return false;
        }
        return true;
    }
    function isDayAvaliableBySchedules(date, day, locationId, staffId) {
        if(!_.has(allSchedule, staffId)) {
            return false;
        }
        var schedules_of_weekday = allSchedule[staffId][locationId]['schedules'][day];
        var avalibility = false;
        _.each(schedules_of_weekday, function(schedule, index) {
            var selectedDay = $.datepicker.formatDate('yy-mm-dd', date);
            var dateStart = $.datepicker.formatDate('yy-mm-dd', 
                    $.datepicker.parseDate('mm/dd/yy', schedule['date_start']));
            var dateEnd = $.datepicker.formatDate('yy-mm-dd', 
                    $.datepicker.parseDate('mm/dd/yy', schedule['date_end']));
            if((selectedDay >= dateStart || !dateStart) && 
                (selectedDay <= dateEnd || !dateEnd)) {
                avalibility = true;    
            }
        });
        return avalibility;
    }
    function isDayAvaliableByDaysOff(date, staffId) {
        if(_.has(allDayoffs, staffId)) {
            var dayoffsJson = allDayoffs[staffId];    
            var dayoffs = $.parseJSON(dayoffsJson);
            var selectedDay = $.datepicker.formatDate('mm/dd/yy', date);
            if(dayoffs && _.contains(dayoffs, selectedDay)) {
                return false;
            }
        }
        return true;
    }
    function showDatepicker() {
        var options = $.extend(params.datepicker_i18n_options, {
            changeMonth: false,
            changeYear: false,
            'dateFormat': 'mm/dd/yy',
            beforeShowDay: function(date){
                var serverNow = getServerNow();
                var serverToday = $.datepicker.formatDate('yy-mm-dd', serverNow);
                var selectedDay = $.datepicker.formatDate('yy-mm-dd', date);
                if(serverToday > selectedDay) {
                    return [false, ""];
                }
                var day = date.getDay();
                var locationId = $('#birs_appointment_location').val();
                var staffId = $('#birs_appointment_staff').val();
                if(!isDayAvaliableByDaysOff(date, staffId)) {
                    return [false, ""];
                }
                if(!isDayAvaliableBySchedules(date, day, locationId, staffId)) {
                    return [false, ""];
                }
                if(!isDayAvaliableByBookingPreferences(date, params.future_time,
                    params.cut_off_time)) {
                    return [false, ""];
                }
                return [true, ""];
            },
            onSelect: function(dateText) {
                $('#birs_appointment_date').val(dateText);
                getTimeOptions();
            }
        });
        $('#birs_appointment_datepicker').datepicker(options);
    }
    function refreshDatetime() {
        $('#birs_appointment_datepicker').datepicker('destroy');
        showDatepicker();
        $('#birs_appointment_timeoptions').html('');
        $('#birs_appointment_time').val('');
        $('#birs_appointment_date').val('');
    }
    function scrollTo(selector, duration) {
        if(!duration) {
            duration = 600;
        }
        $('html, body').animate({
             scrollTop: $(selector).offset().top
        }, duration);
    }
    
    //start execute functions
    if(!birchschedule.isMobile()) {
        var serviceWidth = "resolve";
        $('#birs_appointment_form select').select2({
            width: serviceWidth
        });
    }
    changeServiceOptions();
    //changeStaffOptions();    
    //changeAppointmentPrice();
    //changeAppointmentDuration();
    showDatepicker();
    $('#birs_appointment_datepicker').datepicker("setDate", getServerNow());
    $('#birs_appointment_client_type').on('change', function(){
    	changeServiceOptions();
        changeAppointmentPrice();
        changeAppointmentDuration();
    	refreshDatetime();
    });
    $('#birs_appointment_location').on('change', function(){
        //changeServiceOptions();
        changeStaffOptions();
        changeAppointmentPrice();
        changeAppointmentDuration();
        refreshDatetime();
    });
    /*
    $('#birs_appointment_service').on('change', function(){
        changeStaffOptions();
        changeAppointmentPrice();
        changeAppointmentDuration();
        refreshDatetime();
    });*/
    $('#birs_appointment_staff').on('change', function(){
        refreshDatetime();
    });
    $('#birs_book_appointment').click(function(){
        var postData = $('#birs_appointment_form').serialize();
        postData += '&' + $.param({
            action: 'birs_save_appointment_frontend'
        });
        $.post(ajaxUrl, postData, function(data, status, xhr){
            data = '<div>' + data + '</div>';
            var doc = $(data).find('#birs_response');
            if(doc.find('#birs_success').length > 0){
                $('#birs_please_wait').hide("slow");
                if(doc.find('#birs_success_text').length > 0) {
                    $('.birs_error').hide("");
                    $('#birs_booking_box').hide();
                    $('#birs_booking_success').html(doc.find('#birs_success_text').html());
                    $('#birs_booking_success').show("slow", function() {
                        scrollTo("#birs_booking_success", 10);
                    });
                    return;
                }
                if(doc.find('#birs_success_redirect').length > 0) {
                    window.location = doc.find('#birs_success_redirect').html();
                    return;
                }
            } else {
                $('.birs_error').hide();
                doc.find('#birs_errors p').each(function(idx, elt){
                    var tagId = $(elt).attr('id') + '_error';
                    $('#' + tagId).html($(elt).text());
                    $('#' + tagId).show("slow");
                });
                $('#birs_please_wait').hide("slow", function() {
                    scrollTo($(".birs_error:visible:first").
                        parentsUntil("#birs_appointment_form",
                            ".birs_form_field"));
                });
                return;
            }
        }, 'text');
        $('.birs_error').hide("slow");
        $('#birs_please_wait').show("slow");
    });

});