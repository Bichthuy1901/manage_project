<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!--                                                               -->
    <!-- Consider inlining CSS to reduce the number of requested files -->
    <!--                                                               -->
    <!--                                           -->
    <!-- Any title is fine                         -->
    <!--                                           -->
    <title>Hệ thống quản lý Giảng dạy và Đồ án - Khoa Công nghệ thông tin</title>
    <link rel="SHORTCUT ICON" href="images/SoICT_ logo.ico">
    <!--                                           -->
    <!-- This script loads your compiled module.   -->
    <!-- If you add any GWT meta tags, they must   -->
    <!-- be added before this line.                -->
    <!--                                           -->
    <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/webStyle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/buttonAnimaton.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/HustForm.css') }}">



    <script type="text/javascript" language="javascript" src="{{ asset('soicteducation/soicteducation.nocache.js') }}"></script>
    <link href="{{ asset('soicteducation/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('soicteducation/css/font-awesome-4.4.0.min.cache.css') }}">
    <link rel="stylesheet" href="{{ asset('soicteducation/css/animate-3.4.0.min.cache.css') }}">
    <link rel="stylesheet" href="{{ asset('soicteducation/css/bootstrap-notify-custom.min.cache.css') }}">
    <link rel="stylesheet" href="{{ asset('soicteducation/css/bootstrap-datepicker3-1.4.0.min.cache.css') }}">
    <link rel="stylesheet" href="{{ asset('soicteducation/css/bootstrap-select-1.7.4.min.cache.css') }}">
    <link rel="stylesheet" href="{{ asset('soicteducation/css/summernote-0.6.16.min.cache.css') }}">
    <link rel="stylesheet" href="{{ asset('soicteducation/css/blueimp-gallery-fix.cache.css') }}">
    <link rel="stylesheet" href="{{ asset('soicteducation/css/blueimp-gallery-2.16.0.min.cache.css') }}">
    <link rel="stylesheet" href="{{ asset('soicteducation/css/bootstrap-image-gallery-3.1.3.min.cache.css') }}">
    <script src="http://daotao.soict.hust.edu.vn/soicteducation/E5F9324C05D4BC4D1751C7CFB80A11C4.cache.js"></script>
