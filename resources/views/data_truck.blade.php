@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    
</head>



@section('content')




 					<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-plugin icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Truck
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                   <!--  <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button> -->
                                    <div class="d-inline-block dropdown">
                                        <!-- <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button> -->
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>            
                     <div class="row">
                            
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Form Truck</h5>
                                                <form action ="/truck/store" method="post" class="">
                                                    {{ csrf_field() }}
                                                    <div class="position-relative form-group"><label for="exampleEmail" class="">POWER UNIT NUM</label><input name="POWER_UNIT_NUM" id="POWER_UNIT_NUM" placeholder="POWER_UNIT_NUM" type="text" class="form-control" required=""></div>
                                                    <div class="position-relative form-group"><label for="examplePassword" class="">DESCRIPTION</label><input name="DESCRIPTION" id="DESCRIPTION" placeholder="DESCRIPTION" type="text"
                                                    class="form-control"></div>
                                                    <!-- <div class="position-relative form-group"><label for="exampleSelect" class="">Select</label><select name="select" id="exampleSelect" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select></div> -->
                                                    <!-- <div class="position-relative form-group"><label for="exampleSelectMulti" class="">Select Multiple</label><select multiple="" name="selectMulti" id="exampleSelectMulti" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select></div> -->
                                                   <div class="position-relative form-group"><label for="exampleSelect" class="">ID CORPORATION</label><select name="ID_CORPORATION" id="ID_CORPORATION" class="form-control" required="">
                                                        <option></option>
                                                        @foreach($corporation as $corp)
                                                        <option value="{{ $corp->ID_CORPORATION }}">{{ $corp->CORPORATION_NAME }}</option>

                                                        @endforeach
                                                    </select></div>

                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">ID LOCATION</label><select name="ID_LOCATION" id="ID_LOCATION" class="form-control" required="">
                                                        <option></option>
                                                        @foreach($location as $loc)
                                                        <option value="{{ $loc->ID_LOCATION }}">{{ $loc->LOCATION_NAME }}</option>

                                                        @endforeach
                                                    </select></div>

                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">ID POWER UNIT TYPE</label><select name="ID_POWER_UNIT_TYPE" id="ID_POWER_UNIT_TYPE" class="form-control" required="">
                                                        <option></option>
                                                        @foreach($power_unit_type as $put)
                                                        <option value="{{ $put->ID_POWER_UNIT_TYPE }}">{{ $put->POWER_UNIT_TYPE_XID }}</option>

                                                        @endforeach
                                                    </select></div>

                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">IS_ACTIVE</label><select name="IS_ACTIVE" id="IS_ACTIVE" class="form-control" required="">
                                                        <option></option>
                                                        
                                                        <option value="Y">Y</option>
                                                        <option value="N">N</option>
                                                        
                                                    </select></div>

                                                    <div class="position-relative form-group"><label for="examplePassword" class="">INSERT USER</label><input name="INSERT_USER" id="INSERT_USER" placeholder="INSERT_USER" type="text"
                                                    class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="examplePassword" class="">INSERT DATE</label><input name="INSERT_DATE" id="INSERT_DATE" placeholder="" type="date"
                                                    class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="examplePassword" class="">UPDATE USER</label><input name="UPDATE_USER" id="UPDATE_USER" placeholder="UPDATE_USER" type="text"
                                                    class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="examplePassword" class="">UPDATE DATE</label><input name="UPDATE_DATE" id="UPDATE_DATE"  type="date"
                                                    class="form-control"></div>

                                                    <!-- <div class="position-relative form-group"><label for="exampleText" class="">Text Area</label><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                                    <div class="position-relative form-group"><label for="exampleFile" class="">File</label><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                        <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                                    </div> -->
                                                    <button class="mt-1 btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>



                                        <div class="row">
                                                 <div class="col-md-12">
                                                    <div class="main-card mb-3 card">
                                                    <h5 class="mt-4 mb-4"> Data Truck</h2>
                                                            <table id="data_truck" class="display" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>POWER_UNIT_NUM</th>
                                                                        <th>DESCRIPTION</th>
                                                                        <th>ID_CORPORATION</th>
                                                                        <th>ID_LOCATION</th>
                                                                        <th>ID_POWER_UNIT_TYPE</th>
                                                                        
                                                                        <th>IS_ACTIVE</th>
                                                                        <th>INSERT_USER</th>
                                                                        <th>INSERT_DATE</th>
                                                                        <th>UPDATE_USER</th>
                                                                        <th>UPDATE_DATE</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no = 0;?>
                                                                    @foreach ($truck as $item)
                                                                    <?php $no++ ;?>
                                                                    <tr>
                                                                            <td>{{ $no }}</td>
                                                                            <td>{{ $item->POWER_UNIT_NUM }}</td>
                                                                            <td>{{ $item->DESCRIPTION }}</td>
                                                                            <td>{{ $item->ID_CORPORATION}}</td>
                                                                            <td>{{ $item->ID_LOCATION}}</td>
                                                                            <td>{{ $item->ID_POWER_UNIT_TYPE}}</td>
                                                                            <td>{{ $item->IS_ACTIVE}}</td>
                                                                            <td>{{ $item->INSERT_USER}}</td>
                                                                            <td>{{ date('d-m-Y',strtotime($item->INSERT_DATE))}}</td>
                                                                            <td>{{ $item->UPDATE_USER}}</td>
                                                                            <td>{{ date('d-m-Y',strtotime($item->UPDATE_DATE))}}</td>
                                                                            <td>
                                                                                <a href="/truck/edit/{{ $item->ID_POWER_UNIT }}" class="btn btn-primary" ><i class="fa fa-edit"></i> EDIT </a>
                                                                                <a href="/truck/delete/{{ $item->ID_POWER_UNIT }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> DEL </a>
                                                                            </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        <script>
                                                            $(document).ready(function() {

                                                            $('#data_truck').DataTable();

                                                             } );
                                                        </script>


                                                </div>
                                            </div>

                                         </div>


                                    </div>
                                    
                                </div>
                    </div>

 @endsection
 </html>