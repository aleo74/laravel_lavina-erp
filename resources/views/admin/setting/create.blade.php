@extends('layouts.admin')

@section('content')
	<h1>Create Setting</h1>


	<div class="row">
        {!! Form::open(['method'=>'POST', 'action'=>'SettingsController@store']) !!}
        <div class="row">
            <div class="form-group col-sm-6">
                <label>Key *:</label>
                <input type="text" name="key" class="form-control" required>
            </div>

            <div class="form-group col-sm-6">
                <label>Description :</label>
                <input type="text" name="description" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label>Display Name :</label>
                <input type="text" name="display_name" class="form-control">
            </div>

            <div class="form-group col-sm-6">
                <label>Value :</label>
                <input type="text" name="value" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label>Details :</label>
                <input type="" name="details" class="form-control">
            </div>

            <div class="form-group col-sm-6">
                <label>Type :</label>
                <input type="text" name="type" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label>Order :</label>
                <input type="text" name="order" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label>Group :</label>
                <input type="text" name="group" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-3" style="margin-top: 10px;">
                <input type="submit" value="Post">
            </div>
        </div>

        {!! Form::close() !!}
    </div>


	@include('includes.form_error')

@stop
