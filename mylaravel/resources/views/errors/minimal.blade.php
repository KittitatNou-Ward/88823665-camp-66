@extends('layouts.default')

@section('content')
    <div class="login-page">
        <section class="content">
            <div class="error-page">
              <h2 class="headline text-danger">@yield('code')</h2>

              <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-danger"></i> @yield('message')</h3>

                <p>

                </p>
              </div>
            </div>
            <!-- /.error-page -->

          </section>


    </div>
@endsection
