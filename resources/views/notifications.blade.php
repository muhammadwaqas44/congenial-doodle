<script>

    $(document).ready(function () {
        $('#bell-icon').click(function () {
            $('.notify-number').css('display', 'none');
        });

        $(window).load(function () {
            getNotifications();
        });

        function getNotifications() {
            var url = "{{route('notifications')}}";
            $.ajax({
                type: 'GET',
                url: url,
                success: function (response, status) {
                    if (response.result == 'success') {
                        $('.notify-number').text(response.data.length);
                        $('.notify-number2').text(response.data.length);
                        $('.notify-number').css('display', 'block');
                        // console.log(response.data);
                        let my_html='';
                        $.each(response.data, function(key,value){
                            var url = "{{route('single-notifications',':id' )}}";
                            url = url.replace(':id', value.id);
                            my_html += '\
                                <a href="'+ url+ '" class="dropdown-item notify-item">\
                                    <p class="notify-details">\
                                        <b>'+value.type +'</b>\
                                        <span> '+value.message +'</span>\
                                        <small class="text-muted">'+ value.created_at +'</small>\
                                    </p>\
                                </a>\
                                ';
                        });
                        if(response.data.length !== 0){
                            $('.single-notifi').html(my_html);
                        }else{
                            var noReord = '<h6>No Notification</h6>';
                            $('.single-notifi').html(noReord);
                        }

                    }
                    if (response.result == 'error') {
                    }
                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
                        window.toastr.error(value);
                    });
                }
            });
            setTimeout(function () {
                getNotifications();
            }, 5000);
        }
    });

</script>

