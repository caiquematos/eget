<div class="profile clearfix">
    <div class="profile_pic">
        <img src="{{ url('admin/assets/images/img.jpg') }}" alt="foto de perfil" class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>Bem-vindo(a),</span>
        <h2>{{ Auth::user()->nome }}</h2>
    </div>
</div>
