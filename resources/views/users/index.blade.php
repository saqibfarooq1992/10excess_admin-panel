<x-app-layout>
    <div>
        <div class="container-fluid">
            <div class="row">


                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users</h4>
                            <a type="button" href="{{url('users/create')}}" class="btn btn-rounded btn-primary">New User</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>First Name</th>
                                        <th>Middle initial name</th>
                                        <th>Last Name</th>
                                        <th>Education</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Joining Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="userTableBody">
                                        @foreach($users['data']['users'] as $user)
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="{{ asset('assets/images/profile/small/m1.jpg') }}" alt=""></td>
                                                <td>{{ $user['first_name'] }}</td>
                                                <td>{{ $user['middle_initial_name'] }}</td>
                                                <td>{{ $user['last_name'] }}</td>
                                                <td>{{ $user['nic_name'] }}</td>
                                                <td><a href="javascript:void(0);"><strong>{{ $user['industry_recognized_membership'] }}</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>{{ $user['industry_recognized_designations'] }}</strong></a></td>
                                                <td>{{ $user['state_license_number'] }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="user-view.php" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fa-solid fa-eye"></i></a>
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
<script>
    $(document).ready(function () {
    // Function to fetch user data using Ajax
    // Function to fetch user data using Ajax
    function fetchUserData() {
        // Retrieve the authentication token from cookies
        var token = getCookie('token');
        console.log("token:", token);

        $.ajax({
            url: "{{ url('api/users') }}", // API endpoint 
            type: 'GET',
            dataType: 'json',
            headers: {
                'Authorization': 'Bearer ' + token // Add the token to the headers
            },
            success: function (data) {
                // Clear existing table rows
                $('#userTableBody').empty();

                // Loop through the fetched data and append rows to the table
                $.each(data, function (index, user) {
                    var row = `
                        <tr>
                            <td><img class="rounded-circle" width="35" src="${user.profileImage}" alt=""></td>
                            <td>${user.name}</td>
                            <td>${user.department}</td>
                            <td>${user.gender}</td>
                            <td>${user.education}</td>
                            <td><a href="tel:${user.mobile}"><strong>${user.mobile}</strong></a></td>
                            <td><a href="mailto:${user.email}"><strong>${user.email}</strong></a></td>
                            <td>${user.joiningDate}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="user-view.php" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    `;
                    $('#userTableBody').append(row);
                });
            },
            error: function (error) {
                console.log('Error fetching user data:', error);
            }
        });
    }

    // Function to get the value of a cookie by name
    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
        
        return null; // Return null if the cookie is not found
    }

    fetchUserData();

});
// Call the fetchUserData function when the page loads

</script>