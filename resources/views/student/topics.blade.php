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
                           <div style="width: 100%; min-height: 450px; overflow-x: scroll;">
                              <table cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td align="center" style="vertical-align: top;">
                                          <div class="gwt-HTML">
                                             <h3>Thông tin phân công các môn Đồ án</h3>
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <table __gwtcellbasedwidgetimpldispatchingfocus="true" __gwtcellbasedwidgetimpldispatchingblur="true" class="table" cellspacing="0" style="width: 100%; table-layout: fixed; min-width: 800px;">
                                 <colgroup>
                                    <col style="width: 15px;">
                                    <col style="width: 25px;">
                                    <col style="width: 50px;">
                                    <col style="width: 70px;">
                                    <col style="width: 100px;">
                                    <col style="width: 30px;">
                                    <col style="width: 70px;">
                                    <col style="width: 100px;">
                                 </colgroup>
                                 <thead>
                                    <tr __gwt_header_row="0">
                                       <th colspan="1" class="gwtb3-d gwtb3-d" __gwt_column="column-gwt-uid-2062" __gwt_header="header-gwt-uid-2063">#</th>
                                       <th colspan="1" class="gwtb3-d" __gwt_column="column-gwt-uid-2064" __gwt_header="header-gwt-uid-2065">Kỳ</th>
                                       <th colspan="1" class="gwtb3-d" __gwt_column="column-gwt-uid-2066" __gwt_header="header-gwt-uid-2067">Mã Lớp/HP</th>
                                       <th colspan="1" class="gwtb3-d" __gwt_column="column-gwt-uid-2068" __gwt_header="header-gwt-uid-2069">Tên Học phần</th>
                                       <th colspan="1" class="gwtb3-d" __gwt_column="column-gwt-uid-2070" __gwt_header="header-gwt-uid-2071">Tên Đề tài</th>
                                       <th colspan="1" class="gwtb3-d gwtb3-d" __gwt_column="column-gwt-uid-2072" role="button" tabindex="-1" __gwt_header="header-gwt-uid-2073">ĐV</th>
                                       <th colspan="1" class="gwtb3-d gwtb3-d" __gwt_column="column-gwt-uid-2074" role="button" tabindex="-1" __gwt_header="header-gwt-uid-2075">GVHD</th>
                                       <th colspan="1" class="gwtb3-d gwtb3-d" __gwt_column="column-gwt-uid-2076" __gwt_header="header-gwt-uid-2077">Email/Phone</th>
                                    </tr>
                                 </thead>
                                 <tbody style="">
                                    <tr __gwt_row="0" __gwt_subrow="0" class="even">
                                       <td class="gwtb3-cell gwtb3-d gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2078">1</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2079">20172</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2080">670890<br>IT4996</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2081" tabindex="0"><a style="text-decoration:underline; cursor: pointer;">Đồ án tốt nghiệp cử nhân</a></div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2082"></div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2083">CNPM</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2084">Nguyễn Thị Thu Trang</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2085">trangntt@soict.hust.edu.vn<br>988088210</div>
                                       </td>
                                    </tr>
                                    <tr __gwt_row="1" __gwt_subrow="0" class="odd">
                                       <td class="gwtb3-cell gwtb3-d gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2078">2</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2079">20171</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2080">666339<br>IT3921</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2081"><a style="text-decoration:underline; cursor: pointer;">Đồ án II: Phân tích thiết kế hệ thống</a></div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2082"></div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2083">KHMT</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2084">Nguyễn Tuấn Dũng</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2085">dungnt@soict.hust.edu.vn<br>988599150</div>
                                       </td>
                                    </tr>
                                    <tr __gwt_row="2" __gwt_subrow="0" class="even">
                                       <td class="gwtb3-cell gwtb3-d gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2078">3</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2079">20162</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2080">660488<br>IT3941</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2081"><a style="text-decoration:underline; cursor: pointer;">Đồ án 3: Định hướng công nghệ</a></div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2082"></div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2083">KHMT</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2084">Trần Vĩnh Đức</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2085">ductv@soict.hust.edu.vn<br>1298232275</div>
                                       </td>
                                    </tr>
                                    <tr __gwt_row="3" __gwt_subrow="0" class="odd">
                                       <td class="gwtb3-cell gwtb3-d gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2078">4</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2079">20161</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2080">655803<br>IT3921</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2081"><a style="text-decoration:underline; cursor: pointer;">Đồ án II: Phân tích thiết kế hệ thống</a></div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2082"></div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2083">KTMT</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2084">Trịnh Văn Loan</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2085">loantv@soict.hust.edu.vn<br>0903 277 732</div>
                                       </td>
                                    </tr>
                                    <tr __gwt_row="4" __gwt_subrow="0" class="even">
                                       <td class="gwtb3-cell gwtb3-d gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2078">5</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2079">20152</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2080">649558<br>IT3911</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2081"><a style="text-decoration:underline; cursor: pointer;">Đồ án I: Lập trình</a></div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2082"></div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2083">CNPM</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2084">Trịnh Thành Trung</div>
                                       </td>
                                       <td class="gwtb3-cell gwtb3-d gwtb3-d">
                                          <div style="outline-style:none;" __gwt_cell="cell-gwt-uid-2085">trungtt@soict.hust.edu.vn<br>01223321666</div>
                                       </td>
                                    </tr>
                                 </tbody>
                                 <tbody style="display: none;">
                                    <tr>
                                       <td align="center" colspan="8">
                                          <div>
                                             <div style="width: 100%; height: 100%; padding: 0px; margin: 0px;">
                                                <div style="width: 100%; height: 100%;"></div>
                                             </div>
                                             <div aria-hidden="true" style="width: 100%; height: 100%; padding: 0px; margin: 0px; display: none;">
                                                <div aria-hidden="true" class="gwtb3-d" style="width: 100%; height: 100%; display: none;"><img src="data:image/gif;base64,R0lGODlhKwALAPEAAP///0tKSqampktKSiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAKwALAAACMoSOCMuW2diD88UKG95W88uF4DaGWFmhZid93pq+pwxnLUnXh8ou+sSz+T64oCAyTBUAACH5BAkKAAAALAAAAAArAAsAAAI9xI4IyyAPYWOxmoTHrHzzmGHe94xkmJifyqFKQ0pwLLgHa82xrekkDrIBZRQab1jyfY7KTtPimixiUsevAAAh+QQJCgAAACwAAAAAKwALAAACPYSOCMswD2FjqZpqW9xv4g8KE7d54XmMpNSgqLoOpgvC60xjNonnyc7p+VKamKw1zDCMR8rp8pksYlKorgAAIfkECQoAAAAsAAAAACsACwAAAkCEjgjLltnYmJS6Bxt+sfq5ZUyoNJ9HHlEqdCfFrqn7DrE2m7Wdj/2y45FkQ13t5itKdshFExC8YCLOEBX6AhQAADsAAAAAAAAAAAA=" width="43" height="11" class="gwt-Image"></div>
                                             </div>
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                                 <tfoot aria-hidden="true" style="display: none;"></tfoot>
                              </table>
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