@extends('layouts.app')


@section('content')
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Edit Produsen
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

                             <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Edit Truck</h5>
                                                
                                                <form action ="/truck/update" method="post" class="">
                                                    {{ csrf_field() }}
                                                    @foreach($truck as $item)
                                                    <input type="hidden" name="ID_POWER_UNIT" id="ID_POWER_UNIT" value="{{ $item->ID_POWER_UNIT }}">

                                                    <div class="position-relative form-group"><label for="exampleEmail" class="">POWER UNIT NUM</label><input name="POWER_UNIT_NUM" id="POWER_UNIT_NUM" placeholder="POWER_UNIT_NUM" type="text" class="form-control" required="" value="{{ $item->POWER_UNIT_NUM }}"></div>
                                                    <div class="position-relative form-group"><label for="examplePassword" class="">DESCRIPTION</label><input name="DESCRIPTION" id="DESCRIPTION" placeholder="DESCRIPTION" type="text"
                                                    class="form-control" value="{{ $item->DESCRIPTION }}"></div>
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
                                                   <div class="position-relative form-group"><label for="exampleSelect" class="">ID CORPORATION</label><select name="ID_CORPORATION" id="ID_CORPORATION" class="form-control" required="" >
                                                        <option value="{{ $item->ID_CORPORATION }}">{{ $item->ID_CORPORATION }}</option>

                                                        <option></option>
                                                        @foreach($corporation as $corp)

                                                        <option value="{{ $corp->ID_CORPORATION }}">{{ $corp->CORPORATION_NAME }}</option>

                                                        @endforeach
                                                    </select></div>

                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">ID LOCATION</label><select name="ID_LOCATION" id="ID_LOCATION" class="form-control" required="">

                                                        <option value="{{ $item->ID_LOCATION }}">{{ $item->ID_LOCATION }}</option>

                                                        <option></option>
                                                        @foreach($location as $loc)
                                                        <option value="{{ $loc->ID_LOCATION }}">{{ $loc->LOCATION_NAME }}</option>

                                                        @endforeach
                                                    </select></div>

                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">ID POWER UNIT TYPE</label><select name="ID_POWER_UNIT_TYPE" id="ID_POWER_UNIT_TYPE" class="form-control" required="">
                                                        <option value="{{ $item->ID_POWER_UNIT_TYPE }}">{{ $item->ID_POWER_UNIT_TYPE }}</option>

                                                        <option></option>
                                                        @foreach($power_unit_type as $put)
                                                        <option value="{{ $put->ID_POWER_UNIT_TYPE }}">{{ $put->POWER_UNIT_TYPE_XID }}</option>

                                                        @endforeach
                                                    </select></div>

                                                    <div class="position-relative form-group"><label for="exampleSelect" class="">IS_ACTIVE</label><select name="IS_ACTIVE" id="IS_ACTIVE" class="form-control" required="">
                                                        <option value="{{ $item->IS_ACTIVE }}">{{ $item->IS_ACTIVE }}</option>
                                                        <option></option>
                                                        
                                                        <option value="Y">Y</option>
                                                        <option value="N">N</option>
                                                        
                                                    </select></div>

                                                    <div class="position-relative form-group"><label for="examplePassword" class="">INSERT USER</label><input name="INSERT_USER" id="INSERT_USER" placeholder="INSERT_USER" type="text"
                                                    class="form-control" value="{{ $item->INSERT_USER }}"></div>
                                                    <div class="position-relative form-group"><label for="examplePassword" class="">INSERT DATE</label><input name="INSERT_DATE" id="INSERT_DATE" placeholder="" type="date"
                                                    class="form-control" value="{{ $item->INSERT_DATE }}"></div>
                                                    <div class="position-relative form-group"><label for="examplePassword" class="">UPDATE USER</label><input name="UPDATE_USER" id="UPDATE_USER" placeholder="UPDATE_USER" type="text"
                                                    class="form-control" value="{{ $item->UPDATE_USER }}"></div>
                                                    <div class="position-relative form-group"><label for="examplePassword" class="">UPDATE DATE</label><input name="UPDATE_DATE" id="UPDATE_DATE"  type="date"
                                                    class="form-control" value="{{ $item->UPDATE_DATE }}"></div>
                                                    @endforeach
                                                    <button class="mt-1 btn btn-primary">Update</button>
                                                </form>
                                                
                                            </div>
                                        </div>

                        </div>
                    </div>
 @endsection