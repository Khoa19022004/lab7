<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
<div class="col-6 m-auto"> 
    <form  method="post" action="{{route('sv_store')}}" class="p-3 border border-primary"> 
        @csrf   
        <div class="form-group row">     
            <label class="col-3">Mã SV</label>     
            <div class="col-9">       
                <input value="{{old('masv')}}" type="text" class="form-control" name="masv">
                @if ($errors->has('masv'))
                    <span>{{$errors->first('masv')}}</span>
                @endif     
            </div>   
        </div>   
        <div class="form-group row">     
            <label class="col-3">Họ tên</label>     
            <div class="col-9">       
                <input value="{{old('hoten')}}" type="text" class="form-control" name="hoten">
                @if ($errors->has('hoten'))
                    <span>{{$errors->first('hoten')}}</span>
                @endif     
            </div>   
        </div>   
        <div class="form-group row">     
            <label class="col-3">Tuổi</label>     
            <div class="col-9">       
                <input value="{{old('tuoi')}}" type="text" class="form-control" name="tuoi">
                @if ($errors->has('tuoi'))
                    <span>{{$errors->first('tuoi')}}</span>
                @endif     
            </div>   
        </div>   
        <div class="form-group row">     
            <label class="col-3">Ngày sinh</label>     
            <div class="col-9">       
                <input value="{{old('ngaysinh')}}" type="date" class="formcontrol" name="ngaysinh">
                @if ($errors->has('ngaysinh'))
                <span>{{$errors->first('ngaysinh')}}</span>
            @endif
            </div>
        </div>   
        <div class="form-group row">     
            <label class="col-3">CCCD</label>     
            <div class="col-9">       
                <input value="{{old('cccd')}}" type="text" class="form-control" name="cccd">
                @if ($errors->has('cccd'))
                <span>{{$errors->first('cccd')}}</span>
            @endif     
            </div>   
        </div>   
        <div class="form-group row">     
            <label class="col-3">Email</label>     
            <div class="col-9">       
                <input value="{{old('email')}}" type="text" class="form-control" name="email">
                @if ($errors->has('email'))
                <span>{{$errors->first('email')}}</span>
            @endif     
            </div>   
        </div>   
        <div class="form-group row">     
            <div class="col-12">       
                <button type="submit" class="btn btn-primary w-25">Xử lý</button>    
            </div>   
        </div> 
    </form>  
</div>  