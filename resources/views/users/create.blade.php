<x-app-layout>
    <!--**********************************
        Content body start
    ***********************************-->
    <div>
        <div class="container-fluid">
            <div class="row">


                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add New User</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST"  action="{{route('users.store')}}">
                                    @csrf
                                    <h4 class="text-primary mb-3">Personal Information</h4>
                                    <div class="row">
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">First Name (Legal)</label>
                                            <input type="text" name="first_name" class="form-control" placeholder="">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Middle Initial</label>
                                            <input type="text" name="last_name" class="form-control" placeholder="">

                                            <div class="mt-2">
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" name="legal_document" class="form-check-input" id="gridCheck">
                                                    <label class="form-check-label form-label" for="gridCheck"> Check if Required on Legal Documents</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" name="last_name" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Nick Name</label>
                                            <input type="text" name="nick_name" class="form-control" placeholder="">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Email</label>
                                            <input type="text" name="email" class="form-control" placeholder="">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Industry Recognized Membership</label>
                                            <input type="text" name="industry_recognized_membership" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                    <h4 class="text-primary mb-3 mt-4">License Information</h4>

                                    <div class="row">
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Industry Recognized Designations</label>
                                            <input type="text" name="industry_recognized_designations" class="form-control" placeholder="">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">State License Number</label>
                                            <input type="text" name="state_license_number" class="form-control" placeholder="">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Cell Phone</label>
                                            <input type="text" name="cell_phone" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Website Or Landing Page</label>
                                            <input type="text" name="website_or_landing_page" class="form-control" placeholder="">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">In Business Since Year</label>
                                            <input type="text" name="in_business_since_year" class="form-control" placeholder="">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Profile Description</label>
                                            <input type="text" name="profile_description" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Password</label>
                                            <input type="text" name="password" class="form-control" placeholder="">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="text" name="password_confirmation" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                    <div class="mt-4 text-end">
                                          <button type="submit" class="btn btn-primary" >Add New User</button>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Success</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>User Added Successfully.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="users-index.php" type="button" class="btn btn-primary">Ok</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
</x-app-layout>