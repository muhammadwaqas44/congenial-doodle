@extends('layout.dashboard.dashboard')

@section('title')
    Questions
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
                                        <h3 class="pull-left"> {{$category->name}} </h3>
                                        <a href="javascript:void(0);" class="addQuestionForm btn btn-primary btn-sm pull-right btnsh3"
                                           data-toggle="modal" data-target="#modal_add_question"
                                           data-category_id="{{$category->id}}"
                                        ><i class="fa fa-plus"
                                            aria-hidden="true"></i> Add Question</a>
                                    </div>
                                    <div class="card-body card-body-giv-wdth">

                                        <table class="table resrv_table_rspon">
                                            <thead>
                                            <tr>
                                                <th scope="col">Number #</th>
                                                <th scope="col">Possible Points</th>
                                                <th scope="col">Questions</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($questions as $question)
                                                <tr>
                                                    <th scope="row">{{$question->question_no}}</th>

                                                    <td>{{$question->possible_point}}</td>

                                                    <td class="txt-justify">
                                                        {{$question->question}}
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="editQuestionForm btn btn-primary btn-sm"
                                                           data-toggle="modal" data-target="#modal_edit_question"
                                                           data-to_id="{{$question->id}}"
                                                           data-question="{{$question->question}}"
                                                           data-category_id="{{$question->category_id}}"
                                                           data-question_no="{{$question->question_no}}"
                                                           data-possible_point="{{$question->possible_point}}"
                                                           >Edit</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <!-- END container-fluid -->

        </div>
        <!-- END content -->
        <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_question">
            <div class="modal-dialog">
                <div class="modal-content">

                    <form action="#" id="questionForm_category" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-header">
                            <h5 class="modal-title">Edit question</h5>
                            <button type="button" class="close" data-dismiss="modal"><span
                                        aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        </div>

                        <div class="modal-body">
                            <input class="form-control" name="id" type="hidden" >
                            <input class="form-control" name="category_id" type="hidden">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">

                                        <label>Question No<span class="asterik">*</span></label>
                                        <input class="form-control" name="question_no" min="0"  onKeyDown="if(this.value.length==3 && event.keyCode!=8) return false;" onkeypress="return isNumberKey(event)"  type="number" required>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">


                                        <label>Possible Points<span class="asterik">*</span></label>
                                        <input class="form-control" name="possible_point" min="0" onkeypress="return isNumberKey(event)" onKeyDown="if(this.value.length==2 && event.keyCode!=8) return false;" type="number" required>

                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Question<span class="asterik">*</span></label>
                                        <textarea rows="4" class="form-control" name="question" required></textarea>
                                    </div>
                                </div>


                            </div>


                        </div>

                        <div class="modal-footer">

                            <button type="button" id="update_question" class="btn btn-primary">Edit question</button>
                        </div>

                    </form>

                </div>
            </div>
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

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">


                                        <label>Question No<span class="asterik">*</span></label>
                                        <input class="form-control" name="question_no" min="0"  onKeyDown="if(this.value.length==3 && event.keyCode!=8) return false;" onkeypress="return isNumberKey(event)" type="number" required>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Possible Points<span class="asterik">*</span></label>

                                        <input class="form-control" name="possible_point" min="0" onkeypress="return isNumberKey(event)" onKeyDown="if(this.value.length==2 && event.keyCode!=8) return false;" type="number" required>


                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Question<span class="asterik">*</span></label>
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

        $(document).on("click", ".editQuestionForm", function (e) {
            $("#questionForm_category").trigger("reset");
            let toId = $(this).data("to_id");
            let question = $(this).data("question");
            let category_id = $(this).data("category_id");
            let question_no = $(this).data("question_no");
            let possible_point = $(this).data("possible_point");
            $("#questionForm_category").find("[name=id]").val(toId);
            $("#questionForm_category").find("[name=question]").val(question);
            $("#questionForm_category").find("[name=category_id]").val(category_id);
            $("#questionForm_category").find("[name=possible_point]").val(possible_point);
            $("#questionForm_category").find("[name=question_no]").val(question_no);
        });

        $(document).on("click", ".addQuestionForm", function (e) {
            let category_id = $(this).data("category_id");
            $("#questionForm_category_add").find("[name=category_id]").val(category_id);
        });


        $(document).ready(function () {

            $('#add_question').on('click', function (e) {
                e.preventDefault();
                var form = $('form#questionForm_category_add').serialize();
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
                    url: "{{route('add-question-post')}}",
                    data: form,
                    success: function (response, status) {
                        if (response.result == 'success') {
                            $.unblockUI();
                            window.toastr.success(response.message);
                            window.location.reload();
                            $('#add-category-form')[0].reset();
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


            $('#update_question').click(function (e) {
                e.preventDefault();
                var form = $('form#questionForm_category').serialize();
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
                    url: "{{route('edit-question-post')}}",
                    data: form,
                    success: function (response, status) {
                        console.log(response);
                        if (response.result == 'success') {
                            $.unblockUI();
                            window.toastr.success(response.message);
                            window.location.reload();
                        } else if (response.result == 'error') {
                            $.unblockUI();
                            window.toastr.error(response.message);
                        }
                    },
                    error: function (data) {
                        $.unblockUI();
                        $.each(data.responseJSON.errors, function (key, value) {

                            window.toastr.error(value);
                        });
                    }
                });
            });
        });

    </script>

@endsection





