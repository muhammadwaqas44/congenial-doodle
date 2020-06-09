<script src="{{asset('dashboard_assets/js/modernizr.min.js')}}"></script>

<script src="{{asset('dashboard_assets/js/jquery.min.js')}}"></script>

<script src="{{asset('dashboard_assets/js/popper.min.js')}}"></script>

<script src="{{asset('dashboard_assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('dashboard_assets/js/detect.js')}}"></script>

<script src="{{asset('dashboard_assets/js/fastclick.js')}}"></script>

<script src="{{asset('dashboard_assets/js/jquery.blockUI.js')}}"></script>

<script src="{{asset('dashboard_assets/js/jquery.nicescroll.js')}}"></script>

<script src="{{asset('dashboard_assets/js/script.js')}}"></script>

<script src="{{asset('dashboard_assets/js/chart.min.js')}}"></script>

<script src="{{asset('dashboard_assets/js/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('dashboard_assets/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('dashboard_assets/js/jquery.waypoints.min.js')}}"></script>

<script src="{{asset('dashboard_assets/js/jquery.waypoints.min.js')}}"></script>

<script src="{{asset('dashboard_assets/js/jquery.counterup.min.js')}}"></script>

<script src="{{asset('dashboard_assets/js/toastr.min.js')}}"></script>
<script src="{{asset('dashboard_assets/js/jquery.datetimepicker.full.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


<script>

    $(document).ready(function () {
        $('#bell-icon').click(function () {
            $('.notify-number').css('display', 'none');
        });

        $(window).load(function () {
            getNotifications();
        });

        function getNotifications() {
            var url = "{{route('notifications-client')}}";
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
<script>
    // barChart
    var ctx1 = document.getElementById("barChart").getContext('2d');
    var barChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: 'Amount received',
                data: [12, 19, 3, 5, 10, 5, 13, 17, 11, 8, 11, 9],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }

    });
</script>
<script>
    $('.panel-collapse').on('show.bs.collapse', function() {
        $(this).siblings('.panel-heading').addClass('active');
    });

    $('.panel-collapse').on('hide.bs.collapse', function() {
        $(this).siblings('.panel-heading').removeClass('active');
    });
</script>
<script>
    $('.company-activity-section1').find('.anchr-expan').on('click', function(e) {
        e.preventDefault();
        this.expand = !this.expand;
        $(this).text(this.expand ? "Collapes" : "Expand");
        $(this).closest('.company-activity-section1').find('.smalldesc, .bigdesc').toggleClass('smalldesc bigdesc');
    });
</script>

<script>

    function isNumberKey(evt) {      //onkeypress="return isNumberKey(event)"
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        } else {
            return true;
        }
    }


    function isCharacterKey(evt) {      //onkeypress="return isNumberKey(event)"
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if ((charCode < 65 || charCode > 90) &&
            (charCode < 97 || charCode > 122 ) && charCode !=32 ){
            return false;
        } else {
            return true;
        }
    }
</script>
