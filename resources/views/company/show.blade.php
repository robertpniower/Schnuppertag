
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 text-center pt-5">
                <h1 cclass="display-3 mt-5">Company details</h1>
                <br/>
                <div class="text-left"><a href="company/create" class="btn btn-outline-primary">Add new company</a></div>	    
                    <br/>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th class="text-start">Name:</th>
                                    <td class="text-end">{{ $company->name }}</td>
                                </tr>
                                <tr>
                                    <th class="text-start">Industry:</th>
                                    <td class="text-end">{{ $company->industry }}</td>
                                </tr>
                                <tr>
                                    <th class="text-start">Number of Employees:</th>
                                    <td class="text-end">{{ $company->employees_nr }}</td>
                                </tr>
                                <tr>
                                    <th class="text-start">Street:</th>
                                    <td class="text-end">{{ $company->street }}</td>
                                </tr>
                                <tr>
                                    <th class="text-start">Number:</th>
                                    <td class="text-end">{{ $company->number }}</td>
                                </tr>
                                <tr>
                                    <th class="text-start">Postal Code:</th>
                                    <td class="text-end">{{ $company->postalcode }}</td>
                                </tr>
                                <tr>
                                    <th class="text-start">City:</th>
                                    <td class="text-end">{{ $company->city }}</td>
                                </tr>
                                <tr>
                                    <th class="text-start">Country:</th>
                                    <td class="text-end">{{ $company->country }}</td>
                                </tr>
                                <tr>
                                    <th class="text-start">Email:</th>
                                    <td class="text-end">{{ $company->email }}</td>
                                </tr>
                                <tr>
                                    <th class="text-start">Website:</th>
                                    <td class="text-end">{{ $company->website }}</td>
                                </tr>
                                <tr>
                                    <th class="text-start">Phone:</th>
                                    <td class="text-end">{{ $company->phone }}</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
        </div>
    </div>
@endsection