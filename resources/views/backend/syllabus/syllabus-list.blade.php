@extends('layouts.backend')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="header">
				<div class="col-md-6">
					<h4 class="title">{{_lang('Syllabus List')}}</h4>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<a href="{{route('syllabus.create')}}" class="btn btn-info btn-sm">{{_lang('Add New Syllabus')}}</a>
				</div>
			</div>
			<div class="content no-export">
				<table class="table table-bordered data-table">
					<thead>
						<th>{{_lang('Title')}}</th>
						<th>{{_lang('Description')}}</th>
						<th>{{_lang('Class')}}</th>
						<th>{{_lang('File')}}</th>
						<th style="width: 155px;">{{_lang('Action')}}</th>
					</thead>
					<tbody>
						@foreach($syllabus AS $data)
						<tr>
							<td>{{$data->title}}</td>
							<td>{{substr(strip_tags($data->description),0,100)}}...</td>
							<td>{{$data->class_name}}</td>
							<td>{{$data->file}}</td>
							<td>
								<form action="{{route('syllabus.destroy',$data->id)}}" method="post">
									<a href="{{ asset('uploads/files/syllabus/'.$data->file) }}" class="btn btn-info btn-xs"><i class="fa fa-download" aria-hidden="true"></i></a>
									<a href="{{route('syllabus.show',$data->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
								    <a href="{{route('syllabus.edit',$data->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i></a>
									{{ method_field('DELETE') }}
    								@csrf
    								<button type="submit" class="btn btn-danger btn-xs btn-remove"><i class="fa fa-trash" aria-hidden="true"></i></button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection