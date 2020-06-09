@extends('layout.consultant-layout.dashboard')

@section('title')
    {{$category->name}}
@endsection

@section('content')

    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Dashboard</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 graph-colm">

                            <div class="graph-full-div1">

                                <div class="card mb-3">
                                    <div class="card-header">

                                        <h3 class="pull-left"> {{$category->name}}</h3>

                                        {{--<a href="javascript:void(0);"--}}
                                           {{--class="addQuestionForm btn btn-primary btn-sm pull-right btnsh3"--}}
                                           {{--data-toggle="modal" data-target="#modal_add_question"--}}
                                           {{--data-category_id="{{$category->id}}"--}}
                                           {{--data-schedule_id="{{$scheduleId}}"--}}
                                        {{--><i class="fa fa-plus"--}}
                                            {{--aria-hidden="true"></i> Add Question</a>--}}
                                    </div>
                                    <div class="card-body card-body-giv-wdth">
                                        <form id="question_marks_edit">
                                            @csrf
                                            <input type="hidden" name="schedule_id" value="{{$scheduleId}}">
                                            <input type="hidden" name="category_id" value="{{$category->id}}">
                                            <table class="table table-responsive-xl mx-wdth-table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Number #</th>
                                                    <th scope="col">Possible Points</th>
                                                    <th scope="col">Rating</th>
                                                    <th scope="col">Questions</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @php
                                                    $i = 1;
                                                @endphp

                                                @foreach($questionsA as  $question)
                                                    <tr>
                                                        <th scope="row">{{$i++}}</th>
                                                        <td>{{$question->possible_point}}</td>
                                                        <td><select class="form-control select2" id="example2"
                                                                    name="value[table_a][{{$question->id}}]"
                                                                    style="width: 40% !important;">
                                                                @for($j=0; $j<=$question->possible_point; $j++)
                                                                    <option value="{{$j}}" {{(isset($aArray[$question->id]) && $aArray[$question->id] == $j)? "selected": ""}}>{{$j}}</option>
                                                                @endfor
                                                            </select></td>
                                                        <td class="txt-justify">
                                                            {{$question->question}}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                @foreach($questionsB as  $question)

                                                    <tr>
                                                        <th scope="row">{{$i++}}</th>

                                                        <td>{{$question->possible_point}}</td>
                                                        <td><select class="form-control select2" id="example2"
                                                                    name="value[table_b][{{$question->id}}]"
                                                                    style="width: 40% !important;">
                                                                @for($j=0; $j<=$question->possible_point; $j++)
                                                                    <option value="{{$j}}" {{(isset($bArray[$question->id]) && $bArray[$question->id] == $j)? "selected": ""}}>{{$j}}</option>
                                                                @endfor
                                                            </select></td>
                                                        <td class="txt-justify">
                                                            {{$question->question}}
                                                        </td>
                                                    </tr>
                                                @endforeach


                                                </tbody>
                                            </table>
                                            <div style="text-align: center;">
                                                <button type="submit" id="question_marks_edit_b" class="button-graph">
                                                    Submit and Return Back
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_add_question">
            <div class="modal-dialog">
                <div class="modal-content">

                    <form action="#" id="questionForm_category_add" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-header">
                            <h5 class="modal-title">Add question</h5>
                            <button type="button" class="close" data-dismiss="modal"><span
                                        aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        </div>

                        <div class="modal-body">

                            <input class="form-control" name="category_id" type="hidden">
                            <input class="form-control" name="schedule_id" type="hidden">

                            <div class="row">


                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Possible Points</label>
                                        <input class="form-control" id="possible_point" onkeypress="return isNumberKey(event)"  onKeyDown="if(this.value.length==2 && event.keyCode!=8) return false;" min="0" name="possible_point" type="number" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Question</label>
                                        <textarea rows="4" class="form-control" name="question" required></textarea>
                                    </div>
                                </div>


                            </div>


                        </div>

                        <div class="modal-footer">

                            <button type="button" id="add_question" class="btn btn-primary">Add question</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#possible_point').on('change, keyup', function () {
            var currentInput = $(this).val();
            var fixedInput = currentInput.replace(/[!#$%^&*-+;'" :></()]/g, '');
            $(this).val(fixedInput);
            console.log(fixedInput);
        });
    </script>
    <script>

        $(document).on("click", ".addQuestionForm", function (e) {
            let category_id = $(this).data("category_id");
            let schedule_id = $(this).data("schedule_id");
            $("#questionForm_category_add").find("[name=category_id]").val(category_id);
            $("#questionForm_category_add").find("[name=schedule_id]").val(schedule_id);
        });

        $('#add_question').on('click', function (e) {
            e.preventDefault();
            var form = $('form#questionForm_category_add').serialize();

            $.ajax({
                type: 'POST',
                url: "{{route('add-question-schedule-post')}}",
                data: form,
                success: function (response, status) {
                    if (response.result == 'success') {
                        window.toastr.success(response.message);
                        setTimeout(function () {
                            window.location.reload();
                        }, 1000);
                    } else if (response.result == 'error') {
                        window.toastr.error(response.message);

                    }
                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        window.toastr.error(value);
                    });
                }
            });
        });


        $('#question_marks_edit').on('submit', function (e) {
            e.preventDefault();
            var form = $('form#question_marks_edit').serialize();
//            alert('okkk');
            $.blockUI({
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{route('edit-marks-value-post')}}",
                data: form,
                success: function (response, status) {
                    if (response.result == 'success') {
                        $.unblockUI();
                        window.toastr.success(response.message);
//                        window.location.reload();
                        setTimeout(function () {
                            window.location.href = '{{route('visit-detail-consultant',$scheduleId)}}';
                        }, 1000);
                    } else if (response.result == 'error') {
                        $.unblockUI();
                        window.toastr.error(response.message);

                    }
                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
                        window.toastr.error(value);
                    });
                }
            });
        });


    </script>

@endsection
