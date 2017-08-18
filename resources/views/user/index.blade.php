<!DOCTYPE html>
<html>
<head>
  <title>SqrFactor Gwalior'16 Event</title>
  @include('includes.stylesheet')

</head>

<body>

    <div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-12">User Table</div>
            </div>
        </div>
        <div class="panel-body">
    <table class="table table-hover">
        <thead>
            <th style="width: 10%;">
              Time
            </th >
            <th style="width: 10%;">
              Position
            </th >
            <th style="width: 10%;">
              Name
            </th>
            <th style="width: 10%;">
              Email
            </th>
            <th style="width: 10%;">
              Phone
            </th>
            <th style="width: 10%;">
              College
            </th>
            <th style="width: 10%;">
              Year
            </th>
            <th style="width: 10%;">
              Github
            </th>
            <th style="width: 10%;">
              Portfolio
            </th>
            <th style="width: 10%;">
              linkedin
            </th>
            </thead>
            <tbody>
             
                    @foreach($users as $user)
                
                <tr>
                    <td>
                        {{ $user->created_at }}
                     </td>
                    <td>
                        {{ $user->position }}
                     </td>
                    <td>
                        {{ $user->name }}
                        
                     </td>
                    <td>
                       {{ $user->email }}
                     </td> 
                    <td>
                        {{ $user->phone }}
                        
                     </td>
                    <td>
                        {{ $user->college}}
                     </td>
                    <td>
                        {{ $user->year}}
                     </td>
                    <td>
                        {{ $user->github}}
                     </td>
                    <td>
                        {{ $user->linkedin}}
                     </td>
                    <td>
                        {{ $user->Portfolio}}
                     </td>
                    
                </tr>
               
                @endforeach
                  
                      
                   
                            
            </tbody>
    </table>
    </div>
</div>
        </div>

    </body>
</html>
