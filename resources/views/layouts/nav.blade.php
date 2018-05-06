<div class="AKB">
   <a class="btn-link KIB" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
   <img class="BJB" src="../images/Google.png" data-original-title="" title="">
   <a class="btn-link KIB" href="javascript:;">-</a>
   <img class="BJB" src="../images/Facebook.png" data-original-title="" title="">
   <a class="btn-link KIB" href="javascript:;">- Đổi mật khẩu -</a>
   <a class="btn-link KIB" href="javascript:;"><i class="fa fa-user"></i>{{ Auth::user()->Student->name }}</a> 
   <table cellspacing="0" cellpadding="0" class="imageAvatar">
      <tbody>
         <tr>
            <td align="center" style="vertical-align: middle;">
                <img class="gwt-Image" aria-hidden="true" style="display: none; width: 25px;">
            </td>
         </tr>
         <tr>
            <td align="center" style="vertical-align: middle;"><img src="../images/default_avatar.jpg" class="gwt-Image" style="width: 25px;"></td>
         </tr>
         <tr>
            <td align="center" style="vertical-align: middle;">
               <div class="gwt-HTML btn-link" style="cursor: pointer; font-size: 12px;"></div>
            </td>
         </tr>
      </tbody>
   </table>
</div>
<div style="width: 95%; margin:0 auto; overflow: hidden; padding-top:5px; margin-top: -20px; display: inline-flex;">
   <img class="IJB" src="../images/utt_logo.png" style="height: 100px;"> 
   <div style="color: #514F4F;display: inline-block;vertical-align: bottom; margin-top: auto;">
      <div class="DKB">Hệ thống Quản lý Giảng dạy, Đồ án và Dịch vụ trực tuyến</div>
      <div class="EKB">Khoa Công nghệ thông tin</div>
   </div>
</div>