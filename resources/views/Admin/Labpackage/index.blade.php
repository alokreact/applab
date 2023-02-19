@extends('Admin.layout.master')
@section('content')
    <main id="main" class="main">
        @include('Admin.layout.partials.breadcrumb')
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    @include('Admin.layout.partials.alert')
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Category</h5>

                            <!-- Horizontal Form -->
                            <form action="{{ route('labpackage.store') }}" method="post" enctype="multipart/form-data">@csrf
                                <div class="row mb-3">
                                    
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Lab</label>
                                      <div class="col-sm-10">
                                        <select class="form-control" name="lab_id">
                                      
                                        @foreach ($labs as $lab)
                                          <option value="{{$lab->id}}">{{$lab ->lab_name}}</option>
                                        @endforeach
                                        </select>
                        
                                        @if($errors->has('lab'))
                                          <strong style="color:red"> {{ $errors->first('lab') }}</strong>
                                        @endif
                                    </div>
                                    </div>

                                
                                <div class="row mb-3">
                                    
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Organs</label>
                                      <div class="col-sm-10">
                                      <select class="js-labs form-control" name="subtest[]" multiple="multiple">
                                      
                                        @foreach ($subtests as $subtest)
                                          <option value="{{$subtest->id}}">{{$subtest ->sub_test_name}}</option>
                                        @endforeach
                                        </select>
                        
                                        @if($errors->has('organ'))
                                          <strong style="color:red"> {{ $errors->first('organ') }}</strong>
                                        @endif
                                    </div>
                                    </div>

                                    <div class="row mb-3" id="details">
                                         
                                    </div>
                                                                   
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End Horizontal Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
