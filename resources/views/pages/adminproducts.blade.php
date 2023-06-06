 @extends('layouts.adminlayout')
 @section("content")
 <div class="head-title">
          <div class="left">
            <h1>Products</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">Products</a>
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
            <i class="bx bxs-calendar-check"></i>
            <span class="text">
              <h3>0</h3>
              <p>Games</p>
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
              <h3>Games</h3>
              <i class="bx bx-search"></i>
              <i class="bx bx-filter"></i>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Genre</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                 @foreach($games as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->game_title }}</td>
                                    <td>{{ $item->game_desc }}</td>
                                    <td>{{ $item->price}}</td>
                                    <td>{{ $item->genre_id}}</td>
                                    <td>
                                        <a href="{{ url('/admin/games/' . $item->id) }}" title="View game"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/admin/games/' . $item->id . '/edit') }}" title="Edit game"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form method="POST" action="{{ url('/admin/games' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete game" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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