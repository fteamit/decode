var BookingController = {

    module: 'bookings',
    controller: 'index',
    errLoad: 'Can not load more date!',

    getTimes: function (time, act) {
        var action = 'timesdesktop';
        var url = ROOT_URL + '/' + this.module + '/' + this.controller + '/' + action;
        jQuery.ajax({
            type: "post",
            url: url,
            data: "time=" + time + "&act=" + act,
            success: function (data) {
                var ob = jQuery.parseJSON(data);
                if (!ob.isMore) {
                    alert(BookingController.errLoad);
                } else {
                    jQuery('#times-content').html(ob.html);
                }
            }
        });
    }
}