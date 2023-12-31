@extends('layouts.backend')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="header">
				<div class="col-md-6">
					<h4 class="title">{{ _lang('Transport Members List') }}</h4>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<select id="class" class="select_class pull-right" onchange="showType(this);">
						<option @if($type == '') selected @endif value="">{{ _lang('Members Type') }}</option>
						<option @if($type == 'students') selected @endif value="students">{{ _lang('Student') }}</option>
						<option @if($type == 'teachers') selected @endif value="teachers">{{ _lang('Teacher') }}</option>
					</select>
					<a href="{{route('transportmembers.create')}}" class="btn btn-info btn-sm">{{ _lang('Add New Member') }}</a>
				</div>
			</div>
			<div class="content no-export">
				<table class="table table-bordered data-table">
					<thead>
						<th>{{_lang('Profile')}}</th>
						<th>{{_lang('Name')}}</th>
						<th>{{_lang('Email')}}</th>
						<th>{{_lang('Road Name')}}</th>
						<th>{{_lang('Vehicle Serial No')}}</th>
						<th>{{_lang('Action')}}</th>
					</thead>
					<tbody>
						@foreach($members AS $data)
						<tr>
							<td><img src="{{ asset('uploads/images/'.$data->image) }}" width="50px" alt=""></td>
							<td>{{$data->name}}</td>
							<td>{{$data->email}}</td>
							<td>{{$data->road_name}}</td>
							<td>{{$data->serial_number}}</td>
							<td>	
								<form action="{{route('transportmembers.destroy',$data->id)}}" method="post">
									<a href="{{route('transportmembers.show',$data->id)}}" class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
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
@section('js-script')
<script>
function showType(elem){
	if($(elem).val() == ""){
		window.location = "{{url('transportmembers')}}";
	}else if($(elem).val() == "students"){
		window.location = "{{url('transportmembers/list')}}/"+$(elem).val();
	}else if($(elem).val() == "teachers"){
		window.location = "{{url('transportmembers/list')}}/"+$(elem).val();
	}
}
</script>
@stop