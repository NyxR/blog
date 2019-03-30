@extends("layout.admin_layout")

@section('title', $title)

@section('links')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection

@section('content')

    <div class="row" style="padding-top: 25px; padding-left: 50px;">
            <div class="col">
                <h1>Hello Nyx!</h1>
                <p>Welcome back to your Dashboard!</p>
            </div>
        </div>
    <div class="row" style="padding-left: 50px;">
            <div class="col">
                <div class="dash-card">
                    <i class="fas fa-users"></i>
                    <div class="dash-card-content">
                        <h3>Visitors</h3>
                        <p>4598</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="dash-card">
                    <i class="fas fa-handshake"></i>
                    <div class="dash-card-content">
                        <h3>Clients</h3>
                        <p>123</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="dash-card">
                    <i class="fas fa-tags"></i>
                    <div class="dash-card-content">
                        <h3>Price</h3>
                        <p>4598$</p>
                    </div>
                </div>
            </div>
        </div>
    <div class="row">
            <div class="col-md-12">
               <div class="work-table">
               <h2>List of tasks</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Assignement</th>
                            <th scope="col">Lead</th>
                            <th scope="col">Times</th>
                            <th scope="col">Evolution</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
               </div>
            </div>
        </div>
        
@endsection
