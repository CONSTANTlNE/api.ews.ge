@extends('components.layout')

@section('dashboard')
    <!-- [ breadcrumb ] start -->
    {{--<div class="page-header">--}}
    {{--  <div class="page-block">--}}
    {{--    <ul class="breadcrumb">--}}
    {{--      <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>--}}
    {{--      <li class="breadcrumb-item"><a href="javascript: void(0)">Forms</a></li>--}}
    {{--      <li class="breadcrumb-item" aria-current="page">Form Basic</li>--}}
    {{--    </ul>--}}
    {{--    <div class="page-header-title">--}}
    {{--      <h2 class="mb-0">Form Basic</h2>--}}
    {{--    </div>--}}
    {{--  </div>--}}
    {{--</div>--}}
    <!-- [ breadcrumb ] end -->


    <!-- [ Main Content ] start -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 md:col-span-4">
            <div class="card">
                <div class="card-header">
                    <h5>New Token</h5>
                </div>
                <div class="card-body">

                    <form action="{{ route('token.create') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="exampleInputEmail1"
                                    name="token_name"
                                    aria-describedby="emailHelp"
                                    placeholder="Token Name"
                            />
                        </div>
                        <button type="submit" class="btn btn-primary mb-4">Create</button>

                        <p>{{session()->get('token')}}</p>

                    </form>
                </div>
            </div>

        </div>

    </div>
    <div class="col-span-12">
        <div class="card">
            <div class="card-header">
                <h5>Tokens</h5>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table" id="pc-dt-simple">
                        <thead>
                        <tr class="text-center">
                            <th class="text-center">Created</th>
                            <th class="text-center">Token Name</th>
                            <th class="text-center">Token</th>
                            <th class="text-center">Usage</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tokens as $index=> $token)
                            <tr class="text-center">
                                <td>{{$token->created_at->format('d-m-Y')}}</td>
                                <td>{{$token->name}}</td>
                                <td class="flex justify-center gap-3">
                                    <input id="token{{$index}}" class="text-center" disabled
                                           style="all: unset;width: 420px;" type="text"
                                           value="{{$token->unhashed_token}}">
                                    <svg class="cursor-pointer"
                                         onclick="navigator.clipboard.writeText(document.getElementById('token{{$index}}').value);
                                         this.style.color = 'green';
                                         "
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                              d="M15 1.25h-4.056c-1.838 0-3.294 0-4.433.153c-1.172.158-2.121.49-2.87 1.238c-.748.749-1.08 1.698-1.238 2.87c-.153 1.14-.153 2.595-.153 4.433V16a3.75 3.75 0 0 0 3.166 3.705c.137.764.402 1.416.932 1.947c.602.602 1.36.86 2.26.982c.867.116 1.97.116 3.337.116h3.11c1.367 0 2.47 0 3.337-.116c.9-.122 1.658-.38 2.26-.982s.86-1.36.982-2.26c.116-.867.116-1.97.116-3.337v-5.11c0-1.367 0-2.47-.116-3.337c-.122-.9-.38-1.658-.982-2.26c-.531-.53-1.183-.795-1.947-.932A3.75 3.75 0 0 0 15 1.25m2.13 3.021A2.25 2.25 0 0 0 15 2.75h-4c-1.907 0-3.261.002-4.29.14c-1.005.135-1.585.389-2.008.812S4.025 4.705 3.89 5.71c-.138 1.029-.14 2.383-.14 4.29v6a2.25 2.25 0 0 0 1.521 2.13c-.021-.61-.021-1.3-.021-2.075v-5.11c0-1.367 0-2.47.117-3.337c.12-.9.38-1.658.981-2.26c.602-.602 1.36-.86 2.26-.981c.867-.117 1.97-.117 3.337-.117h3.11c.775 0 1.464 0 2.074.021M7.408 6.41c.277-.277.665-.457 1.4-.556c.754-.101 1.756-.103 3.191-.103h3c1.435 0 2.436.002 3.192.103c.734.099 1.122.28 1.399.556c.277.277.457.665.556 1.4c.101.754.103 1.756.103 3.191v5c0 1.435-.002 2.436-.103 3.192c-.099.734-.28 1.122-.556 1.399c-.277.277-.665.457-1.4.556c-.755.101-1.756.103-3.191.103h-3c-1.435 0-2.437-.002-3.192-.103c-.734-.099-1.122-.28-1.399-.556c-.277-.277-.457-.665-.556-1.4c-.101-.755-.103-1.756-.103-3.191v-5c0-1.435.002-2.437.103-3.192c.099-.734.28-1.122.556-1.399"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </td>
                                <td>Usage</td>
                                <td>
                                    <button data-pc-animate="3d-flip-horizontal" type="button"
                                            data-pc-toggle="modal" data-pc-target="#animateModal{{$index}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24">
                                            <path fill="#d50606"
                                                  d="M7.616 20q-.672 0-1.144-.472T6 18.385V6H5V5h4v-.77h6V5h4v1h-1v12.385q0 .69-.462 1.153T16.384 20zM17 6H7v12.385q0 .269.173.442t.443.173h8.769q.23 0 .423-.192t.192-.424zM9.808 17h1V8h-1zm3.384 0h1V8h-1zM7 6v13z"/>
                                        </svg>
                                    </button>
                                    <div id="animateModal{{$index}}" class="modal fade" tabindex="-1" role="dialog"
                                         aria-labelledby="animateModalLabel"
                                         aria-hidden="true">
                                        <div style="justify-content: center;align-items: center" class="modal-dialog modal-dialog-centered " role="document">
                                            <form action="{{route('token.delete')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="token_id" value="{{$token->id}}">

                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Animate Modal</h5>
                                                        <button data-pc-modal-dismiss="#animateModal{{$index}}"
                                                                class="text-lg flex items-center justify-center rounded w-7 h-7 text-secondary-500 hover:bg-danger-500/10 hover:text-danger-500">
                                                            <i class="ti ti-x"></i>
                                                        </button>
                                                    </div>
                                                    <div  class="modal-body">
                                                     are you sure to delete this token ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-pc-modal-dismiss="#animateModal{{$index}}">Close
                                                        </button>
                                                        <button type="button" class="btn btn-primary ltr:ml-2 trl:mr-2">
                                                            delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <script type="module">
        import {DataTable} from '../assets/js/plugins/module.js';

        // window.dt = new DataTable('#pc-dt-simple');

        let dataTable = new DataTable("#pc-dt-simple", {
            searchable: false,
            fixedHeight: true,
            perPage: 5,
        });

        const sorters = document.querySelectorAll('.datatable-sorter')
        sorters.forEach((sorter) => {
            sorter.style.textAlign = 'center';
        })

    </script>
@endsection