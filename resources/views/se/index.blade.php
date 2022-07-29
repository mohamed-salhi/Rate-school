@extends('master')
@section('title','All Categories')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mt-5">
                @include('errors')
                <div class="card-body">
                    <form method="post" action="{{route('ratese')}}">
                        @csrf
                        <div class="mb-3 ">
                            <label class="col-1">عربي</label>
                               <input type="number" class="col-2"  name="Arbic" >
                        </div>
                        <div class="mb-3">
                            <label class="col-1">انجليزي</label>
                            <input type="number" class="col-2" name="Einglish"  >
                        </div>
                        <div class="mb-3">
                            <label class="col-1">رياضيات</label>
                            <input type="number" class="col-2" name="Match"  >
                        </div>
                        <div class="mb-3">
                            <label class="col-1">فيزياء</label>
                            <input type="number" class="col-2" name="fe">
                        </div>
                        <div class="mb-3">
                            <label class="col-1">دين</label>
                            <input type="number" class="col-2" name="religion"  >
                        </div>
                        <div class="mb-3">
                            <label class="col-1">احياء</label>
                            <input type="number" class="col-2"  name="ah"  >
                        </div>

                        <div class="mb-3">
                            <label class="col-1">كيمياء</label>
                            <input type="number" class="col-2" name="ke"  >
                        </div>
                        <div class="mb-3">
                            <label class="col-1">تكنولوجيا</label>
                            <input type="number" class="col-2" name="tec"  >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                        <div class="d-flex justify-content-center">
{{--                           {{ $categoryy->links() }}--}}
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script
    >
        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(500);
        });
    </script>

@stop
