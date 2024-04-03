@extends("style.index")

@section("content")
<a href="{{route('Services.add')}}" class="btn btn-gradient-primary btn-fw">Add Services</a>

<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Services</h4>
        @if(Session::has('success'))
        <div class="alert alert-success">
              {{Session::get('success')}}</div>
        @endif
        <div class="table-responsive" id="sales-container">
        <table id="example" class="table table-striped table-responsive-sm table-bordered" style="width:100%">
        <thead>
            <tr class="table-responsive-sm">
              <th>  # </th>
              <th>  Name </th>
              <th>  Description </th>
              <th>  Image </th>
              <th>  Action </th>
            </tr>
          </thead>
          <tbody>
         
              @forelse ( $Services as $service )
                
              <tr class="table-responsive-sm">
                  <td></td>
                  <td>{{$service->services_name}}</td>
                  <td>{{$service->Description}}</td>
                  <td>
                    <img src="{{asset($service->image)}}" style="width:30%;height:auto" alt="">
                  </td>
                  <td>
                    <form action="{{route('Services.edit',$service->id)}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-info" value="Edit">

                      </form>

                      <form action="{{route('Services.delete',$service->id)}}" method="post">
                        @csrf
                      <input type="submit" class="btn btn-danger" value="Delete">
                      </form>
                    </td>
              @empty
                
              @endforelse

       
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>



@endsection