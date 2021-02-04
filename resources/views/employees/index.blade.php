@extends('multiauth::layouts.app')
@section('content')
    <div class="container text-center">
        <h1 style="font-family: Kharabeesh">الموظفين</h1>
    </div>
    <br>
    <table class="table table-sm table-hover" dir="rtl">
        <form style="font-family: Ubuntu-Arabic" action="" method="post"
              dir="rtl">
            @csrf
            <thead class="thead-light text-center">
            <tr>
                <th colspan="3" style="font-family: Kharabeesh">
                    <h4>الموظفين الحاليين</h4>
                </th>
            </tr>
            </thead>

            <thead class="thead-dark text-center">
            <tr>
                <th style="word-wrap: break-word;min-width: 160px;max-width: 160px;
                        font-family: Kharabeesh">الإسم</th>

                <th style="word-wrap: break-word;min-width: 160px;max-width: 160px;
                        font-family: Kharabeesh">الشركة التابع لها</th>
                <th
                    style="word-wrap: break-word;min-width: 200px;max-width: 200px;
                            font-family: Kharabeesh">
                    الإجراء
                </th>
            </tr>
            </thead>

            <tbody class="text-center">
            <tr>
                <td  style="font-family: Ubuntu-Arabic">

                </td>

                <td  style="font-family: Ubuntu-Arabic">

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
        </form>
    </table>


@endsection
