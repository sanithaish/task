
@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Task</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            INPUT
                            <small>Different sizes and widths</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line focused">
                                        <input type="text" class="form-control">
                                        <label class="form-label">Task Title</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize"></textarea>
                                        <label class="form-label">Please type task details</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <select class="form-control show-tick">
                                    <option value="">-- Please select User --</option>
                                    <option value="10">Low</option>
                                    <option value="20">Medium</option>
                                    <option value="30">High</option>
                                    <option value="40">Critical</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control show-tick">
                                    <option value="">-- Please select Priority --</option>
                                    <option value="10">Low</option>
                                    <option value="20">Medium</option>
                                    <option value="30">High</option>
                                    <option value="40">Critical</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control show-tick">
                                    <option value="">-- Please select Department --</option>
                                    <option value="10">Low</option>
                                    <option value="20">Medium</option>
                                    <option value="30">High</option>
                                    <option value="40">Critical</option>
                                </select>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" placeholder="Please choose a start date...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="timepicker form-control" placeholder="Please choose a end date...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datetimepicker form-control" placeholder="Hours">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <select id="optgroup" class="ms" multiple="multiple">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph">
                                            <i class="material-icons">touch_app</i>
                                        </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                                    </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-4 col-sm-offset-8">
                                <button type="button" class="right btn btn-primary waves-effect">Save</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

//CSS
@section('css')
<!-- Bootstrap Core Css -->
<link href="{{ asset('template/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

<!-- Waves Effect Css -->
<link href="{{ asset('template/plugins/node-waves/waves.css') }}" rel="stylesheet" />

<!-- Animation Css -->
<link href="{{ asset('template/plugins/animate-css/animate.css') }}" rel="stylesheet" />

<!-- Morris Chart Css-->
<link href="{{ asset('template/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

<!-- Colorpicker Css -->
<link href="{{ asset('template/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" rel="stylesheet" />

<!-- Dropzone Css -->
<link href="{{ asset('template/plugins/dropzone/dropzone.css') }}" rel="stylesheet">

<!-- Multi Select Css -->
<link href="{{ asset('template/plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">

<!-- Bootstrap Spinner Css -->
<link href="{{ asset('template/plugins/jquery-spinner/css/bootstrap-spinner.css') }}" rel="stylesheet">

<!-- Bootstrap Tagsinput Css -->
<link href="{{ asset('template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">

<!-- Bootstrap Select Css -->
<link href="{{ asset('template/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

<!-- noUISlider Css -->
<link href="{{ asset('template/plugins/nouislider/nouislider.min.css') }}" rel="stylesheet" />

<!-- Custom Css -->
<link href="{{ asset('template/css/style.css') }}" rel="stylesheet">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="{{ asset('template/css/themes/all-themes.css') }}" rel="stylesheet" />
@endsection

//JS
@section('js')
<!-- Jquery Core Js -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Select Plugin Js -->
<script src="{{ asset('template/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('template/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Bootstrap Colorpicker Js -->
<script src="{{ asset('template/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>

<!-- Dropzone Plugin Js -->
<script src="{{ asset('template/plugins/dropzone/dropzone.js') }}"></script>

<!-- Input Mask Plugin Js -->
<script src="{{ asset('template/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>

<!-- Multi Select Plugin Js -->
<script src="{{ asset('template/plugins/multi-select/js/jquery.multi-select.js') }}"></script>

<!-- Jquery Spinner Plugin Js -->
<script src="{{ asset('template/plugins/jquery-spinner/js/jquery.spinner.js') }}"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="{{ asset('template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

<!-- noUISlider Plugin Js -->
<script src="{{ asset('template/plugins/nouislider/nouislider.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('template/plugins/node-waves/waves.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('template/js/admin.js') }}"></script>
<script src="{{ asset('template/js/pages/forms/advanced-form-elements.js') }}"></script>
<!--<script src="{{ asset('template/js/pages/forms/basic-form-elements.js') }}"></script>-->

<!-- Demo Js -->
<script src="{{ asset('template/js/demo.js') }}"></script>
@endsection