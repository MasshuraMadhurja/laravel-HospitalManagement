<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.sidebar')
    @include('admin.navbar')
    <!-- partial -->

    <!-- partial:partials/_navbar.html -->

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div align='center' style='padding:100px;'>
            <table>
                <tr style="background-color:black;">
                    <th style="padding:10px;fontsize:25px;color:white">Name</th>
                    <th style="padding:10px;fontsize:25px;color:white">Phone</th>
                    <th style="padding:10px;fontsize:25px;color:white">Specialty</th>
                    <th style="padding:10px;fontsize:25px;color:white">Room No.</th>
                    <th style="padding:10px;fontsize:25px;color:white">Image</th>
                    <th style="padding:10px;fontsize:25px;color:white">Delete</th>
                <th style="padding:10px;fontsize:25px;color:white">Update</th>


                </tr>

                @foreach($data as $doctors)
                <tr style="background-color:#00D9A5;" align="center">
                    <td style="padding:10px;fontsize:25px;color:white">{{$doctors->name}}</td>
                    <td style="padding:10px;fontsize:25px;color:white">{{$doctors->phone}}</td>
                    <td style="padding:10px;fontsize:25px;color:white">{{$doctors->specialty}}</td>
                    <td style="padding:10px;fontsize:25px;color:white">{{$doctors->room}}</td>
                    <td><img height="100" width="100" src="doctorimage/{{$doctors->image}}"></td>
                    <td style="padding:10px;fontsize:25px;color:white"> <a class="btn btn-danger"
                onclick="return confirm('Are you sure to delete this?')"
                        href="{{url('deletedoctor',$doctors->id )}}">Delete</a></td>

                    <td style="padding:10px;fontsize:25px;color:white"> <a class="btn btn-success"
                        onclick="return confirm('Are you sure to update this?')"
                        href="{{url('updatedoctor',$doctors->id )}}">Update</a></td>
               



                </tr>
                @endforeach
            </table>
        </div>
    </div>

    @include('admin.script')

</body>

</html>