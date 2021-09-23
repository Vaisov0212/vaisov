<?php $title="bot";?>
		@include('admin.app.admin_header')


       
                    <div class="row">
                        <div class="col-lg-12">
                            @if(count($errors) > 0 )
                            <div class="alert bg-warning" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
                                <ul>
                                     @foreach($errors->all() as $error )
                                     <li>{{$error }} </li>
                                     @endforeach

                               </ul>
                              </div>

                            @endif
                            @if(\Session::has('success'))

                            <div class="alert bg-success" role="alert">
                            {{\Session::get('success')}}
                            </div>
                            @endif
                        </div>
                    </div><!--/.row-->

				<div class="panel panel-default">
					<div class="panel-heading">Yangi so'z qo'shish</div>
					<div class="panel-body">

							<form enctype="multipart/form-data" method="POST" action="{{route('admin.bot.store')}}" >
                                @csrf
								<div class="form-group">
									<label>Savol</label>
									<input type="text" class="form-control" placeholder="beriladigan savol" name="question" required=''>
								</div>
                                <div class="form-group">
									<label>Javob</label>
									<input class="form-control" placeholder="beriladigan javob" name="respond" required=''>
								</div>
								<div class="col-md-6">
									<button  type="submit" class="btn btn-primary" >saqlash</button>
								</div>

							</form>

					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->

            @include('admin.app.admin_footer')
