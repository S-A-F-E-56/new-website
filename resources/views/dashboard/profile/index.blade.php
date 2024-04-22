@extends('dashboard.layout')

@section('konten')
    <form action={{ route('profile.update') }} method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-5">
                <h3>Profile</h3>
                @if (get_meta_value('_foto'))
                <img style="max-width:300px;max-height:300px" src="{{ asset('foto')."/".get_meta_value('_foto') }}">
                @endif
                <div class="mb-3">
                    <label for="_foto" class="form-label">Photo</label>
                    <input type="file" class="form-control form-control-sm" name="_foto" id="_foto">
                </div>
                <div class="mb-3">
                    <label for="_city" class="form-label">City</label>
                    <input type="text" class="form-control form-control-sm" name="_city" id="_city" value="{{ get_meta_value('_city') }}">
                </div>
                <div class="mb-3">
                    <label for="_province" class="form-label">Province</label>
                    <input type="text" class="form-control form-control-sm" name="_province" id="_province" value="{{ get_meta_value('_province') }}">
                </div>
                <div class="mb-3">
                    <label for="_nohp" class="form-label">No.HP</label>
                    <input type="text" class="form-control form-control-sm" name="_nohp" id="_nohp" value="{{ get_meta_value('_nohp') }}">
                </div>
                <div class="mb-3">
                    <label for="_email" class="form-label">Email</label>
                    <input type="text" class="form-control form-control-sm" name="_email" id="_email" value="{{ get_meta_value('_email') }}">
                </div>
                </div>
            <div class="col-md-5">
                <h3>Akun Media Sosial</h3>
                <div class="mb-3">
                    <label for="_facebook" class="form-label">Facebook</label>
                    <input type="text" class="form-control form-control-sm" name="_facebook" id="_facebook" value="{{ get_meta_value('_facebook') }}">
                </div>
                <div class="mb-3">
                    <label for="_instagram" class="form-label">Instagram</label>
                    <input type="text" class="form-control form-control-sm" name="_instagram" id="_instagram" value="{{ get_meta_value('_instagram') }}">
                </div>
                <div class="mb-3">
                    <label for="_linkedin" class="form-label">Linkedin</label>
                    <input type="text" class="form-control form-control-sm" name="_linkedin" id="_linkedin" value="{{ get_meta_value('_linkedin') }}">
                </div>
                <div class="mb-3">
                    <label for="_github" class="form-label">Github</label>
                    <input type="text" class="form-control form-control-sm" name="_github" id="_github" value="{{ get_meta_value('_github') }}">
                </div>
            </div>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
    </form>
@endsection
