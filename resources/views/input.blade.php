@extends('template')

@section('container')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">PBKK</h3>
                            <br/>

                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
 
                            <br/>
                             <!-- form validasi -->
                             <form action="/proses" method="post">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" class="@error('nama') is-invalid @enderror">
                                            @error('nama')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                        </div>
                                        <div class="form-group">
                                               <label for="pekerjaan">Pekerjaan</label>
                                               <input class="form-control" type="text" name="pekerjaan" value="{{ old('pekerjaan') }}" class="@error('pekerjaan') is-invalid @enderror">
                                                @error('pekerjaan')
                                                         <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                               <label for="usia">Usia</label>
                                               <input class="form-control" type="text" name="usia" value="{{ old('usia') }}" class="@error('usia') is-invalid @enderror">
                                               @error('usia')
                                                          <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                         </div>
                                         <div class="form-group">
                                               <input class="btn btn-primary" type="submit" value="Proses">
                                         </div>
                                </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection