@extends("layouts.default")

@section("content")
<body class="register-page bg-body-secondary">
    <div class="register-box">
      <div class="register-logo">
        <a href="../index2.html"><b></b></a>
      </div>
      <!-- /.register-logo -->
      <div class="card">
        <div class="card-body register-card-body">
          <p class="register-box-msg">Edit Member Informations</p>
          <form action="{{ url('/user') }}" method="post">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="input-group mb-3">
              <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Full Name" />
              <div class="input-group-text"><span class="bi bi-person"></span></div>
            </div>
            <div class="input-group mb-3">
              <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email" />
              <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password" />
              <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            </div>
            <!--begin::Row-->
            <div class="row">
              <div class="col-4">

              </div>
              <!-- /.col -->
              <div class="col-4">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>
          <!-- /.social-auth-links -->
        </div>
        <!-- /.register-card-body -->
      </div>
    </div>
    <!-- /.register-box -->