</head>
<!--                                           -->
<!-- The body can have arbitrary html, or      -->
<!-- you can leave the body empty if you want  -->
<!-- to create a completely dynamic UI.        -->
<!--                                           -->
<body>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modalHeaderPanel">
                    <div class="gwt-HTML PEB">Đăng nhập</div>
                </div>
                <div class="modal-body">
                    <table cellspacing="0" cellpadding="0" style="width: 100%;">
                        <tbody>
                            <tr>
                                <td align="center" style="vertical-align: top;">
                                    <form target="FormPanel_soicteducation_1" autocomplete="on">
										<div>
											<input class="form-control OEB" type="text" autocomplete="on" placeholder="Tên đăng nhập">
											<input class="form-control OEB" type="password" autocomplete="on" placeholder="Mật khẩu" name="password">
											<div class="checkbox LEB">
												<label>
													<input type="checkbox" value="on" tabindex="0"><span>Ghi nhớ đăng nhập</span>
												</label>
											</div>
											<div class="gwt-HTML MEB"></div>
										</div>
									</form>
                                </td>
                            </tr>
                            <tr>
								<td align="center" style="vertical-align: top;">
									<table cellspacing="0" cellpadding="0">
										<tbody>
											<tr>
												<td align="left" style="vertical-align: top;">
													<button type="button" class="btn btn-primary" style="background-color: rgb(37, 60, 101);">
														<div class="gwt-HTML buttonLoading-text">Đăng nhập</div>
														<div class="gwt-HTML buttonLoading-status"></div>
													</button>
												</td>
												<td align="left" style="vertical-align: top;">
													<button type="button" class="btn btn-danger" style="background-color: rgb(211, 84, 77);">Hủy bỏ</button>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
                            <tr>
								<td align="center" style="vertical-align: top;">
									<table cellspacing="0" cellpadding="0">
										<tbody>
											<tr>
												<td align="left" style="vertical-align: top;">
													<button type="button" class="btn btn-default" data-original-title="" title="">
														<i class="fa fa-facebook"></i> Đăng nhập Facebook
													</button>
												</td>
												<td align="left" style="vertical-align: top;">
													<button type="button" class="btn btn-default" data-original-title="" title="">
														<i class="fa fa-google"></i> Đăng nhập Google
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- RECOMMENDED if your web app will not function without JavaScript enabled -->
    <noscript>
        &lt;div style="width: 22em; position: absolute; left: 50%; margin-left: -11em; color: red; background-color: white; border: 1px solid red; padding: 4px; font-family: sans-serif"&gt;
        Your web browser must have JavaScript enabled
        in order for this application to display correctly.
        &lt;/div&gt;
    </noscript>

    <iframe id="soicteducation" tabindex="-1" style="position: absolute; width: 0px; height: 0px; border: none; left: -1000px; top: -1000px;"></iframe>
	<div aria-hidden="true" style="display: none;"></div>
	<div>
        <div class="AGB">
            <div class="EGB"></div>
			<div class="DGB">
                <div style="color:white;width:100%;background-color: #0066bf;overflow: hidden;">
					<div style="float:right;">
						<div class="fa fa-map-marker" style="color:white;margin-top: 9px; margin-left: 10px;display: inline-block;"></div>
						<div class="fa fa-phone" style="color:white; margin-top: 9px; margin-left: 10px;display: inline-block;"></div>
					</div>
				</div>
				<div class="NFB">
					<div class="HGB">
						<input type="button" class="btn-link CFB pull-right" value="Đăng nhâp" data-toggle="modal" data-target="#myModal" />
					</div>
					<div style="width: 95%; margin:0 auto; overflow: hidden; padding-top:5px; margin-top: -20px; display: inline-flex;">
						<img class="PFB" src="../images/utt_logo.png" style="height: 100px;"> 
						<div style="color: #514F4F;display: inline-block;vertical-align: bottom; margin-top: auto;"> 
							<div class="LGB">Hệ thống Quản lý Giảng dạy, Đồ án và Dịch vụ trực tuyến</div>
							<div class="MGB">Khoa Công nghệ thông tin</div>
						</div>
						<div class="GGB hidden-sm hidden-xs">
							<table cellspacing="0" cellpadding="0" class="FGB">
								<tbody>
									<tr>
										<td align="left" style="vertical-align: middle;">
											<button type="button" class="IFB">&nbsp;</button>
										</td>
										<td align="left" style="vertical-align: middle;">
											<button type="button" class="MFB">&nbsp;</button>
										</td>
										<td align="left" style="vertical-align: middle;">
											<button type="button" class="JGB">&nbsp;</button>
										</td>
										<td align="left" style="vertical-align: middle;">
											<div class="gwt-HTML">
												<a href="http://www.reliablecounter.com" target="_blank">
													<img src="http://www.reliablecounter.com/count.php?page=soict-edu.appspot.com&amp;digit=style/plain/18/&amp;reloads=0" alt="" title="" border="0">
												</a>
												<br>
												<a href="http://" target="_blank" style="font-family: Geneva, Arial; font-size: 5px; color: #330010; text-decoration: none;"></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" style="border: 1px solid gray;float: none !important;margin: 5px 5px 5px 2% !important;" type="button">
						<span class="icon-bar" style="background-color: gray;"></span> 
						<span class="icon-bar" style="background-color: gray;"></span> 
						<span class="icon-bar" style="background-color: gray;"></span> 
					</button>
				</div> 
				<div class="GFB" style="min-height: 1000px;">
                    <div class="NGB" style="width: 100%;">
                        <div style="width: 100%;">
                            <h4 style="text-align: center;">HỆ THỐNG QUẢN LÝ GIẢNG DẠY, ĐỒ ÁN VÀ DỊCH VỤ TRỰC TUYẾN</h4>
							<h4>
								<div class="gwt-HTML" style="text-align: center;">Khoa Công nghệ thông tin</div>
							</h4>
							<div style="width: 100%; padding: 30px;">
                                <div class="gwt-HTML">
                                    <strong>1. Dịch vụ cho Giảng viên</strong>
                                    <div>
                                        <ul>
                                            <li>Thời khoá biểu, phân công giảng dạy các lớp Lý thuyết, Thực hành, Thí nghiệm</li>
                                            <li>Phân công Đồ án tốt nghiệp và Đồ án môn học</li>
                                            <li>Tra cứu thông tin Sinh viên</li>
                                            <li>Tra cứu thông tin học phần</li>
                                            <li>Quản lý tài liệu, biểu mẫu</li>
                                            <li>Kê khai khối lượng giảng dạy</li>
                                            <li>Thống kê, tổng hợp số liệu</li>
                                            <li>Đồng bộ Thời khoá biểu với Google Calendar</li>
                                        </ul>
                                    </div>

                                    <div>&nbsp;</div>

                                    <div><strong>2. Dịch vụ cho Sinh viên</strong></div>

                                    <div>
                                        <ul>
                                            <li>Tra cứu thông tin phân công Đồ án</li>
                                            <li>Quản lý nộp Đồ án online</li>
                                            <li>Yêu cầu các biểu mẫu Online</li>
                                        </ul>
                                    </div>

                                    <div>&nbsp;</div>

                                    </div>
                            </div>
							<br>
							<div>Nếu bạn có câu hỏi/đề xuất/vấn đề gì, hãy <a href="javascript:;">Gửi phản hồi</a> cho chúng tôi.</div>
                        </div>
                    </div>
                </div>
				@include('layouts.footer')
            </div>
			<div class="EGB"></div>
        </div>
    </div>
</body>
</html>
