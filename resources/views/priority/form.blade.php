@if(isset($model->priority_id))
<form action="{{ url('/priority/modify/'.$model->priority_id, [])  }}" method="POST">
@else
<form action="{{ url('/priority/save', [])  }}" method="POST">
@endif
@csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Priority</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Priority Name" value="{{$model->name}}" name="name">
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select class="form-control" id="exampleFormControlSelect1" name="status">
              @foreach($status as $key => $st)
                <option value="{{$key}}" {{ ( $key == $model->status) ? 'selected' : '' }}>{{$st}}</option>
              @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault04">Base SLA</label>
      <input type="text" class="form-control" id="validationDefault04" value="{{$model->base_sla}}" placeholder="(hh:mm:ss)" name="base_sla" >
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault04">Description</label>
      <input type="text" class="form-control" id="validationDefault04" value="{{$model->description}}" placeholder="Description" name="description" >
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>