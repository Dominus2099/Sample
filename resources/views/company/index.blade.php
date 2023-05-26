@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        

            {{-- Company table --}}
            <div class="card">
            <div class="card-header">{{ __('Company Table') }}</div>
                
                <div class="card-body">

                    <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ url('company/create') }}"> Add Company</a>
                    </div>
                    </div>
                    
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Logo</th>
                            <th>URL</th>
                        </tr>
                        @foreach ($companies as $company)
                        <tr>
                            <td>{{ $company->id }}</td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->email }}</td>
                            <td>{{ $company->logo }}</td>
                            <td>{{ $company->url }}</td>
                            <td>
                                <form action="{{ route('company.destroy',$company->id) }}" method="POST">
                
                                    <a class="btn btn-info" href="{{ route('company.show',$company->id) }}">Show</a>
                    
                                    <a class="btn btn-primary" href="{{ route('company.edit',$company->id) }}">Edit</a>
                
                                    @csrf
                                    @method('DELETE')
                    
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $companies->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
