var BookingController = {

    module: 'bookings',
    controller: 'index',

    getTimes: function (time, act, gi) {
        var cl = this;
        var action = 'timesdesktop';
        var url = ROOT_URL + '/' + this.module + '/' + this.controller + '/' + action;
        var dt = "time=" + time + "&act=" + act;
        if (gi !== undefined) {
            dt += "&gId=" + gi;
        }
        jQuery.ajax({
            type: "post",
            url: url,
            data: dt,
            success: function (data) {
                var ob = jQuery.parseJSON(data);
                if (!ob.isCorrect) {
                    cl.notice(ob.error);
                } else {
                    jQuery('#booking-container').html(ob.html);
                }
            }
        });
    },

    bookingform: function (gd, tm, d) {
        var act = 'bookingform';
        var url = ROOT_URL + '/' + this.module + '/' + this.controller + '/' + act;
        jQuery.ajax({
            type: "post",
            url: url,
            data: "gameId=" + gd + "&time=" + tm + "&day=" + d,
            success: function (data) {
                var ob = jQuery.parseJSON(data);
                jQuery("body").addClass("booking-form");
                jQuery('#td-content').html(ob.html);
            }
        });
    },

    save: function (fId) {
        var act = 'save';
        var url = ROOT_URL + '/' + this.module + '/' + this.controller + '/' + act;
        jQuery.ajax({
            type: "post",
            url: url,
            data: $(fId).serialize(),
            success: function (data) {
                var ob = jQuery.parseJSON(data);
                if (ob.isCorrect == 1) {
                    jQuery('#confirm_booking').show();
                    jQuery('html, body').animate({
                        scrollTop: jQuery('#td-game-name').offset().top
                    }, 1000);
                    setTimeout(function () {
                        window.location = ROOT_URL;
                    }, 5000);
                }
            }
        });
    },

    notice: function (mes) {
        return alert(mes);
    }

}