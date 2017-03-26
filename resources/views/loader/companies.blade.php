@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
           
                    
	                	<div class="container">
							
		                	<table class="table table-striped">
							    <thead>
							        <tr>
							            <th>Y-tunnus</th>
							            <th>Name</th>
							            <th>Registration date</th>
							            <th>Company form</th>
							        </tr>
							    </thead>
							    <tbody class="searchable">
					                @foreach ($companies as $company)
								        <tr>
								        	<td>{{ $company->businessId }}</td>
								        	<td>{{ $company->name }}</td>
								        	<td>{{ $company->registrationDate }}</td>
								        	<td>{{ $company->companyForm }}</td>
								        </tr>
								    @endforeach
							    </tbody>
							</table>
	                 	</div>
						{{ $companies->links() }}
	              

        </div>
    </div>
</div>

@endsection
