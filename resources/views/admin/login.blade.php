<!DOCTYPE html>
<html lang="en">
  <!-- head -->
  @include("admin.build.head", ['title'=>"CDI - Cartão de Vantagens | "])
  <!-- /head -->

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ route('admin.logar') }}">
              @csrf
              
              <h1>Admin</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default">Entrar</button>
                {{-- <a class="reset_pass" href="#">Lost your password?</a> --}}
              </div>
              
              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> CDI - Cartões de Vantagens!</h1>
                  {{-- <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p> --}}
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
