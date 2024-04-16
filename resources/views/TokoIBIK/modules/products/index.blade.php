@extends('TokoIBIK.layouts.index')

@section('main-content')
    <div class="row mt-5">
        <div class="col-lg-8 mx-4">
            <div class="card">
                <div class="card-header fw-bold ">
                    List of Products
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Kecap</td>
                                <td>Kecap Manis</td>
                                <td>Rp 10.000</td>
                                <td>Yes</td>
                                <td>
                                    <div class="btn-group btn-group-sm " role="group">
                                        <button type="button" class="btn btn-primary">
                                            <i class="bi bi-eye-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-success">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Kecap</td>
                                <td>Kecap Manis</td>
                                <td>Rp 10.000</td>
                                <td>Yes</td>
                                <td>
                                    <div class="btn-group btn-group-sm " role="group">
                                        <button type="button" class="btn btn-primary">
                                            <i class="bi bi-eye-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-success">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Kecap</td>
                                <td>Kecap Manis</td>
                                <td>Rp 10.000</td>
                                <td>Yes</td>
                                <td>
                                    <div class="btn-group btn-group-sm " role="group">
                                        <button type="button" class="btn btn-primary">
                                            <i class="bi bi-eye-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-success">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            @include('TokoIBIK.modules.products.create')
        </div>
    </div>
@endsection
