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
                     <form target="GWTBootstrap3_AbstractForm_soicteducationstudent_1" role="form" class="form-horizontal">
                        <div class="col-xs-12 col-sm-9 col-md-9" style="text-align: -webkit-center; min-height: 400px;">
                           <div class="PLB" style="width: 100%;">
                              <fieldset>
                                 <legend>Đăng ký nguyện vọng Giáo viên cho Đồ án kỳ 20172</legend>
                                 <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                    <tbody>
                                       <tr></tr>
                                    </tbody>
                                 </table>
                                 <div class="form-group">
                                    <label class="control-label col-lg-4" for="formEmail">Chọn Nguyện vọng</label>
                                    <div class="col-lg-8">
                                       <select class="form-control">
                                          <option value="-1">[Chọn nguyện vọng]</option>
                                          <option value="5637989979914240">KTMT [Hệ CNCN ] [IT3941 ] Từ 25-01-2018 đến 28-01-2018</option>
                                          <option value="5649665110310912">CNPM [Hệ DHCQ CNCN CNKT KSCLC KSTN ] [IT5240 IT4996 IT5104 IT5130 ] Từ 03-01-2018 đến 19-01-2018</option>
                                          <option value="5660733509468160">HTTT [Hệ DHCQ CNCN CNKT HEDSPI-A CTTT KSTN KSCLC ] [IT5100 IT5230 IT4995 IT4996 IT5104 IT5130 IT5120E ] Từ 28-12-2017 đến 17-01-2018</option>
                                          <option value="5699146489004032">KHMT [Hệ DHCQ CNCN CNKT KSCLC KSTN CTTT HEDSPI-A ] [IT5210 IT4996 IT5104 IT5130 ] Từ 15-01-2018 đến 19-01-2018</option>
                                          <option value="5706437330206720">TTM [Hệ DHCQ CNCN CNKT KSTN KSCLC HEDSPI-A CTTT ] [IT4711 IT4995 IT5250 IT5120E IT5100 IT4996 IT5104 IT5120 IT5130 ] Từ 15-01-2018 đến 26-01-2018</option>
                                          <option value="5744948892663808">KTMT [Hệ CNCN ] [IT4996 ] Từ 25-01-2018 đến 28-01-2018</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-4" for="formEmail">Trạng thái</label>
                                    <div class="col-md-8">
                                       <div class="gwt-HTML"></div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-4" for="formEmail">Họ tên (*)</label>
                                    <div class="col-md-8"><input type="text" class="form-control" placeholder="Họ tên ..." disabled="" dir="ltr"></div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-4" for="formEmail">Email (*)</label>
                                    <div class="col-lg-8"><input type="text" class="form-control" placeholder="Email ..." dir="ltr"></div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-4" for="formEmail">Điện thoại</label>
                                    <div class="col-lg-8"><input type="text" class="form-control" placeholder="Điện thoại ..." dir="ltr"></div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-4" for="formEmail">CV cho Giảng viên</label>
                                    <div class="col-lg-8">
                                       <div>
                                          <div style="position: relative; overflow: hidden; width: 100px; height: 22px; margin-left: 3%;">
                                             <input type="file" class="gwt-FileUpload" style="display: none;">
                                             <div class="gwt-Label" style="width: 100%; height: 100%; cursor: pointer;">
                                                <div style="background-image: url(&quot;../images/upload-button.png&quot;); background-position: 0px 0px; width: 100%; height: 100%;"></div>
                                             </div>
                                          </div>
                                          <div class="gwt-HTML"><a href="https://storage.googleapis.com/soict-edu.appspot.com/CVs/1516349774583_PhamTuanSang.pdf">CV</a></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-4" for="formEmail">Hệ đào tạo</label>
                                    <div class="col-lg-8"><select class="form-control"></select></div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-4" for="formEmail">Chọn Đơn vị</label>
                                    <div class="col-lg-8">
                                       <div><select class="form-control"></select><a class="gwt-Anchor">Danh sách đề tài</a></div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-4" for="formEmail">Môn Đồ án</label>
                                    <div class="col-lg-8"><select class="form-control"></select></div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-4" for="formEmail">Ghi chú cho GV</label>
                                    <div class="col-lg-8"><textarea class="form-control"></textarea></div>
                                 </div>
                                 <div class="OLB" aria-hidden="true" style="display: none;">
                                    <div class="form-group">
                                       <label class="control-label col-lg-4" for="formEmail">Nguyện vọng GVHD</label>
                                       <div class="col-lg-8"><select class="form-control"></select></div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-lg-4" for="formEmail">Hướng đề tài</label>
                                       <div class="col-lg-8">
                                          <div>
                                             <div class="gwt-HTML"></div>
                                             <a class="gwt-Anchor">Chọn đề tài</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-lg-4" for="formEmail">Trạng thái</label>
                                       <div class="col-lg-8">
                                          <select class="form-control">
                                             <option value="-2">[Chọn trạng thái]</option>
                                             <option value="1">Gíao viên đã chấp nhận</option>
                                             <option value="0">Giáo viên chưa chấp nhận</option>
                                          </select>
                                          <div class="gwt-HTML" style="color: red;"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="OLB" aria-hidden="true" style="display: none;">
                                    <div class="form-group">
                                       <label class="control-label col-lg-4" for="formEmail">GVHD: Nguyện vọng 2</label>
                                       <div class="col-lg-8"><select class="form-control"></select></div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-lg-4" for="formEmail">Hướng đề tài</label>
                                       <div class="col-lg-8">
                                          <div>
                                             <div class="gwt-HTML"></div>
                                             <a class="gwt-Anchor">Chọn đề tài</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-lg-4" for="formEmail">Trạng thái</label>
                                       <div class="col-lg-8">
                                          <div class="gwt-HTML" style="color: red;"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="OLB" aria-hidden="true" style="display: none;">
                                    <div class="form-group">
                                       <label class="control-label col-lg-4" for="formEmail">GVHD: Nguyện vọng 3</label>
                                       <div class="col-lg-8"><select class="form-control"></select></div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-lg-4" for="formEmail">Hướng đề tài</label>
                                       <div class="col-lg-8">
                                          <div>
                                             <div class="gwt-HTML"></div>
                                             <a class="gwt-Anchor">Chọn đề tài</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-lg-4" for="formEmail">Trạng thái</label>
                                       <div class="col-lg-8">
                                          <div class="gwt-HTML" style="color: red;"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="col-lg-offset-4 col-lg-10"><button type="button" class="btn btn-success">Lưu</button></div>
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