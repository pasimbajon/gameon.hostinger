 @extends('layouts.adminlayout')
 @section("content")
 <div class="head-title">
          <div class="left">
            <h1>User</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">User</a>
              </li>
              <li><i class="bx bx-chevron-right"></i></li>
              <li>
                <a class="active" href="#">Home</a>
              </li>
            </ul>
          </div>
          <!-- <a href="#" class="btn-download">
            <i class="bx bxs-cloud-download"></i>
            <span class="text">Download PDF</span>
          </a> -->
        </div>

        <ul class="box-info">
          <li>
            <i class='bx bxs-user'></i>
            <span class="text">
              <h3>{{ count($users)}}</h3>
              <p>Users Count</p>
            </span>
          </li>
          <!-- <li>
            <i class="bx bxs-group"></i>
            <span class="text">
              <h3>0</h3>
              <p>Visitors</p>
            </span>
          </li> -->
          {{-- <li>
            <i class="bx bxs-purchase-tag-alt"></i>
            <span class="text">
              <h3>0</h3>
              <p>Total Sales</p>
            </span>
          </li> --}}
        </ul>

        <div class="table-data">
          <div class="order">
            <div class="head">
              <h3>Recent Orders</h3>
              <i class="bx bx-search"></i>
              <i class="bx bx-filter"></i>
            </div>
            <a href="{{ url('/admin/users/create') }}" class="btn btn-success btn-sm" title="Add New Game">
              <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <table>
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->password}}</td>
                                    <td>{{ $item->role}}</td>
                                    <td>
                                        <a href="{{ url('/admin/users/' . $item->id) }}" title="View User"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                        <a href="{{ url('/admin/users/' . $item->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                        <form method="POST" action="{{ url('/admin/users' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                {{-- <tr>
                  <td>
                    <img src="img/users-icon.webp" />
                    <p>User</p>
                  </td>
                  <td>01-01-2023</td>
                  <td><span class="status completed">Pending</span></td>
                </tr> --}}
                <!-- <tr>
                  <td>
                    <img src="img/people.png" />
                    <p>John Doe</p>
                  </td>
                  <td>01-10-2021</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="img/people.png" />
                    <p>John Doe</p>
                  </td>
                  <td>01-10-2021</td>
                  <td><span class="status process">Process</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="img/people.png" />
                    <p>John Doe</p>
                  </td>
                  <td>01-10-2021</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="img/people.png" />
                    <p>John Doe</p>
                  </td>
                  <td>01-10-2021</td>
                  <td><span class="status completed">Completed</span></td>
                </tr> -->
              </tbody>
            </table>
          </div>
          <!-- <div class="todo">
            <div class="head">
              <h3>Todos</h3>
              <i class="bx bx-plus"></i>
              <i class="bx bx-filter"></i>
            </div>
            <ul class="todo-list">
              <li class="completed">
                <p>Todo List</p>
                <i class="bx bx-dots-vertical-rounded"></i>
              </li> -->
          <!-- <li class="completed">
                <p>Todo List</p>
                <i class="bx bx-dots-vertical-rounded"></i>
              </li>
              <li class="not-completed">
                <p>Todo List</p>
                <i class="bx bx-dots-vertical-rounded"></i>
              </li>
              <li class="completed">
                <p>Todo List</p>
                <i class="bx bx-dots-vertical-rounded"></i>
              </li>
              <li class="not-completed">
                <p>Todo List</p>
                <i class="bx bx-dots-vertical-rounded"></i>
              </li> -->
          <!-- </ul>
          </div> -->
        </div>

@endsection