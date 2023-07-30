@extends('backend.layouts.template')

@section('css')
<style>
    .body input{
        background: rgb(224, 224, 224);
        border: 1px solid rgb(46, 56, 70) !important;
        border-radius: 5px;
    }
</style>
@endsection

@section('content')

<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Add Banners</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin') }}">Banners</a></li>			
				<li class="breadcrumb-item active">Add Banner</li>
			</ul>
		</div>
		<!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- Input Group -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-12 col-lg-12">
                                <div class="input-group-lg">
                                    <input type="text" class="form-control is-valid" placeholder="Title" id="title" name="title" required>
                                </div>
                            </div>
                        </div>
                
                        <div class="row clearfix">
                            <div class="col-md-12 col-lg-6">
                                <div class="col-md-12 col-lg-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control is-valid" placeholder="Title" id="title" name="title" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 input-group-lg">
                                <select class="form-select" id="validationTooltip04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="input-group"> <span class="input-group-addon">$</span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date">
                                    </div>
                                    <span class="input-group-addon">.00</span> </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title"> Different Sizes <small>You can use the <code>.input-group-sm, .input-group-lg</code> classes for sizing.</small> </h2>
                        <div class="row clearfix">
                            <div class="col-md-12 col-lg-4">
                                <p> <b>Input Group Large</b> </p>
                                <div class="input-group input-group-lg"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <p> <b>Input Group Default</b> </p>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Message">
                                    </div>
                                    <span class="input-group-addon"> <i class="material-icons">send</i> </span> </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <p> <b>Input Group Small</b> </p>
                                <div class="input-group input-group-sm"> <span class="input-group-addon"> <i class="material-icons">person</i> </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Recipient's username">
                                    </div>
                                    <span class="input-group-addon"> <i class="material-icons">send</i> </span> </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12 col-lg-4">
                                <div class="input-group input-group-lg"> <span class="input-group-addon">@</span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Recipient's username">
                                    </div>
                                    <span class="input-group-addon">@example.com</span> </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="input-group input-group-sm"> <span class="input-group-addon">$</span>
                                    <div class="form-line">
                                        <input type="text" class="form-control">
                                    </div>
                                    <span class="input-group-addon">.00</span> </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">Radio & Checkbox</h2>
                        <div class="row clearfix">
                            <div class="col-md-12 col-lg-6">
                                <div class="input-group input-group-lg"> <span class="input-group-addon">
                                    <input type="checkbox" class="filled-in" id="ig_checkbox">
                                    <label for="ig_checkbox"></label>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="input-group input-group-lg"> <span class="input-group-addon">
                                    <input type="submit" class="with-gap" id="ig_radio">
                                    <label for="ig_radio"></label>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input Group --> 
            </div>
        </div>
		<div class="row clearfix">
			<div class="col-lg-12">
				<div class="card">

				</div>
			</div>
		</div>
	</div>
</section>

@endsection