
@extends('layout')
@section('content')
    <h1>{{ $heading }}</h1>
    <div class ="form-group">
        <input type="text" name="search" id="search" class="form-control" placeholder="id, lizdas arba pagr forma">
    </div>
    <div id="leksemos_data">
        @include('leksemos_data')
    </div>
    @push('scripts')
        <script>
            $(document).ready(function () {
                $(document).on('click','.pagination a', function (event) {
                    var value = $('#search').val();
                    event.preventDefault();
                    let page = $(this).attr('href').split('page=')[1];
                    getData(value, page);
                });
                $('#search').on('keyup', function () {
                    var value = $(this).val();
                    $.ajax({
                        type:"GET",
                        url: "{{ route('leksemos.search') }}",
                        data: {'search':value},
                        success: function (data) {
                            // console.log(data);
                            $('#leksemos_data').html(data);
                        }
                    })
                })
            });
            function getData(value, page) {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('leksemos.search') }}" + "?page=" + page,
                    data: {'search':value},
                    success:function (data) {
                        $('#leksemos_data').html(data);
                    }
                })
            }

        </script>
    @endpush
@endsection
