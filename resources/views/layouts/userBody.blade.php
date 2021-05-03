
<!-- Page content holder -->
<div class="page-content p-5" id="content">
    <!-- Toggle button -->

    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
  <!-- Modal form -->
  <!-- Add new user model -->
  <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('auth.save')}}" method="POST">
                @if(Session::get('Success'))
                    <div class="alert alert-success">
                        {{ Session::get('Success') }}
                    </div>
                    @endif
                @csrf
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">First name</label>
                     <input type="text" class="form-control" name="fname" aria-describedby="emailHelp">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Last name</label>
                    <input type="text" class="form-control" name="lname">
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                     <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Phone number</label>
                    <input type="number" class="form-control" name="phone">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                    <label >Password</label>
                     <input type="password" class="form-control" name="password" aria-describedby="emailHelp">
                    </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

              </form>
        </div>
      </div>
    </div>
  </div>

  <!-- view modal -->
  <div class="modal fade" id="viewData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="editDataForm">

                @csrf
                <input type="hidden" name="id" id="updateID" >
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">First name</label>
                     <input type="text" class="form-control" name="fname" id="fname_" disabled>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Last name</label>
                    <input type="text" class="form-control" name="lname" id="lname_" disabled>
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                     <input type="email" class="form-control" name="email" id="email_" disabled>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Phone number</label>
                    <input type="number" class="form-control" name="phone" id="phone_" disabled>
                    </div>
                    </div>
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>
    <!--End Modal form-->

    <!-- Edit modal -->
  <div class="modal fade" id="EditData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="edit_DataForm">

                @csrf
                {{ method_field("put") }}
                <input type="hidden" name="id" id="update_id" >
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">First name</label>
                     <input type="text" class="form-control" name="fname" id="fname" aria-describedby="emailHelp">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Last name</label>
                    <input type="text" class="form-control" name="lname" id="lname">
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                     <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Phone number</label>
                    <input type="number" class="form-control" name="phone" id="phone">
                    </div>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>

              </form>
        </div>
      </div>
    </div>
  </div>
    <!--End Modal form-->

    <!-- delete modal -->
  <div class="modal fade" id="deleteData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="deleteDataForm">
                {{ csrf_field() }}
                {{ method_field("delete") }}
                <input type="hidden" name="id" id="delete_id" >
                <p>Are you sure you want to delete this data?</p>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Delete</button>
                  </div>

              </form>
        </div>
      </div>
    </div>
  </div>
    <!--End Modal form-->

    <div class="container">
         <!-- Button trigger modal -->
    <div class="d-flex  flex-row-reverse ">
        <button type="button" class="modal-btn d-inline " data-toggle="modal" data-target="#add" >
            <svg xmlns="http://www.w3.org/2000/svg"
            width="20" height="20"
            fill="currentColor"
            class="bi bi-plus"
             viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
              Add New User
          </button>


          <button type="button" class="modal-btn  "  style="margin-right:10px; ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
              </svg>
              <a href="/export-excel" class="export-link"> Export to Excel</a>

            </button>
      </div>
      <!--End of modal buttons-->
      <br>
        <table class="table table-dark table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone number</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
              <tr id="id{{ $user->id }}">
                <td class="member_id">{{ $user['id'] }}</td>
                <td class="first_name">{{ $user->first_name }}</td>
                <td class="last_name">{{ $user->last_name }}</td>
                <td class="email">{{ $user->email }}</td>
                <td class="phone_number">{{ $user->phone_number }}</td>
                <td>
                    {{-- view icon --}}
                    <a href="javascript:void(0)" class="memberView">
                    <svg xmlns="http://www.w3.org/2000/svg" data-toggle="modal" data-target="#viewData"
                    width="16"
                     height="16"
                     fill="currentColor"
                      class="bi bi-eye"
                      viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                      </svg>
                    </a>
                    {{-- delete icon --}}
                    <a href="javascript:void(0)" class="memberDelete">
                      <svg xmlns="http://www.w3.org/2000/svg" data-toggle="modal" data-target="#deleteData"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-trash"
                        viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg>
                    </a>
                    {{-- update icon --}}
                    <a href="javascript:void(0)" class="memberEdits">
                        <svg xmlns="http://www.w3.org/2000/svg" data-toggle="modal" data-target="#EditData"
                         width="16"
                         height="16"
                         fill="currentColor"
                          class="bi bi-pencil-fill"
                          viewBox="0 0 16 16">
                          <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg>
                    </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script>
        // Update data function
      $(document).ready(function(){
        $(".memberEdits").click(function(){
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
          return $(this).text();

        }).get();
        console.log(data);
        $('#update_id').val(data[0]);
        $('#fname').val(data[1]);
        $('#lname').val(data[2]);
        $('#email').val(data[3]);
        $('#phone').val(data[4]);
        });

        $('#edit_DataForm').on('submit', function(e){
          e.preventDefault();
          var id = $('#update_id').val();
          console.log(id);
        $.ajax({
        type:"PUT",
        url:"/update/"+id,
         data:$('#edit_DataForm').serialize(),
        success:function(response){
        //$('#EditData').modal('hide');
               alert('Data Update');
               location.reload();
                },
                error:function(error){
                console.log(error);
                  }
           });

        });

      });
       // view data function
       $(document).ready(function(){
        $(".memberView").click(function(){
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
          return $(this).text();

        }).get();
        console.log(data);
        $('#updateID').val(data[0]);
        $('#fname_').val(data[1]);
        $('#lname_').val(data[2]);
        $('#email_').val(data[3]);
        $('#phone_').val(data[4]);
        });



      });

      // delete function
      $(document).ready(function(){
      $(".memberDelete").on("click",function(){
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
          return $(this).text();

        }).get();
        console.log(data);
        $('#delete_id').val(data[0]);
      });

      $('#deleteDataForm').on('submit', function(e){
          e.preventDefault();
          var id = $('#delete_id').val();
          console.log(id);
        $.ajax({
            type:"DELETE",
            url:"/memberdelete/"+id,
            data:$('#deleteDataForm').serialize(),
            success:function(response){
            //$('#deleteDataForm').Modal('hide');
            alert('Data deleted');
            location.reload();
            },
            error:function(error){
            console.log(error);
            }
            });

        });

    });
    // end of delete function


    </script>
