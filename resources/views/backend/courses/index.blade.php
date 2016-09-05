@extends('backend.layout.master')

@section('content')
	 <div class="row">
            <div class="col-xs-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Courses Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row">
                        	<div class="col-sm-12">

                       				<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                        <thead>
                                            <tr role="row">
                                                <th rowspan="1" colspan="1">No</th>
                                                <th rowspan="1" colspan="1">Name</th>
                                                <th rowspan="1" colspan="1">Phone Number</th>
                                                <th rowspan="1" colspan="1">Email</th>
                                                <th rowspan="1" colspan="1">Actions</th>
                                            </tr>
                                        </thead>

                                    </table>
                                </div>
                            </div>

                          

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
@endsection