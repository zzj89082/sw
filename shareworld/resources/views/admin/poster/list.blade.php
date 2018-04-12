@extends('admin/layout/header')
@section('content')




<!--main content start-->
<section id="main-content">
  <section class="wrapper">
  	
  	<!-- 读取模版的提示信息 -->
                @if(session('success'))
                <div class="alert alert-success fade in">
                  <button data-dismiss="alert" class="close close-sm" type="button">
                      <i class="icon-remove"></i>
                  </button>
                  {{  session('success') }}
                </div>
                @endif        
                                

                @if(session('error'))
                <div class="alert alert-block alert-danger fade in">
                  <button data-dismiss="alert" class="close close-sm" type="button">
                      <i class="icon-remove"></i>
                  </button>
                  {{  session('error') }}
                </div>
                @endif
      <!-- page start-->
      <div class="w936">
		 <div id="tb_" class="tb_">
		   <ul>
		    <li id="tb_1" class="hovertab" onmouseover="x:HoverLi(1);">广告回收站</li>
		    <li id="tb_2" class="normaltab" onmouseover="i:HoverLi(2);">轮播图回收站</li>
		   </ul>
		 </div>
		 <div class="ctt">
		  <div class="dis" id="tbc_01">

			      <div class="row">
          <div class="col-lg-12">
              <section class="panel">
                  <header class="panel-heading">
                      {{$title}}
                  </header>
                  
                  <table class="table table-striped table-advance table-hover">
                   <tbody>
                      <tr>
                         <th><i class=""></i> ID</th>
                         <th><i class=""></i> 广告商</th>
                         <th><i class=""></i> 广告图</th>
                         <th><i class=""></i> 类型</th>
                         <th><i class=""></i> 价格</th>
                         <th><i class=""></i> 添加时间</th>
                         <th><i class=""></i> 操作</th>
                      </tr>
                      @foreach($data as $k => $v)
                      <tr>
                         <td>{{ $v->POid }}</td>
                         <td>{{ $v->POauthor }}</td>
                         <td>{{ $v->POcontent }}</td>
                         <td></td>
                         <td>{{ $v->POprice }}</td>
                         <td>{{ $v->created_at }}</td>
                         <td>
                          <div class="btn-group">
                              <a class="btn btn-success" href="/admin/recover/update/{{ $v->POid }}"><i class="icon_check_alt2"> 恢复</i></a>
                              <a class="btn btn-danger" href="/admin/recover/delete/{{ $v->POid }}"><i class="icon_close_alt2"> 删除</i></a>
                          </div>
                          </td>
                      </tr> 
                      @endforeach                   
                   </tbody>
                </table>
                
              </section>
          </div>
      </div>

		  	<br /></div>
		  <div class="undis" id="tbc_02">
			

			123
		

		  	<br /></div>
		 </div>
		</div>

      <!-- page end-->
  </section>
</section>
<!--main content end-->








  

@endsection