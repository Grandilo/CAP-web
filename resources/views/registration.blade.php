@extends('layout')

@section('header')

@stop


@section('content')
<div class="container">
    <div class="row">
      <h1 class="hello-text text-center">Call A <span class="bold">Physio</span></h1>

      <h3 class="page-header text-center logo">Registration</h3>

        <!-- Main Form -->

        <div class="login-form-1  col-md-6 col-md-offset-3">

          <form id="register-form" class="text-left">

            <div class="main-login-form">

              <div class="login-group">

                <div class="form-group">
                    <label for="username" class="sr-only">Full Name</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name">
                </div>

                <div class="form-group">
                    <label for="gender" class="sr-only checkbox-inline">Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender">
                </div>

                <div class="form-group">
                    <label for="state" class="sr-only">State</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="State">
                </div>

                <div class="form-group">
                    <label for="local_government" class="sr-only">Local Government</label>
                    <input type="text" class="form-control" id="local_government" name="local_government" placeholder="Local Government">
                </div>

                <div class="form-group">
                    <label for="office_address" class="sr-only" >Office Address</label>
                    <input type="text" class="form-control" id="office_address" name="office_address" placeholder="Office Address">
                </div>

                <div class="form-group">
                    <label for="area_of_expertise" class="sr-only">Area of Expertise</label>
                    <input type="text" class="form-control" id="area_of_expertise" name="area_of_expertise" placeholder="Area of Expertise">
                </div>

                <div class="form-group">
                    <label for="years_of_experience" class="sr-only">Years of Experience</label>
                    <input type="text" class="form-control" id="years_of_experience" name="years_of_experience" placeholder="Years of Experience">
                </div>

                <div class="form-group">
                    <label class="col-md-5" for="inputfile">License Upload</label>
                    <input class="form-control" type="file" id="inputfile">
                </div>

                <div class="form-group">
                    <input type="checkbox" class="" id="reg_agree" name="reg_agree">
                    <label for="reg_agree">I agree with <a href="#">Terms and Conditions</a></label>
                </div>

              </div>
            </div>

            <div class="etc-login-form text-center">
                <p>Already have an account? <a href="#">Login here</a></p>
            </div>

            <div class="form-group">
             <div class="col-md-offset-3 col-md-6">
                <button type="submit" class="btn btn-block">Sign Up</button>
             </div>
            </div>

          </form>
        </div>
        <!-- end:Main Form -->

    </div>
</div>
@stop
