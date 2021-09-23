<?php $title='bot';?>
@include('admin.app.admin_header')

<div class="row" style="margin:10px; padding:5px">
<div class="col-lg-12">
    @if(session()->has('delete'))
    <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
        {{session()->get('delete')}}
       </div>
    @endif
</div>

</div>

<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel panel-default">
            <div class="panel-heading">Xabarlar ro'yhati</div>
            <div style="text-align: right; padding:10px">
                <a href="{{route('admin.bot.create')}}" class="btn btn-sm btn-primary" >
                    <i style="padding: 5px" class="fa fa-pencil">
                    </i>qo'shsish
                </a>
            </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <th >savol</th>
                            <th>javob</th>
                            <th width="80px"> vaqti</th>
                            <th width="80px" >Amallar</th>


                        </thead>
                         <tbody>
                            @foreach($chats as $item)
                            <tr>
                               <td>{{$item->question}}</td>
                               <td>{{$item->respond}}</td>
                              
                               <td>{{$item->created_at->format("Y/m/d  H:m")}}</td>
                               <td>
                                    <div style="display:flex; padding-top: 10px; padding-bottom:10px;">
                                      
                                        <form action="{{route('admin.bot.destroy', $item->id)}}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                            <button style="margin-left: 5px" class="btn btn-sm btn-danger">
                                             <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                      
                                        
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$links}}


                </div>
            </div><!-- /.panel-->
        </div><!-- /.col-->


@include('admin.app.admin_footer')
