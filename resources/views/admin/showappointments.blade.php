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

    <div align='center' style='padding-top:70px;'>
        <table>
            <tr style="background-color:black;">
                <th style="padding:10px;fontsize:25px;color:white">Customer Name</th>
                <th style="padding:10px;fontsize:25px;color:white"align="center">Email</th>
                <th style="padding:10px;fontsize:25px;color:white">Phone</th>
                <th style="padding:10px;fontsize:25px;color:white">Doctor Name</th>
                <th style="padding:10px;fontsize:25px;color:white">Date</th>
                <th style="padding:10px;fontsize:25px;color:white">Message</th>
                <th style="padding:10px;fontsize:25px;color:white">Status</th>
                <th style="padding:10px;fontsize:25px;color:white">Approve</th>
                <th style="padding:10px;fontsize:25px;color:white">Cancel</th>
                <th style="padding:10px;fontsize:25px;color:white">Send Mail</th>
                

            </tr>

            @foreach($data as $appoint)
            <tr style="background-color:#00D9A5;" align="center">
                <td style="padding:10px;fontsize:25px;color:white">{{$appoint->name}}</td>
                <td style="padding:10px;fontsize:25px;color:white">{{$appoint->email}}</td>
                <td style="padding:10px;fontsize:25px;color:white">{{$appoint->phone}}</td>
                <td style="padding:10px;fontsize:25px;color:white">{{$appoint->doctor}}</td>
                <td style="padding:10px;fontsize:25px;color:white">{{$appoint->date}}</td>
                <td style="padding:10px;fontsize:25px;color:white">{{$appoint->message}}</td>
                <td style="padding:10px;fontsize:25px;color:white">{{$appoint->status}}</td>
                <td style="padding:10px;fontsize:25px;color:white"> <a class="btn btn-success"
                        onclick="return confirm('Are you sure to approve this?')"
                        href="{{url('approve',$appoint->id )}}">Approve</a></td>
                <td style="padding:10px;fontsize:25px;color:white"> <a class="btn btn-danger"
                        onclick="return confirm('Are you sure to cancel this?')"
                        href="{{url('cancelled',$appoint->id )}}">Cancel</a></td>
                        <td style="padding:10px;fontsize:25px;color:white"> <a class="btn btn-primary"
                    
                        href="{{url('emailview',$appoint->id )}}">Send Mail</a></td>


            </tr>
            @endforeach
        </table>
    </div>

    @include('admin.script')

</body>

</html>