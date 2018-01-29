@extends('layouts.layout')

@section('title', 'Contact')

@section('content')

<div class="row">
		<div class="col-sm-10 col-sm-offset-1"><br>
				<div class="col-sm-12"><h1 id="contact-h1">Contact</h1></div>
				{!! Form::open (array('action' => 'ContactController@ContactForm', 'data-parsley-validate' => '')) !!}
				<div class="col-sm-6">
		        <div class="form-group">
		            {{ Form::label('First*') }}
		            {{ Form::text('first', null,
		                array('required' => '', 'class'=>'form-control', 'placeholder'=>'John')) }}
		        </div>

		        <div class="form-group">
		            {{ Form::label('Email*') }}
		            {{ Form::text('email', null,
		                array('required' => '', 'class'=>'form-control', 'placeholder'=>'JohnDoe@jd.com')) }}
		        </div>

		        <div class="form-group">
		            {{ Form::label('Subject*') }}
		            {{ Form::text('subject', null,
		                array('required' => '', 'class'=>'form-control', 'placeholder'=>'Can You Please Train Me')) }}
		        </div>
				</div>
				<div class="col-sm-6">
							<div class="form-group">
									{{ Form::label('Last*') }}
									{{ Form::text('last', null,
											array('required' => '', 'class'=>'form-control', 'placeholder'=>'Doe')) }}
							</div>
				</div>
				<div class="col-sm-12" id="contact-bottom">

			        <div class="form-group">
			            {{ Form::label('Message*') }}
			            {{ Form::textarea('message', null,
			                array('required' => '', 'class'=>'form-control', 'rows' => '6', 'placeholder'=>'What\'s Up?')) }}
			        </div>

			        <div class="form-group">
			            {{ Form::submit('Send Message',
			              array('class'=>'btn btn-primary')) }}
			        </div>
				</div>
    		{!! Form::close() !!}
    </div>
</div>

@stop
