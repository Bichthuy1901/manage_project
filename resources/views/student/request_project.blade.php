@extends('student.master')

@section('content')
<noscript>
         &lt;div style="width: 22em; position: absolute; left: 50%; margin-left: -11em; color: red; background-color: white; border: 1px solid red; padding: 4px; font-family: sans-serif"&gt;
         Your web browser must have JavaScript enabled
         in order for this application to display correctly.
         &lt;/div&gt;
      </noscript>
      <iframe id="soicteducationstudent" tabindex="-1" style="position: absolute; width: 0px; height: 0px; border: none; left: -1000px; top: -1000px;"></iframe>
      <div aria-hidden="true" style="display: none;">
      </div>
      <div>
      </div>
      <div class="xxx">
         <div class="JJB">
            <div class="NJB">
            </div>
            <div class="MJB" style="width: 90%;">
            	@include('layouts.header')
               <div class="GJB">
                  @include('layouts.nav')
                  <button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" style="border: 1px solid gray;float: none !important;margin: 5px 5px 5px 2% !important;" type="button"> <span class="icon-bar" style="background-color: gray;"></span> <span class="icon-bar" style="background-color: gray;"></span> <span class="icon-bar" style="background-color: gray;"></span> </button> 
                  <div class="collapse navbar-collapse" id="myNavbar" style="margin-top:15px;padding: 0px;">
                     <div>
                        <ul class="nav navbar-nav navbar-left">
                           <li>  </li>
                           <li class="dropdown aboutMenu">
                              <a class="LIB buttonMenu ACTIVE" href="javascript:;" style="width: 100px;">Đồ Án</a> 
                              <ul class="dropdown-menu aboutMenu-container" role="menu">
                                 <li class="aboutMenu-item"> <a class="btn-link" href="javascript:;" data-original-title="" title="">Danh sách Đồ Án</a> </li>
                                 <li class="aboutMenu-item"> <a class="btn-link" href="javascript:;" data-original-title="" title="">Đăng ký Giáo viên</a> </li>
                                 <li class="aboutMenu-item"> <a class="btn-link" href="javascript:;" data-original-title="" title="">Đồ án Tham khảo</a> </li>
                                 <li class="aboutMenu-item"> <a class="btn-link" href="javascript:;" data-original-title="" title="">Định hướng đề tài</a> </li>
                              </ul>
                           </li>
                           <li> <a class="LIB buttonMenu" href="javascript:;" style="width: 100px;" data-original-title="" title="">Biểu mẫu</a> </li>
                           <li> <a class="LIB buttonMenu" href="javascript:;" style="width: 100px;" data-original-title="" title="">Học phần</a> </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="OIB" style="width: 100% !important">
                  <div class="LMB">
                     <form role="form" class="form-horizontal" method="POST" action="{{route('student.project_request.store')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}  
                        <div class="col-xs-12 col-sm-9 col-md-9" style="text-align: -webkit-center; min-height: 400px;">
                           <div class="PLB" style="width: 100%;">
                              <fieldset>
                                 <legend>Đăng ký nguyện vọng Giáo viên</legend>
                                    @if (session('error'))            <!--thong bao cho nguoi dung khi thực hiện câu lệnh-->
                                          <div class="alert alert-success"
                                                {{ session('error') }}
                                          </div>
                                    @endif
                                    @if (session('success'))
                                          <div class="alert alert-success">
                                                {{ session('success') }}
                                          </div>
                                    @endif
                                 <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                    <tbody>
                                       <tr></tr>
                                    </tbody>
                                 </table>
                                 <div class="form-group">
                                    <label class="control-label col-lg-4" for="formEmail">Chọn Nguyện vọng</label>
                                    <div class="col-lg-8">
                                          <select class="form-control" name="type_id">
                                                <option>[Chọn nguyện vọng]</option>
                                                @foreach ($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                @endforeach
                                          </select>
                                          @if ($errors->has('type_id'))
                                                <span class="help-block">
                                                      <strong>{{ $errors->first('type_id') }}</strong>
                                                </span>
                                          @endif
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="form-group">
                                    <label class="control-label col-lg-4" for="formEmail">Tên đề tài</label>
                                    <div class="col-lg-8">
                                          <input type="text" class="form-control" name="name" dir="ltr">
                                          @if ($errors->has('name'))
                                                <span class="help-block">
                                                      <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                          @endif
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-4" for="formEmail">File đính kèm</label>
                                    <div class="col-lg-8"><input type="file" name="attach_file" class="form-control" dir="ltr"></div>
                                    @if ($errors->has('attach_file'))
                                          <span class="help-block">
                                                <strong>{{ $errors->first('attach_file') }}</strong>
                                          </span>
                                    @endif
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-4" for="formEmail">Mô tả</label>
                                    <div class="col-lg-8">
                                          <textarea class="form-control" name="description"></textarea>
                                          @if ($errors->has('description'))
                                                <span class="help-block">
                                                      <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                          @endif
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="form-group">
                                    <label class="control-label col-lg-4" for="formEmail">Chọn người hướng dẫn</label>
                                    <div class="col-lg-8">
                                          <select class="form-control" name="trainer_id">
                                          <option>[Chọn người hướng dẫn]</option>
                                          @foreach ($trainers as $trainer)
                                          <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
                                          @endforeach
                                          </select>
                                          @if ($errors->has('trainer_id'))
                                                <span class="help-block">
                                                      <strong>{{ $errors->first('trainer_id') }}</strong>
                                                </span>
                                          @endif
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="col-lg-offset-4 col-lg-10"><button class="btn btn-success">Lưu</button></div>
                                 </div>
                              </fieldset>
                           </div>
                        </div>
                        @include('layouts.sidebar')
                     </form>
                  </div>
               </div>
               @include('layouts.footer')
            </div>
            <div class="NJB"></div>
         </div>
      </div>
      <div>
      </div>
      <div id="fb-root" class=" fb_reset">
         <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div>
            </div>
         </div>
         <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div>
               <iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://staticxx.facebook.com/connect/xd_arbiter/r/Ms1VZf1Vg1J.js?version=42#channel=f315ed8c8c2f26&amp;origin=http%3A%2F%2Fdaotao.soict.hust.edu.vn" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/Ms1VZf1Vg1J.js?version=42#channel=f315ed8c8c2f26&amp;origin=http%3A%2F%2Fdaotao.soict.hust.edu.vn" style="border: none;"></iframe>
            </div>
         </div>
      </div>
      <iframe src="javascript:''" name="GWTBootstrap3_AbstractForm_soicteducationstudent_1" tabindex="-1" style="position:absolute;width:0;height:0;border:0"></iframe>
@endsection