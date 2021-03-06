@extends('multiauth::layouts.app')
@section('content')
    <div class="container text-center">
        <h1 style="font-family: Kharabeesh">الشركات</h1>
    </div>
    <br>

    @if(Session::has('success'))
        <div class="container text-center">
            <div class="btn alert-success" role="alert" dir="rtl" style="font-family: TIMES">
                {{Session::get('success')}}&nbsp;<i class="fas fa-check-circle"></i>
            </div>
        </div>
        <br>
    @endif

    <table class="table table-sm table-hover" dir="rtl">
        <form style="font-family: Ubuntu-Arabic" action="" method="post"
              dir="rtl">
            @csrf
            <thead class="thead-light text-center">
            <tr>
                <th colspan="2" style="font-family: Kharabeesh">
                    <h4>إضافة شركة</h4>
                </th>
            </tr>
            </thead>

            <thead class="thead-dark text-center">
            <tr>
                <th style="word-wrap: break-word;min-width: 160px;max-width: 160px;
                        font-family: Kharabeesh">الإسم</th>
                <th
                    style="word-wrap: break-word;min-width: 200px;max-width: 200px;
                            font-family: Kharabeesh">
                    الإجراء
                </th>
            </tr>
            </thead>

                <tbody class="text-center">
                <tr>
                    <form action="{{route('company.store')}}" method="post">

                    <td  style="font-family: Ubuntu-Arabic">
                        <input type="text" class="form-control" name="name" required>
                    </td>
                    <td style="word-wrap: break-word;min-width: 200px;max-width: 200px;">
                        <button type="submit" class="btn-sm btn-success "style="font-family: Ubuntu-Arabic;font-size: small">
                            <i class="far fa-plus-square"></i>
                            إضافة
                        </button>
                    </td>
                    </form>
                </tr>
                </tbody>

            <tr>
            </tr>
        </form>
    </table>





    <table class="table table-sm table-hover" dir="rtl">
        <form style="font-family: Ubuntu-Arabic" action="" method="post"
              dir="rtl">
            @csrf
            <thead class="thead-light text-center">
            <tr>
                <th colspan="2" style="font-family: Kharabeesh">
                    <h4>الشركات الحالية</h4>
                </th>
            </tr>
            </thead>

            <thead class="thead-dark text-center">
            <tr>
                <th style="word-wrap: break-word;min-width: 160px;max-width: 160px;
                        font-family: Kharabeesh">الإسم</th>
                <th
                    style="word-wrap: break-word;min-width: 200px;max-width: 200px;
                            font-family: Kharabeesh">
                    الإجراء
                </th>
            </tr>
            </thead>
            @foreach($companies as $company)
            <tbody class="text-center">
            <tr>
                <td  style="font-family: Ubuntu-Arabic">
                    {{$company['name']}}
                </td>
                <td style="word-wrap: break-word;min-width: 200px;max-width: 200px;">
                    <button type="submit" class="btn-sm btn-success "style="font-family: Ubuntu-Arabic;font-size: small">
                        <i class="fas fa-pencil-alt"></i>
                        تعديل
                    </button>

                    <button type="reset" class="btn-sm btn-danger " style="font-family: Ubuntu-Arabic;font-size: small">
                        <i class="fas fa-trash-alt"></i>
                        حذف
                    </button>
                </td>
            </tr>
            </tbody>
            @endforeach
            <tr>
                {{$companies->links()}}
            </tr>
        </form>
    </table>

@endsection
